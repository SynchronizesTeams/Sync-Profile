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
    <body class="md:w-[60%] md:p-20 flex-col p-4 h-screen relative flex items-center justify-center mx-auto bg-[#C6ffC6]">
        <button class="md:text-4xl text-2xl font-bold mb-10 bg-green-300 p-4 border-2 w-full rounded-lg hover:translate-y-[5px] hover:translate-x-[5px] hover:shadow-none transition-all shadow-[5px_5px_0px_0px_rgba(0,0,0,255)] hover:bg-green-400 hover:text-[#000000]">Lets Begin</button>
        <footer class="absolute bottom-5">
            <h1>Made By SynchronizeTeams</h1>
        </footer>
    </body>

    <script>
        const button = document.querySelector('button');
        button.addEventListener('click', () => {
            window.location.href = '/register';
            button.classList.add('hidden');
        });
    </script>
</html>
