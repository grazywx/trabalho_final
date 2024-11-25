
@section('content')
@include('layouts/navigation')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/tabela.css" rel="stylesheet" type="text/css" />

    <style>
        #paciente{
                min-height: 100vh;
                height: auto;
                margin: 0;
            }
    </style>

</head>
<body> 
<div id="paciente" class="100-vh" style="padding-top: 150px;">
    <h4 style="text-align: center; color: #005eb4; ">Pacientes</h4>
    <div id="button" style="text-align: center;">
        <button><a href="{{route('pacientes.create')}}">Adicionar Paciente</a></button>
    </div>
                

            
        <table class="styled-table" style="text-align: center;">
        <thead>
            <tr>
                            
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data de Nascimento</th>
                <th>Gênero</th>
                <th>Endereço</th>
                <th>acões</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{$paciente->nome}}</td>
                        <td>{{$paciente->email}}</td>
                        <td>{{$paciente->data_nascimento}}</td>
                        <td>{{$paciente->genero}}</td>
                        <td>{{$paciente->endereco}}</td>
                        <td>
                                <a href="{{ route('pacientes.edit',['paciente' => $paciente->id])}}">Editar</a>
                                <a href="{{ route('pacientes.show',['paciente' => $paciente->id])}}">Deletar</a>
                        </td>      
                    </tr>
                @endforeach        
            </table>


</div>
</html>



