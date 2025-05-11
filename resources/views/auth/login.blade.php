<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
       
    </head>
    <body class="md:w-[60%] md:p-20 flex-col p-4 h-screen relative flex items-center mx-auto bg-[#C6ffC6]">
        <div class="">
            <h1 class="md:text-4xl text-2xl font-bold mb-10">Login</h1>
        </div>
        
        <div class="w-full h-fit bg-green-300 p-4 border-2 rounded-lg">
            <form action="/logins" method="POST" class="flex flex-col gap-5">
                @csrf
                <div class="mt-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-[5px_5px_0px_0px_rgba(0,0,0,255)]">
                </div>
                <div class="mt-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="shadow-[5px_5px_0px_0px_rgba(0,0,0,255)] appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mt-4">
                    <button type="submit" class="bg-green-400 shadow-[5px_5px_0px_0px_rgba(0,0,0,255)] border-2 hover:translate-y-[5px] hover:translate-x-[5px] hover:shadow-none transition-all font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Login
                    </button>
                </div>
            </form>
        </div>
        <footer class="absolute bottom-5">
            <h1>Made By SynchronizeTeams</h1>
        </footer>
    </body>
</html>
