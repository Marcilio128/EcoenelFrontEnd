@extends('layout.main')

@section('title', 'Ecoenel')

@section('content')

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
           {{--Slide1--}}  
        <section class="Resumo">
    
            <div class="ResumoContainer">
                <div id="containerGrafico"></div>
            
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                <div data-aos="fade-up-right" data-aos-duration="2000">
        
                <div class="content">
                    
                    <div class="bloco">
                        <h1>Resumo Do Dia</h1>
        
                        <h2>Beneficiados</h2>
                        <p>92 Clientes</p>
                        <div class="linhaHorizontal"></div>
                        
                        
                        <h2>Bônus</h2>
                            <p>R$ 3.000</p>
                            <div class="linhaHorizontal"></div>
                        
                        <h2>Coletados</h2>
                            <p>16.888,98 kg</p>
                            <div class="linhaHorizontal"></div>
                        
                        <h2>Economizados</h2>
                            <p>70.865,33 KWH</p>
                                      
                    </div>                    
                </div>
            </div>
            </div>
            
        </section>    
      </div>
    
    {{--Slide1--}}
    
    
    </div>
      <div class="carousel-item">
        <section class="Resumo">
    
            <div class="ResumoContainer">
                <div id="containerGraficoMes"></div>
            
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                <div data-aos="fade-up-right" data-aos-duration="2000">
        
                <div class="content">
                    
                    <div class="bloco">
                        <h1>Resumo Do Mês</h1>
        
                        <h2>Beneficiados</h2>
                        <p>92 Clientes</p>
                        <div class="linhaHorizontal"></div>
                        
                        
                        <h2>Bônus</h2>
                            <p>R$ 3.000</p>
                            <div class="linhaHorizontal"></div>
                        
                        <h2>Coletados</h2>
                            <p>16.888,98 kg</p>
                            <div class="linhaHorizontal"></div>
                        
                        <h2>Economizados</h2>
                            <p>70.865,33 KWH</p>
                                      
                    </div>                    
                </div>
            </div>
            </div>
            
        </section>   
    
    </div>

      <div class="carousel-item">
        <section class="Resumo">
    
            <div class="ResumoContainer">
                <div id="containerGraficoMesAnterior"></div>
            
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                <div data-aos="fade-up-right" data-aos-duration="2000">
        
                <div class="content">
                    
                    <div class="bloco">
                        <h1>Resumo Do Mês Anterior</h1>
        
                        <h2>Beneficiados</h2>
                        <p>92 Clientes</p>
                        <div class="linhaHorizontal"></div>
                        
                        
                        <h2>Bônus</h2>
                            <p>R$ 3.000</p>
                            <div class="linhaHorizontal"></div>
                        
                        <h2>Coletados</h2>
                            <p>16.888,98 kg</p>
                            <div class="linhaHorizontal"></div>
                        
                        <h2>Economizados</h2>
                            <p>70.865,33 KWH</p>
                                      
                    </div>                    
                </div>
            </div>
            </div>
            
        </section>   
        </div>

        <div class="carousel-item">
            <section class="Resumo">
        
                <div class="ResumoContainer">
                    <div id="containerAnoCorrente"></div>
                
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                    <div data-aos="fade-up-right" data-aos-duration="2000">
            
                    <div class="content">
                        
                        <div class="bloco">
                            <h1>Resumo Do Ano Corrente</h1>
            
                            <h2>Beneficiados</h2>
                            <p>92 Clientes</p>
                            <div class="linhaHorizontal"></div>
                            
                            
                            <h2>Bônus</h2>
                                <p>R$ 3.000</p>
                                <div class="linhaHorizontal"></div>
                            
                            <h2>Coletados</h2>
                                <p>16.888,98 kg</p>
                                <div class="linhaHorizontal"></div>
                            
                            <h2>Economizados</h2>
                                <p>70.865,33 KWH</p>
                                          
                        </div>                    
                    </div>
                </div>
                </div>
                
            </section>   
            </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev" aria-hidden="true"></span>
      <span class="visually-hidden" >Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection()