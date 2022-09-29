@extends('layout.main')

@section('title', 'Ecoenel')

@section('content')
<section class="Resumo">
    
    <div class="container">
        <div id="container"></div>
    
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <div data-aos="fade-up-right" data-aos-duration="2000">

        <div class="content">
            
            <div class="card">
                @yield('Dados')
              
            </div>                    
        </div>
    </div>
    </div>
    
</section>
<script>
    
</script>

@endsection()