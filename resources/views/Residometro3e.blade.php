@extends('layout.main3e')
 
@section('title', '3e-Dados')
 
 
@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
 
 
<div data-aos="fade-down"
data-aos-easing="linear"
data-aos-duration="1500">
<section class="section1">
<div class="containerResidometro">
    <div class="Residometro">
 
 
 
        <div class="tick" data-value="3111111111" data-did-init="handleTickInit">
 
            <div data-value-mapping="indexes" data-layout="horizontal fit" data-transform="arrive(.1) -> round -> split -> delay(rtl, 100, 150)">
               
                <span data-view="flip"></span>
                <span class="ponto">.</span>
                <span data-view="flip"></span>
                <span data-view="flip"></span>
                <span data-view="flip"></span>
                <span class="ponto">.</span>
                <span data-view="flip"></span>
                <span data-view="flip"></span>
                <span data-view="flip"></span>
                <span class="ponto">.</span>
                <span data-view="flip"></span>
                <span data-view="flip"></span>
                <span data-view="flip"></span>
                <span class="medida">kg</span>
       
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
  <use xlink:href="#gentle-wave" x="48" y="0" fill="#FBE332" />
  <use xlink:href="#gentle-wave" x="48" y="3" fill="#F4C000" />
  <use xlink:href="#gentle-wave" x="48" y="5" fill="#FBE332" />
  <use xlink:href="#gentle-wave" x="48" y="7" fill="#F1E967" />
  </g>
  </svg>
  </div>
  <!--Waves end-->
  </div>
</footer>
 
  <style>
    .medida{
        color: var(--color-orange-ligth);
    }
  </style>
 
 
      <script>
        function handleTickInit(tick) {
 
// update the value every 5 seconds
var interval = Tick.helper.duration(5, 'seconds');
 
// value to add each interval
var valuePerInterval = 5;
 
// offset is a fixed date in the past
var dateOffset = Tick.helper.date('2019-01-01');
 
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
  var loops = diff / interval;
 
  // this will make sure we only count completed loops.
  loops = Math.floor(loops);
 
  // multiply that by the value per interval and you have your final value
  tick.value = valueOffset + (loops * valuePerInterval);
 
}, 9000);
}
      </script>
 
@endsection()