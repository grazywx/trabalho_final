<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Principal</title>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        
        
        <style>
            .banner{
                whidth: 100%;
                height: auto;
                display: block;
                margin: 0;
                
            }

        </style>
    </head>
    <body>
     @section('content')
            <div >
                <img id="inicio" class="banner" src=" {{asset('images/banner.png')}}" alt="" >
            </div>
        
            

            
    </body>
    </html>

</x-app-layout>