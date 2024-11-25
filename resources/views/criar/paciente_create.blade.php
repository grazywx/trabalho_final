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
@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<div class="card">
    <form class="card-form" action="{{ route('pacientes.store',)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input">
            <input class="input-field"  type="text" name="nome" value="{{ old('nome')}}">
            <label class="input-label">Nome</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="email" value="{{ old('email')}}">
            <label class="input-label">E-mail</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="data_nascimento" value="{{ old('data_nascimento')}}">
            <label class="input-label">Data de Nascimento</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="genero" value="{{ old('genero')}}">
            <label class="input-label">Gênero</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="endereco" value="{{ old('endereco')}}">
            <label class="input-label">Endereço</label>
        </div>
        <div class="action">
            <button type="submit" class="action-button">Adicionar</button>
        </div>
    </form>
    </div>
    
</body>
</html>
