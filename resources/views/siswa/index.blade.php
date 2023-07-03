<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/brain.png') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <title>Siswa | Computer Thinking</title>
</head>

<body class="bg-gradient-to-r from-blue-2F308B to-blue-1F4B9D">
    
    <header id="Header" class="py-5 overflow-hidden">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="flex justify-end items-center space-x-3">  
                    <a href="{{ url('/siswa/option') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                        <img src={{asset('img/ttg.png')}} alt="logo" class="sm:h-7 h-4 w-auto">
                    </a>
                    @auth
                    <h2 class="md:text-2xl text-lg font-sans font-semibold text-center text-white">
                        {{auth()->user()->name}}
                    </h2>
                    <p class="md:text-lg text-base font-sans font-semibold text-center text-white">
                        ({{auth()->user()->role}})
                    </p>
                    <a href="{{ url('logout') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                        <img src={{asset('img/exit.png')}} alt="logo" class="sm:h-10 h-5 w-auto">
                    </a>
                    @endauth
                </div>
            </div>            
        </div>
    </header>
    
    <section class="flex min-h-full items-center justify-center px-4 py-8 sm:px-6 lg:px-8 overflow-hidden">
        <div class="w-full max-w-md">

            <div>
                <div class="flex flex-row justify-center">
                    <img src={{asset('img/brain.png')}} alt="logo" class="h-20 mx-auto">
                </div>
                <div class="pt-5">
                    <h2 class="pb-1 text-center text-4xl font-sans font-bold tracking-widest text-white uppercase">
                        Mengenal
                    </h2>
                    <p class="text-center text-2xl font-sans font tracking-wide text-white">
                        Computational Thinking
                    </p>
                </div>
            </div>
            
            <div class="pt-10 flex flex-col justify-center items-center space-y-10">
                <a href="{{ url('/siswa/materi') }}" class="group relative flex w-auto justify-center rounded-lg hover:opacity-70">
                    <img src={{asset('img/materi.png')}} alt="logo" class="sm:h-16 h-12 w-auto">
                </a>
                <a href="{{ url('/siswa/konsep') }}" class="group relative flex w-auto justify-center rounded-lg hover:opacity-70">
                    <img src={{asset('img/konsep.png')}} alt="logo" class="sm:h-16 h-12 w-auto">
                </a>
            </div>

        </div>
    </section>

</body>

</html>