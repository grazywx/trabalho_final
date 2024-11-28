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

<div class="container" >
	
   
	 <div class="card">
		
		<form class="card-form" action="{{ route('medicos.update',['medico' => $medico->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
			<div class="input">
				<input class="input-field" type="text" name="nome" value="{{$medico->nome}}" placeholder=" ">
				<label class="input-label">Nome</label>
			</div>			
            <div class="input">
                <input class="input-field" type="text" name="email" value="{{$medico->email}}" placeholder=" ">
				<label class="input-label">E-mail</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="crm" value="{{$medico->crm}}" placeholder=" ">
				<label class="input-label">CRM</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="especialidade" value="{{$medico->especialidade}}" placeholder=" ">
				<label class="input-label">Especialidade</label>
			</div>
			<div class="action">
				<button type="submit" class="action-button">Atualizar</button>
			</div>
           
		</form>
       
	
	</div>
</div>

</body>
</html>
