<?php
$listaId = isset($_GET['id']) ? intval($_GET['id']) : null;

// Mapeamento de listas
$listas = [
    1 => ['nome' => 'Favoritas', 'icon' => 'fa-music', 'cor' => '#1db954', 'musicas' => 42],
    2 => ['nome' => 'Hits Atuais', 'icon' => 'fa-fire', 'cor' => '#ff6b6b', 'musicas' => 28],
    3 => ['nome' => 'Relaxar', 'icon' => 'fa-heart', 'cor' => '#ff006e', 'musicas' => 35],
    4 => ['nome' => 'Academia', 'icon' => 'fa-dumbbell', 'cor' => '#ffd60a', 'musicas' => 52],
    5 => ['nome' => 'Noite', 'icon' => 'fa-moon', 'cor' => '#7c4dff', 'musicas' => 38],
];

// Exemplo de músicas da lista
$musicasPorLista = [
    1 => [
        ['titulo' => 'Midnight City', 'artista' => 'M83', 'duracao' => '3:42', 'score' => 9.8],
        ['titulo' => 'Blinding Lights', 'artista' => 'The Weeknd', 'duracao' => '3:20', 'score' => 9.5],
        ['titulo' => 'Breathe Deeper', 'artista' => 'Tame Impala', 'duracao' => '5:18', 'score' => 9.2],
        ['titulo' => 'Levitating', 'artista' => 'Dua Lipa', 'duracao' => '3:23', 'score' => 9.0],
    ],
    2 => [
        ['titulo' => 'Heat Waves', 'artista' => 'Glass Animals', 'duracao' => '3:56', 'score' => 9.7],
        ['titulo' => 'As It Was', 'artista' => 'Harry Styles', 'duracao' => '2:52', 'score' => 9.6],
    ],
    3 => [
        ['titulo' => 'Someone You Loved', 'artista' => 'Lewis Capaldi', 'duracao' => '3:02', 'score' => 9.3],
        ['titulo' => 'Skinny Love', 'artista' => 'Bon Iver', 'duracao' => '3:57', 'score' => 9.1],
    ],
    4 => [
        ['titulo' => 'Eye of the Tiger', 'artista' => 'Survivor', 'duracao' => '4:08', 'score' => 9.4],
        ['titulo' => 'Don\'t Stop Me Now', 'artista' => 'Queen', 'duracao' => '3:36', 'score' => 9.6],
    ],
    5 => [
        ['titulo' => 'Night Vibes', 'artista' => 'Lo-fi Hip Hop', 'duracao' => '2:45', 'score' => 8.9],
        ['titulo' => 'Drift Away', 'artista' => 'Indie Folk', 'duracao' => '4:20', 'score' => 8.7],
    ],
];

$lista = $listaId && isset($listas[$listaId]) ? $listas[$listaId] : null;
$musicas = $listaId && isset($musicasPorLista[$listaId]) ? $musicasPorLista[$listaId] : [];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundScore - Lista</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/lista.css">
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
        <?php if ($lista): ?>
        
        <div class="lista-header-section" style="background: linear-gradient(135deg, <?php echo $lista['cor']; ?>aa 0%, #7c4dff 100%);">
            <div class="lista-header-content">
                <i class="fas <?php echo $lista['icon']; ?>"></i>
                <h1><?php echo htmlspecialchars($lista['nome'], ENT_QUOTES, 'UTF-8'); ?></h1>
                <p><?php echo $lista['musicas']; ?> músicas</p>
            </div>
        </div>

        <section class="lista-musicas">
            <div class="musicas-header">
                <div class="col-numero">#</div>
                <div class="col-titulo">Título</div>
                <div class="col-artista">Artista</div>
                <div class="col-duracao">Duração</div>
                <div class="col-score">Score</div>
            </div>

            <?php if (!empty($musicas)): ?>
                <?php foreach ($musicas as $index => $musica): ?>
                <div class="musica-linha">
                    <div class="col-numero"><?php echo $index + 1; ?></div>
                    <div class="col-titulo">
                        <i class="fas fa-music"></i>
                        <?php echo htmlspecialchars($musica['titulo'], ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                    <div class="col-artista"><?php echo htmlspecialchars($musica['artista'], ENT_QUOTES, 'UTF-8'); ?></div>
                    <div class="col-duracao"><?php echo $musica['duracao']; ?></div>
                    <div class="col-score">
                        <span class="score-badge"><?php echo $musica['score']; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="musicas-vazio">
                    <i class="fas fa-music"></i>
                    <p>Esta lista ainda não tem músicas</p>
                    <a href="#" class="btn-adicionar-musica">Adicionar primeira música</a>
                </div>
            <?php endif; ?>
        </section>

        <?php else: ?>
        <div class="lista-vazio">
            <i class="fas fa-list"></i>
            <h2>Lista não encontrada</h2>
            <p>A lista que você procura não existe.</p>
            <a href="perfil.php" class="btn-voltar"><i class="fas fa-arrow-left me-2"></i>Voltar ao Perfil</a>
        </div>
        <?php endif; ?>

        <a href="perfil.php" class="btn-voltar-bottom"><i class="fas fa-arrow-left me-2"></i>Voltar</a>
    </main>

    <footer class="player" style="padding:0; overflow:hidden; height:50px; position: fixed; bottom: 0; width: 100%;">
        <div class="now-playing" style="width:100%; height:100%; background: #000;">
            <img id="slideshow-img" src="https://statig.com.br" style="width:100%; height:100%; object-fit:cover; display:block; transition: opacity 1s ease;">
        </div>
    </footer>

    <script>
        // Adicionar/remover curtida
        document.querySelectorAll('.col-acoes .btn-acao').forEach(btn => {
            btn.addEventListener('click', function() {
                const icon = this.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    icon.style.color = '#e53935';
                } else if (icon.classList.contains('fa-trash')) {
                    this.closest('.musica-linha').style.opacity = '0.5';
                    this.closest('.musica-linha').style.pointerEvents = 'none';
                }
            });
        });
    </script>

</body>
</html>
