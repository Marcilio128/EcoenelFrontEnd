<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        <title>@yield('title')</title>

        @vite(['resources/css/app.css', 'resources/scss/reset.scss', 'resources/scss/static.scss', 'resources/js/app.js'])
    </head>
    <body>
    {{--Menu--}}
        <section class="NavBar">
            <div class="container">
                <div class="logos">
                    <img src="/assets/Ecoenel-Logo.png" class="EcoenelLogo" alt="" srcset="">
                    <img src="/assets/Logo3e.png" class="Logo3e" alt="" srcset="">
                </div>
                <nav id="nav">
                <button id="Btn-Mobile" class="MobileBtn">
                    <span id="Hamburger"></span>
                </button>
                <div class="buttons">
                    <a class="btn">Dia Atual</a>
                    <a class="btn">Mês Atual</a>
                    <a class="btn">Mês Anterior</a>
                    <a class="btn">Ano Corrente</a>
                </div> 
            </nav>    
            </div>
        </section>
    {{--Menu--}}

        <main>@yield('content')</main>
    </body>
    <script src="/js/StaticScript.js"></script>
</html>
