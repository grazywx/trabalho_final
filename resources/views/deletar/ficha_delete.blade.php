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
		
		<form class="card-form" action="{{ route('fichas.destroy',['ficha' => $ficha->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
			<div class="input">
				<input class="input-field" type="text" name="nome" value="{{$ficha->nome}}" placeholder=" ">
				<label class="input-label">Nome</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="data_nascimento" value="{{$ficha->data_nascimento}}" placeholder=" ">
				<label class="input-label">Data de nascimento</label>
			</div>			
            <div class="input">
                <input class="input-field" type="text" name="genero" value="{{$ficha->genero}}" placeholder=" ">
				<label class="input-label">Genero</label>
			</div>
           
            <div class="input">
                <input class="input-field" type="text" name="endereco" value="{{$ficha->endereco}}" placeholder=" ">
				<label class="input-label">Endereço</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="data_ficha" value="{{$ficha->data_ficha}}" placeholder=" ">
				<label class="input-label">Data da Ficha</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="descricao" value="{{$ficha->descricao}}" placeholder=" ">
				<label class="input-label">Descrição</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="diagnostico" value="{{$ficha->diagnostico}}" placeholder=" ">
				<label class="input-label">Diagnostico</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="prescricao" value="{{$ficha->prescricao}}" placeholder=" ">
				<label class="input-label">Prescrição</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="medico" value="{{$ficha->medico}}" placeholder=" ">
				<label class="input-label">Medico Responsável</label>
			</div>
			<div class="action">
				<button type="submit" class="action-button">Apagar Ficha</button>
			</div>
           
		</form>
       
	
	</div>
</div>

</body>
</html>