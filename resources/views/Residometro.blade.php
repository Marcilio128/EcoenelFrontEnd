@extends('layout.main')

@section('title', 'Ecoenel')


@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>


<div data-aos="fade-down"
data-aos-easing="linear"
data-aos-duration="1500">
<section class="section1">
<div class="containerResidometro">
    <div class="Residometro">
        <div class="tick" data-did-init="handleTickInit">

            <span data-layout="horizontal fit">
        
                <span data-repeat="true" data-transform="arrive(5, .01) -> round -> split -> delay(rtl, 100, 150)">
        
                    <span data-view="flip"></span>
        
                </span>
                <h3 class="medida">KG</h3>
            </span>
            <h1>Residômetro</h1>

        </div>
    </div>
    </div>
</div>
</section>
</div>

<svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
    <path d="M 0,400 C 0,400 0,80 0,80 C 73.23343151693666,92.05670103092783 146.46686303387332,104.11340206185567 202,101 C 257.5331369661267,97.88659793814433 295.3659793814433,79.60309278350516 353,72 C 410.6340206185567,64.39690721649484 488.0692194403533,67.4742268041237 555,69 C 621.9307805596467,70.5257731958763 678.357142857143,70.5 730,72 C 781.642857142857,73.5 828.502209131075,76.52577319587631 888,81 C 947.497790868925,85.47422680412369 1019.6340206185564,91.39690721649484 1080,89 C 1140.3659793814436,86.60309278350516 1188.9617083946982,75.88659793814433 1247,73 C 1305.0382916053018,70.11340206185567 1372.5191458026509,75.05670103092783 1440,80 C 1440,80 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#abb8c3" fill-opacity="0.265" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
    <path d="M 0,400 C 0,400 0,160 0,160 C 69.51951399116348,155.96078792341677 139.03902798232696,151.92157584683358 203,151 C 266.96097201767304,150.07842415316642 325.3634020618557,152.2744845360825 381,147 C 436.6365979381443,141.7255154639175 489.5073637702503,128.98048600883652 553,133 C 616.4926362297497,137.01951399116348 690.6071428571429,157.80357142857144 745,166 C 799.3928571428571,174.19642857142856 834.0640648011781,169.80522827687776 892,161 C 949.9359351988219,152.19477172312224 1031.1365979381442,138.97551546391753 1097,132 C 1162.8634020618558,125.02448453608247 1213.3895434462447,124.29270986745215 1268,130 C 1322.6104565537553,135.70729013254785 1381.3052282768776,147.85364506627394 1440,160 C 1440,160 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#abb8c3" fill-opacity="0.4" class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
</svg>

<script>
            function handleTickInit(tick) {
        
        // update the value every 5 seconds
        var interval = Tick.helper.duration(5, 'seconds');
        // value to add each interval
        var valuePerInterval = 5;
        // offset is a fixed date in the past
        var dateOffset = Tick.helper.date('2019-01-01');
        // value to start with, the value of the counter at the offset date
        var valueOffset = 0;
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
        }, 1000);
    }
</script>
@endsection()
