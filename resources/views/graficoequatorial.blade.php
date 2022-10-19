@extends('layout.main2')

@section('title', 'Equatorial')

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
            <div data-aos="fade-up-right" data-aos-duration="2000"> 
             
            <div class="content">   
                <div class="bloco">
                    <h1>Dia Atual</h1>
                    
                    <div class="dados">
                        <h2>Beneficiados:</h2>
                        <p> 92 Clientes</p>
                    </div>
                    
                    <div class="linhaHorizontal"></div>
                    
                    <div class="dados">
                    <h2>Bônus: </h2>
                    <p> R$ 3.000</p>
                    </div>
                    
                        <div class="linhaHorizontal"></div>
                    
                    <div class="dados">
                    <h2>Coletados: </h2>
                    <p> 16.888,98 kg</p>
                    </div>

                        <div class="linhaHorizontal"></div>

                        <div class="dados">

                    <h2>Economizados: </h2>
                    <p> 708.76 KWH</p>
                    </div>

                                  
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
                <div data-aos="fade-up-right" data-aos-duration="2000"> 
                 
                <div class="content">   
                    <div class="bloco">
                        <h1>Mês Atual</h1>
                        
                        <div class="dados">
                            <h2>Beneficiados:</h2>
                            <p> 92 Clientes</p>
                        </div>
                        
                        <div class="linhaHorizontal"></div>
                        
                        <div class="dados">
                        <h2>Bônus: </h2>
                        <p> R$ 3.000</p>
                        </div>
                        
                            <div class="linhaHorizontal"></div>
                        
                        <div class="dados">
                        <h2>Coletados: </h2>
                        <p> 16.888,98 kg</p>
                        </div>
    
                            <div class="linhaHorizontal"></div>
    
                            <div class="dados">
    
                        <h2>Economizados: </h2>
                        <p> 708.76 KWH</p>
                        </div>
    
                                      
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
                <div data-aos="fade-up-right" data-aos-duration="2000"> 
                 
                <div class="content">   
                    <div class="bloco" id="MesAnterior">
                        <h1>Mês Anterior</h1>
                        
                        <div class="dados">
                            <h2>Beneficiados:</h2>
                            <p> 92 Clientes</p>
                        </div>
                        
                        <div class="linhaHorizontal"></div>
                        
                        <div class="dados">
                        <h2>Bônus: </h2>
                        <p> R$ 3.000</p>
                        </div>
                        
                            <div class="linhaHorizontal"></div>
                        
                        <div class="dados">
                        <h2>Coletados: </h2>
                        <p> 16.888,98 kg</p>
                        </div>
    
                            <div class="linhaHorizontal"></div>
    
                            <div class="dados">
    
                        <h2>Economizados: </h2>
                        <p> 708.76 KWH</p>
                        </div>
    
                                      
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
                <div data-aos="fade-up-right" data-aos-duration="2000"> 
                 
                <div class="content">   
                    <div class="bloco">
                        <h1>Ano Corrente</h1>
                        
                        <div class="dados">
                            <h2>Beneficiados:</h2>
                            <p> 92 Clientes</p>
                        </div>
                        
                        <div class="linhaHorizontal"></div>
                        
                        <div class="dados">
                        <h2>Bônus: </h2>
                        <p> R$ 3.000</p>
                        </div>
                        
                            <div class="linhaHorizontal"></div>
                        
                        <div class="dados">
                        <h2>Coletados: </h2>
                        <p> 16.888,98 kg</p>
                        </div>
    
                            <div class="linhaHorizontal"></div>
    
                            <div class="dados">
    
                        <h2>Economizados: </h2>
                        <p> 708.76 KWH</p>
                        </div>
    
                                      
                    </div>                    
                </div>
            </div>
        </div>

    </section>
</div>


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

@endsection()