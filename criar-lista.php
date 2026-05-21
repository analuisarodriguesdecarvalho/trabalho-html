<?php
$erro = null;
$sucesso = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $descricao = isset($_POST['descricao']) ? trim($_POST['descricao']) : '';
    $icone = isset($_POST['icone']) ? $_POST['icone'] : 'fa-music';

    if (empty($nome)) {
        $erro = 'O nome da lista é obrigatório!';
    } elseif (strlen($nome) < 3) {
        $erro = 'O nome deve ter pelo menos 3 caracteres!';
    } else {
        $sucesso = 'Lista criada com sucesso! Redirecionando...';
        // Aqui você salvaria no banco de dados
        // header('Location: perfil.php');
    }
}

$icones = [
    'fa-music' => 'Música',
    'fa-fire' => 'Fogo',
    'fa-heart' => 'Coração',
    'fa-dumbbell' => 'Academia',
    'fa-moon' => 'Lua',
    'fa-star' => 'Estrela',
    'fa-smile' => 'Feliz',
    'fa-headphones' => 'Fones',
    'fa-guitar' => 'Guitarra',
    'fa-drum' => 'Bateria',
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundScore - Criar Lista</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/criar-lista.css">
</head>
<body>

    <?php include __DIR__ . '/navbar.php'; ?>

    <main class="content">
        <section class="criar-lista-container">
            <div class="criar-lista-box">
                <h1><i class="fas fa-plus-circle me-2"></i>Criar Nova Lista</h1>
                <p class="subtitulo">Crie sua própria playlist personalizada</p>

                <?php if ($erro): ?>
                    <div class="alerta alerta-erro">
                        <i class="fas fa-exclamation-circle"></i>
                        <?php echo htmlspecialchars($erro, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                <?php endif; ?>

                <?php if ($sucesso): ?>
                    <div class="alerta alerta-sucesso">
                        <i class="fas fa-check-circle"></i>
                        <?php echo htmlspecialchars($sucesso, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                <?php endif; ?>

                <form method="POST" class="formulario-lista">
                    <div class="form-grupo">
                        <label for="nome"><i class="fas fa-edit me-2"></i>Nome da Lista *</label>
                        <input 
                            type="text" 
                            id="nome" 
                            name="nome" 
                            placeholder="Ex: Músicas Favoritas, Relaxar, etc..."
                            maxlength="50"
                            value="<?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome'], ENT_QUOTES, 'UTF-8') : ''; ?>"
                            required>
                    </div>

                    <div class="form-grupo">
                        <label for="descricao"><i class="fas fa-align-left me-2"></i>Descrição (opcional)</label>
                        <textarea 
                            id="descricao" 
                            name="descricao" 
                            placeholder="Descreva sua lista..."
                            maxlength="200"
                            rows="4"><?php echo isset($_POST['descricao']) ? htmlspecialchars($_POST['descricao'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                    </div>

                    <div class="form-grupo">
                        <label><i class="fas fa-icon me-2"></i>Escolha um Ícone</label>
                        <div class="icones-grid">
                            <?php foreach ($icones as $icon => $label): ?>
                                <label class="icone-option">
                                    <input type="radio" name="icone" value="<?php echo $icon; ?>" <?php echo ($icone === $icon) ? 'checked' : ''; ?>>
                                    <div class="icone-box">
                                        <i class="fas <?php echo $icon; ?>"></i>
                                    </div>
                                    <span><?php echo $label; ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="preview-section">
                        <h3>Pré-visualização</h3>
                        <div class="preview-card">
                            <div class="preview-icon">
                                <i class="fas fa-music"></i>
                            </div>
                            <h4 id="preview-nome">Sua Lista</h4>
                            <p id="preview-desc">Descrição aqui</p>
                            <small>0 músicas</small>
                        </div>
                    </div>

                    <div class="form-acoes">
                        <button type="submit" class="btn-criar">
                            <i class="fas fa-check me-2"></i>Criar Lista
                        </button>
                        <a href="perfil.php" class="btn-cancelar">
                            <i class="fas fa-times me-2"></i>Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="player" style="padding:0; overflow:hidden; height:50px; position: fixed; bottom: 0; width: 100%;">
        <div class="now-playing" style="width:100%; height:100%; background: #000;">
            <img id="slideshow-img" src="https://statig.com.br" style="width:100%; height:100%; object-fit:cover; display:block; transition: opacity 1s ease;">
        </div>
    </footer>

    <script>
        // Atualizar pré-visualização
        document.getElementById('nome').addEventListener('input', function() {
            document.getElementById('preview-nome').textContent = this.value || 'Sua Lista';
        });

        document.getElementById('descricao').addEventListener('input', function() {
            document.getElementById('preview-desc').textContent = this.value || 'Descrição aqui';
        });

        document.querySelectorAll('input[name="icone"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const icon = document.querySelector('.preview-card .preview-icon i');
                icon.className = 'fas ' + this.value;
            });
        });

        // Redirecionamento após sucesso
        <?php if ($sucesso): ?>
            setTimeout(() => {
                window.location.href = 'perfil.php';
            }, 2000);
        <?php endif; ?>
    </script>

</body>
</html>
