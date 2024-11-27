<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
               #servicos{
                whidth: 100%;
                height: auto;
                display: block;
                margin: 0;

               }
            </style>
        @endif
    </head>
    <body class="font-sans antialiased bg-white">
        <nav class=" flex flex-1  items-center  bg-primary h-[72px] max-w-full px-10 shadow-md text-white" style="position:fixed; width:100%;">
            <div class="flex items-center justify-start">
                <div class="shrink-0 flex items-center mt-2">
                    <img  src=" {{asset('images/logo4.png')}}" alt="" style="width:130px; height: 130px;">
                </div>
            </div>       
            <div class="ml-auto flex items-center ">
                @auth
                     <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-wdark:hover:text-white/80    dark:focus-visible:ring-white ">
                        tela inicial
                    </a>
                @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white dark:focus-visible:ring-white">
                         Entrar
                    </a>

                    @if (Route::has('register'))
                         <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white dark:focus-visible:ring-white">
                            Registrar
                         </a>
                     @endif
                @endauth
            </div>
                                
        </nav>
        <div style="text-align: center; padding-top:100px;">
            <h4 style="color:#005eb4;  font-size: 36px;">O que você vai gerenciar hoje?</h4>
            <p style=" font-size: 25px; padding:20px;">Com a nossa plataforma, é fácil gerenciar fichas de pacientes, 
              agendar consultas médicas e organizar o atendimento de forma rápida e eficiente. Acesse, 
              atualize e controle os dados dos pacientes com facilidade, garantindo mais organização e 
              eficiência no seu consultório ou clínica.
             </p>
        </div>

        <div class="flex justify-center items-center" >
            <img id="servicos" src=" {{asset('images/servicos.png')}}" alt="" style="width:90%; padding-top:120px; ">
        </div>
                        
                            
        <div>
            <footer style="background-color: #87CEEB; color: #fff; padding:20px; text-align: center; margin-top: 50px; padding-top:40;">
                <p>&copy; 2024 - Todos os direitos reservados</p>
	            <p>Entre em contato pelo e-mail: med.fichas@gmail.com</p>
	        </footer>
        </div>         

    </body>           
</html>
