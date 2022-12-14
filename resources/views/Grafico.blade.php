@extends('layout.main')

@section('title', 'Ecoenel')

@section('content')





<style>
    .swiper {
    cursor: grab;
    width: 100%;
    height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
    }

  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">

        <section class="Resumo">

        <div class="ResumoContainer">
            <div id="containerGrafico"></div>

            <script src="js/layout/highchart/charts-script.js"></script>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <div data-aos="fade-up-right" data-aos-duration="2000">

            <div class="content">
                <div class="bloco">
                    <h1>Dia Atual</h1>

                    <div class="dados">
                        <h2>Beneficiados:</h2>
                        <p class="beneficiados"> 00 Clientes</p>
                    </div>

                    <div class="linhaHorizontal"></div>

                    <div class="dados">
                    <h2>Bônus: </h2>
                    <p class="bonus"> R$ 0,00</p>
                    </div>

                        <div class="linhaHorizontal"></div>

                    <div class="dados">
                    <h2>Coletados: </h2>
                    <p class="coletados"> 0,00 kg</p>
                    </div>

                        <div class="linhaHorizontal"></div>

                        <div class="dados">

                    <h2>Economizados: </h2>
                    <p class="economizados"> 00.0 KWH</p>
                    </div>


                    <script>
                        $(document).ready(()=>{
$.ajax({
method: 'GET',
url: 'http://localhost:8000/api/resumo/dia'
})
    .then(function(response){

            const dado = response[0][0]
                $('.beneficiados').html(dado['clientes'] + " Clientes")
                $('.bonus').html("R$ "+ dado['bonus'].toFixed(2))
                $('.coletados').html(dado['kg'].toFixed(2) + " Kg")
                $('.economizados').html(dado['economizado'].toFixed(2) + " KWH")
    })
                        })
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
      <div class="swiper-slide">
        <section class="Resumo">

            <div class="ResumoContainer">
                <div id="containerGraficoMes"></div>

                <script src="js/layout/highchart/charts-script.js"></script>
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
                <div data-aos="fade-up-right" data-aos-duration="2000">

            <div class="content">
                <div class="bloco">
                    <h1>Mês Atual</h1>

                    <div class="dados">
                        <h2>Beneficiados:</h2>
                        <p class="beneficiadosM"> 00 Clientes</p>
                    </div>

                    <div class="linhaHorizontal"></div>

                    <div class="dados">
                    <h2>Bônus: </h2>
                    <p class="bonusM"> R$ 0,00</p>
                    </div>

                        <div class="linhaHorizontal"></div>

                    <div class="dados">
                    <h2>Coletados: </h2>
                    <p class="coletadosM"> 0,00 kg</p>
                    </div>

                        <div class="linhaHorizontal"></div>

                        <div class="dados">

                    <h2>Economizados: </h2>
                    <p class="economizadosM"> 00.0 KWH</p>
                    </div>


                    <script>
                        $(document).ready(()=>{
$.ajax({
method: 'GET',
url: 'http://localhost:8000/api/resumo/mes'
})
    .then(function(response){

            const dado = response[0][0]
                $('.beneficiadosM').html(dado['clientes'] + " Clientes")
                $('.bonusM').html("R$ "+ dado['bonus'].toFixed(2))
                $('.coletadosM').html(dado['kg'].toFixed(2) + " Kg")
                $('.economizadosM').html(dado['economizado'].toFixed(2) + " KWH")
    })
                        })
                    </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
      <div class="swiper-slide">
        <section class="Resumo">

            <div class="ResumoContainer">
                <div id="containerGraficoMesAnterior"></div>

                <script src="js/layout/highchart/charts-script.js"></script>
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
                <div class="AOS"  data-aos="fade-up-right" data-aos-duration="2000">

            <div class="content">
                <div class="bloco">
                    <h1>Mês Anterior</h1>

                    <div class="dados">
                        <h2>Beneficiados:</h2>
                        <p class="beneficiadosMA"> 00 Clientes</p>
                    </div>

                    <div class="linhaHorizontal"></div>

                    <div class="dados">
                    <h2>Bônus: </h2>
                    <p class="bonusMA"> R$ 0,00</p>
                    </div>

                        <div class="linhaHorizontal"></div>

                    <div class="dados">
                    <h2>Coletados: </h2>
                    <p class="coletadosMA"> 0,00 kg</p>
                    </div>

                        <div class="linhaHorizontal"></div>

                        <div class="dados">

                    <h2>Economizados: </h2>
                    <p class="economizadosMA"> 00.0 KWH</p>
                    </div>


                    <script>
                        $(document).ready(()=>{
$.ajax({
method: 'GET',
url: 'http://localhost:8000/api/resumo/mesa'
})
    .then(function(response){

            const dado = response[0][0]
                $('.beneficiadosMA').html(dado['clientes'] + " Clientes")
                $('.bonusMA').html("R$ "+ dado['bonus'].toFixed(2))
                $('.coletadosMA').html(dado['kg'].toFixed(2) + " Kg")
                $('.economizadosMA').html(dado['economizado'].toFixed(2) + " KWH")
    })
                        })
                    </script>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-slide">
        <section class="Resumo">

            <div class="ResumoContainer">
                <div id="containerAnoCorrente"></div>

                <script src="js/layout/highchart/charts-script.js"></script>
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
                <div data-aos="fade-up-right" data-aos-duration="2000">

            <div class="content">
                <div class="bloco">
                    <h1>Ano Corrente</h1>

                    <div class="dados">
                        <h2>Beneficiados:</h2>
                        <p class="beneficiadosA"> 00 Clientes</p>
                    </div>

                    <div class="linhaHorizontal"></div>

                    <div class="dados">
                    <h2>Bônus: </h2>
                    <p class="bonusA"> R$ 0,00</p>
                    </div>

                        <div class="linhaHorizontal"></div>

                    <div class="dados">
                    <h2>Coletados: </h2>
                    <p class="coletadosA"> 0,00 kg</p>
                    </div>

                        <div class="linhaHorizontal"></div>

                        <div class="dados">

                    <h2>Economizados: </h2>
                    <p class="economizadosA"> 00.0 KWH</p>
                    </div>


                    <script>
                        $(document).ready(()=>{
$.ajax({
method: 'GET',
url: 'http://localhost:8000/api/resumo/ano'
})
    .then(function(response){

            const dado = response[0][0]
                $('.beneficiadosA').html(dado['clientes'] + " Clientes")
                $('.bonusA').html("R$ "+ dado['bonus'].toFixed(2))
                $('.coletadosA').html(dado['kg'].toFixed(2) + " Kg")
                $('.economizadosA').html(dado['economizado'].toFixed(2) + " KWH")
    })
                        })
                    </script>

                    </div>
                </div>
            </div>
        </div>

    </section>
</div>


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

@endsection()
