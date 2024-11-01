<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixcel Position</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.svg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-D_-kYVPr.css') }}">
</head>
<body class="max-w-[1536px] mx-auto bg-black text-gray-200 font-poppins pb-20">
    <div class="px-4 md:px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/15">
            <div>
                <a href="/">
                    <img src="{{ asset('images/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="hidden md:block space-x-4 text-sm">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @guest
                <div class="space-x-4 text-sm">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Login</a>
                </div>
            @endguest
            @auth
                <div class="space-x-4 text-sm flex gap-x-3">
                    <a href="/jobs/create">Post a Job</a>
                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </form>
                </div>
            @endauth
        </nav>
        <main class="mt-10 max-w-4xl mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
