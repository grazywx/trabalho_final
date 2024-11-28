@section('content')
@include('layouts/navigation')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medico</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/tabela.css" rel="stylesheet" type="text/css" />
    <style>
        #medico{
                min-height: 100vh;
                height: auto;
                margin: 0;
            }
    </style>

</head>
<body> 
<div id="medico"  class="100-vh" style="padding-top: 150px;" >
                <h4 style="text-align: center; color: #005eb4; ">Médicos</h4>
                    <div id="button" style="text-align: center;">
                        <button><a href="{{route('medicos.create')}}">Adicionar Médico</a></button>
                    </div>
                   
                        <table class="styled-table" style="text-align: center;">
                       
                        <thead>
                            <tr>
                            
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>CRM</th>
                                <th>Especialidade</th>
                                <th>Ações</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medicos as $medico)
                                <tr>
                                    <td>{{$medico->nome}}</td>
                                    <td>{{$medico->email}}</td>
                                    <td>{{$medico->crm}}</td>
                                    <td>{{$medico->especialidade}}</td>
                                    <td>
                                        <a href="{{ route('medicos.edit',['medico' => $medico->id])}}">Editar</a>  
                                        <a href="{{ route('medicos.show',['medico' => $medico->id])}}">Deletar</a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    
    </div>
</body>
</html>



