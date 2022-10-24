@extends('layout.main')

@section('title', 'Ecoenel')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
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
                                           
                                            <tr class="caderno 1">
                                                <td class="empresa">-- empresa --</td>
                                                <td class="quilo">00,00</td>
                                                <td class="unidade">0</td>
                                                <td class="litro">0,00</td>
                                                <td class="bonus">0,00</td>
                                            </tr>
                                            <tr class="caderno 2">
                                                <td class="empresa2">Ecoenel Empresas</td>
                                                <td class="quilo2">8.060,00</td>
                                                <td class="unidade2">0</td>
                                                <td class="litro2">0.00</td>
                                                <td class="bonus2">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 3">
                                                <td class="empresa3">Ecoenel Empresas</td>
                                                <td class="quilo3">8.060,00</td>
                                                <td class="unidade3">0</td>
                                                <td class="litro3">0.00</td>
                                                <td class="bonus3">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 4">
                                                <td class="empresa4">Ecoenel Empresas</td>
                                                <td class="quilo4">8.060,00</td>
                                                <td class="unidade4">0</td>
                                                <td class="litro4">0.00</td>
                                                <td class="bonus4">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 5">
                                                <td class="empresa5">Ecoenel Empresas</td>
                                                <td class="quilo5">8.060,00</td>
                                                <td class="unidade5">0</td>
                                                <td class="litro5">0.00</td>
                                                <td class="bonus5">2.173,65</td>
                                            </tr>
                        <script>
