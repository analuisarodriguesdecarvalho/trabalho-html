<?php
require_once __DIR__ . '/model/dao/UsuarioDAO.php';

$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->listarUsuario();

// Obter informações de um usuário específico para o perfil
// Em um sistema real, isso seria do usuário logado da sessão
$usuarioPerfil = !empty($usuarios) ? $usuarios[0] : null;
$seguidores = "1.2k"; // Seguidores fictícios
$seguindo = "450";    // Seguindo fictícios
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundScore - Perfil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/perfil.css">
</head>
<body>

  <aside class="sidebar">
        <div class="logo">🎶 SoundScore</div>
        <nav>
            <ul>
                <li class="active">
                    <i class="fas fa-home"></i> Início
                </li>
               <li>
                <a href="biblioteca.php">
                    <i class="fas fa-book"></i> Sua Biblioteca
                </a>
               </li>
                <li>
                    <a href="perfil.php">
                        <i class="fas fa-user"></i> Ver Perfil
                    </a>
                </li>
            </ul>
        </nav>
        <div class="sidebar-premium-banner" style="margin-top:10px;">
            <i class="fas fa-star mb-2" style="color:#ffc107;font-size:1.4rem"></i>
            <p>Ouça sem limites com o <strong>Premium</strong></p>
            <a href="premium.php" class="btn-premium-sidebar">Experimente grátis</a>
        </div>
    </aside>

    <main class="content">
        <!-- PERFIL DO USUÁRIO -->
        <?php if ($usuarioPerfil): ?>
        <section class="perfil-section">
            <div class="perfil-header">
                <div class="perfil-avatar">
                    <div class="avatar-circle">
                        <?php echo strtoupper(substr($usuarioPerfil['nome'], 0, 1)); ?>
                    </div>
                </div>
                
                <div class="perfil-info">
                    <h1><?php echo htmlspecialchars($usuarioPerfil['nome'], ENT_QUOTES, 'UTF-8'); ?></h1>
                    <p class="perfil-email">usuario.soundscore@gmail.com</p>
                    <p class="perfil-status">
                        <span class="status-badge <?php echo $usuarioPerfil['status'] == 1 ? 'ativo' : 'inativo'; ?>">
                            <?php echo $usuarioPerfil['status'] == 1 ? '● Ativo' : '● Inativo'; ?>
                        </span>
                    </p>
                </div>

                <div class="perfil-stats">
                    <div class="stat-box">
                        <div class="stat-number"><?php echo $seguidores; ?></div>
                        <div class="stat-label">Seguidores</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number"><?php echo $seguindo; ?></div>
                        <div class="stat-label">Seguindo</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="perfil-content">
            <div class="perfil-section-content">
                <h2><i class="fas fa-list me-2"></i>Suas Listas</h2>
                <div class="listas-grid">
                    <a href="lista.php?id=2" class="lista-card">
                        <div class="lista-header">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h4>Hits Atuais</h4>
                        <p>28 músicas</p>
                        <small>Atualizada há 2 dias</small>
                    </a>
                    <a href="lista.php?id=3" class="lista-card">
                        <div class="lista-header">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Relaxar</h4>
                        <p>35 músicas</p>
                        <small>Atualizada há 1 semana</small>
                    </a>
                    <a href="lista.php?id=4" class="lista-card">
                        <div class="lista-header">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <h4>Academia</h4>
                        <p>52 músicas</p>
                        <small>Atualizada há 3 dias</small>
                    </a>
                    <a href="lista.php?id=5" class="lista-card">
                        <div class="lista-header">
                            <i class="fas fa-moon"></i>
                        </div>
                        <h4>Noite</h4>
                        <p>38 músicas</p>
                        <small>Atualizada há 5 dias</small>
                    </a>
                    <a href="criar-lista.php" class="lista-card criar-lista">
                        <div class="lista-header-add">
                            <i class="fas fa-plus"></i>
                        </div>
                        <h4>Criar Nova Lista</h4>
                        <p>Faça sua própria playlist</p>
                    </a>
                </div>
            </div>

            <div class="perfil-section-content">
                <h2><i class="fas fa-comments me-2"></i>Atividade Recente</h2>
                <div class="atividade-lista">
                    <div class="atividade-item">
                        <div class="atividade-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="atividade-info">
                            <p><strong>Você curtiu</strong> "Midnight City" de M83</p>
                            <small>Há 2 horas</small>
                        </div>
                    </div>
                    <div class="atividade-item">
                        <div class="atividade-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="atividade-info">
                            <p><strong>Você avaliou</strong> "Blinding Lights" com 9.5 estrelas</p>
                            <small>Há 5 horas</small>
                        </div>
                    </div>
                    <div class="atividade-item">
                        <div class="atividade-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="atividade-info">
                            <p><strong>Você começou a seguir</strong> The Weeknd</p>
                            <small>Há 1 dia</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="paginicial.php" class="btn-voltar"><i class="fas fa-arrow-left me-2"></i>Voltar</a>
        <?php else: ?>
        <div class="perfil-vazio">
            <i class="fas fa-user-slash"></i>
            <h2>Nenhum usuário encontrado</h2>
            <p>Cadastre-se para criar seu perfil!</p>
            <a href="cadastro.html" class="btn-cadastro">Cadastrar</a>
        </div>
        <?php endif; ?>
    </main>

    <footer class="player" style="padding:0; overflow:hidden; height:50px; position: fixed; bottom: 0; width: 100%;">
        <div class="now-playing" style="width:100%; height:100%; background: #000;">
            <img id="slideshow-img" src="https://statig.com.br" style="width:100%; height:100%; object-fit:cover; display:block; transition: opacity 1s ease;">
        </div>
    </footer>

    <script>
        const slides = [
            'https://img.freepik.com/vetores-premium/um-cartaz-de-publicidade-musical-com-um-disco-de-vinil-e-notas-musicais-em-uma-ilustracao-vetorial-isolada_606304-808.jpg',
            'https://png.pngtree.com/thumb_back/fh260/background/20221224/pngtree-blue-musical-notes-background-image_1530362.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_5qs5i8zvZ2TQptBz3UOxKhFS-Te9heBoDA&s',
            'https://thumbs.dreamstime.com/b/grande-nota-musical-%C3%A9-uma-trepada-sobre-fundo-abstrato-para-publicidade-em-lojas-e-est%C3%BAdios-de-m%C3%BAsica-gerada-por-ai-334831956.jpg'
        ];

        let current = 0;
        const img = document.getElementById('slideshow-img');

        function mudarSlide() {
            img.style.opacity = '0';
            setTimeout(() => {
                current = (current + 1) % slides.length;
                img.src = slides[current];
                img.style.opacity = '1';
            }, 1000); 
        }

        setInterval(mudarSlide, 30000);
    </script>

</body>
</html>
