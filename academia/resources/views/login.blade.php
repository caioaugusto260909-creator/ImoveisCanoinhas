<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#E4E8E3">
    <title>Login | Ferro &amp; Giz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,400..900&display=swap" rel="stylesheet">
    <style>
        :root { --bg: #E4E8E3; --paper: #F6F8F4; --ink: #1B2623; --muted: #5C6B65; --line: #C3CCC5; --blue: #2F6F86; --yellow: #DDA94B; --red: #B5573C; color-scheme: light; }
        * { box-sizing: border-box; }
        body { min-height: 100vh; margin: 0; background: var(--bg); color: var(--ink); font: 400 16px/1.5 Archivo, system-ui, sans-serif; }
        a { color: inherit; text-decoration: none; }
        button, input { font: inherit; }
        .shell { width: min(1100px, calc(100% - 48px)); margin-inline: auto; }
        .topbar { min-height: 72px; display: flex; align-items: center; justify-content: space-between; gap: 20px; border-bottom: 2px solid var(--ink); }
        .brand { display: flex; align-items: center; gap: 10px; font-size: 22px; font-weight: 800; }
        .mark { width: 26px; height: 26px; display: grid; grid-template-columns: 1fr 1fr; gap: 2px; }
        .mark i:nth-child(1) { background: var(--red); }.mark i:nth-child(2) { background: var(--blue); }.mark i:nth-child(3) { background: var(--yellow); }.mark i:nth-child(4) { background: #5F8F6B; }
        .back-link { color: var(--muted); font-weight: 600; }
        .back-link:hover { color: var(--ink); }
        main { min-height: calc(100vh - 73px); display: grid; place-items: center; padding-block: 52px; }
        .login-layout { width: 100%; display: grid; grid-template-columns: 1fr minmax(320px, 430px); align-items: center; gap: clamp(32px, 7vw, 88px); }
        .intro { max-width: 480px; }
        .eyebrow { color: #527333; font-size: 12px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; }
        h1 { margin: 14px 0; font-size: clamp(42px, 6vw, 72px); font-weight: 800; letter-spacing: -.02em; line-height: .95; }
        .intro p { max-width: 44ch; color: var(--muted); line-height: 1.7; }
        .visual { min-height: 150px; margin-top: 28px; background: linear-gradient(90deg, rgba(27,38,35,.16), rgba(27,38,35,.02)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=1000&q=80') center 48% / cover; border: 2px solid var(--ink); }
        .form-panel { padding: clamp(24px, 4vw, 36px); background: var(--paper); border: 2px solid var(--ink); }
        .form-panel h2 { margin: 0 0 6px; font-size: 30px; font-weight: 800; }
        .form-description { margin: 0 0 24px; color: var(--muted); }
        label { display: block; margin-bottom: 14px; font-size: 13px; font-weight: 700; }
        input { width: 100%; min-height: 48px; margin-top: 6px; padding: 10px 12px; border: 2px solid var(--ink); background: white; color: var(--ink); }
        input:focus-visible, button:focus-visible, a:focus-visible { outline: 3px solid var(--blue); outline-offset: 3px; }
        .error { min-height: 24px; margin: 2px 0 10px; color: var(--red); font-size: 13px; font-weight: 700; }
        .submit { width: 100%; min-height: 50px; border: 2px solid var(--ink); background: var(--ink); color: white; font-weight: 700; cursor: pointer; }
        .submit:hover { border-color: var(--blue); background: var(--blue); }
        .demo { margin: 18px 0 0; padding-top: 14px; border-top: 1px solid var(--line); color: var(--muted); font-size: 12px; }
        .demo strong { color: var(--ink); }
        .register-link { margin: 16px 0 0; color: var(--muted); font-size: 13px; text-align: center; }
        .register-link a { color: var(--ink); font-weight: 700; text-decoration: underline; text-underline-offset: 3px; }
        @media (max-width: 760px) {
            .shell { width: min(100% - 40px, 480px); }
            .topbar { min-height: 64px; }
            main { min-height: calc(100vh - 65px); padding-block: 32px; }
            .login-layout { grid-template-columns: 1fr; gap: 24px; }
            .intro { max-width: none; }
            h1 { font-size: 48px; }
            .visual { display: none; }
        }
        @media (prefers-reduced-motion: reduce) { html { scroll-behavior: auto; } }
    </style>
</head>
<body>
    <header class="shell topbar">
        <a class="brand" href="/academia" aria-label="Ferro & Giz, página inicial">
            <span class="mark" aria-hidden="true"><i></i><i></i><i></i><i></i></span>Ferro&amp;Giz
        </a>
        <a class="back-link" href="/academia">Voltar à academia</a>
    </header>
    <main class="shell">
        <div class="login-layout">
            <section class="intro" aria-labelledby="page-title">
                <span class="eyebrow">Área do aluno</span>
                <h1 id="page-title">Seu treino continua daqui.</h1>
                <p>Acesse sua agenda para conferir as aulas e gerenciar suas reservas.</p>
                <div class="visual" role="img" aria-label="Equipamentos de musculação na academia"></div>
            </section>
            <section class="form-panel" aria-labelledby="login-title">
                <h2 id="login-title">Login</h2>
                <p class="form-description">Entre com sua matrícula e senha.</p>
                <form id="login-form">
                    <label for="matricula">Matrícula
                        <input id="matricula" name="matricula" inputmode="numeric" autocomplete="username" required>
                    </label>
                    <label for="senha">Senha
                        <input id="senha" name="senha" type="password" autocomplete="current-password" required>
                    </label>
                    <p class="error" id="login-error" role="alert" aria-live="polite"></p>
                    <button class="submit" type="submit">Entrar</button>
                </form>
                <p class="register-link">Ainda não tem conta? <a href="/cadastro">Fazer cadastro</a></p>
                <p class="demo">Acesso demonstrativo: matrícula <strong>1001</strong> · senha <strong>ferro123</strong></p>
            </section>
        </div>
    </main>
    <script>
        const demoUsers = { '1001': { password: 'ferro123', name: 'Marina', plan: 'Completo' } };
        let savedUsers = {};
        try {
            savedUsers = JSON.parse(localStorage.getItem('fg_users')) || {};
        } catch {}
        const users = { ...savedUsers, ...demoUsers };
        const loginForm = document.querySelector('#login-form');
        const errorMessage = document.querySelector('#login-error');

        loginForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const formData = new FormData(loginForm);
            const user = users[String(formData.get('matricula')).trim()];

            if (!user || (user.password ?? user.s) !== formData.get('senha')) {
                errorMessage.textContent = 'Matrícula ou senha incorretas. Confira os dados e tente novamente.';
                return;
            }

            localStorage.setItem('fg_u', JSON.stringify({ n: user.name ?? user.n, p: user.plan ?? user.p }));
            window.location.href = '/academia#agenda';
        });
    </script>
</body>
</html>
