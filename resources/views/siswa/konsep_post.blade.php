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

    <section id="list-materi" class="py-5">
        <div class="container mx-auto py-0 flex justify-center">
            <div class="w-full py-0 px-5 space-y-10">                     
                
                <div class="overflow-hidden flex flex-col justify-center items-center rounded-xl bg-orange-FF7F09 px-6 py-4 space-y-4">                    
                    <div class="font-sans text-white">
                        <h2 class="font-bold text-center md:text-4xl text-xl">
                            {{ $post->materi }}
                        </h2>
                    </div>
                    <img class="w-auto h-auto items-center justify-center" src="{{ asset ('storage/'.$post->gambar) }}" alt="{{ $post->gambar }}" title="{{ $post->materi }}">
                    <div class="md:px-6 px-1 py-2 font-sans text-white">
                        <p class="text-lg py-2">
                            {!! $post->soal !!} 
                        </p>
                    </div>
                    <form class="py-3 font-roboto px-5" method="POST" action="{{ url('siswa/konsep_post', $post->id) }}" onsubmit="return confirmSubmit()" enctype="multipart/form-data">
                                
                        @csrf
                        
                        <div class="relative z-0 w-full mb-6 group">
                            <div class="flex items-center mb-4 space-x-2">
                                <input id="jawaban" type="radio" name="jawaban" value="{{ $post->id }}" {{ old('jawaban') == $post->id ? 'selected' : '' }} class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                <label for="jawaban" class="w-full py-4 ml-2 text-lg font-sans text-white">
                                    A. {{ $post->a }}
                                </label>
                            </div>
                            <div class="flex items-center mb-4 space-x-2">
                                <input id="jawaban" type="radio" name="jawaban" value="{{ $post->id }}" {{ old('jawaban') == $post->id ? 'selected' : '' }} class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                <label for="jawaban" class="w-full py-4 ml-2 text-lg font-sans text-white">
                                    B. {{ $post->b }}
                                </label>
                            </div>
                            <div class="flex items-center mb-4 space-x-2">
                                <input id="jawaban" type="radio" name="jawaban" value="{{ $post->id }}" {{ old('jawaban') == $post->id ? 'selected' : '' }} class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                <label for="jawaban" class="w-full py-4 ml-2 text-lg font-sans text-white">
                                    C. {{ $post->c }}
                                </label>
                            </div>
                            <div class="flex items-center mb-4 space-x-2">
                                <input id="jawaban" type="radio" name="jawaban" value="{{ $post->id }}" {{ old('jawaban') == $post->id ? 'selected' : '' }} class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                <label for="jawaban" class="w-full py-4 ml-2 text-lg font-sans text-white">
                                    D. {{ $post->d }}
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="group relative flex w-auto justify-center rounded-md bg-green-400 px-3 py-2 text-base font-normal text-white hover:bg-white hover:text-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 shadow shadow-green-600 hover:shadow-white">
                            Kirim
                        </button>
                    </form>
                    
                </div>

                <div class="flex justify-between items-center">
                    <a href="{{ url('/siswa/konsep') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                        <img src={{asset('img/back.png')}} alt="logo" class="h-10 w-auto">
                    </a>
                </div>
            </div>            
        </div>
    </section>

</body>

<script>
    function confirmSubmit () {
        var r = confirm ('Yakin dengan jawabanmu ?');
        if (r) {
            return true;
        } else {
            return false;
        }
    }
</script>

</html>