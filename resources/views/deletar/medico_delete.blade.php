
@include('layouts/navigation')
@section('content')

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/form.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container" >
	
   
    <div class="card">
       
       <form class="card-form" action="{{ route('medicos.destroy',['medico' => $medico->id]) }}" method="post" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="_method" value="DELETE">
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
               <button type="submit" class="action-button">Deletar</button>
           </div>
          
       </form>
      
   
   </div>
</div>

</body>
</html>