<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contos Noturnos</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* =========================================================
           BASE DO SITE
        ========================================================== */
        body {
            margin: 0;
           
            background: #0b0b0b;
            color: #fff;
            font-family: 'Creepster', cursive !important;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* =========================================================
           SIDEBAR
        ========================================================== */
        .sidebar {
            width: 260px;
            padding: 30px 20px;
            border-right: 1px solid #222;
            position: fixed;
            height: 100vh;
            display: flex;
            flex-direction: column;

             background: linear-gradient(135deg, #2a1e11, #070707);
             backdrop-filter: blur(4px);
        }

        .sidebar-logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .sidebar-logo img {
            width: 200px;
        }

        .sidebar a {
            color: #bbb;
            text-decoration: none;
            padding: 12px 14px;
            display: block;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: 0.2s;
            font-size: 15px;
            font-weight: 500;
        }

        .sidebar a:hover {
            background: #1f1f1f;
            color: #fff;
        }

        /* =========================================================
           MAIN CONTENT
        ========================================================== */
        .main {
            margin-left: 260px;
            padding: 40px;
            width: calc(100% - 260px);
        }

        .section {
            margin-bottom: 70px;
        }

        .section-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* =========================================================
           HERO
        ========================================================== */
    .hero {
    
    background: url('/img/bground.png');
    background-size: cover;
    background-color: rgba(0,0,0,0.65); /* escureça aqui */
    background-blend-mode: darken;  
    margin: 0;
    display: flex;
    align-items: flex-start;       /* imagem e texto começam no topo */
    gap: 50px;
    padding: 35px 45px;
    border-radius: 16px;
    
    margin-bottom: 10px;
}

    .hero img {
    width: 340px;         /* imagem maior */
    height: auto;
    border-radius: 14px;
    object-fit: cover;
    box-shadow: 0px 10px 30px rgba(0,0,0,0.6);
}

    .hero-info {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;  /* alinha TÍTULO ao topo */
    margin-top: 10px;             /* opcional, ajusta posição */
}
    .hero-title {
    font-family: 'Creepster', cursive !important;
    font-size: 58px;
    font-weight: 400;
    color: #fff;
    line-height: 1.1;
}


        .hero-desc {
            font-size: 18px;
            opacity: .8;
        }

.btn-fumodromo {
    display: inline-block;
    margin-top: 15px;
    background: #8b00ff;
    padding: 12px 22px;
    border-radius: 8px;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    transition: .2s ease;
}

.btn-fumodromo:hover {
    background: #b966ff;
}

.btn-fumodromo {
    display: inline-block;
    margin-top: 15px;
    background: #8b00ff;
    padding: 12px 22px;
    border-radius: 8px;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    transition: .2s ease;
}

.btn-fumodromo:hover {
    background: #b966ff;
}

        /* =========================================================
           EPISÓDIO RECENTE
        ========================================================== */
        .episode-box {
            display: flex;
            background: rgba(0,0,0,0.65);
             backdrop-filter: blur(4px);
            border-radius: 14px;
            gap: 25px;
        }

        .episode-box img {
            width: 140px;
            border-radius: 10px;
        }

        .ep-play {
            margin-top: 12px;
            background: #1DB954;
            padding: 10px 18px;
            border-radius: 8px;
            display: inline-block;
            color: #000;
            font-weight: 600;
            text-decoration: none;
        }

        .preview-container {
    position: relative;
    display: inline-block;
}

.floating-player {
    position: absolute;
    top: -150px;
    left: 0;
    width: 200px;
    padding: 10px;
    background: #111;
    border-radius: 10px;
    opacity: 0;
    pointer-events: none;
    transition: .3s;
}

.preview-container:hover .floating-player {
    opacity: 1;
    pointer-events: all;
}

.floating-cover {
    width: 100%;
    border-radius: 10px;
}


        /* =========================================================
           FORMULÁRIO FUMÓDROMO
        ========================================================== */
        #fumodromo .relato-form {
            font-family: 'Creepster', cursive !important;
            display: flex;
            flex-direction: column;
            gap: 22px;
            max-width: 680px;
            background: rgba(0,0,0,0.65);
             backdrop-filter: blur(4px);
            padding: 40px;
            border-radius: 14px;
            border: 1px solid #1d1d1d;
            box-shadow: 0 0 40px rgba(255,255,255,0.05);
        }

        #fumodromo label {
            font-size: 15px;
            opacity: .85;
        }

        #fumodromo input,
        #fumodromo textarea,
        #fumodromo .input-file {
            background: #111;
            color: #fff;
            border: 1px solid #333;
            padding: 14px 16px;
            border-radius: 8px;
            transition: .25s;
        }

        #fumodromo input:focus,
        #fumodromo textarea:focus {
            border-color: gold;
            box-shadow: 0 0 8px rgba(255,215,0,0.25);
        }

        #fumodromo .btn-primary {
            background: gold;
            padding: 12px 28px;
            color: #000;
            border-radius: 8px;
            font-weight: 700;
            border: none;
            cursor: pointer;
        }

    </style>

</head>

<body>
</script>


<div class="layout">

    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="/img/logo.png" alt="Contos Noturnos">
        </div>

        <a href="/">Início</a>
        <a href="#ultimo">Último Episódio</a>
        <a href="#apoie">Apoie o Projeto</a>
        <a href="#fumodromo">Fumodromo do terror</a>
        <a href="#insta">Instagram</a>
        <a href="#youtube">Youtube</a>
        <a href="https://open.spotify.com" target="_blank">🎧 Spotify</a>
    </div>

    <div class="main">
        @yield('content')
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const container = document.querySelector('.preview-container');
    const audio = document.getElementById('floating-audio');

    if(container && audio){
        container.addEventListener('mouseenter', () => {
            audio.currentTime = 0;
            audio.play();
        });

        container.addEventListener('mouseleave', () => {
            audio.pause();
            audio.currentTime = 0;
        });
    }
});
</script>


</body>
</html>
