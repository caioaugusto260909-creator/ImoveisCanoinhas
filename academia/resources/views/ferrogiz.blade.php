<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="theme-color" content="#E4E8E3">
<meta name="description" content="Ferro & Giz: consulte aulas, lotação, agenda e planos da academia.">
<title>Ferro &amp; Giz | Academia</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,400..900&display=swap" rel="stylesheet">
<style>
:root{--bg:#E4E8E3;--pp:#F6F8F4;--ink:#1B2623;--mu:#5C6B65;--ln:#C3CCC5;--f:#B5573C;--c:#2F6F86;--m:#5F8F6B;--y:#DDA94B;color-scheme:light;padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}
*{box-sizing:border-box;margin:0}
html{scroll-behavior:smooth;scroll-padding-top:80px}
body{background:var(--bg);color:var(--ink);font:400 17px/1.55 Archivo,system-ui,sans-serif}
h1,h2,h3,.d{font-stretch:125%;font-weight:800;line-height:.95;letter-spacing:-.02em}
h1{font-size:clamp(3rem,8.5vw,6.2rem)}
h2{font-size:clamp(2rem,4.6vw,3.2rem);margin-bottom:10px}
h3{font-size:1.6rem}
.wrap{max-width:1100px;margin:0 auto;padding:0 24px}
section{padding:80px 0;border-top:2px solid var(--ink)}
.lead,.mu{color:var(--mu)}
.lead{max-width:56ch;margin-bottom:28px}
:focus-visible{outline:3px solid var(--c);outline-offset:2px}
.btn{background:var(--ink);color:var(--pp);border:2px solid var(--ink);padding:12px 22px;font:600 1rem Archivo,sans-serif;cursor:pointer;text-decoration:none;display:inline-block}
.btn.ghost{background:none;color:var(--ink)}
.btn.sm{padding:6px 14px;font-size:.9rem}
.btn:hover{background:var(--c);border-color:var(--c);color:#fff}
.acts{display:flex;gap:10px;flex-wrap:wrap;margin-top:18px}
header{position:sticky;top:env(safe-area-inset-top,0px);z-index:10;background:var(--bg);border-bottom:2px solid var(--ink)}
.bar{display:flex;align-items:center;justify-content:space-between;height:64px}
.logo{display:flex;align-items:center;gap:10px;font:800 1.5rem Archivo;font-stretch:125%;letter-spacing:-.02em;text-decoration:none;color:inherit}
.pl{display:grid;grid-template-columns:1fr 1fr;gap:2px;width:22px}
.pl i{height:10px}
nav{display:flex;gap:24px}
nav a{text-decoration:none;color:var(--mu);font-weight:500}
nav a:hover{color:var(--ink)}
nav a.login-link{padding:7px 13px;border:2px solid var(--ink);background:var(--ink);color:var(--pp);font-weight:700}
nav a.login-link:hover{border-color:var(--c);background:var(--c);color:#fff}
nav a.signup-link{color:var(--ink);font-weight:700;text-decoration:underline;text-decoration-color:var(--y);text-decoration-thickness:3px;text-underline-offset:5px}
#bUser[hidden]{display:none}
.hero{display:grid;grid-template-columns:1.25fr 1fr;gap:48px;align-items:start;padding-top:64px;padding-bottom:72px}
.hero .sub{margin-top:24px;max-width:46ch;font-size:1.12rem;color:var(--mu)}
.st{display:inline-flex;align-items:center;gap:8px;border:2px solid var(--ink);border-radius:99px;padding:4px 14px;font-weight:600;font-size:.92rem;margin-bottom:22px;background:var(--pp)}
.dot{width:10px;height:10px;border-radius:50%;background:#9AA7A0}.dot.ok{background:var(--m)}
.photo-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px;margin-top:24px}
.photo-card{min-width:0;background:var(--pp);border:2px solid var(--ink)}
.photo-card img{display:block;width:100%;aspect-ratio:4/3;object-fit:cover}
.photo-card figcaption{display:flex;justify-content:space-between;gap:12px;padding:13px 15px;font-weight:700}
.photo-card figcaption span:last-child{color:var(--mu);font-size:.85rem;font-weight:500}
.panel{background:var(--pp);border:2px solid var(--ink);padding:24px}
.px{display:grid;grid-template-columns:84px 1fr auto;gap:14px;align-items:center;padding:12px 0;border-bottom:1px solid var(--ln)}
.px:last-child{border-bottom:0}
.px time{font-size:.85rem;color:var(--mu);line-height:1.1}
.px time b{display:block;font-stretch:62%;font-weight:800;font-size:1.8rem;color:var(--ink)}
.px small{display:block;color:var(--mu)}
.sq{display:inline-block;width:10px;height:10px;margin-right:8px;background:var(--k)}
.f{--k:var(--f)}.c{--k:var(--c)}.m{--k:var(--m)}
.fl{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:12px;align-items:center}
.ch{border:2px solid var(--ink);background:none;padding:5px 14px;font:500 .95rem Archivo,sans-serif;cursor:pointer;display:inline-flex;align-items:center;gap:8px}
.ch[aria-pressed=true]{background:var(--ink);color:var(--pp)}
.ch i{width:10px;height:10px}
.board{overflow-x:auto;border:2px solid var(--ink);background:var(--pp);margin-top:20px}
.bt{display:grid;grid-template-columns:62px repeat(7,minmax(112px,1fr));min-width:850px}
.bt>*{border-right:1px solid var(--ln);border-bottom:1px solid var(--ln)}
.hd{padding:10px 6px;text-align:center;font-weight:700;background:var(--bg)}
.hd.hoje{background:var(--y)}
.tm{padding:10px 8px;background:var(--bg);font-stretch:62%;font-weight:800;font-size:1.15rem}
.g{display:flex;min-height:68px}
.cl{flex:1;position:relative;text-align:left;border:0;background:none;padding:8px 8px 8px 16px;cursor:pointer;font:500 .9rem/1.25 Archivo,sans-serif;color:inherit}
.cl::before{content:"";position:absolute;left:0;top:0;bottom:0;width:6px;background:var(--k)}
.cl b{display:block;font-weight:700}
.cl small{color:var(--mu)}
.cl:hover{background:#0000000d}
.cl.on{background:var(--k);color:#fff}.cl.on small{color:#fff}.cl.on::before{background:#fff}
.cl.cheia{background:repeating-linear-gradient(135deg,transparent 0 6px,#00000012 6px 12px)}
.cl.dim{opacity:.16;pointer-events:none}
.tabs{display:flex;gap:4px;flex-wrap:wrap;margin-bottom:20px}
.tab{background:none;border:0;border-bottom:4px solid transparent;padding:6px 14px;cursor:pointer;font:500 1rem Archivo,sans-serif;color:var(--mu)}
.tab[aria-selected=true]{border-color:var(--ink);color:var(--ink);font-weight:700}
.chart{display:flex;align-items:flex-end;gap:5px;height:170px;border-bottom:2px solid var(--ink);padding:0 2px}
.bx{flex:1;border:0;background:#A7B4AD;cursor:pointer;min-width:0}
.bx.best{background:var(--m)}.bx.now{background:var(--y);outline:2px solid var(--ink)}
.bx:disabled{background:var(--ln);cursor:default}
.hl{display:flex;justify-content:space-between;color:var(--mu);font-size:.85rem;margin:6px 0 16px}
.bar2{height:8px;background:#D1D9D2;margin:12px 0 18px}.bar2 i{display:block;height:100%;background:var(--ink)}
.imc-grid{display:grid;grid-template-columns:.9fr 1.1fr;gap:32px;align-items:start}
.imc-form{display:grid;grid-template-columns:1fr 1fr;gap:14px}
.imc-form label{color:var(--ink);font-weight:600}
.imc-form input{margin:6px 0 0}
.imc-form button{grid-column:1/-1;justify-self:start}
.imc-result{min-height:190px;display:flex;flex-direction:column;justify-content:center}
.imc-result[hidden]{display:none}
.imc-value{font-stretch:62%;font-weight:800;font-size:3.5rem;line-height:1}
.imc-note{margin-top:10px;color:var(--mu);font-size:.9rem}
.imc-placeholder{min-height:190px;display:grid;place-items:center;color:var(--mu);text-align:center;border:2px dashed var(--ln);padding:20px}
.imc-placeholder[hidden]{display:none}
.pr{display:grid;grid-template-columns:190px 1fr 150px auto;gap:20px;align-items:center;padding:20px 0;border-bottom:2px solid var(--ink)}
.pr:first-of-type{border-top:2px solid var(--ink)}
.pr b{font-stretch:62%;font-weight:800;font-size:2.4rem;line-height:1}.pr b small{font:400 .9rem Archivo;color:var(--mu)}
.pr.meu h3::after{content:"seu plano";font:600 .75rem Archivo;margin-left:8px;background:var(--y);padding:2px 8px;vertical-align:middle}
.contact-form{max-width:760px;display:grid;grid-template-columns:1fr 1fr;gap:0 16px}
.contact-form label{color:var(--ink);font-weight:600}
.contact-form input,.contact-form select,.contact-form textarea{width:100%;border:2px solid var(--ink);background:#fff;padding:10px 12px;font:inherit;margin:6px 0 14px}
.contact-form textarea{min-height:150px;resize:vertical}
.contact-form .full,.contact-feedback{grid-column:1/-1}
.contact-feedback{margin:0 0 16px;padding:12px 16px;border:2px solid var(--ink);background:var(--pp)}
.contact-error{border-color:var(--f)}
.contact-success{border-color:var(--m)}
footer{border-top:2px solid var(--ink);padding:32px 0;color:var(--mu);font-size:.92rem}
footer .wrap{display:flex;justify-content:space-between;flex-wrap:wrap;gap:16px}
dialog{margin:auto;border:2px solid var(--ink);padding:28px;max-width:420px;width:calc(100% - 32px);background:var(--pp);color:var(--ink)}
dialog::backdrop{background:#1B262399}
dialog h3{margin-bottom:8px}dialog p{margin-bottom:10px}
label{display:block;font-size:.9rem;color:var(--mu);margin-bottom:4px}
input{width:100%;border:2px solid var(--ink);background:#fff;padding:10px 12px;font:inherit;margin-bottom:14px}
.err{color:var(--f);font-weight:500;min-height:1.4em}
.hint{margin-top:14px;font-size:.88rem;color:var(--mu)}
#toast{position:fixed;left:50%;bottom:calc(24px + env(safe-area-inset-bottom,0px));transform:translate(-50%,20px);background:var(--ink);color:var(--pp);padding:12px 20px;opacity:0;pointer-events:none;transition:.2s;z-index:50;max-width:90%}
#toast.on{opacity:1;transform:translate(-50%,0)}
@media(max-width:800px){.bar{height:auto;min-height:64px;flex-wrap:wrap;padding:10px 0}nav{order:3;width:100%;flex-wrap:wrap;gap:8px 16px;padding:4px 0;white-space:normal}.hero{grid-template-columns:1fr;gap:32px}.photo-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.pr{grid-template-columns:1fr auto}.pr p{grid-column:1/-1}section{padding:56px 0}.imc-grid{grid-template-columns:1fr;gap:20px}}
@media(max-width:520px){.imc-form,.contact-form{grid-template-columns:1fr}.imc-form button{grid-column:auto}.contact-form .full,.contact-feedback{grid-column:auto}}
@media(max-width:520px){.photo-grid{grid-template-columns:1fr}}
@media(prefers-reduced-motion:reduce){*{transition:none!important;scroll-behavior:auto!important}}
</style>
</head>
<body>
<header><div class="wrap bar">
 <a class="logo" href="#topo"><span class="pl" aria-hidden="true"><i style="background:var(--f)"></i><i style="background:var(--c)"></i><i style="background:var(--y)"></i><i style="background:var(--m)"></i></span>Ferro&amp;Giz</a>
 <nav aria-label="Navegação principal"><a href="#fotos">Fotos</a><a href="#quadro">Horários</a><a href="#lotacao">Lotação</a><a href="#imc">IMC</a><a href="#agenda">Minha agenda</a><a href="#planos">Planos</a><a class="login-link" href="{{ route('login') }}">Entrar</a><a class="signup-link" href="{{ route('cadastro') }}">Cadastro</a></nav>
 <button class="btn sm" id="bUser" type="button" hidden></button>
</div></header>
<main id="topo">
 <div class="wrap hero">
  <div>
   <p class="st" id="st" aria-live="polite"></p>
   <h1>Ferro, giz e hora marcada.</h1>
   <p class="sub">Reserve sua vaga nas aulas, veja quando a sala está mais vazia e acompanhe a sua semana de treino.</p>
   <div class="acts"><a class="btn" href="#quadro">Ver o quadro de horários</a></div>
  </div>
  <aside class="panel" aria-live="polite"><h3 style="margin-bottom:8px">Próximas aulas</h3><div id="prox"></div></aside>
 </div>
 <section id="fotos" aria-labelledby="photos-title"><div class="wrap">
  <h2 id="photos-title">Um espaço feito para treinar.</h2>
  <p class="lead">Conheça de perto os ambientes e as modalidades da Ferro &amp; Giz.</p>
  <div class="photo-grid">
   <figure class="photo-card"><img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&amp;fit=crop&amp;w=1000&amp;q=82" alt="Equipamentos e área de musculação da academia" loading="lazy" decoding="async"><figcaption><span>Área de força</span><span>01 / 03</span></figcaption></figure>
   <figure class="photo-card"><img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&amp;fit=crop&amp;w=1000&amp;q=82" alt="Atleta treinando com pesos livres" loading="lazy" decoding="async"><figcaption><span>Treino acompanhado</span><span>02 / 03</span></figcaption></figure>
   <figure class="photo-card"><img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?auto=format&amp;fit=crop&amp;w=1000&amp;q=82" alt="Aula de movimento e condicionamento físico" loading="lazy" decoding="async"><figcaption><span>Movimento para todos</span><span>03 / 03</span></figcaption></figure>
  </div>
 </div></section>
 <section id="quadro"><div class="wrap">
  <h2>Quadro de horários</h2>
  <p class="lead">Toque em uma aula para reservar. A faixa colorida mostra o tipo de treino, como as anilhas no rack.</p>
  <div class="fl" id="fc" aria-label="Filtrar por modalidade">
   <button class="ch" data-c="todas" aria-pressed="true" type="button">Todas</button>
   <button class="ch" data-c="f" aria-pressed="false" type="button"><i style="background:var(--f)"></i>Força</button>
   <button class="ch" data-c="c" aria-pressed="false" type="button"><i style="background:var(--c)"></i>Cardio</button>
   <button class="ch" data-c="m" aria-pressed="false" type="button"><i style="background:var(--m)"></i>Corpo e mente</button>
  </div>
  <div class="fl" id="fp" aria-label="Filtrar por período">
   <button class="ch" data-p="todos" aria-pressed="true" type="button">Qualquer hora</button>
   <button class="ch" data-p="manha" aria-pressed="false" type="button">Manhã</button>
   <button class="ch" data-p="tarde" aria-pressed="false" type="button">Tarde</button>
   <button class="ch" data-p="noite" aria-pressed="false" type="button">Noite</button>
   <label class="ch" style="margin:0;color:inherit"><input type="checkbox" id="fv" style="width:auto;margin:0"> Só com vaga</label>
  </div>
  <div class="board" tabindex="0" aria-label="Quadro de aulas, role horizontalmente em telas pequenas"><div class="bt" id="bt"></div></div>
 </div></section>
 <section id="imc"><div class="wrap">
  <h2>Calculadora de IMC</h2>
  <p class="lead">Informe peso e altura para obter uma estimativa do índice de massa corporal.</p>
  <div class="imc-grid">
   <form class="panel imc-form" id="fImc">
    <label for="peso">Peso (kg)<input id="peso" name="peso" type="number" inputmode="decimal" min="1" max="500" step="0.1" placeholder="Ex.: 70" required></label>
    <label for="altura">Altura (cm)<input id="altura" name="altura" type="number" inputmode="decimal" min="50" max="250" step="0.1" placeholder="Ex.: 170" required></label>
    <button class="btn" type="submit">Calcular IMC</button>
   </form>
   <div>
    <div class="imc-placeholder" id="imcPlaceholder">O resultado e a faixa de referência aparecem aqui.</div>
    <div class="panel imc-result" id="imcResult" role="status" aria-live="polite" hidden></div>
   </div>
  </div>
  <p class="hint">O IMC é apenas uma referência geral e não substitui a avaliação de um profissional de saúde.</p>
 </div></section>
 <section id="lotacao"><div class="wrap">
  <h2>Quando está mais vazio</h2>
  <p class="lead">Estimativa de ocupação da sala de musculação por hora. Escolha o dia e treine com mais espaço.</p>
  <div class="tabs" id="lt" role="tablist" aria-label="Dia da semana"></div>
  <div class="chart" id="lb" aria-label="Estimativa de ocupação por hora"></div>
  <div class="hl"><span>5h</span><span>12h</span><span>18h</span><span>23h</span></div>
  <p id="lr" aria-live="polite"></p>
 </div></section>
 <section id="agenda"><div class="wrap">
  <h2>Minha agenda</h2>
  <p class="lead">Suas reservas, o tempo até a próxima aula e quantas reservas ainda cabem no seu plano.</p>
  <div id="ag"></div>
 </div></section>
 <section id="planos"><div class="wrap">
  <h2>Planos</h2>
  <p class="lead">Cada plano define quantas aulas você pode reservar por semana.</p>
  <div class="pr" data-p="Essencial"><h3>Essencial</h3><p>Musculação livre e até 2 reservas de aula por semana.</p><b>R$ 89<small> /mês</small></b><div class="acts"><a class="btn ghost" href="https://wa.me/5500000000000?text=Quero%20o%20plano%20Essencial">Falar no WhatsApp</a><a class="btn ghost contact-plan" href="#contato" data-contact-plan="Essencial">Enviar mensagem</a></div></div>
  <div class="pr" data-p="Completo"><h3>Completo</h3><p>Musculação livre e até 5 reservas de aula por semana.</p><b>R$ 129<small> /mês</small></b><div class="acts"><a class="btn ghost" href="https://wa.me/5500000000000?text=Quero%20o%20plano%20Completo">Falar no WhatsApp</a><a class="btn ghost contact-plan" href="#contato" data-contact-plan="Completo">Enviar mensagem</a></div></div>
  <div class="pr" data-p="Total"><h3>Total</h3><p>Reservas ilimitadas e 2 treinos por mês com personal.</p><b>R$ 179<small> /mês</small></b><div class="acts"><a class="btn ghost" href="https://wa.me/5500000000000?text=Quero%20o%20plano%20Total">Falar no WhatsApp</a><a class="btn ghost contact-plan" href="#contato" data-contact-plan="Total">Enviar mensagem</a></div></div>
 </div></section>
 <section id="contato"><div class="wrap">
  <h2>Fale com a gente</h2>
  <p class="lead">Envie sua mensagem pelo site. Responderemos no e-mail informado.</p>
  @if (session('contact_sent'))
   <p class="contact-feedback contact-success" role="status">Mensagem enviada! Obrigado por entrar em contato.</p>
  @endif
  @if ($errors->has('contact'))
   <p class="contact-feedback contact-error" role="alert">{{ $errors->first('contact') }}</p>
  @endif
  <form class="panel contact-form" method="POST" action="{{ route('contact.send') }}">
   @csrf
   <label for="contact-name">Nome
    <input id="contact-name" name="name" autocomplete="name" maxlength="100" value="{{ old('name') }}" required>
   </label>
   <label for="contact-email">Seu e-mail
    <input id="contact-email" name="email" type="email" autocomplete="email" maxlength="254" value="{{ old('email') }}" required>
   </label>
   <label for="contact-plan">Assunto
    <select id="contact-plan" name="plan" required>
     @foreach (['Essencial', 'Completo', 'Total', 'Outro'] as $plan)
      <option value="{{ $plan }}" @selected(old('plan', 'Outro') === $plan)>{{ $plan === 'Outro' ? 'Outro assunto' : 'Plano '.$plan }}</option>
     @endforeach
    </select>
   </label>
   <label class="full" for="contact-message">Mensagem
    <textarea id="contact-message" name="message" maxlength="5000" required>{{ old('message') }}</textarea>
   </label>
   <button class="btn full" type="submit">Enviar mensagem pelo site</button>
  </form>
 </div></section>
</main>
<footer><div class="wrap"><span><b style="color:var(--ink)">Ferro&amp;Giz</b> Academia · Rua Exemplo, 123 · Centro</span><span>Seg a Sex 5h–23h · Sáb 7h–18h · Dom 8h–14h</span><span>Contato pelo <a href="#contato">formulário do site</a> · caioaugusto260909@gmail.com</span></div></footer>
<dialog id="dLogin">
 <h3>Entrar</h3>
 <p class="mu">Use sua matrícula e senha da academia.</p>
 <form id="fL" novalidate>
  <label for="mat">Matrícula</label><input id="mat" inputmode="numeric" autocomplete="username">
  <label for="sen">Senha</label><input id="sen" type="password" autocomplete="current-password">
  <p class="err" id="lErr" aria-live="polite"></p>
  <div class="acts" style="margin-top:0"><button class="btn" type="submit">Entrar</button><button class="btn ghost" type="button" data-x>Cancelar</button></div>
  <p class="hint">Modo demonstrativo: matrícula 1001, senha ferro123.</p>
 </form>
</dialog>
<dialog id="dAula"><div id="dA"></div></dialog>
<div id="toast" role="status" aria-live="polite"></div>
<script>
const $=s=>document.querySelector(s),$$=s=>[...document.querySelectorAll(s)];
const DIAS=['Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],DL=['segunda','terça','quarta','quinta','sexta','sábado','domingo'];
const T=['06:00','07:30','09:00','12:15','17:30','18:45','20:00'];
const P=[['Spinning','c','Rafa',18],['Funcional','f','Bia',16],['Boxe','c','Diego',14],['Yoga','m','Lia',20],['HIIT','c','Diego',16],['Pilates','m','Lia',12],['Treino de força','f','Bia',14],['Alongamento','m','Lia',20]];
const HR=[[5,23],[5,23],[5,23],[5,23],[5,23],[7,18],[8,14]];
const LIM={Essencial:2,Completo:5,Total:99};
const DEMO_USERS={'1001':{s:'ferro123',n:'Marina',p:'Completo'}};
const MV=[0,0,0,0,0,35,70,85,60,40,35,40,65,60,35,30,40,65,90,85,60,40,20,10];
const OPEN=d=>d<5?[0,1,2,3,4,5,6]:d===5?[1,2,3]:[2];
const D=new Date(),hj=(D.getDay()+6)%7;
const mn=t=>+t.slice(0,2)*60+ +t.slice(3);
const nm=()=>{const n=new Date();return n.getHours()*60+n.getMinutes()};
const per=i=>i<3?'manha':i<5?'tarde':'noite';
const A=(d,i)=>{const p=P[(d*2+i*3)%8],cap=p[3],tk=(d+i)%5===0?cap:(d*7+i*5+3)%(cap-3);return{d,i,k:d+'-'+i,t:T[i],n:p[0],c:p[1],p:p[2],cap,tk}};
const key=k=>{const x=k.split('-').map(Number);return A(x[0],x[1])};
const LS={g(k,d){try{const v=JSON.parse(localStorage.getItem(k));return v==null?d:v}catch(e){return d}},s(k,v){try{localStorage.setItem(k,JSON.stringify(v))}catch(e){}}};
function findUser(matricula){
 if(DEMO_USERS[matricula])return DEMO_USERS[matricula];
 const user=LS.g('fg_users',{})[matricula];
 return user?{s:user.password,n:user.name,p:user.plan}:null;
}
let U=LS.g('fg_u',null),R=[],W=[],pend=null,ld=hj,tt;
const carrega=()=>{R=U?LS.g('fg_r',[]):[];W=U?LS.g('fg_w',[]):[]};
const vg=a=>a.cap-a.tk-(R.includes(a.k)?1:0);
const lab=(o,d)=>o===0?'Hoje':o===1?'Amanhã':DIAS[d];
const fm=m=>m<60?m+' min':m<1440?Math.floor(m/60)+' h'+(m%60?' '+m%60+' min':''):Math.round(m/1440)+(Math.round(m/1440)>1?' dias':' dia');
const F={c:'todas',p:'todos',v:false};
function toast(m){const t=$('#toast');t.textContent=m;t.classList.add('on');clearTimeout(tt);tt=setTimeout(()=>t.classList.remove('on'),3000)}
function status(){
 const n=new Date(),h=n.getHours()+n.getMinutes()/60,d=(n.getDay()+6)%7,a=HR[d][0],b=HR[d][1],ok=h>=a&&h<b;
 const t=ok?`Aberto agora, fecha às ${b}h`:h<a?`Fechado, abre hoje às ${a}h`:`Fechado, abre amanhã às ${HR[(d+1)%7][0]}h`;
 $('#st').innerHTML=`<i class="dot${ok?' ok':''}"></i>${t}`;
}
function prox(){
 const out=[],m=nm();
 for(let o=0;o<8&&out.length<3;o++){const d=(hj+o)%7;OPEN(d).forEach(i=>{if(out.length<3&&(o>0||mn(T[i])>m))out.push({...A(d,i),o})})}
 $('#prox').innerHTML=out.map(a=>{const v=vg(a),on=R.includes(a.k);return `<div class="px"><time>${lab(a.o,a.d)}<b>${a.t}</b></time><div><span class="sq ${a.c}"></span><b>${a.n}</b><small>${a.p} · ${on?'reservada':v>0?v+' vagas':'lotada'}</small></div><button class="btn sm ghost" data-k="${a.k}">${on?'Ver':'Reservar'}</button></div>`}).join('');
}
function cel(a){
 const on=R.includes(a.k),v=vg(a),ok=(F.c==='todas'||F.c===a.c)&&(F.p==='todos'||per(a.i)===F.p)&&(!F.v||v>0||on);
 return `<button class="cl ${a.c}${on?' on':''}${v<=0&&!on?' cheia':''}${ok?'':' dim'}" data-k="${a.k}"><b>${a.n}</b><small>${on?'Reservada':W.includes(a.k)?'Na espera':v>0?v+' vagas':'Lotada'}</small></button>`;
}
function board(){
 let h='<div></div>'+DIAS.map((d,i)=>`<div class="hd${i===hj?' hoje':''}">${d}</div>`).join('');
 T.forEach((t,i)=>{h+=`<div class="tm">${t}</div>`;for(let d=0;d<7;d++)h+='<div class="g">'+(OPEN(d).includes(i)?cel(A(d,i)):'')+'</div>'});
 $('#bt').innerHTML=h;
}
const lv=(d,h)=>{const a=HR[d][0],b=HR[d][1];return h>=a&&h<b?Math.min(100,Math.round(MV[h]*(d<5?1:d===5?.6:.4))):null};
function lot(){
 $('#lt').innerHTML=DIAS.map((x,i)=>`<button class="tab" role="tab" aria-selected="${i===ld}" data-d="${i}" type="button">${x}</button>`).join('');
 const a=HR[ld][0],b=HR[ld][1];let best=1e9,bh=a;
 for(let h=a;h<b-1;h++){const s=(lv(ld,h)+lv(ld,h+1))/2;if(s<best){best=s;bh=h}}
 $('#lb').innerHTML=Array.from({length:19},(_,k)=>{const h=k+5,v=lv(ld,h),bw=v!==null&&h>=bh&&h<bh+2;return `<button class="bx${bw?' best':''}${ld===hj&&h===D.getHours()?' now':''}" data-h="${h}" style="height:${v===null?3:Math.max(v,8)}%" ${v===null?'disabled':''} aria-label="${h}h, ${v===null?'fechado':v+'% de ocupação'}"></button>`}).join('');
 $('#lr').textContent=`Melhor horário na ${DL[ld]}: das ${bh}h às ${bh+2}h, com cerca de ${Math.round(best)}% de ocupação. Toque numa barra para ver cada hora.`;
}
function agenda(){
 const el=$('#ag');
 if(!U){el.innerHTML='<div class="panel"><p>Entre com sua matrícula para reservar aulas e acompanhar a sua semana.</p><button class="btn" data-login type="button">Entrar</button></div>';return}
 const L=LIM[U.p],pc=L>50?100:Math.min(100,R.length/L*100);
 const it=(k,w)=>{const a=key(k);let o=(a.d-hj+7)%7;if(o===0&&mn(a.t)<=nm())o=7;return{a,w,o,m:o*1440+mn(a.t)-nm()}};
 const L2=[...R.map(k=>it(k,0)),...W.map(k=>it(k,1))].sort((x,y)=>x.m-y.m);
 el.innerHTML=`<div class="panel"><h3>Olá, ${U.n}.</h3><p class="mu">Plano ${U.p}: ${L>50?'reservas ilimitadas':R.length+' de '+L+' reservas na semana'}.</p><div class="bar2"><i style="width:${pc}%"></i></div>`+(L2.length?L2.map(x=>`<div class="px"><time>${lab(x.o,x.a.d)}<b>${x.a.t}</b></time><div><span class="sq ${x.a.c}"></span><b>${x.a.n}</b><small>${x.w?'Lista de espera':'começa em '+fm(x.m)}</small></div><button class="btn sm ghost" data-k="${x.a.k}" type="button">Gerenciar</button></div>`).join(''):'<p>Nenhuma reserva ainda. Escolha uma aula no quadro de horários.</p>')+'</div>';
}
function all(){
 status();prox();board();lot();agenda();
 $('#bUser').textContent=U?'Sair ('+U.n+')':'';
 $('#bUser').hidden=!U;
 $$('.pr').forEach(p=>p.classList.toggle('meu',!!U&&U.p===p.dataset.p));
}
function show(k){
 const a=key(k),on=R.includes(k),wt=W.includes(k),v=vg(a);
 const lb=on?'Cancelar reserva':wt?'Sair da lista de espera':v>0?'Reservar vaga':'Entrar na lista de espera';
 $('#dA').innerHTML=`<span class="sq ${a.c}"></span><h3>${a.n}</h3><p>${DL[a.d]}, ${a.t}, com ${a.p}</p><p class="mu">${v>0?v+' de '+a.cap+' vagas livres.':'Turma lotada. Você pode entrar na lista de espera.'}</p><div class="acts"><button class="btn" id="go" type="button">${lb}</button><button class="btn ghost" data-x type="button">Fechar</button></div>`;
 $('#go').onclick=()=>acao(k);
 $('#dAula').showModal();
}
function acao(k){
 if(!U){pend=()=>show(k);$('#dAula').close();$('#dLogin').showModal();return}
 const a=key(k);let m;
 if(R.includes(k)){R=R.filter(x=>x!==k);m='Reserva cancelada.'}
 else if(W.includes(k)){W=W.filter(x=>x!==k);m='Você saiu da lista de espera.'}
 else if(vg(a)<=0){W.push(k);m='Você está na lista de espera. Avisamos se abrir uma vaga.'}
 else if(R.length>=LIM[U.p]){m=`O plano ${U.p} permite ${LIM[U.p]} reservas por semana.`}
 else{R.push(k);m='Aula reservada.'}
 LS.s('fg_r',R);LS.s('fg_w',W);$('#dAula').close();toast(m);all();
}
document.addEventListener('click',e=>{
 const b=e.target.closest('[data-k],[data-login],[data-x]');if(!b)return;
 if(b.dataset.k)show(b.dataset.k);
 else if(b.hasAttribute('data-login')){pend=null;$('#dLogin').showModal()}
 else b.closest('dialog').close();
});
$('#bUser').onclick=()=>{if(U){U=null;LS.s('fg_u',null);carrega();toast('Você saiu da conta.');all()}else{pend=null;$('#dLogin').showModal()}};
$('#fL').onsubmit=e=>{
 e.preventDefault();
 const u=findUser($('#mat').value.trim());
 if(!u||u.s!==$('#sen').value){$('#lErr').textContent='Matrícula ou senha incorretas. Confira e tente de novo.';return}
 U={n:u.n,p:u.p};LS.s('fg_u',U);carrega();$('#lErr').textContent='';$('#fL').reset();$('#dLogin').close();toast('Olá, '+u.n+'.');all();
 if(pend){const f=pend;pend=null;f()}
};
$('#fc').onclick=e=>{const b=e.target.closest('.ch');if(!b)return;F.c=b.dataset.c;$$('#fc .ch').forEach(x=>x.setAttribute('aria-pressed',x===b));board()};
$('#fp').onclick=e=>{const b=e.target.closest('.ch[data-p]');if(!b)return;F.p=b.dataset.p;$$('#fp .ch[data-p]').forEach(x=>x.setAttribute('aria-pressed',x===b));board()};
$('#fv').onchange=e=>{F.v=e.target.checked;board()};
$('#lt').onclick=e=>{const b=e.target.closest('.tab');if(b){ld=+b.dataset.d;lot()}};
$('#lb').onclick=e=>{const b=e.target.closest('.bx');if(b&&!b.disabled){const h=+b.dataset.h;$('#lr').textContent=`${DL[ld]}, ${h}h: cerca de ${lv(ld,h)}% de ocupação.`}};
$$('.contact-plan').forEach(link=>link.addEventListener('click',()=>{$('#contact-plan').value=link.dataset.contactPlan}));
$('#fImc').addEventListener('submit',e=>{
 e.preventDefault();
 const peso=Number($('#peso').value),altura=Number($('#altura').value)/100;
 if(!Number.isFinite(peso)||!Number.isFinite(altura)||peso<=0||altura<=0)return;
 const imc=peso/(altura*altura);
 const faixa=imc<18.5?'Abaixo do peso':imc<25?'Faixa adequada':imc<30?'Sobrepeso':imc<35?'Obesidade grau I':imc<40?'Obesidade grau II':'Obesidade grau III';
 $('#imcResult').innerHTML=`<span class="mu">Seu resultado</span><strong class="imc-value">${imc.toFixed(1).replace('.',',')}</strong><h3>${faixa}</h3><p class="imc-note">Esta classificação é uma referência geral para adultos.</p>`;
 $('#imcPlaceholder').hidden=true;
 $('#imcResult').hidden=false;
});
carrega();all();
</script>
</body>
</html>
