@section('content')
@include('layouts/navigation')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adicionar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/form.css" rel="stylesheet" type="text/css" />
</head>
<body>
@if (session()->has('message'))
    {{ session()->get('message') }}   
@endif

<div class="card">
    <form class="card-form" action="{{ route('pacientes.destroy',['paciente' => $paciente->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <div class="input">
            <input class="input-field"  type="text" name="nome" value="{{$paciente->nome}}">
            <label class="input-label">Nome</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="email" value="{{$paciente->email}}">
            <label class="input-label">E-mail</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="data_nascimento" value="{{$paciente->data_nascimento}}">
            <label class="input-label">Data de Nascimento</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="genero" value="{{$paciente->genero}}">
            <label class="input-label">Gênero</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="endereco" value="{{$paciente->endereco}}">
            <label class="input-label">Endereço</label>
        </div>
        <div class="action">
            <button type="submit" class="action-button">Deletar</button>
        </div>
    </form>
    </div>
    
</body>
</html>