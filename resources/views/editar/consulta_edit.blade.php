@include('layouts/navigation')
@section('content')


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/form.css" rel="stylesheet" type="text/css" />
</head>
<body>
@if (session()->has('message'))
    {{ session()->get('message') }}   
@endif

<div class="container" >
	
   
	 <div class="card">
		
		<form class="card-form" action="{{ route('consultas.update',['consulta' => $consulta->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
			<div class="input">
				<input class="input-field" type="text" name="nome" value="{{$consulta->nome}}" placeholder=" ">
				<label class="input-label">Nome</label>
			</div>			
            <div class="input">
                <input class="input-field" type="text" name="rg" value="{{$consulta->rg}}" placeholder=" ">
				<label class="input-label">RG</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="motivo_consulta" value="{{$consulta->motivo_consulta}}" placeholder=" ">
				<label class="input-label">Motivo da Consulta</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="data_consulta" value="{{$consulta->data_consulta}}" placeholder=" ">
				<label class="input-label">Data da Consulta</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="hora" value="{{$consulta->hora}}" placeholder=" ">
				<label class="input-label">Hora da Consulta</label>
			</div>
			<div class="action">
				<button type="submit" class="action-button">Atualizar</button>
			</div>
           
		</form>
       
	
	</div>
</div>

</body>
</html>
