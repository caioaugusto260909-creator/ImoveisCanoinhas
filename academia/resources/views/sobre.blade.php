<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Ferro & Giz é uma academia com identidade visual forte, horários claros e experiência focada em treino e bem-estar.">
    <title>Sobre | Ferro &amp; Giz</title>
    <style>
        :root {
            --bg: #E4E8E3;
            --paper: #F7F8F5;
            --ink: #1B2623;
            --muted: #5C6B65;
            --line: #C3CCC5;
            --red: #B5573C;
            --blue: #2F6F86;
            --green: #5F8F6B;
            --gold: #DDA94B;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Archivo, system-ui, sans-serif;
            background: var(--bg);
            color: var(--ink);
        }
        a { color: inherit; text-decoration: none; }
        .wrap { width: min(1100px, calc(100% - 32px)); margin: 0 auto; }
        header {
            position: sticky;
            top: 0;
            background: rgba(228, 232, 227, 0.96);
            border-bottom: 2px solid var(--ink);
            backdrop-filter: blur(8px);
        }
        .bar {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
        }
        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: -0.03em;
        }
        .brand-mark {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2px;
            width: 24px;
            height: 24px;
        }
        .brand-mark i { display: block; }
        .brand-mark i:nth-child(1) { background: var(--red); }
        .brand-mark i:nth-child(2) { background: var(--blue); }
        .brand-mark i:nth-child(3) { background: var(--gold); }
        .brand-mark i:nth-child(4) { background: var(--green); }
        nav {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        nav a {
            color: var(--muted);
            font-weight: 600;
        }
        nav a:hover, nav a.active { color: var(--ink); }
        .nav-btn {
            border: 2px solid var(--ink);
            background: var(--ink);
            color: var(--paper);
            padding: 8px 14px;
            font-weight: 700;
        }
        main { padding: 54px 0 80px; }
        .hero {
            display: grid;
            grid-template-columns: 1fr 0.9fr;
            gap: 28px;
            align-items: center;
        }
        .eyebrow {
            display: inline-block;
            margin-bottom: 12px;
            padding: 6px 12px;
            border: 2px solid var(--ink);
            background: var(--paper);
            font-size: 0.74rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }
        h1 {
            margin: 0 0 12px;
            font-size: clamp(2.4rem, 5vw, 4rem);
            line-height: 0.96;
            letter-spacing: -0.03em;
        }
        .muted { color: var(--muted); }
        .panel {
            background: var(--paper);
            border: 2px solid var(--ink);
            padding: clamp(22px, 4vw, 32px);
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            margin-top: 28px;
        }
        .stat {
            padding: 20px 16px;
            background: var(--paper);
            border: 2px solid var(--ink);
        }
        .stat strong {
            display: block;
            font-size: 1.8rem;
            margin-bottom: 6px;
        }
        .timeline {
            display: grid;
            gap: 18px;
            margin-top: 28px;
        }
        .item {
            background: var(--paper);
            border: 2px solid var(--ink);
            padding: 18px 20px;
        }
        .item h3 {
            margin: 0 0 8px;
            font-size: 1.1rem;
        }
        .visual {
            min-height: 340px;
            border: 2px solid var(--ink);
            background: linear-gradient(135deg, rgba(47,111,134,0.22), rgba(221,169,75,0.2)),
                        url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
        }
        @media (max-width: 760px) {
            .bar { min-height: 64px; flex-wrap: wrap; padding: 10px 0; }
            nav { width: 100%; justify-content: center; }
            .hero, .stats { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <header>
        <div class="wrap bar">
            <a class="brand" href="/academia" aria-label="Voltar para a home">
                <span class="brand-mark" aria-hidden="true"><i></i><i></i><i></i><i></i></span>
                Ferro&amp;Giz
            </a>
            <nav aria-label="Menu principal">
                <a href="/academia">Academia</a>
                <a href="/fotos">Galeria</a>
                <a class="active" href="/sobre">Sobre</a>
                <a class="nav-btn" href="/login">Entrar</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="wrap hero">
            <section>
                <span class="eyebrow">Nossa proposta</span>
                <h1>Treino com foco, espaço e rotina simples.</h1>
                <p class="muted">A Ferro &amp; Giz nasceu para unificar ambiente, organização e motivação em uma experiência que deixa o aluno mais conectado com o próprio objetivo.</p>

                <div class="stats">
                    <div class="stat">
                        <strong>3x</strong>
                        <span>mais visibilidade do conteúdo</span>
                    </div>
                    <div class="stat">
                        <strong>7 dias</strong>
                        <span>de rotina organizada</span>
                    </div>
                    <div class="stat">
                        <strong>100%</strong>
                        <span>foco em bem-estar</span>
                    </div>
                </div>
            </section>

            <aside class="visual" aria-label="Aula no ambiente da academia"></aside>
        </div>

        <div class="wrap timeline">
            <article class="item">
                <h3>1. Visibilidade clara</h3>
                <p class="muted">As páginas foram pensadas para facilitar a navegação e destacar os pontos mais importantes: horários, vagas, planos e rotina do aluno.</p>
            </article>

            <article class="item">
                <h3>2. Identidade forte</h3>
                <p class="muted">A paleta, os blocos e a tipografia criam uma linguagem visual consistente, mais premium e profissional para a marca.</p>
            </article>

            <article class="item">
                <h3>3. Experiência prática</h3>
                <p class="muted">A galeria, o IMC e a agenda tornam o site mais utilizável, mostrando como a academia pode ser útil no dia a dia do aluno.</p>
            </article>
        </div>
    </main>
</body>
</html>
