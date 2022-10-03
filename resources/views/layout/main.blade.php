<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        


        <link rel="shortcut icon" href="/assets/ecoenel-icon.png" type="image/x-icon">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://unpkg.com/@pqina/flip/dist/flip.min.css" rel="stylesheet">
        <link href="/flip/flip.min.css" rel="stylesheet">
        <title>@yield('title')</title>

        @vite(['resources/css/app.css',
         'resources/scss/reset.scss', 
         'resources/scss/static.scss',
         'resources/scss/DiaAtual.scss',
         'resources/js/app.js',
         'resources/css/app.js',
         'resources/js/Grafico.js',
        'resources/js/animate.js',
        'resources/scss/flipnumber.scss',
        'resources/scss/menu.scss',
        'node_modules/jquery/dist/jquery.js',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'])

         
    </head>
    <body>
        
    {{--Menu--}}
        <section class="MenuNavbar">
            <div id="MenuMobile" class="MenuContainer">
                <div class="logos">
                    <img src="/assets/Ecoenel-Logo.png" class="EcoenelLogo" alt="" srcset="">
                    <label>
                        <input type="checkbox">
                        <span id="Btn-Mobile" class="menu"> <span class="hamburger"></span> </span>
                        <ul>
                          <li><a class="BotãoLinksMenu" href="/">Residômetro</a></li>
                          <li><a class="BotãoLinksMenu" href="/Grafico">Dados Dos Resumos</a></li>
                          <li><a class="BotãoLinksMenu" href="/Coletores">Grandes Coletores</a></li>
                        </ul>
                        </label>
                        <img src="/assets/logo (1).png" class="Logo3e" alt="" srcset="">

                </div>   
            </div>
        </section>
        <ul class="DontShow">
            <li><a class="BotãoLinks" href="/">Residômetro</a></li>
            <li><a class="BotãoLinks" href="/Grafico">Dados Dos Resumos</a></li>
            <li><a class="BotãoLinks" href="/Coletores">Grandes Coletores</a></li>
          </ul>
    {{--Fim Menu--}}

        @yield('content')


    </body>
    <script src="/js/Grafico.js"></script>
    <script src="/js/StaticScript.js"></script>
    <script src="/js/animate.js"></script>
    <script src="/flip/flip.min.js"></script>
    
    <script src="https://unpkg.com/@pqina/flip/dist/flip.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>


</html>
