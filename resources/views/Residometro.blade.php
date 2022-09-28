@extends('layout.main')

@section('title', 'Ecoenel')


@section('content')

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
@endsection()
