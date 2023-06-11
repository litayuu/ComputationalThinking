<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/brain.png') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <title>Materi | Siswa</title>
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
                
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-4">

                    <div class="overflow-hidden flex flex-col justify-center items-center rounded-xl bg-orange-FF7F09 space-y-5">
                        <div class="px-2 py-4 font-sans text-white ">
                            <h2 class="font-bold text-center md:text-2xl text-lg">
                                Apa Itu Computational Thinking?
                            </h2>
                        </div>
                        <div class="px-2 font-sans text-white space-y-2">
                            <p class="md:text-lg text-sm">
                                Computational Thinking atau bisa disebut Berpikir Komputasional jika diartikan ke Bahasa Indonesia.
                            </p>
                            <p class="md:text-lg text-sm">
                                Apakah kalian pernah memikirkan perbedaan antara pembuatan biskuit atau
                                kue yang dibuat di rumah masing-masing dan biskuit dalam kemasan dengan
                                merk tertentu yang dijual di warung atau di toko swalayan? Mari, kita lihat
                                sekilas perbedaan proses pembuatan biskuit tersebut.
                            </p>
                            <p class="md:text-lg text-sm">
                                Jika kalian mau membuat biskuit atau kue untuk anggota keluarga di rumah
                                yang terdiri atas lima orang, kalian cukup membuat biskuit tersebut di dapur
                                dengan peralatan yang ada di rumah seperti gambar di bawah.
                            </p>
                        </div>
                        <img class="px-2 py-4 w-auto h-auto items-center justify-center" src={{asset('img/1.png')}} alt="ct">
                    </div>

                    <div class="overflow-hidden flex flex-col justify-center items-center rounded-xl bg-orange-FF7F09 space-y-5">
                        <div class="px-2 py-4 font-sans text-white space-y-2">
                            <p class="md:text-lg text-sm">
                                Lain halnya dengan kelompok memasak yang membuat biskuit dalam jumlah yang cukup banyak untuk dijual
                                dan menjalankan Usaha Mikro Kecil Menengah (UMKM). Kelompok memasak tersebut tidak membuat kuenya di dapur rumah yang kecil dengan peralatan seadanya,
                                melainkan mereka memerlukan tempat dan beberapa peralatan yang lebih
                                canggih dibandingkan dengan peralatan yang kalian gunakan untuk membuat
                                kue di rumah. Untuk menjalankan UMKM, membuat dan menjual biskuit, kelompok memasak tersebut
                                mengerjakan pembuatan biskuit tersebut bersama-sama seperti gambar di bawah.
                            </p>
                        </div>
                        <img class="px-2 py-4 w-auto h-auto items-center justify-center" src={{asset('img/2.png')}} alt="ct">
                    </div>

                    <div class="overflow-hidden flex flex-col justify-center items-center rounded-xl bg-orange-FF7F09 space-y-5">
                        <div class="px-2 py-4 font-sans text-white space-y-2">
                            <p class="md:text-lg text-sm">
                                Hal yang berbeda lagi terjadi pada proses pembuatan biskuit yang ditujukan untuk
                                diproduksi secara masal dan dalam jumlah yang sangat besar. Biskuit tersebut
                                dibuat dan dikemas dengan mesin di pabrik seperti gambar di bawah ini.
                            </p>
                        </div>
                        <img class="px-2 w-auto h-auto items-center justify-center" src={{asset('img/3.png')}} alt="ct">
                        <div class="px-2 py-4 font-sans text-white space-y-2">
                            <p class="md:text-lg text-sm">
                                <span class="font-bold">Berpikir komputasional</span> adalah cara berpikir untuk menyelesaikan
                                persoalan, yang cara penyelesaiannya, jika dikembangkan, dapat dilakukan
                                oleh komputer. Dengan demikian, kita akan belajar bagaimana 
                                <span class="font-bold"> menyelesaikan berbagai persoalan dengan cara yang efektif dan efisien.</span>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="flex justify-between items-center">
                    <a href="{{ url('/siswa') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                        <img src={{asset('img/back.png')}} alt="logo" class="md:h-10 h-7 w-auto">
                    </a>
                    <a href="{{ url('/siswa/list_materi') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                        <img src={{asset('img/next.png')}} alt="logo" class="md:h-10 h-7 w-auto">
                    </a>
                </div>

            </div>            
        </div>
    </section>

</body>

</html>