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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://unpkg.com/@pqina/flip/dist/flip.min.css" rel="stylesheet">
        <link href="/flip/flip.min.css" rel="stylesheet">
        <title>@yield('title')</title>

        @vite(['resources/css/app.css',
         'resources/scss/reset.scss', 
         'resources/scss/static.scss',
         'resources/scss/DiaAtual.scss',
         'resources/js/app.js',
         'resources/js/Grafico.js',
        'resources/js/animate.js',
        'resources/scss/flipnumber.scss'])
         
    </head>
    <body>
    {{--Menu--}}
        <section class="NavBar">
            <div class="container">
                <div class="logos">
                    <img src="/assets/Ecoenel-Logo.png" class="EcoenelLogo" alt="" srcset="">
                    <div class="container">

                        <input id="toggle" type="checkbox">
                
                        <label class="toggle-container" for="toggle">
                         
                          <span class="button button-toggle"></span>
                        </label>
                    
                        <!-- The Nav Menu -->
                        <nav class="nav">
                          <a class="nav-item" href="/">Residômetro</a>
                          <a class="nav-item" href="/Grafico">Dados Dos Resumos</a>
                          <a class="nav-item" href="">Grandes Coletores</a>
                        </nav>
                    
                       
                    <img src="/assets/logo (1).png" class="Logo3e" alt="" srcset="">
                </div>   
            </div>
        </section>
    {{--Menu--}}
        


        <div data-aos="fade-up"
        data-aos-duration="3000">
   </div>
   <div data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1500">
<section class="section1">
        <div class="container">
            <div class="Residometro">
                <h1>Residometro KG</h1>
                <div class="tick" data-did-init="handleTickInit">
        
                    <span data-layout="horizontal fit">
                
                        <span data-repeat="true" data-transform="arrive(5, .01) -> round -> split -> delay(rtl, 100, 150)">
                
                            <span data-view="flip"></span>
                
                        </span>
                
                    </span>
                
                </div>
            </div>
            </div>
        </div>
    </section>
</div>

    {{--

    

    <section class="sec-tabela">        
        <div class="container">
                <div class="start">
                    <h1>Ranking Dos Postos Que Mais Coletam</h1>
                </div>
                <div class="container">
                    <table border='1' cellspacing="0" role="grid">
                        <thead>
                            <tr>
                                <th>Postos De Coleta</th>
                                <th>Quilos</th>
                                <th>Unidades</th>
                                <th>Litros</th>
                                <th>Bônus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @yield('Table')
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="vertical"></div>
        </section>
            @yield('content')
--}}


    </body>
    <script src="/js/Grafico.js"></script>
    <script src="/js/StaticScript.js"></script>
    <script src="/js/animate.js"></script>
    <script src="/flip/flip.min.js"></script>
    <script src="https://unpkg.com/@pqina/flip/dist/flip.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();


        function handleTickInit(tick) {
        
        // update the value every 5 seconds
        var interval = Tick.helper.duration(5, 'seconds');

        // value to add each interval
        var valuePerInterval = 5;

        // offset is a fixed date in the past
        var dateOffset = Tick.helper.date('2019-01-01');

        // value to start with, the value of the counter at the offset date
        var valueOffset = 0;

        // uncomment lines below (and comment line above) if you want offset be set to the first time the user visited the page
        // var offset = parseInt(localStorage.getItem('tick-value-counter-offset') || Date.now(), 10);
        // localStorage.setItem('tick-value-counter-offset', offset);

        // start updating the counter each second
        Tick.helper.interval(function () {

            // current time in milliseconds
            var now = Date.now();

            // difference with offset time in milliseconds
            var diff = now - dateOffset;

            // total time since offset divide by interval gives us the amount of loops since offset
            var loops = diff / interval;

            // this will make sure we only count completed loops.
            loops = Math.floor(loops);

            // multiply that by the value per interval and you have your final value
            tick.value = valueOffset + (loops * valuePerInterval);

        }, 1000);
    }
    </script>


</html>
