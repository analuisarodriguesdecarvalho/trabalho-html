<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundScore - Rock</title>
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
            <h2>Explore as melhores faixas de Rock</h2>

            <div class="musicas-grid">
                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b2731234567890abcdef0123456" alt="Nirvana - Smells Like Teen Spirit">
                        <button class="menu-btn" onclick="abrirDetalhes(0)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Nirvana</h3>
                        <p>Smells Like Teen Spirit</p>
                    </div>
                </div>

                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b273abcdef0123456789abcdef01" alt="Metallica - Master Of Puppets">
                        <button class="menu-btn" onclick="abrirDetalhes(1)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Metallica</h3>
                        <p>Master Of Puppets</p>
                    </div>
                </div>

                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b273cdef0123456789abcdef012" alt="Deftones - Cherry Waves">
                        <button class="menu-btn" onclick="abrirDetalhes(2)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Deftones</h3>
                        <p>Cherry Waves</p>
                    </div>
                </div>

                <div class="musica-card">
                    <div class="musica-card-image">
                        <img src="https://i.scdn.co/image/ab67616d0000b273def0123456789abcdef0123" alt="Korn - Freak On a Leash">
                        <button class="menu-btn" onclick="abrirDetalhes(3)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="musica-info">
                        <h3>Korn</h3>
                        <p>Freak On a Leash</p>
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
                artista: "Nirvana",
                titulo: "Smells Like Teen Spirit",
                imagem: "https://i.scdn.co/image/ab67616d0000b2731234567890abcdef0123456",
                sinopse: "O hino da geração 90, 'Smells Like Teen Spirit' definiu uma era e revolucionou o rock. Kurt Cobain criou uma obra-prima que transcende gerações, com sua angústia pura e melodia inesquecível.",
                links: {
                    spotify: "https://open.spotify.com/track/3n3Ppam7vgaVa1iaRUc9Lp",
                    youtube: "https://www.youtube.com/watch?v=hTWKbfoikeg",
                    applemusic: "https://music.apple.com/br/album/smells-like-teen-spirit/160081007"
                }
            },
            {
                id: 2,
                artista: "Metallica",
                titulo: "Master Of Puppets",
                imagem: "https://i.scdn.co/image/ab67616d0000b273abcdef0123456789abcdef01",
                sinopse: "A obra-prima do metal thrash, 'Master of Puppets' é uma composição épica que define a excelência técnica. Metallica criou um clássico atemporal que inspirou gerações de metaleiros.",
                links: {
                    spotify: "https://open.spotify.com/track/1ROFBwVNP6LqXBkxSL2fQx",
                    youtube: "https://www.youtube.com/watch?v=V1Zv7DuV4Jw",
                    applemusic: "https://music.apple.com/br/album/master-of-puppets/160081307"
                }
            },
            {
                id: 3,
                artista: "Deftones",
                titulo: "Cherry Waves",
                imagem: "https://i.scdn.co/image/ab67616d0000b273cdef0123456789abcdef012",
                sinopse: "Uma mergulho atmosférico do rock alternativo, 'Cherry Waves' dos Deftones é uma canção que combina agressividade e lirismo. Uma joia sonora que prova a evolução da banda.",
                links: {
                    spotify: "https://open.spotify.com/track/0FBKqhY0qjDXTUAmQdR2uo",
                    youtube: "https://www.youtube.com/watch?v=ihV3F7YCVWM",
                    applemusic: "https://music.apple.com/br/album/cherry-waves/1735851389"
                }
            },
            {
                id: 4,
                artista: "Korn",
                titulo: "Freak On a Leash",
                imagem: "https://i.scdn.co/image/ab67616d0000b273def0123456789abcdef0123",
                sinopse: "Um dos maiores sucessos do nu-metal, 'Freak On a Leash' é uma crítica social envolvida em energia bruta. Korn criou um hino que permanece relevante e poderoso até hoje.",
                links: {
                    spotify: "https://open.spotify.com/track/4q1bfjqmJRYsVTvp82F8Cy",
                    youtube: "https://www.youtube.com/watch?v=jRqRzTmBjYY",
                    applemusic: "https://music.apple.com/br/album/freak-on-a-leash/1735851490"
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