<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @section('content')
        @include('layouts.navigation')
        <div>
            <img id="inicio" src=" {{asset('images/banner.png')}}" alt="" style="width:100%; height: 93vh;">
        </div>
        
        <div id="fichas" class="100-vh">
        
        </div>

        <div id="consulta" class="100-vh">

        </div>

        <div id="medico"  class="100-vh">

        </div>

        <div id="paciente" class="100-vh">

        </div>
                      


</body>
</html>