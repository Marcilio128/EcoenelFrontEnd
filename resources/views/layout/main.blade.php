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
        
        <title>@yield('title')</title>

        @vite(['resources/css/app.css',
         'resources/scss/reset.scss', 
         'resources/scss/static.scss',
         'resources/scss/DiaAtual.scss',
         'resources/js/app.js',
         'resources/js/Grafico.js'])
         
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

    <section class="section1">
        <div class="container">
           
            <svg class="BlobPurple" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#D10AAE" class="Change" onclick="changeColor()" d="M38.4,-57C49.5,-52.5,58.2,-41.5,60.2,-29.7C62.2,-17.8,57.5,-5.1,56.8,9C56.1,23.2,59.4,38.8,53.8,48.4C48.2,58,33.7,61.7,20.6,61.6C7.6,61.4,-4.1,57.4,-15.4,53.6C-26.7,49.7,-37.7,46,-47.2,38.8C-56.7,31.6,-64.7,21,-65.7,9.8C-66.8,-1.5,-61,-13.3,-52.4,-20.4C-43.7,-27.5,-32.1,-29.7,-22.9,-35.1C-13.7,-40.4,-6.9,-48.9,3.4,-54.2C13.6,-59.4,27.2,-61.5,38.4,-57Z" transform="translate(100 100)" />
              </svg>           
              <script>
                const Color = document.querySelector(".Change");
function changeColor() {

    
    Color.style.fill = "#0613c7";

}
              </script>
              <svg class="BlobOrange" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#CB5616" d="M29.4,-51.5C36.9,-46.5,40.9,-36.2,50.3,-26.8C59.7,-17.3,74.5,-8.7,71.3,-1.9C68.1,4.9,46.9,9.9,36.9,18.4C26.9,26.9,28.2,38.9,23.9,53C19.6,67,9.8,83.1,2.6,78.5C-4.6,74,-9.2,48.9,-22.4,40C-35.7,31.2,-57.6,38.6,-68.3,34.6C-78.9,30.6,-78.1,15.3,-69.9,4.8C-61.6,-5.8,-45.9,-11.6,-41.3,-25.9C-36.6,-40.2,-43.1,-63,-38.1,-69.4C-33,-75.8,-16.5,-65.7,-2.8,-60.9C10.9,-56.1,21.9,-56.4,29.4,-51.5Z" transform="translate(100 100)" />
            </svg>
            <div class="Residometro">
                <h1>Residometro KG</h1>
                <span class="Counter">4.000.123.456.789.10</span>
            </div>
            
            <svg class="BlobYellow" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#FECC16" d="M17.1,-28.9C22.4,-26.5,27.1,-22.4,40.5,-17.3C53.9,-12.2,75.9,-6.1,73.7,-1.3C71.5,3.5,44.9,7,36.8,21.4C28.8,35.7,39.2,60.8,36.1,65.6C33.1,70.4,16.5,54.8,0.3,54.2C-15.9,53.7,-31.8,68.1,-34.7,63.3C-37.7,58.5,-27.8,34.4,-24.4,20.6C-21,6.9,-24.1,3.4,-32.6,-4.9C-41.1,-13.2,-54.9,-26.5,-58,-39.7C-61.2,-53,-53.5,-66.2,-42,-65C-30.6,-63.8,-15.3,-48.1,-4.7,-40C5.9,-31.8,11.8,-31.2,17.1,-28.9Z" transform="translate(100 100)" />
            </svg>
            
          
        </div>
        </div>
    </section>
    {{----}}
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

    </body>
    <script src="/js/Grafico.js"></script>
    <script src="/js/StaticScript.js"></script>
</html>
