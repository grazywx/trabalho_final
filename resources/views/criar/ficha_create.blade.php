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
		
		<form class="card-form" action="{{ route('fichas.store',)}}" method="post" enctype="multipart/form-data">
            @csrf
			<div class="input">
				<input class="input-field" type="text" name="nome" value="{{ old('nome')}}" placeholder=" ">
				<label class="input-label">Nome</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="data_nascimento" value="{{ old('data_nascimento')}}" placeholder=" ">
				<label class="input-label">Data de nascimento</label>
			</div>			
            <div class="input">
                <input class="input-field" type="text" name="genero" value="{{ old('genero')}}" placeholder=" ">
				<label class="input-label">Genero</label>
			</div>
           
            <div class="input">
                <input class="input-field" type="text" name="endereco" value="{{ old('endereco')}}" placeholder=" ">
				<label class="input-label">Endereço</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="data_ficha" value="{{ old('data_ficha')}}" placeholder=" ">
				<label class="input-label">Data da Ficha</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="descricao" value="{{ old('descricao')}}" placeholder=" ">
				<label class="input-label">Descrição</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="diagnostico" value="{{ old('diagnostico')}}" placeholder=" ">
				<label class="input-label">Diagnostico</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="prescricao" value="{{ old('prescricao')}}" placeholder=" ">
				<label class="input-label">Prescrição</label>
			</div>
            <div class="input">
                <input class="input-field" type="text" name="medico" value="{{ old('medico')}}" placeholder=" ">
				<label class="input-label">Medico Responsável</label>
			</div>
            <div>
                <select name="paciente_id" id="paciente_id" required>
                    <option value="">Selecione um paciente</option>
                    @foreach ($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                    @endforeach
                </select>
            </div>


			<div class="action">
				<button type="submit" class="action-button">Adicionar</button>
			</div>
           
		</form>
       
	
	</div>
</div>

</body>
</html>