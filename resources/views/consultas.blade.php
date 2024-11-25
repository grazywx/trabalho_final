@section('content')
@include('layouts/navigation')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consultas</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/tabela.css" rel="stylesheet" type="text/css" />   
    
    <style>
        #consulta{
                min-height: 100vh;
                height: auto;
                margin: 0;
            }
    </style>
</head>
<body>
<div id="consulta" class="100-vh" style="padding-top: 150px;">
    <h4 style="text-align: center; color: #005eb4; ">Agendamentos</h4>
    <div id="button" style="text-align: center; padding-top:4px;">
        <button><a href="{{route('consultas.create')}}">Agendar consulta</a></button>
    </div>
                

            
        <table class="styled-table" style="text-align: center;">
        <thead>
            <tr>
                            
                <th>Nome</th>
                <th>RG</th>
                <th>Motivo da Consulta</th>
                <th>Data da Consulta</th>
                <th>Hora da Consulta</th>
                <th>acões</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($consultas as $consulta)
                    <tr>
                        <td>{{$consulta->nome}}</td>
                        <td>{{$consulta->rg}}</td>
                        <td>{{$consulta->motivo_consulta}}</td>
                        <td>{{$consulta->data_consulta}}</td>
                        <td>{{$consulta->hora}}</td>
                        <td>
                                <a href="{{ route('consultas.edit',['consulta' => $consulta->id])}}">Editar</a>
                                <a href="{{ route('consultas.show',['consulta' => $consulta->id])}}">Deletar</a>
                        </td>      
                    </tr>
                @endforeach        
            </table>


</div>
    
</body>
</html>

