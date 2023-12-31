<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/brain.png') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <title>Konsep | Siswa</title>
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

    <section id="list-materi" class="py-10">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 space-y-10">  
                
                <div class="overflow-hidden flex flex-col justify-center items-center">
                    <div class="flex justify-between items-center">
                        <div type="button" class="group lg:text-3xl md:text-xl text-lg text-center relative flex w-auto justify-center rounded-lg bg-orange-FF7F09 px-3 py-2 font-semibold text-white shadow shadow-white">
                            Contoh Konsep 4 Unsur Computational Thinking
                        </div>
                    </div>  
                </div>

                <div class="overflow-hidden flex flex-col justify-center items-center space-y-4">
                    @foreach ($konsep as $row)
                    <div class="flex justify-between items-center">
                        <a href="{{ url ('siswa/konsep_post', $row->id) }}" type="button" class="group relative flex w-auto justify-center rounded-md bg-orange-FF7F09 sm:px-3 sm:py-2 px-1.5 py-1 sm:text-xl text-lg font-semibold text-white hover:bg-white hover:text-orange-FF7F09 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600 shadow shadow-orange-600 hover:shadow-white">
                            {{ $row->materi }}
                        </a>
                    </div>  
                    @endforeach
                </div>

                <div class="flex justify-between items-center">
                    <a href="{{ url('/siswa') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                        <img src={{asset('img/back.png')}} alt="logo" class="md:h-10 h-7 w-auto">
                    </a>
                </div>

            </div>            
        </div>
    </section>

</body>

</html>