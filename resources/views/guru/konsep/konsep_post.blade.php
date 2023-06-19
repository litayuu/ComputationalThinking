<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/brain.png') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <title>Konsep | Dashboard Guru</title>
</head>

<body class="bg-gradient-to-r from-blue-2F308B to-blue-1F4B9D">

    <header id="Header" class="py-5 overflow-hidden">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 md:px-10">
                <div class="flex justify-end items-center space-x-3">  
                    <a href="{{ url('/guru/option') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
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

    <section id="list-materi" class="py-5">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 space-y-10">                     
                
                <div class="overflow-hidden flex flex-col justify-center items-center rounded-xl bg-orange-FF7F09 px-6 py-4 space-y-4">                    
                    <div class="font-sans text-white">
                        <h2 class="font-bold text-center md:text-4xl text-xl">
                            {{ $post->materi }}
                        </h2>
                    </div>
                    <img class="w-auto h-auto items-center justify-center" src="{{ asset ('konsep/'.$post->gambar) }}" alt="{{ $post->gambar }}" title="{{ $post->materi }}">
                    <div class="md:px-6 px-1 py-2 font-sans text-white">
                        <p class="text-lg py-2">
                            {!! $post->soal !!} 
                        </p>
                        <ul class="py-1">
                            <li class="py-0.5">
                                A. {{ $post->a }}
                            </li>
                            <li class="py-0.5">
                                B. {{ $post->b }}
                            </li>
                            <li class="py-0.5">
                                C. {{ $post->c }}
                            </li>
                            <li class="py-0.5">
                                D. {{ $post->d }}
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="overflow-hidden flex flex-col justify-center items-center rounded-xl bg-white px-6 py-4 space-y-4">                    
                    <div class="font-sans text-white">
                        <h2 class="font-bold text-center md:text-4xl text-xl text-orange-FF7F09">
                            Kunci Jawaban
                        </h2>
                    </div>
                    <div class="md:px-6 px-1 py-2 font-sans text-orange-FF7F09">
                        <p class="text-lg py-1 font-bold border-b-2 border-orange-FF7F09">
                            {{ $post->kunci }}
                        </p>
                        <p class="text-lg py-1">
                            <!--{!! $post->keterangan !!}-->
                        </p>
                    </div>
                </div>

                <div class="flex items-center"> 
                    <a href="{{ url('/guru/konsep') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                        <img src={{asset('img/back.png')}} alt="logo" class="md:h-10 h-7 w-auto">
                    </a>
                </div>
            </div>            
        </div>
    </section>

</body>

</html>