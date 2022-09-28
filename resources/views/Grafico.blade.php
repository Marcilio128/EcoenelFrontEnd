@extends('layout.main')

@section('title', 'Ecoenel')

@section('content')
<section class="Resumo">
    
    <div class="container">
        <div id="container"></div>
    
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <div class="content">
            <h1>Resumo Do Dia</h1>
            <div class="card">
                
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
    
</section>
<script>
    
</script>

@endsection()