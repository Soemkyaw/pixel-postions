<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    {{-- editor  --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-black text-white font-roboto-slab">
    <div class=" px-10">
        <nav class=" flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/image/logo.svg') }}" alt="">
                </a>
            </div>
            <div class=" space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="">Careers</a>
                <a href="/salaries">Salaries</a>
                <a href="/employers">Employers</a>
            </div>
            @auth
                <div class="flex">
                    <a href="/jobs" class="mr-6">Post a Job</a>
                    <form action="/logout" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="text-red-500">logout</button>
                    </form>
                </div>
            @endauth
            @guest
                <div>
                    <a href="/login" class="mr-6 hover:text-blue-600">Login</a>
                    <a href="/register" class=" hover:text-blue-600">Register</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto pb-10">
            {{ $slot }}
        </main>
    </div>
</body>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</html>
