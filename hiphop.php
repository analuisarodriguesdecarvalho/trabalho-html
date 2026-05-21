<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundScore - Hip Hop</title>
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
            <h2>Explore as melhores faixas de Hip Hop</h2>

            <div class="musicas-grid">
                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b27390b0e25c96d0ab2eee3b4c2e" alt="50 Cent - In da Club">
                        <button class="menu-btn" onclick="abrirDetalhes(0)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>50 Cent</h3>
                        <p>In da Club</p>
                    </div>
                </div>

                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b27340b0b82d1c6a8bb8e3d4c8e9" alt="Racionais MC's - Vida Loka">
                        <button class="menu-btn" onclick="abrirDetalhes(1)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Racionais MC's</h3>
                        <p>Vida Loka Pt. 1</p>
                    </div>
                </div>

                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b273e5a7b9e3e3d4c8f0e1e2c3d4" alt="Emicida - Levanta e Anda">
                        <button class="menu-btn" onclick="abrirDetalhes(2)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Emicida</h3>
                        <p>Levanta e Anda</p>
                    </div>
                </div>

                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b273f5c3d4e5f6a7b8c9d0e1f2a3" alt="Criolo - Não Existe Amor em SP">
                        <button class="menu-btn" onclick="abrirDetalhes(3)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Criolo</h3>
                        <p>Não Existe Amor em SP</p>
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
                artista: "50 Cent",
                titulo: "In da Club",
                imagem: "https://i.scdn.co/image/ab67616d0000b27390b0e25c96d0ab2eee3b4c2e",
                sinopse: "Uma das músicas mais icônicas do hip-hop, 'In da Club' é um hino de festa lançado em 2003 que dominou as paradas mundiais. Com sua batida contagiante e letra memorável, a música se tornou sinônimo de celebração e sucesso no gênero.",
                links: {
                    spotify: "https://open.spotify.com/track/1301WleyT98MSxVHPZCA6M",
                    youtube: "https://www.youtube.com/watch?v=kffacxfcrKs",
                    applemusic: "https://music.apple.com/br/album/in-da-club/159854063"
                }
            },
            {
                id: 2,
                artista: "Racionais MC's",
                titulo: "Vida Loka Pt. 1",
                imagem: "https://i.scdn.co/image/ab67616d0000b27340b0b82d1c6a8bb8e3d4c8e9",
                sinopse: "Uma obra-prima do hip-hop brasileiro que reflete a realidade das periferias com profundidade e autenticidade. Racionais MC's traz uma narrativa poderosa sobre a vida nas ruas e a luta por justiça social.",
                links: {
                    spotify: "https://open.spotify.com/track/4zIJxzmz0X9uyKVbCCKXj6",
                    youtube: "https://www.youtube.com/watch?v=9w-g1LBhiuU",
                    applemusic: "https://music.apple.com/br/album/vida-loka-pt-1/550822876"
                }
            },
            {
                id: 3,
                artista: "Emicida",
                titulo: "Levanta e Anda",
                imagem: "https://i.scdn.co/image/ab67616d0000b273e5a7b9e3e3d4c8f0e1e2c3d4",
                sinopse: "Uma mensagem de esperança e resistência, 'Levanta e Anda' é um hino inspirador que encoraja a superação de desafios. Emicida combina poesia com ativismo social nesta faixa memorável.",
                links: {
                    spotify: "https://open.spotify.com/track/7q3kkfAVpmPHVVMB4T1ocX",
                    youtube: "https://www.youtube.com/watch?v=aGUjI8XYoVQ",
                    applemusic: "https://music.apple.com/br/album/levanta-e-anda/1440854395"
                }
            },
            {
                id: 4,
                artista: "Criolo",
                titulo: "Não Existe Amor em SP",
                imagem: "https://i.scdn.co/image/ab67616d0000b273f5c3d4e5f6a7b8c9d0e1f2a3",
                sinopse: "Uma crítica lírica sobre as desigualdades sociais e a dureza da vida na metrópole. Criolo traz uma perspectiva única ao hip-hop brasileiro, misturando elementos musicais diversos com mensagens profundas.",
                links: {
                    spotify: "https://open.spotify.com/track/1pFKP9XTmL0vJ3w8b4zI6D",
                    youtube: "https://www.youtube.com/watch?v=qOZSpqQHy8c",
                    applemusic: "https://music.apple.com/br/album/n%C3%A3o-existe-amor-em-sp/1234567890"
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
            
            // Atualizar links de streaming
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

            // Aqui você pode enviar os dados para o servidor
            console.log({
                musica_id: musicaSelecionada.id,
                avaliacao: rating.value,
                comentario: comentario
            });

            alert('Obrigado pela sua avaliação!');
            fecharDetalhes();
        }

        // Fechar modal ao clicar em ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                fecharDetalhes();
            }
        });
    </script>
</body>

</html>