<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/brain.png') }}">
    <title>Login | Computational Thinking</title>
    {!! RecaptchaV3::initJs() !!}
</head>

<body class="bg-gradient-to-r from-blue-2F308B to-blue-1F4B9D">
    
    <section class="flex min-h-full items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">

            @include('errors.message')

            <div>
                <div class="flex flex-row justify-center">
                    <img src={{asset('img/brain.png')}} alt="logo" class="h-20 mx-auto">
                </div>
                <h2 class="py-5 text-center text-3xl font-roboto font-bold tracking-tight text-white">
                    Mengenal Computational Thinking
                </h2>
                <p class="text-center text-xl font-roboto tracking-tight text-white">
                    Login
                </p>
            </div>

            <form class="py-5 space-y-6" action="{{ url('/') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="username" class="sr-only">Username</label>
                        <input id="username" name="username" type="text" required class="relative block w-full rounded-t-md border-0 py-1.5 text-black-1E1E1E ring-1 ring-inset placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 px-3" placeholder="Username">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full rounded-b-md border-0 py-1.5 text-black-1E1E1E ring-1 ring-inset placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 px-3" placeholder="Password">
                    </div>
                </div>
                {!! RecaptchaV3::field('proses_login') !!}

                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md bg-orange-FF7F09 px-3 py-2 text-sm font-semibold text-white hover:bg-white hover:text-orange-FF7F09 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600 shadow shadow-orange-600 hover:shadow-white">
                        Sign in
                    </button>
                </div>
            </form>

            <div>
                <p class="text-center text-base tracking-tight text-white">
                    Belum memiliki akun ? 
                    <a href="{{ url('/register') }}" class="text-base text-orange-FF7F09 hover:opacity-70">
                        Daftar Sekarang
                    </a>          
                </p>
            </div>

        </div>
    </section>

</body>

</html>