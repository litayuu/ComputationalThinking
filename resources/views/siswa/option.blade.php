<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/brain.png') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <title>Information | Computer Thinking</title>
</head>

<body class="bg-gradient-to-r from-blue-2F308B to-blue-1F4B9D">
    
    <header id="Header" class="py-5 overflow-hidden">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="flex justify-end items-center space-x-3">
                    <a href="{{ url('/siswa/materi') }}" class="group relative flex w-auto justify-center rounded-lg hover:opacity-70">
                        <img src={{asset('img/materi.png')}} alt="logo" class="sm:h-10 h-5 w-auto">
                    </a>
                    <a href="{{ url('/siswa/konsep') }}" class="group relative flex w-auto justify-center rounded-lg hover:opacity-70">
                        <img src={{asset('img/konsep.png')}} alt="logo" class="sm:h-10 h-5 w-auto">
                    </a>
                </div>
            </div>            
        </div>
    </header>
    
    <section class="flex min-h-full items-center justify-center px-4 py-8 sm:px-6 lg:px-8 overflow-hidden">
        <div class="w-full max-w-md space-y-10">

            <div class="overflow-hidden flex flex-col justify-center items-center rounded-xl bg-orange-FF7F09 px-4 py-4 space-y-5">
                <div class="font-sans text-white space-y-1">
                    <h2 class="text-center text-4xl font-sans font-bold tracking-widest text-white uppercase">
                        Mengenal
                    </h2>
                    <p class="text-center text-2xl font-sans font-bold tracking-wide text-white">
                        Computational Thinking
                    </p>
                    <p class="text-center text-base font-sans font-thin tracking-wide text-white">
                        Versi 1.0
                    </p>
                </div>
                <div class="w-auto h-auto bg-blue-800 rounded-lg">
                    <img src={{asset('img/brain.png')}} alt="logo" class="h-20 mx-auto">
                </div>
                <div class="px-2 font-sans text-white space-y-2 text-center">
                    <p class="md:text-lg text-sm font-bold">
                        Dikembangkan Oleh:
                    </p>
                    <p class="md:text-lg text-sm">
                        Lita Ayu Ramadhina
                        Program Studi Ilmu Komputer
                        Fakultas Matematika dan Ilmu Pengetahuan Alam
                        Universitas Negeri Jakarta
                    </p>
                </div>
                <div class="flex flex-row justify-center space-x-5">
                    <img src={{asset('img/smp110jkt.png')}} alt="logo" class="h-20 mx-auto">
                    <img src={{asset('img/unj.png')}} alt="logo" class="h-20 mx-auto">
                </div>
                <div class="flex justify-center">
                    <img src={{asset('img/cp.png')}} alt="logo" class="w-auto h-4">
                </div>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ url('/siswa') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                    <img src={{asset('img/back.png')}} alt="logo" class="md:h-10 h-7 w-auto">
                </a>
                @auth
                <a href="{{ url('logout') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                    <img src={{asset('img/exit.png')}} alt="logo" class="sm:h-10 h-5 w-auto">
                </a>
                @endauth
            </div>  
        </div>
    </section>

</body>

</html>