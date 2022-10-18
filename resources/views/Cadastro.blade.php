<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/gotham-rounded" rel="stylesheet">


    <title>Cadastro</title>

    @vite([
         'resources/scss/reset.scss',
         'resources/scss/Cadastro.scss'])

        </head>
<body>
    <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
    <section class="Login">
        <div class="container">
            <img src="./assets/Eco3e.svg" class="Eco3e" alt="" srcset="">
            <h1>Seja Bem-vindo</h1>
        <form action="/login" method="POST">
            @csrf
            <div class="input-container">
                <input autocomplete="off" type="email" id="email" name="email" required="" />
                <label>Digite seu e-mail</label>
            </div>
            <div class="input-container">
                <input autocomplete="off" type="password" id="password" name="password" required="" />
                <label>Digite sua senha</label>
            </div>
            <input value="Acessar" type="submit" class="btn" id="btnSubmit">
        </form>

    </section>
    </div>
    </body>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

</script>
</html>
