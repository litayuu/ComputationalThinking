<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset ('img/brain.png') }}">
    <title>Register | Computational Thinking</title>
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
                    Register
                </p>
            </div>

            <form class="py-5 space-y-6" action="{{ url('/register') }}" method="POST"  onsubmit="return confirmSubmit()" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" name="name" type="text" required class="relative block w-full rounded-t-md border-0 py-1.5 text-black-1E1E1E ring-1 ring-inset placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 px-3" value="{{ old('name') }}" placeholder="Name">
                    </div>
                    <div>
                        <label for="username" class="sr-only">Username</label>
                        <input id="username" name="username" type="text" required class="relative block w-full border-0 py-1.5 text-black-1E1E1E ring-1 ring-inset placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 px-3" value="{{ old('username') }}" placeholder="Username">
                    </div>   
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" name="email" type="email" required class="relative block w-full border-0 py-1.5 text-black-1E1E1E ring-1 ring-inset placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 px-3" value="{{ old('email') }}" placeholder="Email">
                    </div>
                    <!--<p class="font-normal py-2 text-sm md:text-start text-red-500">-->
                    <!--    *Default : 'guru' for Teacher Account <br>-->
                    <!--    *Default : 'siswa' fo Student Account-->
                    <!--</p>-->
                    <!--<div>-->
                    <!--    <label for="role" class="sr-only">Role</label>-->
                    <!--    <input id="role" name="role" type="text" required class="relative block w-full border-0 py-1.5 text-black-1E1E1E ring-1 ring-inset placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 px-3" value="{{ old('role') }}" placeholder="Role">-->
                    <!--</div>  -->
                    <p class="font-normal py-2 text-sm md:text-start text-red-500">
                        *The password field must be at least 8 characters
                    </p>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full border-0 py-1.5 text-black-1E1E1E ring-1 ring-inset placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 px-3" value="{{ old('password') }}" placeholder="Password">
                    </div>
                    <p class="font-normal py-2 text-sm md:text-start text-red-500">
                        *The re-password must match with password
                    </p>
                    <div>
                        <label for="password_confirmation" class="sr-only">Re-password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required class="relative block w-full rounded-b-md border-0 py-1.5 text-black-1E1E1E ring-1 ring-inset placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 px-3" value="{{ old('password_confirmation') }}" placeholder="Re-password">
                    </div>
                </div>
                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md bg-orange-FF7F09 px-3 py-2 text-sm font-semibold text-white hover:bg-white hover:text-orange-FF7F09 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600 shadow shadow-orange-600 hover:shadow-white">
                        Daftar
                    </button>
                </div>
            </form>

            <div>
                <p class="text-center text-base tracking-tight text-white">
                    Sudah memiliki akun ? 
                    <a href="{{ url('/') }}" class="text-base text-orange-FF7F09 hover:opacity-70">
                        login sekarang
                    </a>
                </p>
            </div>

        </div>
    </section>

</body>

{{-- confirmsubmit --}}
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