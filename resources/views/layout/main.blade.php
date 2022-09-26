<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <img src="/assets/logo (1).png" class="Logo3e" alt="" srcset="">
                </div>
                <nav id="nav">
                <button id="Btn-Mobile" class="MobileBtn">
                    <span id="Hamburger"></span>
                </button>
            </nav>    
            </div>
        </section>
    {{--Menu--}}

        
        
        <script>
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
        


<section class="section1">
        <div class="container">
           
            <svg class="Blob1" id="Size" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#D10AAE" class="Change" onclick="changeColor()" d="M38.4,-57C49.5,-52.5,58.2,-41.5,60.2,-29.7C62.2,-17.8,57.5,-5.1,56.8,9C56.1,23.2,59.4,38.8,53.8,48.4C48.2,58,33.7,61.7,20.6,61.6C7.6,61.4,-4.1,57.4,-15.4,53.6C-26.7,49.7,-37.7,46,-47.2,38.8C-56.7,31.6,-64.7,21,-65.7,9.8C-66.8,-1.5,-61,-13.3,-52.4,-20.4C-43.7,-27.5,-32.1,-29.7,-22.9,-35.1C-13.7,-40.4,-6.9,-48.9,3.4,-54.2C13.6,-59.4,27.2,-61.5,38.4,-57Z" transform="translate(100 100)" />
              </svg>           

              <svg class="Blob2" id="Size" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#EA0000" d="M37,-55.7C46,-44.3,50,-31,58.2,-16.4C66.4,-1.8,78.8,13.9,74.1,22.8C69.5,31.7,47.8,33.8,32.6,41.8C17.4,49.7,8.7,63.6,-2.3,66.8C-13.3,69.9,-26.6,62.5,-42.2,54.6C-57.8,46.8,-75.6,38.6,-76.1,27.1C-76.6,15.6,-59.9,0.8,-54,-17.7C-48.2,-36.1,-53.3,-58.2,-46.1,-70.2C-38.9,-82.2,-19.5,-84.1,-2.7,-80.3C14,-76.6,28,-67.1,37,-55.7Z" transform="translate(100 100)" />
              </svg>


              <svg class="Blob3" id="Size" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#06FF00" d="M36.9,-47.7C49.5,-41.7,62.4,-33.1,64.5,-22C66.7,-10.9,58.1,2.6,53.2,17.2C48.4,31.9,47.2,47.7,39,53C30.7,58.4,15.4,53.3,1.4,51.4C-12.6,49.5,-25.2,50.8,-34.9,45.9C-44.7,41,-51.6,30,-61,16.2C-70.5,2.4,-82.5,-14.2,-78,-24.5C-73.5,-34.9,-52.5,-39.1,-36.8,-44.1C-21,-49,-10.5,-54.7,0.8,-55.9C12.2,-57.1,24.4,-53.7,36.9,-47.7Z" transform="translate(100 100)" />
              </svg>

           {{--   <svg class="BlobOrange" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#CB5616" d="M29.4,-51.5C36.9,-46.5,40.9,-36.2,50.3,-26.8C59.7,-17.3,74.5,-8.7,71.3,-1.9C68.1,4.9,46.9,9.9,36.9,18.4C26.9,26.9,28.2,38.9,23.9,53C19.6,67,9.8,83.1,2.6,78.5C-4.6,74,-9.2,48.9,-22.4,40C-35.7,31.2,-57.6,38.6,-68.3,34.6C-78.9,30.6,-78.1,15.3,-69.9,4.8C-61.6,-5.8,-45.9,-11.6,-41.3,-25.9C-36.6,-40.2,-43.1,-63,-38.1,-69.4C-33,-75.8,-16.5,-65.7,-2.8,-60.9C10.9,-56.1,21.9,-56.4,29.4,-51.5Z" transform="translate(100 100)" />
            </svg>--}}

            <svg class="Blob4" id="Size" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#0022E1" d="M25.7,-28.6C41.5,-24,67.9,-27.3,73.2,-21.4C78.6,-15.4,62.7,-0.1,55.4,16.6C48.1,33.4,49.3,51.5,41.5,59.1C33.7,66.7,16.9,63.8,1.1,62.2C-14.6,60.7,-29.2,60.5,-39.1,53.5C-49,46.6,-54.2,33,-62.5,17.8C-70.8,2.7,-82.2,-13.9,-77.6,-24.3C-73,-34.8,-52.2,-39.1,-36.6,-43.7C-21,-48.4,-10.5,-53.3,-2.8,-49.5C5,-45.7,10,-33.2,25.7,-28.6Z" transform="translate(100 100)" />
              </svg>
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
            <svg class="Blob5" id="Size" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#FFCC00" d="M32.1,-50.9C42.9,-43.1,53.6,-36.2,61.4,-26C69.3,-15.8,74.3,-2.2,73.6,11.4C72.9,25,66.5,38.5,56.2,46.4C45.8,54.2,31.5,56.4,19.1,55.8C6.7,55.3,-3.8,52,-19.2,53.1C-34.5,54.1,-54.6,59.5,-60.5,52.5C-66.4,45.6,-58,26.4,-54.4,11.5C-50.8,-3.4,-52.1,-13.9,-50.7,-25.8C-49.4,-37.8,-45.5,-51.2,-36.6,-59.8C-27.7,-68.4,-13.9,-72.1,-1.6,-69.7C10.7,-67.2,21.4,-58.6,32.1,-50.9Z" transform="translate(100 100)" />
              </svg>
             {{--  <svg class="BlobYellow" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#FECC16" d="M17.1,-28.9C22.4,-26.5,27.1,-22.4,40.5,-17.3C53.9,-12.2,75.9,-6.1,73.7,-1.3C71.5,3.5,44.9,7,36.8,21.4C28.8,35.7,39.2,60.8,36.1,65.6C33.1,70.4,16.5,54.8,0.3,54.2C-15.9,53.7,-31.8,68.1,-34.7,63.3C-37.7,58.5,-27.8,34.4,-24.4,20.6C-21,6.9,-24.1,3.4,-32.6,-4.9C-41.1,-13.2,-54.9,-26.5,-58,-39.7C-61.2,-53,-53.5,-66.2,-42,-65C-30.6,-63.8,-15.3,-48.1,-4.7,-40C5.9,-31.8,11.8,-31.2,17.1,-28.9Z" transform="translate(100 100)" />
            </svg>--}}
            <svg class="Blob6" id="Size" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#E12A89" d="M45.1,-52.6C53.7,-36.5,52.7,-18.3,54.2,1.5C55.7,21.2,59.6,42.3,51,51.2C42.3,60.2,21.2,56.8,1,55.8C-19.1,54.8,-38.2,56.1,-54.5,47.2C-70.8,38.2,-84.2,19.1,-82.6,1.6C-81,-15.9,-64.3,-31.8,-48,-47.8C-31.8,-63.9,-15.9,-80.2,1.2,-81.4C18.3,-82.5,36.5,-68.6,45.1,-52.6Z" transform="translate(100 100)" />
              </svg>
          
              <svg class="Blob7" id="Size" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#cb5616" d="M44.8,-59.8C60.5,-50.2,77.4,-40.4,81.3,-26.8C85.1,-13.2,76,4.3,69.3,21.7C62.5,39.1,58.1,56.5,46.9,63.9C35.8,71.4,17.9,69,-0.5,69.7C-18.9,70.4,-37.8,74.2,-49.8,67C-61.8,59.8,-67,41.6,-66.5,25.7C-66,9.8,-59.8,-3.8,-54.6,-17C-49.3,-30.3,-45,-43.1,-36,-54.9C-27.1,-66.7,-13.6,-77.5,0.5,-78.2C14.5,-78.9,29.1,-69.5,44.8,-59.8Z" transform="translate(100 100)" />
              </svg>
              <svg  class="Blob8" id="Size" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#EA0000" d="M31.3,-40.9C46.6,-32,69.2,-30.9,80.9,-20.3C92.6,-9.7,93.3,10.4,84,23.6C74.7,36.8,55.3,43.1,39.6,45.1C23.9,47.1,12,44.9,-3.7,50C-19.4,55.2,-38.8,67.7,-50.8,64.5C-62.7,61.2,-67.2,42.3,-73.1,23.8C-78.9,5.4,-86.2,-12.5,-82.1,-27.1C-77.9,-41.7,-62.3,-53,-46.7,-61.8C-31.1,-70.6,-15.6,-77,-3.8,-71.8C8,-66.6,16,-49.8,31.3,-40.9Z" transform="translate(100 100)" />
              </svg>
              <svg class="Blob9" id="Size" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#06ff00" d="M44.6,-57.2C57.5,-52.1,67.4,-38.6,65.6,-25.7C63.8,-12.7,50.4,-0.3,43.5,12C36.6,24.4,36.1,36.7,29.9,44.8C23.8,52.9,11.9,56.7,-0.5,57.4C-12.9,58.1,-25.8,55.7,-41.3,50.7C-56.8,45.6,-74.8,37.9,-80.1,25.2C-85.3,12.5,-77.8,-5.2,-70.1,-20.9C-62.4,-36.6,-54.5,-50.3,-42.7,-55.8C-31,-61.2,-15.5,-58.4,0.2,-58.6C15.9,-58.9,31.8,-62.3,44.6,-57.2Z" transform="translate(100 100)" />
            </svg>

            <svg class="Blob10" id="Size" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#0022E1" d="M19.3,-38.2C26.7,-25.2,35.6,-22.8,45.6,-16.3C55.7,-9.8,66.8,0.7,66,9.9C65.3,19.1,52.7,26.9,43.8,38.8C34.8,50.6,29.5,66.5,21.2,66.3C12.8,66.1,1.5,49.8,-6,39.1C-13.4,28.3,-17,23.1,-30,19.6C-42.9,16.1,-65.3,14.3,-71,7.2C-76.8,0,-66,-12.6,-54.4,-19.3C-42.7,-26.1,-30.3,-26.9,-21.1,-39.1C-11.9,-51.2,-5.9,-74.7,0,-74.7C5.9,-74.7,11.8,-51.2,19.3,-38.2Z" transform="translate(100 100)" />
              </svg>
        </div>
        </div>
    </section>
    {{--

    <section class="Resumo">
        <img class="wave" src="/assets/wave-haikei.svg" alt="" srcset="">
        <div class="container">
            <div class="content">
                @yield('Dados')
               
                </div>
            </div>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>
            
            <div id="container"></div>
        </div>
    
    
    </section>

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
</html>
