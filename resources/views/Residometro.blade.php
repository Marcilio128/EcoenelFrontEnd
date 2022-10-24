

@extends('layout.main')

@section('title', 'Ecoenel')


@section('content')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>


<div data-aos="fade-down"
data-aos-easing="linear"
data-aos-duration="1500">
<section class="section1">
<div class="containerResidometro">
    <div class="Residometro">


        <script>
            $.ajax({
            method: 'GET',
            url: 'http://localhost:8000/api/residometroce'
            })
                .then(function(response){
                const dado1 = response[0][0]['kg'].toFixed(2)
                const dado = dado1.toString()
                const valor = dado.replace(/\./g, "")
                $('.tick').attr("data-value", valor)
                $('.tick').attr("data-did-init", "handleTickInit")

                let i = 0
                ++i
                ++i
                ++i
                ++i
                ++i
                
                if(valor.length == ++i){//6
                    $('[flip]').html(
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>,</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>'
                    )
                }
                if(valor.length == ++i){//7
                    $('[flip]').html(
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>,</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>'
                    )
                }
                if(valor.length == ++i){//8
                    $('[flip]').html(
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>,</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>'
                    )
                }
                if(valor.length == ++i){//9
                    $('[flip]').html(
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>,</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>'
                    )
                }
                if(valor.length == ++i){//10
                    $('[flip]').html(
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>,</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>'
                    )
                }
                if(valor.length == ++i){//11
                    $('[flip]').html(
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>,</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>'
                    )
                }
                if(valor.length == ++i){//12
                    $('[flip]').html(
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>,</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>'
                    )
                }
                if(valor.length == ++i){//13
                    $('[flip]').html(
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>,</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>'
                    )
                }
                if(valor.length == ++i){//14
                    $('[flip]').html(
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>.</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>' +
                        '<span ponto>,</span>' +
                        '<span data-view="flip"></span>' +
                        '<span data-view="flip"></span>'
                    )
                }
                
            })

            $(document).ready(function(){
                $('span[ponto]').addClass('ponto').css('color', 'gray')
            })
        
        </script>
        <div class="tick">

            <div flip data-value-mapping="indexes" data-layout="horizontal fit" data-transform="arrive(.1) -> round -> split -> delay(rtl, 100, 150)">


            </div>

        </div>


            </span>
            <p>Total de resíduos coletados</p>

        </div>
    </div>
    </div>
</div>
</section>


</div>
<footer>
<div class="ocean">
    <div class="wave"></div>
    <div class="wave"></div>
  </div>
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
  viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
  <defs>
  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
  </defs>
  <g class="parallax">
  <use xlink:href="#gentle-wave" x="48" y="0" fill="#db2e73c2" />
  <use xlink:href="#gentle-wave" x="48" y="3" fill="#e30061" />
  <use xlink:href="#gentle-wave" x="48" y="5" fill="#e40264e8" />
  <use xlink:href="#gentle-wave" x="48" y="7" fill="#fc2f88cb" />
  </g>
  </svg>
  </div>
  <!--Waves end-->
  </div>
</footer>



      <script>
        function handleTickInit(tick) {

// update the value every 5 seconds

// value to add each interval
var valuePerInterval = 5;

// offset is a fixed date in the past
var dateOffset = Tick.helper.date('2022-01-01');

// value to start with, the value of the counter at the offset date
var valueOffset = 1;

// uncomment lines below (and comment line above) if you want offset be set to the first time the user visited the page
// var offset = parseInt(localStorage.getItem('tick-value-counter-offset') || Date.now(), 10);
// localStorage.setItem('tick-value-counter-offset', offset);

// start updating the counter each second
Tick.helper.interval(function () {

  // current time in milliseconds
  var now = Date.now();

  // difference with offset time in milliseconds
  var diff = now - dateOffset;

  // total time since offset divide by interval gives us the amount of loops since offset
  var loops = diff - interval;

  // this will make sure we only count completed loops.
  loops = Math.floor(loops);

  // multiply that by the value per interval and you have your final value
  tick.value = valueOffset + (loops * valuePerInterval);

}, 9000);
}
      </script>

@endsection()
