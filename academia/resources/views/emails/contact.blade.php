<h1>Nova mensagem pelo site Ferro &amp; Giz</h1>
<p><strong>Nome:</strong> {{ $senderName }}</p>
<p><strong>E-mail para resposta:</strong> {{ $senderEmail }}</p>
<p><strong>Plano de interesse:</strong> {{ $plan }}</p>
<p><strong>Mensagem:</strong></p>
<p>{!! nl2br(e($messageBody)) !!}</p>
