@extends('layout.main')

@section('title', 'Ecoenel')

@section('content')
<section class="Resumo">
    <div class="container">
        <div class="content">
            <h1>Mês Atual</h1>
            <div class="card">
                <h2>Beneficiados</h2>
                @foreach ($Eco as $eco)
                    
                <p>{{ $eco->ben }} Clientes</p>
                
                <h2>Bônus</h2>
                <p>R$ 3.000</p>
                <div class="linhaHorizontal"></div>
                
                <h2>Coletados</h2>
                <p>16.888,98kg</p>
                <div class="linhaHorizontal"></div>
                
                <h2>Economizados</h2>
                <p>70.865,33KWH</p>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection()