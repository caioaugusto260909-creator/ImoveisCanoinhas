<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adicionar uma nova foto à galeria da Ferro & Giz.">
    <title>Adicionar foto | Ferro &amp; Giz</title>
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
        button, input, select { font: inherit; }
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
        .layout {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 28px;
            align-items: start;
        }
        .panel {
            background: var(--paper);
            border: 2px solid var(--ink);
            padding: clamp(22px, 4vw, 36px);
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
        .photo-preview {
            min-height: 320px;
            border: 2px dashed var(--line);
            background: linear-gradient(135deg, rgba(47, 111, 134, 0.08), rgba(221, 169, 75, 0.12));
            display: grid;
            place-items: center;
            text-align: center;
            color: var(--muted);
            padding: 18px;
        }
        .photo-preview img {
            max-height: 280px;
            width: 100%;
            object-fit: cover;
            border: 2px solid var(--ink);
        }
        .field {
            display: block;
            margin-bottom: 16px;
            font-size: 0.92rem;
            font-weight: 700;
            color: var(--ink);
        }
        .field input, .field select {
            width: 100%;
            padding: 10px 12px;
            margin-top: 8px;
            border: 2px solid var(--ink);
            background: white;
            color: var(--ink);
        }
        .submit {
            width: 100%;
            border: 2px solid var(--ink);
            background: var(--ink);
            color: var(--paper);
            padding: 12px 18px;
            font-weight: 800;
            cursor: pointer;
        }
        .submit:hover {
            background: var(--blue);
            border-color: var(--blue);
        }
        .success {
            min-height: 22px;
            margin-top: 12px;
            color: var(--green);
            font-weight: 700;
        }
        @media (max-width: 760px) {
            .bar { min-height: 64px; flex-wrap: wrap; padding: 10px 0; }
            nav { width: 100%; justify-content: center; }
            .layout { grid-template-columns: 1fr; }
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
                <a class="active" href="/fotos">Galeria</a>
                <a href="/sobre">Sobre</a>
                <a class="nav-btn" href="/login">Entrar</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="wrap layout">
            <section>
                <span class="eyebrow">Nova foto</span>
                <h1>Adicionar uma imagem à galeria.</h1>
                <p class="muted">Compartilhe um ambiente, treino ou detalhe do nosso espaço para manter a identidade da academia sempre viva.</p>
                <div class="photo-preview" id="preview-box">
                    <div>
                        <strong>Preview da imagem</strong>
                        <p>Selecione um link válido para visualizar a capa antes de salvar.</p>
                    </div>
                </div>
            </section>

            <section class="panel" aria-labelledby="form-title">
                <h2 id="form-title" style="margin-top:0;">Formulário</h2>
                <form id="gallery-form">
                    <label class="field">
                        Título
                        <input id="titulo" name="titulo" type="text" placeholder="Ex.: Treino em circuito" required>
                    </label>

                    <label class="field">
                        Categoria
                        <select id="categoria" name="categoria">
                            <option value="forca">Força</option>
                            <option value="cardio">Cardio</option>
                            <option value="bem-estar">Bem-estar</option>
                        </select>
                    </label>

                    <label class="field">
                        URL da imagem
                        <input id="imagem" name="imagem" type="url" placeholder="https://images.unsplash.com/..." required>
                    </label>

                    <button class="submit" type="submit">Salvar na galeria</button>
                    <div class="success" id="status" role="status" aria-live="polite"></div>
                </form>
            </section>
        </div>
    </main>

    <script>
        const form = document.getElementById('gallery-form');
        const previewBox = document.getElementById('preview-box');
        const status = document.getElementById('status');
        const inputImagem = document.getElementById('imagem');

        inputImagem.addEventListener('input', () => {
            const url = inputImagem.value.trim();
            if (!url) {
                previewBox.innerHTML = '<div><strong>Preview da imagem</strong><p>Selecione um link válido para visualizar a capa antes de salvar.</p></div>';
                return;
            }
            previewBox.innerHTML = `<img src="${url}" alt="Preview da imagem" />`;
        });

        form.addEventListener('submit', (event) => {
            event.preventDefault();
            const titulo = document.getElementById('titulo').value.trim();
            const categoria = document.getElementById('categoria').value;
            const imagem = inputImagem.value.trim();

            if (!titulo || !imagem) {
                status.textContent = 'Preencha o título e a URL da imagem para continuar.';
                return;
            }

            let saved = [];
            try {
                saved = JSON.parse(localStorage.getItem('fg_gallery_extra') || '[]');
            } catch (error) {
                saved = [];
            }

            saved.unshift({ title: titulo, category: categoria, image: imagem });
            localStorage.setItem('fg_gallery_extra', JSON.stringify(saved));
            status.textContent = 'Imagem salva com sucesso! Redirecionando para a galeria...';

            setTimeout(() => {
                window.location.href = '/fotos';
            }, 700);
        });
    </script>
</body>
</html>
