<?php
session_start();
$id_genero = $_GET['id'] ?? null;
$usuario_id = $_SESSION['usuario_id'] ?? null;

if (!$id_genero) {
    header("Location: buscar.php");
    exit;
}

$pdo = new PDO('mysql:host=localhost;dbname=bdmusica;charset=utf8mb4', 'root', '');

$stmt_genero = $pdo->prepare("SELECT nome, descricao FROM genero WHERE id = :id");
$stmt_genero->execute(['id' => $id_genero]);
$genero_atual = $stmt_genero->fetch(PDO::FETCH_ASSOC);

if (!$genero_atual) {
    header("Location: buscar.php");
    exit;
}

$stmt_musicas = $pdo->prepare("SELECT id, titulo, artista, album FROM musicas WHERE genero_id = :id");
$stmt_musicas->execute(['id' => $id_genero]);
$musicas = $stmt_musicas->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundScore - <?php echo htmlspecialchars($genero_atual['nome']); ?></title>
    <link rel="stylesheet" href="assets/css/hh.css">
    <link rel="stylesheet" href="assets/css/genero-cards.css">
</head>
<body>
    <main class="content">
        <div class="container">

    <a href="paginicial.php" class="btn-voltar">
        ⬅ Voltar para Página Inicial
    </a>

    <h1 class="genero-title">
            <h1 class="genero-title">Explore as melhores faixas de <?php echo htmlspecialchars($genero_atual['nome']); ?></h1>
            <p class="genero-description"><?php echo htmlspecialchars($genero_atual['descricao']); ?></p>

            <div class="musicas-grid">
                <?php if (count($musicas) > 0): ?>
                    <?php foreach ($musicas as $musica): ?>
                        <div class="music-card" data-musica-id="<?php echo htmlspecialchars($musica['id']); ?>">
                            <!-- Lado Esquerdo: Imagem e Links -->
                            <div class="card-left">
                                <div class="music-image">
                                    <img src="assets/img/musicas/<?php echo htmlspecialchars($musica['id']); ?>.jpg" 
                                         alt="<?php echo htmlspecialchars($musica['titulo']); ?>"
                                         onerror="this.src='assets/img/placeholder-music.jpg'">
                                </div>
                                <div class="music-links">
                                    <a href="#" class="link-spotify" title="Ouça no Spotify" target="_blank">
                                        <span class="link-icon">🎵</span> Spotify
                                    </a>
                                    <a href="#" class="link-youtube" title="Assista no YouTube" target="_blank">
                                        <span class="link-icon">▶️</span> YouTube
                                    </a>
                                    <a href="#" class="link-apple" title="Ouça no Apple Music" target="_blank">
                                        <span class="link-icon">🎧</span> Apple Music
                                    </a>
                                </div>
                            </div>

                            <!-- Lado Direito: Informações e Interações -->
                            <div class="card-right">
                                <div class="music-info-header">
                                    <h3 class="music-title"><?php echo htmlspecialchars($musica['titulo']); ?></h3>
                                    <p class="music-artist"><?php echo htmlspecialchars($musica['artista']); ?></p>
                                    <?php if (!empty($musica['album'])): ?>
                                        <p class="music-album"><?php echo htmlspecialchars($musica['album']); ?></p>
                                    <?php endif; ?>
                                </div>

                                <!-- Rating com Estrelas -->
                                <div class="rating-section">
                                    <label class="rating-label">Avalie esta música:</label>
                                    <div class="star-rating-container">
                                        <div class="star-rating" data-musica-id="<?php echo htmlspecialchars($musica['id']); ?>">
                                            <input type="radio" name="rating-<?php echo htmlspecialchars($musica['id']); ?>" value="5" id="star5-<?php echo htmlspecialchars($musica['id']); ?>">
                                            <label for="star5-<?php echo htmlspecialchars($musica['id']); ?>" title="5 estrelas">★</label>
                                            
                                            <input type="radio" name="rating-<?php echo htmlspecialchars($musica['id']); ?>" value="4" id="star4-<?php echo htmlspecialchars($musica['id']); ?>">
                                            <label for="star4-<?php echo htmlspecialchars($musica['id']); ?>" title="4 estrelas">★</label>
                                            
                                            <input type="radio" name="rating-<?php echo htmlspecialchars($musica['id']); ?>" value="3" id="star3-<?php echo htmlspecialchars($musica['id']); ?>">
                                            <label for="star3-<?php echo htmlspecialchars($musica['id']); ?>" title="3 estrelas">★</label>
                                            
                                            <input type="radio" name="rating-<?php echo htmlspecialchars($musica['id']); ?>" value="2" id="star2-<?php echo htmlspecialchars($musica['id']); ?>">
                                            <label for="star2-<?php echo htmlspecialchars($musica['id']); ?>" title="2 estrelas">★</label>
                                            
                                            <input type="radio" name="rating-<?php echo htmlspecialchars($musica['id']); ?>" value="1" id="star1-<?php echo htmlspecialchars($musica['id']); ?>">
                                            <label for="star1-<?php echo htmlspecialchars($musica['id']); ?>" title="1 estrela">★</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Seção de Comentários -->
                                <div class="comments-section">
                                    <label class="comments-label">Deixe seu comentário:</label>
                                    <textarea class="comment-input" 
                                              placeholder="Compartilhe sua opinião sobre esta música..."
                                              maxlength="500"
                                              rows="3"></textarea>
                                    <div class="char-counter"><span class="current-chars">0</span>/500</div>
                                </div>
<!-- Comentários Fictícios -->
<div class="fake-comments">
    <h4 class="fake-comments-title">Comentários da comunidade</h4>

    <div class="fake-comment">
        <div class="comment-user">🎵 Maria</div>
        <div class="comment-text">
            Essa música é simplesmente incrível! Escuto todos os dias.
        </div>
    </div>

    <div class="fake-comment">
        <div class="comment-user">🔥 João</div>
        <div class="comment-text">
            O instrumental dessa faixa é absurdo de bom.
        </div>
    </div>

    <div class="fake-comment">
        <div class="comment-user">🎧 Ana</div>
        <div class="comment-text">
            Uma das melhores do álbum sem dúvidas.
        </div>
    </div>
</div>

<!-- Botões de Ação -->
<div class="card-actions">
                                <!-- Botões de Ação -->
                                <div class="card-actions">
                                    <button class="btn-add-playlist" data-musica-id="<?php echo htmlspecialchars($musica['id']); ?>">
                                        ➕ Adicionar à Lista
                                    </button>
                                    <button class="btn-save" data-musica-id="<?php echo htmlspecialchars($musica['id']); ?>">
                                        💾 Salvar
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="no-musicas">Nenhuma música encontrada para este gênero.</p>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <!-- Modal para selecionar lista -->
    <div class="modal" id="playlistModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Adicionar à Lista</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="playlists-list" id="playlistsList"></div>
                <div class="create-playlist">
                    <input type="text" id="newPlaylistName" placeholder="Criar nova lista..." maxlength="150">
                    <button class="btn-create-list">Criar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/genero-cards.js"></script>
</body>
</html>