$.ajax({
method: 'GET',
url: 'http://localhost:8000/api/projeto/data'
})
                                            .then(function(response){
                                                const dado = response[0]
                                                /**
                                                 * remoção das tabelas não utilizadas
                                                 */
                                                if(dado.length < 2){
                                                    $('.2').remove()
                                                    $('.3').remove()
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 3){
                                                    $('.3').remove()
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 4){
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 5){
                                                    $('.5').remove()
                                                }
                                                /**
                                                 * adição de dados por tabela
                                                 */
                                                if(dado.length >= 1){
                                                $('.empresa').html(dado[0]['nome'])
                                                $('.quilo').html(dado[0]['quilo'])
                                                $('.unidade').html(dado[0]['unidade'])
                                                $('.litro').html(dado[0]['litro'])
                                                $('.bonus').html(dado[0]['bonus'])
                                                } 
                                                if(dado.length >= 2){
                                                $('.empresa2').html(dado[1]['nome'])
                                                $('.quilo2').html(dado[1]['quilo'])
                                                $('.unidade2').html(dado[1]['unidade'])
                                                $('.litro2').html(dado[1]['litro'])
                                                $('.bonus2').html(dado[1]['bonus'])
                                                } 
                                                if(dado.length >= 3){
                                                $('.empresa3').html(dado[2]['nome'])
                                                $('.quilo3').html(dado[2]['quilo'])
                                                $('.unidade3').html(dado[2]['unidade'])
                                                $('.litro3').html(dado[2]['litro'])
                                                $('.bonus3').html(dado[2]['bonus'])
                                                } 
                                                if(dado.length >= 4){
                                                $('.empresa4').html(dado[3]['nome'])
                                                $('.quilo4').html(dado[3]['quilo'])
                                                $('.unidade4').html(dado[3]['unidade'])
                                                $('.litro4').html(dado[3]['litro'])
                                                $('.bonus4').html(dado[3]['bonus'])
                                                } 
                                                if (dado.length >= 5){
                                                $('.empresa5').html(dado[4]['nome'])
                                                $('.quilo5').html(dado[4]['quilo'])
                                                $('.unidade5').html(dado[4]['unidade'])
                                                $('.litro5').html(dado[4]['litro'])
                                                $('.bonus5').html(dado[4]['bonus'])
                                                }
                                            })
                        </script>
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
                                           
                                            <tr class="caderno 1">
                                                <td class="empresa">-- empresa --</td>
                                                <td class="quilo">00,00</td>
                                                <td class="unidade">0</td>
                                                <td class="litro">0,00</td>
                                                <td class="bonus">0,00</td>
                                            </tr>
                                            <tr class="caderno 2">
                                                <td class="empresa2">Ecoenel Empresas</td>
                                                <td class="quilo2">8.060,00</td>
                                                <td class="unidade2">0</td>
                                                <td class="litro2">0.00</td>
                                                <td class="bonus2">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 3">
                                                <td class="empresa3">Ecoenel Empresas</td>
                                                <td class="quilo3">8.060,00</td>
                                                <td class="unidade3">0</td>
                                                <td class="litro3">0.00</td>
                                                <td class="bonus3">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 4">
                                                <td class="empresa4">Ecoenel Empresas</td>
                                                <td class="quilo4">8.060,00</td>
                                                <td class="unidade4">0</td>
                                                <td class="litro4">0.00</td>
                                                <td class="bonus4">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 5">
                                                <td class="empresa5">Ecoenel Empresas</td>
                                                <td class="quilo5">8.060,00</td>
                                                <td class="unidade5">0</td>
                                                <td class="litro5">0.00</td>
                                                <td class="bonus5">2.173,65</td>
                                            </tr>
                        <script>
                            $(document).ready(()=>{
$.ajax({
method: 'GET',
url: 'http://localhost:8000/api/projeto/data'
})
                                            .then(function(response){
                                                const dado = response[0]
                                                /**
                                                 * remoção das tabelas não utilizadas
                                                 */
                                                if(dado.length < 2){
                                                    $('.2').remove()
                                                    $('.3').remove()
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 3){
                                                    $('.3').remove()
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 4){
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 5){
                                                    $('.5').remove()
                                                }
                                                /**
                                                 * adição de dados por tabela
                                                 */
                                                if(dado.length >= 1){
                                                $('.empresa').html(dado[0]['nome'])
                                                $('.quilo').html(dado[0]['quilo'])
                                                $('.unidade').html(dado[0]['unidade'])
                                                $('.litro').html(dado[0]['litro'])
                                                $('.bonus').html(dado[0]['bonus'])
                                                } 
                                                if(dado.length >= 2){
                                                $('.empresa2').html(dado[1]['nome'])
                                                $('.quilo2').html(dado[1]['quilo'])
                                                $('.unidade2').html(dado[1]['unidade'])
                                                $('.litro2').html(dado[1]['litro'])
                                                $('.bonus2').html(dado[1]['bonus'])
                                                } 
                                                if(dado.length >= 3){
                                                $('.empresa3').html(dado[2]['nome'])
                                                $('.quilo3').html(dado[2]['quilo'])
                                                $('.unidade3').html(dado[2]['unidade'])
                                                $('.litro3').html(dado[2]['litro'])
                                                $('.bonus3').html(dado[2]['bonus'])
                                                } 
                                                if(dado.length >= 4){
                                                $('.empresa4').html(dado[3]['nome'])
                                                $('.quilo4').html(dado[3]['quilo'])
                                                $('.unidade4').html(dado[3]['unidade'])
                                                $('.litro4').html(dado[3]['litro'])
                                                $('.bonus4').html(dado[3]['bonus'])
                                                } 
                                                if (dado.length >= 5){
                                                $('.empresa5').html(dado[4]['nome'])
                                                $('.quilo5').html(dado[4]['quilo'])
                                                $('.unidade5').html(dado[4]['unidade'])
                                                $('.litro5').html(dado[4]['litro'])
                                                $('.bonus5').html(dado[4]['bonus'])
                                                }
                                            })
                        })
                        </script>
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
                                           
                                            <tr class="caderno 1">
                                                <td class="empresa">-- empresa --</td>
                                                <td class="quilo">00,00</td>
                                                <td class="unidade">0</td>
                                                <td class="litro">0,00</td>
                                                <td class="bonus">0,00</td>
                                            </tr>
                                            <tr class="caderno 2">
                                                <td class="empresa2">Ecoenel Empresas</td>
                                                <td class="quilo2">8.060,00</td>
                                                <td class="unidade2">0</td>
                                                <td class="litro2">0.00</td>
                                                <td class="bonus2">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 3">
                                                <td class="empresa3">Ecoenel Empresas</td>
                                                <td class="quilo3">8.060,00</td>
                                                <td class="unidade3">0</td>
                                                <td class="litro3">0.00</td>
                                                <td class="bonus3">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 4">
                                                <td class="empresa4">Ecoenel Empresas</td>
                                                <td class="quilo4">8.060,00</td>
                                                <td class="unidade4">0</td>
                                                <td class="litro4">0.00</td>
                                                <td class="bonus4">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 5">
                                                <td class="empresa5">Ecoenel Empresas</td>
                                                <td class="quilo5">8.060,00</td>
                                                <td class="unidade5">0</td>
                                                <td class="litro5">0.00</td>
                                                <td class="bonus5">2.173,65</td>
                                            </tr>
                        <script>
                            $(document).ready(()=>{
$.ajax({
method: 'GET',
url: 'http://localhost:8000/api/projeto/data'
})
                                            .then(function(response){
                                                const dado = response[0]
                                                /**
                                                 * remoção das tabelas não utilizadas
                                                 */
                                                if(dado.length < 2){
                                                    $('.2').remove()
                                                    $('.3').remove()
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 3){
                                                    $('.3').remove()
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 4){
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 5){
                                                    $('.5').remove()
                                                }
                                                /**
                                                 * adição de dados por tabela
                                                 */
                                                if(dado.length >= 1){
                                                $('.empresa').html(dado[0]['nome'])
                                                $('.quilo').html(dado[0]['quilo'])
                                                $('.unidade').html(dado[0]['unidade'])
                                                $('.litro').html(dado[0]['litro'])
                                                $('.bonus').html(dado[0]['bonus'])
                                                } 
                                                if(dado.length >= 2){
                                                $('.empresa2').html(dado[1]['nome'])
                                                $('.quilo2').html(dado[1]['quilo'])
                                                $('.unidade2').html(dado[1]['unidade'])
                                                $('.litro2').html(dado[1]['litro'])
                                                $('.bonus2').html(dado[1]['bonus'])
                                                } 
                                                if(dado.length >= 3){
                                                $('.empresa3').html(dado[2]['nome'])
                                                $('.quilo3').html(dado[2]['quilo'])
                                                $('.unidade3').html(dado[2]['unidade'])
                                                $('.litro3').html(dado[2]['litro'])
                                                $('.bonus3').html(dado[2]['bonus'])
                                                } 
                                                if(dado.length >= 4){
                                                $('.empresa4').html(dado[3]['nome'])
                                                $('.quilo4').html(dado[3]['quilo'])
                                                $('.unidade4').html(dado[3]['unidade'])
                                                $('.litro4').html(dado[3]['litro'])
                                                $('.bonus4').html(dado[3]['bonus'])
                                                } 
                                                if (dado.length >= 5){
                                                $('.empresa5').html(dado[4]['nome'])
                                                $('.quilo5').html(dado[4]['quilo'])
                                                $('.unidade5').html(dado[4]['unidade'])
                                                $('.litro5').html(dado[4]['litro'])
                                                $('.bonus5').html(dado[4]['bonus'])
                                                }
                                            })
                        })
                        </script>
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
                                           
                                            <tr class="caderno 1">
                                                <td class="empresa">-- empresa --</td>
                                                <td class="quilo">00,00</td>
                                                <td class="unidade">0</td>
                                                <td class="litro">0,00</td>
                                                <td class="bonus">0,00</td>
                                            </tr>
                                            <tr class="caderno 2">
                                                <td class="empresa2">Ecoenel Empresas</td>
                                                <td class="quilo2">8.060,00</td>
                                                <td class="unidade2">0</td>
                                                <td class="litro2">0.00</td>
                                                <td class="bonus2">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 3">
                                                <td class="empresa3">Ecoenel Empresas</td>
                                                <td class="quilo3">8.060,00</td>
                                                <td class="unidade3">0</td>
                                                <td class="litro3">0.00</td>
                                                <td class="bonus3">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 4">
                                                <td class="empresa4">Ecoenel Empresas</td>
                                                <td class="quilo4">8.060,00</td>
                                                <td class="unidade4">0</td>
                                                <td class="litro4">0.00</td>
                                                <td class="bonus4">2.173,65</td>
                                            </tr>
                                            <tr class="caderno 5">
                                                <td class="empresa5">Ecoenel Empresas</td>
                                                <td class="quilo5">8.060,00</td>
                                                <td class="unidade5">0</td>
                                                <td class="litro5">0.00</td>
                                                <td class="bonus5">2.173,65</td>
                                            </tr>
                        <script>
                            $(document).ready(()=>{
$.ajax({
method: 'GET',
url: 'http://localhost:8000/api/projeto/data'
})
                                            .then(function(response){
                                                const dado = response[0]
                                                /**
                                                 * remoção das tabelas não utilizadas
                                                 */
                                                if(dado.length < 2){
                                                    $('.2').remove()
                                                    $('.3').remove()
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 3){
                                                    $('.3').remove()
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 4){
                                                    $('.4').remove()
                                                    $('.5').remove()
                                                } else if(dado.length < 5){
                                                    $('.5').remove()
                                                }
                                                /**
                                                 * adição de dados por tabela
                                                 */
                                                if(dado.length >= 1){
                                                $('.empresa').html(dado[0]['nome'])
                                                $('.quilo').html(dado[0]['quilo'])
                                                $('.unidade').html(dado[0]['unidade'])
                                                $('.litro').html(dado[0]['litro'])
                                                $('.bonus').html(dado[0]['bonus'])
                                                } 
                                                if(dado.length >= 2){
                                                $('.empresa2').html(dado[1]['nome'])
                                                $('.quilo2').html(dado[1]['quilo'])
                                                $('.unidade2').html(dado[1]['unidade'])
                                                $('.litro2').html(dado[1]['litro'])
                                                $('.bonus2').html(dado[1]['bonus'])
                                                } 
                                                if(dado.length >= 3){
                                                $('.empresa3').html(dado[2]['nome'])
                                                $('.quilo3').html(dado[2]['quilo'])
                                                $('.unidade3').html(dado[2]['unidade'])
                                                $('.litro3').html(dado[2]['litro'])
                                                $('.bonus3').html(dado[2]['bonus'])
                                                } 
                                                if(dado.length >= 4){
                                                $('.empresa4').html(dado[3]['nome'])
                                                $('.quilo4').html(dado[3]['quilo'])
                                                $('.unidade4').html(dado[3]['unidade'])
                                                $('.litro4').html(dado[3]['litro'])
                                                $('.bonus4').html(dado[3]['bonus'])
                                                } 
                                                if (dado.length >= 5){
                                                $('.empresa5').html(dado[4]['nome'])
                                                $('.quilo5').html(dado[4]['quilo'])
                                                $('.unidade5').html(dado[4]['unidade'])
                                                $('.litro5').html(dado[4]['litro'])
                                                $('.bonus5').html(dado[4]['bonus'])
                                                }
                                            })
                        })
                        </script>
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