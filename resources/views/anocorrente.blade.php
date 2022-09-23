@extends('layout.main')

@section('title', 'Ecoenel')

@section('content')

@section('Dados')

    <h1>Resumo Do Dia</h1>
    <div class="card">


        @foreach ($Eco['beneficio'] as $eco)
            <h2>Beneficiados</h2>
            <p>{{ $eco->ben }} Clientes</p>
            <div class="linhaHorizontal"></div>
        @endforeach

        @foreach ($Eco['bonus'] as $eco)
            <h2>Bônus</h2>
            <p>R$ {{ $eco->bon }}</p>
            <div class="linhaHorizontal"></div>
        @endforeach

        @foreach ($Eco['coletados'] as $eco)
            <h2>Coletados</h2>
            <p>{{ $eco->col }} kg</p>
            <div class="linhaHorizontal"></div>
        @endforeach

        @foreach ($Eco['economizado'] as $eco)
        <h2>Economizados</h2>
        <p>{{$eco->econ}} KWH</p>
        @endforeach
    @endsection(Dados)


    @section('Table')
        <tr>
            <td>Ecoenel Empresas</td>
            <td>8.060,00</td>
            <td>0</td>
            <td>0.00</td>
            <td>2.173,65</td>
        </tr>
        <tr>
            <td>Ecoenel Empresas</td>
            <td>8.060,00</td>
            <td>0</td>
            <td>0.00</td>
            <td>2.173,65</td>
        </tr>
        <tr>
            <td>Ecoenel Empresas</td>
            <td>8.060,00</td>
            <td>0</td>
            <td>0.00</td>
            <td>2.173,65</td>
        </tr>
        <tr>
            <td>Ecoenel Empresas</td>
            <td>8.060,00</td>
            <td>0</td>
            <td>0.00</td>
            <td>2.173,65</td>
        </tr>
        <tr>
            <td>Ecoenel Empresas</td>
            <td>8.060,00</td>
            <td>0</td>
            <td>0.00</td>
            <td>2.173,65</td>
        @endsection(Dados)


</div>
</section>
@endsection()
