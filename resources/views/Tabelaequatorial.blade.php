@extends('layout.main2')

@section('title', 'Equatorial')

@section('content')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
 <style>

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        cursor: grab;
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
  </head>

  <body>
      
      <!-- Swiper -->
      <div data-aos="zoom-in">

      <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            
            <section class="GraficoColetores">
                <div class="container">
                    <section class="sec-tabela">
                        <div class="container">
                                <div class="start">
                                    <h1>Rank dos postos que mais coletam (Dia atual)</h1>
                
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
                                                <td class="empresa">Ecoenel Empresas</td>
                                                <td class="quilo">8.060,00</td>
                                                <td class="unidade">0</td>
                                                <td class="litro">0.00</td>
                                                <td class="bonus">2.173,65</td>
                                            </tr>
                                     </tbody>
                                    </table>
                                    <h1>Grandes geradores que mais coletam (Dia atual)</h1>
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
                
                        
                    </section>
                </div>


        </div>
        <div class="swiper-slide">
            <section class="GraficoColetores">
                <div class="container">
                    <section class="sec-tabela">
                        <div class="container">
                                <div class="start">
                                    <h1>Rank dos postos que mais coletam (Mês Atual)</h1>
                
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
                                    <h1>Grandes geradores que mais coletam (Mês Atual)</h1>
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
        <div class="swiper-slide">
            <section class="GraficoColetores">
                <div class="container">
                    <section class="sec-tabela">
                        <div class="container">
                                <div class="start">
                                    <h1>Rank dos postos que mais coletam (Mês Anterior)</h1>
                
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
                                    <h1>Grandes geradores que mais coletam (Mês Anterior)</h1>
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
        <div class="swiper-slide">
            <section class="GraficoColetores">
                <div class="container">
                    <section class="sec-tabela">
                        <div class="container">
                                <div class="start">
                                    <h1>Rank dos postos que mais coletam (Ano Corrente)</h1>
                
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
                                    <h1>Grandes geradores que mais coletam (Ano Corrente)</h1>
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
    </div>
</div>

</div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 10500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>







  
@endsection()