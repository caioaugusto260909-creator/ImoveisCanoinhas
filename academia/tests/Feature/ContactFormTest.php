<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_contact_form_is_available_on_the_academy_page(): void
    {
        $this->get('/academia')
            ->assertOk()
            ->assertSee('Enviar mensagem pelo site')
            ->assertSee(route('contact.send'));
    }

    public function test_contact_form_sends_a_message_to_the_configured_address(): void
    {
        Mail::fake();
        config([
            'mail.default' => 'smtp',
            'mail.contact_to' => 'caioaugusto260909@gmail.com',
        ]);

        $response = $this->post(route('contact.send'), [
            'name' => 'Caio',
            'email' => 'visitor@example.com',
            'plan' => 'Completo',
            'message' => 'Gostaria de saber mais sobre o plano.',
        ]);

        $response->assertRedirect(route('academia').'#contato')
            ->assertSessionHas('contact_sent', true);

        Mail::assertSent(ContactMessage::class, function (ContactMessage $mail): bool {
            return $mail->hasTo('caioaugusto260909@gmail.com')
                && $mail->hasReplyTo('visitor@example.com', 'Caio')
                && $mail->plan === 'Completo';
        });
    }

    public function test_contact_form_does_not_claim_delivery_when_mail_is_only_logged(): void
    {
        Mail::fake();
        config(['mail.default' => 'log']);

        $response = $this->from(route('academia').'#contato')->post(route('contact.send'), [
            'name' => 'Caio',
            'email' => 'visitor@example.com',
            'plan' => 'Outro',
            'message' => 'Minha mensagem.',
        ]);

        $response->assertRedirect(route('academia').'#contato')
            ->assertSessionHasErrors('contact');

        Mail::assertNothingOutgoing();
    }

    public function test_contact_form_validates_the_sender_email(): void
    {
        Mail::fake();
        config(['mail.default' => 'smtp']);

        $response = $this->from(route('academia').'#contato')->post(route('contact.send'), [
            'name' => 'Caio',
            'email' => 'invalid-email',
            'plan' => 'Outro',
            'message' => 'Minha mensagem.',
        ]);

        $response->assertRedirect(route('academia').'#contato')
            ->assertSessionHasErrors('email');

        Mail::assertNothingOutgoing();
    }
}
