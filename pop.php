<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundScore - Pop</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/hh.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <aside class="sidebar">
        <div class="logo">🎶 SoundScore</div>
        <nav>
            <ul>
                <li class="active"><a href="paginicial.php">Início</a></li>
                <li><a href="buscar.php">Buscar</a></li>
                <li><a href="biblioteca.php">Biblioteca</a></li>
                <li><a href="premium.php">Premium</a></li>
            </ul>
        </nav>
    </aside>

    <main class="content">
        <div class="container">
            <h2>Explore as melhores faixas de Pop</h2>

            <div class="musicas-grid">
                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b273c7b92a7b7e3d4c8f0e1e2c3d" alt="Anitta - Girl from Rio">
                        <button class="menu-btn" onclick="abrirDetalhes(0)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Anitta</h3>
                        <p>Girl from Rio</p>
                    </div>
                </div>

                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b273d5e4f5a6b7c8d9e0f1a2b3c4" alt="Dua Lipa - Don't Start Now">
                        <button class="menu-btn" onclick="abrirDetalhes(1)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Dua Lipa</h3>
                        <p>Don't Start Now</p>
                    </div>
                </div>

                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b273e5a6b7c8d9e0f1a2b3c4d5e" alt="Luísa Sonza - Devagarinho">
                        <button class="menu-btn" onclick="abrirDetalhes(2)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Luísa Sonza</h3>
                        <p>Devagarinho</p>
                    </div>
                </div>

                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b273f5c3d4e5f6a7b8c9d0e1f2a3" alt="Ed Sheeran - Shape of You">
                        <button class="menu-btn" onclick="abrirDetalhes(3)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Ed Sheeran</h3>
                        <p>Shape of You</p>
                    </div>
                </div>
            </div>

            <div class="actions">
                <a href="paginicial.php"><input type="button" value="Voltar para página inicial"></a>
            </div>
        </div>
    </main>

    <!-- Modal de Detalhes -->
    <div id="modalDetalhes" class="modal-overlay" onclick="fecharDetalhes()">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button class="modal-close" onclick="fecharDetalhes()">
                <i class="fas fa-times"></i>
            </button>

            <div class="modal-body">
                <div class="modal-left">
                    <div class="modal-image-section">
                        <img id="modalImagem" src="" alt="Capa da música">
                        <div class="streaming-links">
                            <a id="spotifyLink" href="#" target="_blank" class="streaming-link spotify" title="Spotify">
                                <i class="bi bi-spotify"></i>
                                <span>Spotify</span>
                            </a>
                            <a id="youtubeLink" href="#" target="_blank" class="streaming-link youtube" title="YouTube">
                                <i class="bi bi-youtube"></i>
                                <span>YouTube</span>
                            </a>
                            <a id="applemusicLink" href="#" target="_blank" class="streaming-link applemusic" title="Apple Music">
                                <i class="bi bi-music-note-beamed"></i>
                                <span>Apple Music</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="modal-right">
                    <h2 id="modalArtista"></h2>
                    <p id="modalMusica" class="musica-titulo"></p>
                    
                    <div class="sinopse-section">
                        <h3>Sobre a Música</h3>
                        <p id="modalSinopse"></p>
                    </div>

                    <div class="rating-section">
                        <h3>Sua Avaliação</h3>
                        <div class="star-rating-modal">
                            <input type="radio" id="star5" name="rating" value="5" onclick="selecionarEstrela(5)">
                            <label for="star5">★</label>
                            <input type="radio" id="star4" name="rating" value="4" onclick="selecionarEstrela(4)">
                            <label for="star4">★</label>
                            <input type="radio" id="star3" name="rating" value="3" onclick="selecionarEstrela(3)">
                            <label for="star3">★</label>
                            <input type="radio" id="star2" name="rating" value="2" onclick="selecionarEstrela(2)">
                            <label for="star2">★</label>
                            <input type="radio" id="star1" name="rating" value="1" onclick="selecionarEstrela(1)">
                            <label for="star1">★</label>
                        </div>
                        <span id="ratingText" class="rating-text">Clique para avaliar</span>
                    </div>

                    <div class="comentario-section">
                        <h3>Deixe sua Opinião</h3>
                        <textarea id="modalComentario" placeholder="Compartilhe o que você achou desta música..." maxlength="500"></textarea>
                        <div class="char-count">
                            <span id="charCount">0</span>/500
                        </div>
                        <button class="btn-enviar" onclick="enviarAvaliacao()">
                            <i class="fas fa-check me-2"></i>Enviar Avaliação
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/app.js"></script>
    <script>
        const musicas = [
            {
                id: 1,
                artista: "Anitta",
                titulo: "Girl from Rio",
                imagem: "https://i.scdn.co/image/ab67616d0000b273c7b92a7b7e3d4c8f0e1e2c3d",
                sinopse: "Um dos maiores sucessos internacionais de Anitta, 'Girl from Rio' é uma celebração da cultura brasileira que conquistou o mundo. Com seu ritmo envolvente e produção moderna, a música consolidou Anitta como uma artista global.",
                links: {
                    spotify: "https://open.spotify.com/track/1w2SVWDBgmBq5rNHpPfPoE",
                    youtube: "https://www.youtube.com/watch?v=bdMYNBDZnNE",
                    applemusic: "https://music.apple.com/br/album/girl-from-rio/1735851309"
                }
            },
            {
                id: 2,
                artista: "Dua Lipa",
                titulo: "Don't Start Now",
                imagem: "https://i.scdn.co/image/ab67616d0000b273d5e4f5a6b7c8d9e0f1a2b3c4",
                sinopse: "Um dos maiores sucessos da carreira de Dua Lipa, 'Don't Start Now' é um hino disco-pop que conquistou as paradas mundiais. Com sua batida contagiante e produção impecável, a música se tornou um clássico instantâneo.",
                links: {
                    spotify: "https://open.spotify.com/track/7qiZfU4dY1lsylvNFHwXXa",
                    youtube: "https://www.youtube.com/watch?v=oygrmJFVxkc",
                    applemusic: "https://music.apple.com/br/album/dont-start-now/1481181679"
                }
            },
            {
                id: 3,
                artista: "Luísa Sonza",
                titulo: "Devagarinho",
                imagem: "https://i.scdn.co/image/ab67616d0000b273e5a6b7c8d9e0f1a2b3c4d5e",
                sinopse: "Uma balada envolvente de Luísa Sonza que mistura sensibilidade com produção moderna. 'Devagarinho' é um convite ao romance e à intimidade, com letras poéticas e arranjos delicados que conquistam corações.",
                links: {
                    spotify: "https://open.spotify.com/track/4IKfBzHNEoQj0BZdh0xM8Z",
                    youtube: "https://www.youtube.com/watch?v=V7bEh4G5B6A",
                    applemusic: "https://music.apple.com/br/album/devagarinho/1734567890"
                }
            },
            {
                id: 4,
                artista: "Ed Sheeran",
                titulo: "Shape of You",
                imagem: "https://i.scdn.co/image/ab67616d0000b273f5c3d4e5f6a7b8c9d0e1f2a3",
                sinopse: "Um dos maiores sucessos do século XXI, 'Shape of You' é uma perfeita combinação de pop e ritmos latinos. Ed Sheeran criou um hit atemporal que conquistou bilhões de streams e tornou-se um fenômeno global.",
                links: {
                    spotify: "https://open.spotify.com/track/7qiZfU4dY1lsylvNFHwXXa",
                    youtube: "https://www.youtube.com/watch?v=JGwWNGJdvx8",
                    applemusic: "https://music.apple.com/br/album/shape-of-you/1440859783"
                }
            }
        ];

        let musicaSelecionada = null;

        function abrirDetalhes(index) {
            musicaSelecionada = musicas[index];
            document.getElementById('modalImagem').src = musicaSelecionada.imagem;
            document.getElementById('modalArtista').textContent = musicaSelecionada.artista;
            document.getElementById('modalMusica').textContent = musicaSelecionada.titulo;
            document.getElementById('modalSinopse').textContent = musicaSelecionada.sinopse;
            
            document.getElementById('spotifyLink').href = musicaSelecionada.links.spotify;
            document.getElementById('youtubeLink').href = musicaSelecionada.links.youtube;
            document.getElementById('applemusicLink').href = musicaSelecionada.links.applemusic;
            
            document.getElementById('modalComentario').value = '';
            document.getElementById('charCount').textContent = '0';
            document.querySelectorAll('input[name="rating"]').forEach(input => input.checked = false);
            document.getElementById('ratingText').textContent = 'Clique para avaliar';
            
            document.getElementById('modalDetalhes').style.display = 'flex';
        }

        function fecharDetalhes() {
            document.getElementById('modalDetalhes').style.display = 'none';
            musicaSelecionada = null;
        }

        function selecionarEstrela(valor) {
            const textos = {
                1: '😞 Não gostei',
                2: '😐 Poderia ser melhor',
                3: '😊 Bom',
                4: '😍 Muito bom',
                5: '🤩 Excelente!'
            };
            document.getElementById('ratingText').textContent = textos[valor];
        }

        document.getElementById('modalComentario').addEventListener('input', function() {
            document.getElementById('charCount').textContent = this.value.length;
        });

        function enviarAvaliacao() {
            const rating = document.querySelector('input[name="rating"]:checked');
            const comentario = document.getElementById('modalComentario').value;

            if (!rating) {
                alert('Por favor, selecione uma avaliação com estrelas');
                return;
            }

            if (!comentario.trim()) {
                alert('Por favor, compartilhe sua opinião');
                return;
            }

            console.log({
                musica_id: musicaSelecionada.id,
                avaliacao: rating.value,
                comentario: comentario
            });

            alert('Obrigado pela sua avaliação!');
            fecharDetalhes();
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                fecharDetalhes();
            }
        });
    </script>
</body>

</html>