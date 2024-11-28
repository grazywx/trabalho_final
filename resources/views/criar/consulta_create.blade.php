@section('content')
@include('layouts/navigation')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agendar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/form.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div style="text-align:center; padding-top: 20px;">
        @if (session()->has('message'))
            {{ session()->get('message') }}   
        @endif
        @if($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif

    </div>

<div class="card">
    <form class="card-form" action="{{ route('consultas.store',)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input">
            <input class="input-field"  type="text" name="nome" value="{{ old('nome')}}">
            <label class="input-label">Nome</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="rg" value="{{ old('rg')}}">
            <label class="input-label">RG</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="motivo_consulta" value="{{ old('motivo_consulta')}}">
            <label class="input-label">Motivo Consulta</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="data_consulta" value="{{ old('data_consulta')}}">
            <label class="input-label">Data Consulta</label>
        </div>
        <div class="input">
            <input class="input-field" type="text" name="hora" value="{{ old('hora')}}">
            <label class="input-label">Hora Consulta</label>
        </div>
        <div class="action">
            <button type="submit" class="action-button">Agendar</button>
        </div>
    </form>
    </div>
    
</body>
</html>
