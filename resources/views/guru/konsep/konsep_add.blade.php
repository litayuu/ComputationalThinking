<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/brain.png') }}">
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <title>Materi | Dashboard Guru</title>
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
                <div class="flex justify-center items-center">
                    <div class="w-auto bg-orange-FF7F09 py-1.5 px-2 rounded-lg shadow shadow-white">
                        <h2 class="md:text-2xl text-lg font-sans font-semibold text-center text-white">
                            Form Input Konsep
                        </h2>
                    </div>                    
                </div>                       
                <!-- Form -->
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                            
                    @include('errors.message')

                    <form class="py-3 font-roboto px-5 space-y-8" method="POST" action="{{ url('/guru/konsep/konsep_add') }}" onsubmit="return confirmSubmit()" enctype="multipart/form-data">
                        
                        @csrf

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="materi" id="materi" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-white border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('materi') }}" required />
                            <label for="materi" class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Materi</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <textarea type="text" name="soal" id="soal" class="ckeditor block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-white border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('soal') }}" required></textarea>
                            <label for="soal" class="-mt-2 peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Soal</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <textarea type="text" name="a" id="a" class="ckeditor block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-white border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('soal') }}" required></textarea>
                            <label for="a" class="-mt-2 peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Soal</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <textarea type="text" name="b" id="b" class="ckeditor block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-white border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('soal') }}" required></textarea>
                            <label for="b" class="-mt-2 peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Soal</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <textarea type="text" name="c" id="c" class="ckeditor block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-white border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('soal') }}" required></textarea>
                            <label for="c" class="-mt-2 peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Soal</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <textarea type="text" name="d" id="d" class="ckeditor block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-white border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('soal') }}" required></textarea>
                            <label for="d" class="-mt-2 peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Soal</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <textarea type="text" name="kunci" id="kunci" class="ckeditor block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-white border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('soal') }}" required></textarea>
                            <label for="kunci" class="-mt-2 peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Soal</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <textarea type="text" name="keterangan" id="keterangan" class="ckeditor block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 text-white border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('keterangan') }}" required></textarea>
                            <label for="keterangan" class="-mt-2 peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Keterangan Jawaban</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label class="block mb-2 text-sm font-medium text-white" for="gambar">Upload Image</label>
                            <input class="block w-full text-sm text-white border-0 border-b-2 border-gray-300 rounded-lg cursor-pointer focus:outline-none" id="gambar" name="gambar" type="file" required>
                            <p class="font-normal py-2 md:text-start text-red-600">
                                *upload dengan format .jpg, .jpeg, .png, .gif, dan .svg <br>
                                *max file size 2MB
                            </p>
                        </div>
                        <button id="submit" type="submit" class="group relative flex w-auto justify-center rounded-md bg-green-400 px-3 py-2 text-base font-normal text-white hover:bg-white hover:text-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 shadow shadow-green-600 hover:shadow-white">
                            Upload
                        </button>
                    </form>
                </div>
                <div class="flex justify-between items-center">
                    <a href="{{ url('/guru/konsep') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                        <img src={{asset('img/back.png')}} alt="logo" class="md:h-10 h-7 w-auto">
                    </a>
                </div> 
            </div>            
        </div>
    </section>

</body>

{{-- Textarea Editor --}}
<script>
    CKEDITOR.replace( 'editor' );
</script>
<script>
    function confirmSubmit () {
        var r = confirm ('lanjutkan penyimpanan data ?');
        if (r) {
            return true;
        } else {
            return false;
        }
    }
</script>

</html>