<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/brain.png') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
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
                <div class="flex justify-center items-center">
                    <div class="w-auto bg-orange-FF7F09 py-1.5 px-2 rounded-lg shadow shadow-white">
                        <h2 class="md:text-2xl text-lg font-sans font-semibold text-center text-white">
                            Daftar Konsep
                        </h2>
                    </div>
                </div>       
                <div class="flex justify-between items-center">
                    <a href="{{ url('/guru/konsep/konsep_add') }}" type="button" class="group relative flex w-auto justify-center rounded-md bg-orange-FF7F09 px-3 py-2 text-xl font-semibold text-white hover:bg-white hover:text-orange-FF7F09 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600 shadow shadow-orange-600 hover:shadow-white">
                        + <span class="px-2"> | </span> Konsep
                    </a>
                </div>                       
                <!-- New Table -->
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b">
                                    <th class="px-4 py-3">No</th>
                                    <th class="px-4 py-3">Materi</th>
                                    <th class="px-4 py-3">Soal</th>
                                    <th class="px-4 py-3">Tanggal</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white-fafafa divide-y">

                                @php $no=0; @endphp
                                @foreach ($konsep as $row)
                                @php $no++; @endphp

                                <tr class="text-white">
                                    <td class="px-4 py-3 text-sm">
                                        {{ $no }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <div class="flex justify-between items-center">
                                            <a href=" {{ url ('guru/konsep/konsep_post', $row->id) }} " type="button" class="group relative flex w-auto justify-center rounded-md bg-orange-FF7F09 px-3 py-2 text-xl font-semibold text-white hover:bg-white hover:text-orange-FF7F09 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600 shadow shadow-orange-600 hover:shadow-white">
                                                {{ $row->materi }}
                                            </a>
                                        </div>  
                                    </td> 
                                    <td class="px-4 py-3 text-sm">
                                        {!! $row->soal !!} <br>
                                       A. {{ $row->a }} <br>
                                       B. {{ $row->b }} <br>
                                       C. {{ $row->c }} <br>
                                       D. {{ $row->d }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $row->created_at }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <a href="/guru/konsep/konsep_edit/{{$row->id}}" class="bg-red-200 px-2 py-2 rounded-lg hover:opacity-70" onclick="return confirm('Apakah anda yakin ingin mengubah data ?');">
                                            <i class="fi fi-rr-file-edit"></i>
                                        </a>
                                        <a href="/guru/konsep/konsep_delete/{{$row->id}}" class="bg-red-200 px-2 py-2 rounded-lg hover:opacity-70" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">
                                            <i class="fi fi-rr-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex items-center"> 
                    <a href="{{ url('/guru') }}" class="group relative flex w-auto justify-center rounded-full hover:opacity-80">
                        <img src={{asset('img/back.png')}} alt="logo" class="md:h-10 h-7 w-auto">
                    </a>
                </div>
            </div>            
        </div>
    </section>

</body>

</html>