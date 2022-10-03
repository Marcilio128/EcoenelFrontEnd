@extends('layout.main')

@section('title', 'Ecoenel')

@section('content')
<div data-aos="zoom-in" data-aos-duration="2000">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
               {{--Slide1--}}  
            <section class="GraficoColetores">
                <div class="container">
                    <section class="sec-tabela">
                        <div class="container">
                                <div class="start">
                                    <h1>Rank Dos Postos Que Mais Coletaram (Dia Atual)</h1>
                
                                </div>
                
                
                                <div class="container">
                                    <table border="1">
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
                                           
                                            <tr>
                                                <td>Ecoenel Empresas</td>
                                                <td>8.060,00</td>
                                                <td>0</td>
                                                <td>0.00</td>
                                                <td>2.173,65</td>
                                            </tr>
                                     </tbody>
                                    </table>
                                    <h1>Grandes Geradores Que Mais Coletam (Dia Atual)</h1>
                                    <table border="1">
                                        <thead>
                                            <tr>
                                                <th>Postos De Coleta</th>
                                                <th>Massa(kg)</th>
                                                <th>Bônus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td>Ecoenel Empresas</td>
                                                <td>8.060,00</td>
                                                <td>0</td>
                                            
                                            </tr>
                                     </tbody>
                                    </table>
                                </div>
                
                            </div>
                
                        </div>
                    </section>
                </div>
            </section>
        {{--Slide1--}}
        
        
        </div>
          <div class="carousel-item">
            <section class="GraficoColetores">
                <div class="container">
                    <section class="sec-tabela">
                        <div class="container">
                                <div class="start">
                                    <h1>Rank Dos Postos Que Mais Coletaram (Mês Atual)</h1>
                
                                </div>
                
                
                                <div class="container">
                                    <table border="1">
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
                                           
                                            <tr>
                                                <td>Ecoenel Empresas</td>
                                                <td>8.060,00</td>
                                                <td>0</td>
                                                <td>0.00</td>
                                                <td>2.173,65</td>
                                            </tr>
                                     </tbody>
                                    </table>
                                    <h1>Grandes Geradores Que Mais Coletam (Mês Atual)</h1>
                                    <table border="1">
                                        <thead>
                                            <tr>
                                                <th>Postos De Coleta</th>
                                                <th>Massa(kg)</th>
                                                <th>Bônus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td>Ecoenel Empresas</td>
                                                <td>8.060,00</td>
                                                <td>0</td>
                                               
                                            </tr>
                                     </tbody>
                                    </table>
                                </div>
                
                            </div>
                
                        </div>
                    </section>
                </div>
       
    
          <div class="carousel-item">
            <section class="GraficoColetores">
                <div class="container">
                    <section class="sec-tabela">
                        <div class="container">
                                <div class="start">
                                    <h1>Rank Dos Postos Que Mais Coletaram (Mês Anterior)</h1>
                
                                </div>
                
                
                                <div class="container">
                                    <table border="1">
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
                                           
                                            <tr>
                                                <td>Ecoenel Empresas</td>
                                                <td>8.060,00</td>
                                                <td>0</td>
                                                <td>0.00</td>
                                                <td>2.173,65</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <h1>Grandes Geradores Que Mais Coletam (Mês Anterior)</h1>

                                    <table border="1">
                                        <thead>
                                            <tr>
                                                <th>Postos De Coleta</th>
                                                <th>Massa(kg)</th>
                                                <th>Bônus</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td>Ecoenel Empresas</td>
                                                <td>8.060,00</td>
                                                <td>0</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                
                            </div>
                
                        </div>
                    </section>
                </div>
      
    
                <div class="carousel-item">
                    <section class="GraficoColetores">
                        <div class="container">
                            <section class="sec-tabela">
                                <div class="container">
                                        <div class="start">
                                            <h1>Rank Dos Postos Que Mais Coletaram (Ano Corrente)</h1>
                        
                                        </div>
                        
                        
                                        <div class="container">
                                            <table border="1">
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
                                                   
                                                    <tr>
                                                        <td>Ecoenel Empresas</td>
                                                        <td>8.060,00</td>
                                                        <td>0</td>
                                                        <td>0.00</td>
                                                        <td>2.173,65</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            <h1>Grandes Coletores Que Mais Coletam(Ano Corrente)</h1>
                                            <table border="1">
                                                <thead>
                                                    <tr>
                                                        <th>Postos De Coleta</th>
                                                        <th>Massa(kg)</th>
                                                        <th>Bônus</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td>Ecoenel Empresas</td>
                                                        <td>8.060,00</td>
                                                        <td>0</td>

                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                        
                                    </div>
                        
                                </div>
                            </section>
        </div>
    </div>
</section>
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