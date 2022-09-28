@extends('layout.main')

@section('title', 'Ecoenel')

@section('content')

<section class="sec-tabela">        
    <div class="container">
            <div class="start">
                <h1>Ranking Dos Postos Que Mais Coletam</h1>
            </div>
            <div class="container">
                <table border='1' cellspacing="0" role="grid">
                    <thead>
                        <tr>
                            <th>Postos De Coleta</th>
                            <th>Quilos</th>
                            <th>Unidades</th>
                            <th>Litros</th>
                            <th>Bônus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @yield('Table')
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="vertical"></div>
    </section>


@endsection()