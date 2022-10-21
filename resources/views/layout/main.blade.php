<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="120">
 
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 
        <link rel="stylesheet" type="text/css" href="css/layout/main-style.css">
        <link rel="stylesheet" href="css/layout/boot/boot-style.css">
 
        <link rel="shortcut icon" href="/assets/ecoenel-icon.png" type="image/x-icon">
 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://unpkg.com/@pqina/flip/dist/flip.min.css" rel="stylesheet">
        <link href="/flip/flip.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <title>@yield('title')</title>
 
    
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 <link rel="stylesheet" href="./public/reset.css">
 <link rel="stylesheet" href="./css/reset.css">
 <link rel="stylesheet" href="./css/static.css">
 <link rel="stylesheet" href="./css/DiaAtual.css">
 <link rel="stylesheet" href="./css/app.css">
 <link rel="stylesheet" href="./css/flipnumber.css">
 <link rel="stylesheet" href="./css/menu.css">
 <link rel="stylesheet" href="./css/waves.css">

    </head>
    <body>
 
    {{--Menu--}}
    <section class="MenuNavbar">
        <header id="MenuMobile" class="MenuContainer">
            <nav>
              <ul class="navbar-nav logout">
                <li class='decima'>
                  <span class="logout"><a href={{ route('logout') }} class="logout" href="/logout"><img src="./assets/logout.png" class="sair" alt="" srcset="" /></a>
                  </span>
              </li>
              <li>
                      <span
                         id="nameuser" class="logout">{{ empty(auth()->user()->name) ? '' : auth()->user()->name }}</span>
                 
            </ul>
 
 
                <img src="./assets/EcoenelLogo.png" class="Eco3eLogo" alt="" srcset="">
                {{--<img src="./assets/Equatorial.png" class="Equatorial" alt="" srcset="">--}}
 
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                   
                  </div>
                <ul class="nav-list">
                    <li><a class="btnMenu" href="ResíduosColetados">Resíduos Coletados</a></li>
                    <li><a class="btnMenu" href="Grafico">Grafico</a></li>
                    <li><a class="btnMenu" href="TabelasColetores">Tabelas</a></li>
                    <li><a class="btnMenu" href="EcoEnelEstado">Estados</a></li>
                </ul>
 
            </nav>
 
        </header>
 
    </section>
    {{--Fim Menu--}}
 
        @yield('content')
 
 
    </body>
  
    <script>
        AOS.init();
const swiper = new Swiper('.swiper', {
  // Optional parameters
 
 
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
 
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
 
  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});



    </script>
<script src="https://use.fontawesome.com/c296b8836a.js"></script>
 
<script type="text/javascript" src="js/layout/main-script.js"></script>
<script src="js/layout/boot/boot-script.js"></script>

<script src="https://unpkg.com/@pqina/flip/dist/flip.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="./js/JQuery.js"></script>
<script src="./js/DataScript.js"></script>
<script src="./js/app.js"></script>
<script src="./js/Grafico.js"></script>
<script src="./js/animate.js"></script>
<script src="./js/menu.js"></script>


<script src="./public/css/app.js"></script>
<script src="./node_modules/jquery/dist/jquery.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>



</html>
