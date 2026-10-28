<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#E4E8E3">
    <title>Cadastro | Ferro &amp; Giz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,400..900&display=swap" rel="stylesheet">
    <style>
        :root { --bg: #E4E8E3; --paper: #F6F8F4; --ink: #1B2623; --muted: #5C6B65; --line: #C3CCC5; --blue: #2F6F86; --green: #5F8F6B; --red: #B5573C; color-scheme: light; }
        * { box-sizing: border-box; }
        body { min-height: 100vh; margin: 0; background: var(--bg); color: var(--ink); font: 400 16px/1.5 Archivo, system-ui, sans-serif; }
        a { color: inherit; text-decoration: none; }
        button, input, select { font: inherit; }
        .shell { width: min(1080px, calc(100% - 48px)); margin-inline: auto; }
        .topbar { min-height: 72px; display: flex; align-items: center; justify-content: space-between; gap: 20px; border-bottom: 2px solid var(--ink); }
        .brand { display: flex; align-items: center; gap: 10px; font-size: 22px; font-weight: 800; }
        .mark { width: 26px; height: 26px; display: grid; grid-template-columns: 1fr 1fr; gap: 2px; }
        .mark i:nth-child(1) { background: #B5573C; }.mark i:nth-child(2) { background: #2F6F86; }.mark i:nth-child(3) { background: #DDA94B; }.mark i:nth-child(4) { background: #5F8F6B; }
        .back-link { color: var(--muted); font-weight: 600; }
        main { min-height: calc(100vh - 73px); display: grid; place-items: center; padding-block: 42px; }
        .layout { width: 100%; display: grid; grid-template-columns: 1fr minmax(340px, 480px); align-items: center; gap: clamp(32px, 7vw, 88px); }
        .intro { max-width: 460px; }
        .eyebrow { color: #527333; font-size: 12px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; }
        h1 { margin: 14px 0; font-size: clamp(42px, 6vw, 72px); font-weight: 800; letter-spacing: -.02em; line-height: .95; }
        .intro p { max-width: 44ch; color: var(--muted); line-height: 1.7; }
        .visual { min-height: 150px; margin-top: 28px; background: linear-gradient(90deg, rgba(27,38,35,.16), rgba(27,38,35,.02)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=1000&q=80') center 48% / cover; border: 2px solid var(--ink); }
        .form-panel { padding: clamp(24px, 4vw, 36px); background: var(--paper); border: 2px solid var(--ink); }
        .form-panel h2 { margin: 0 0 6px; font-size: 30px; font-weight: 800; }
        .form-description { margin: 0 0 22px; color: var(--muted); }
        label { display: block; margin-bottom: 12px; font-size: 13px; font-weight: 700; }
        input, select { width: 100%; min-height: 46px; margin-top: 5px; padding: 9px 12px; border: 2px solid var(--ink); background: white; color: var(--ink); }
        input:focus-visible, select:focus-visible, button:focus-visible, a:focus-visible { outline: 3px solid var(--blue); outline-offset: 3px; }
        .error { min-height: 24px; margin: 2px 0 10px; color: var(--red); font-size: 13px; font-weight: 700; }
        .submit { width: 100%; min-height: 50px; border: 2px solid var(--ink); background: var(--ink); color: white; font-weight: 700; cursor: pointer; }
        .submit:hover { border-color: var(--blue); background: var(--blue); }
        .footnote { margin: 16px 0 0; padding-top: 14px; border-top: 1px solid var(--line); color: var(--muted); font-size: 12px; }
        .footnote a { color: var(--ink); font-weight: 700; text-decoration: underline; text-underline-offset: 3px; }
        .demo { margin-top: 16px; padding: 12px; background: #e8e8dc; border-left: 4px solid var(--green); color: var(--muted); font-size: 12px; }
        @media (max-width: 760px) {
            .shell { width: min(100% - 40px, 480px); }
            .topbar { min-height: 64px; }
            main { min-height: calc(100vh - 65px); padding-block: 30px; }
            .layout { grid-template-columns: 1fr; gap: 22px; }
            .intro { max-width: none; }
            h1 { font-size: 46px; }
            .visual { display: none; }
        }
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
        <div class="layout">
            <section class="intro" aria-labelledby="page-title">
                <span class="eyebrow">Nova conta</span>
                <h1 id="page-title">Seu próximo treino começa aqui.</h1>
                <p>Crie seu cadastro para montar sua agenda e reservar vagas nas aulas.</p>
                <div class="visual" role="img" aria-label="Equipamentos de musculação na academia"></div>
            </section>
            <section class="form-panel" aria-labelledby="register-title">
                <h2 id="register-title">Cadastro</h2>
                <p class="form-description">Preencha os dados para criar sua conta.</p>
                <form id="register-form">
                    <label for="nome">Nome
                        <input id="nome" name="nome" autocomplete="name" maxlength="80" required>
                    </label>
                    <label for="email">E-mail
                        <input id="email" name="email" type="email" autocomplete="email" required>
                    </label>
                    <label for="plano">Plano
                        <select id="plano" name="plano">
                            <option value="Essencial">Essencial</option>
                            <option value="Completo">Completo</option>
                            <option value="Total">Total</option>
                        </select>
                    </label>
                    <label for="senha">Senha (mínimo 6 caracteres)
                        <input id="senha" name="senha" type="password" autocomplete="new-password" minlength="6" required>
                    </label>
                    <label for="confirmar-senha">Confirmar senha
                        <input id="confirmar-senha" name="confirmar-senha" type="password" autocomplete="new-password" minlength="6" required>
                    </label>
                    <p class="error" id="register-error" role="alert" aria-live="polite"></p>
                    <button class="submit" type="submit">Criar cadastro</button>
                </form>
                <p class="footnote">Já tem conta? <a href="/login">Entrar</a></p>
                <p class="demo">Cadastro demonstrativo: a conta fica salva apenas neste navegador.</p>
            </section>
        </div>
    </main>
    <script>
        const registerForm = document.querySelector('#register-form');
        const errorMessage = document.querySelector('#register-error');

        function getSavedUsers() {
            try {
                return JSON.parse(localStorage.getItem('fg_users')) || {};
            } catch {
                return {};
            }
        }

        registerForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const formData = new FormData(registerForm);
            const password = String(formData.get('senha'));

            if (password !== formData.get('confirmar-senha')) {
                errorMessage.textContent = 'As senhas não coincidem.';
                return;
            }

            const users = getSavedUsers();
            let matricula;
            do {
                matricula = String(Math.floor(100000 + Math.random() * 900000));
            } while (users[matricula] || matricula === '1001');

            const user = {
                password,
                name: String(formData.get('nome')).trim(),
                plan: String(formData.get('plano')),
                email: String(formData.get('email')).trim(),
            };

            users[matricula] = user;
            localStorage.setItem('fg_users', JSON.stringify(users));
            localStorage.setItem('fg_u', JSON.stringify({ n: user.name, p: user.plan }));
            window.location.href = '/academia#agenda';
        });
    </script>
</body>
</html>
