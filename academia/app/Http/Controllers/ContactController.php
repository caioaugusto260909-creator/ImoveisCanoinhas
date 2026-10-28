<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class ContactController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email:rfc', 'max:254'],
            'plan' => ['required', 'in:Essencial,Completo,Total,Outro'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        if (in_array(config('mail.default'), ['log', 'array'], true)) {
            return back()
                ->withInput()
                ->withErrors(['contact' => 'O envio de e-mail ainda não está ativado neste servidor. Configure o SMTP para enviar sua mensagem.']);
        }

        try {
            Mail::to(config('mail.contact_to'))->send(new ContactMessage(
                senderName: $data['name'],
                senderEmail: $data['email'],
                plan: $data['plan'],
                messageBody: $data['message'],
            ));
        } catch (TransportExceptionInterface $exception) {
            report($exception);

            return back()
                ->withInput()
                ->withErrors(['contact' => 'Não foi possível enviar sua mensagem agora. Tente novamente mais tarde.']);
        }

        return redirect()
            ->to(route('academia').'#contato')
            ->with('contact_sent', true);
    }
}
