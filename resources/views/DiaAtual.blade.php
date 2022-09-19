@extends('layout.main')

@section('title', 'Ecoenel')

@section('content')
<section class="Resumo">
    <div class="container">
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
                    <p>16.888,98kg</p>
                    <div class="linhaHorizontal"></div>

                <h2>Economizados</h2>
                    <p>70.865,33KWH</p>
            </div>
        </div>
    </div>
</section>
@endsection()