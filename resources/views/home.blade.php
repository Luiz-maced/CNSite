@extends('layouts.stream')
@section('content')

{{-- HERO --}}
<div class="hero">
    <img src="{{ asset('img/capa contos.jpg') }}" alt="Capa do Podcast">
    <div class="hero-info">
       <h1 class="hero-title">{{ $podcast }}</h1>
        <div class="hero-desc">
            Apresentado por Jack e Luiz, o Contos Noturnos mistura terror, suspense e humor na medida certa.
Entre histórias assustadoras, lendas urbanas e relatos enviados pelos ouvintes, surgem comentários descontraídos, teorias malucas e boas risadas.

Aqui, o medo nunca vem sozinho.
E cada episódio é uma experiência leve, divertida e misteriosa — do jeito certo para ouvir de noite, ou até mesmo no caminho para o trabalho.

Contos Noturnos: onde o terror encontra o bom humor e a noite fica mais interessante.
        </div>
    </div>
</div>


{{-- ÚLTIMO EPISÓDIO --}}
<div class="section" id="ultimo">
    <div class="section-title">Último Episódio</div>

    <div class="episode-box">
        <img src="{{ $lastEpisode['images'][0]['url'] ?? $cover }}" alt="Episódio">

        <div class="preview-container">

            <h2>{{ $lastEpisode['name'] }}</h2>
            <p style="opacity:.8">{{ substr($lastEpisode['description'],0,180) }}...</p>

            <a class="ep-play" href="{{ $episode_spotify_url }}" target="_blank">
                ▶ Ouvir no Spotify
            </a>

            @if($episode_preview_url)
                <div class="floating-player">
                    <img src="{{ $lastEpisode['images'][0]['url'] }}" class="floating-cover">

                    <audio id="floating-audio">
                        <source src="{{ $episode_preview_url }}" type="audio/mpeg">
                    </audio>
                </div>
            @endif

        </div> {{-- fim preview-container --}}
    </div> {{-- fim episode-box --}}
</div> {{-- fim section --}}




{{-- APOIA-SE --}}
<div class="section" id="apoie">
    <div class="section-title">Apoie o Projeto</div>

    <a class="ep-play" href="https://apoia.se" target="_blank">
        💛 Apoiar no Apoia.se
    </a>
</div>

{{-- INSTAGRAM --}}
<div class="section" id="insta">
    <div class="section-title">Instagram</div>

    <a class="ep-play" href="https://www.instagram.com/contosnoturnos.cn/#" target="_blank">
         Siga a gente!
    </a>
</div>

{{-- YOUTUBE --}}
<div class="section" id="youtube">
    <div class="section-title">Youtube</div>

    <a class="ep-play" href="https://www.youtube.com/@contosnoturnospodcast" target="_blank">
         Inscreva-se!
    </a>
</div>

{{-- FORMULÁRIO FUMÓDROMO --}}
<div class="section" id="fumodromo">
    <div class="section-title">Envie seu relato</div>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('enviar.relato') }}" method="POST" enctype="multipart/form-data" class="relato-form">
        @csrf

        <label>Seu nome (opcional)</label>
        <input type="text" name="nome" class="input">

        <label>Seu email (opcional)</label>
        <input type="email" name="email" class="input">

        <label>Sua história / relato</label>
        <textarea name="mensagem" required class="textarea"></textarea>

        <label>Anexar arquivo (.txt, .pdf, .docx)</label>
        <input type="file" name="arquivo" class="input-file">

        <button type="submit" class="btn-primary">Enviar relato</button>
    </form>
</div>

@endsection
