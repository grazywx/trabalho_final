@section('content')
@include('layouts/navigation')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ficha</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/tabela.css" rel="stylesheet" type="text/css" />
    <style>
         #ficha{
                min-height: 100vh;
                height: auto;
                margin: 0;
            }
    </style>

</head>
<body>

<div id="fichas" class="100-vh" style="padding-top: 150px;">
    <h4 style="text-align: center; color: #005eb4; ">Fichas</h4>
    <div id="button" >
        <button><a href="">Adicionar Nova Ficha</a></button>
    </div>

    <table class="styled-table">
    <thead>
        <tr>
            
            <th>Nome</th>
            <th>Gênero</th>
            <th>Data de Nascimento</th>
            <th>Endereço</th>
            <th>Data da Consulta</th>
            <th>Descrição</th>
            <th>Diagnostico</th>
            <th>Prescrição</th>
            <th>Médico</th>
            <th>ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="">Editar</a>  
                <a href="">Deletar</a>
            </td>
        </tr>
        
    </table>


</div>

</body>
</html>

