<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <title>Ecoenel</title>

    @vite([
         'resources/scss/reset.scss',
         'resources/scss/EstadoEquatorial.scss'])
         
        </head>
<body class="EcoEstado">
    <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
    <section class="Estado ">
        <div class="Estado-container">
            <img src="./assets/Equatorial.png" class="EquatorialLogo" alt="" srcset="">
            <h1>Escolha seu estado</h1>

            <a class="btn" href="/ResíduosColetados">Ceará</a>
            <a class="btn" href="/ResíduosColetados">São Paulo</a>
            <a class="btn" href="/ResíduosColetados">Rio De Janeiro</a>
            <a class="btn" href="/ResíduosColetados">Goiás </a>


        </div>
    </div>
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div> 
    </section>
</body>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

</script>
</html>