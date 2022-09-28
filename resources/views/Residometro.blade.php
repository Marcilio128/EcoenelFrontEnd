@extends('layout.main')

@section('title', 'Ecoenel')


@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>

<div data-aos="fade-up"
data-aos-duration="3000">
</div>
<div data-aos="fade-down"
data-aos-easing="linear"
data-aos-duration="1500">
<section class="section1">
<div class="container">
    <div class="Residometro">
        <h1>Residometro KG</h1>
        <div class="tick" data-did-init="handleTickInit">

            <span data-layout="horizontal fit">
        
                <span data-repeat="true" data-transform="arrive(5, .01) -> round -> split -> delay(rtl, 100, 150)">
        
                    <span data-view="flip"></span>
        
                </span>
        
            </span>
        
        </div>
    </div>
    </div>
</div>
</section>
</div>


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
