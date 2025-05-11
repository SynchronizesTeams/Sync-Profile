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
            <h1 class="md:text-4xl text-2xl font-bold mb-10">Update</h1>
        </div>
        
        <div class="w-full h-fit bg-green-300 p-4 border-2 rounded-lg mb-5">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Photo Profile</label>
                    <input type="file" name="avatar" id="photo" accept="image/*" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-[5px_5px_0px_0px_rgba(0,0,0,255)]">
                </div>
                <div class="mt-4">
                    <label for="bio" class="block text-gray-700 text-sm font-bold mb-2">Bio</label>
                    <textarea name="bio" id="bio" rows="4" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-[5px_5px_0px_0px_rgba(0,0,0,255)]" placeholder="Tell us about yourself..."></textarea>
                </div>

                <div class="mt-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" placeholder="johndoe@gmail.com" id="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-[5px_5px_0px_0px_rgba(0,0,0,255)]">
                </div>
                <div class="mt-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" placeholder="John Doe" name="username" id="username" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-[5px_5px_0px_0px_rgba(0,0,0,255)]">
                </div>
                <div class="mt-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                    <input type="text" placeholder="John Doe Morowali Sipahutar" name="name" id="name" class="shadow-[5px_5px_0px_0px_rgba(0,0,0,255)] appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mt-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" placeholder="********" name="password" id="password" class="shadow-[5px_5px_0px_0px_rgba(0,0,0,255)] appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mt-4">
                    <label for="instagram" class="block text-gray-700 text-sm font-bold mb-2">Instagram</label>
                    <input type="url" placeholder="https://instagram.com/johndoe" name="instagram" id="instagram" class="shadow-[5px_5px_0px_0px_rgba(0,0,0,255)] appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mt-4">
                    <label for="website" class="block text-gray-700 text-sm font-bold mb-2">Website</label>
                    <input type="url" placeholder="https://johndoe.com" name="website" id="website" class="shadow-[5px_5px_0px_0px_rgba(0,0,0,255)] appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mt-4">
                    <label for="linkedin" class="block text-gray-700 text-sm font-bold mb-2">LinkedIn</label>
                    <input type="url" placeholder="https://linkedin.com/in/johndoe" name="linkedin" id="linkedin" class="shadow-[5px_5px_0px_0px_rgba(0,0,0,255)] appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mt-4">
                    <label for="github" class="block text-gray-700 text-sm font-bold mb-2">GitHub</label>
                    <input type="url" placeholder="https://github.com/johndoe" name="github" id="github" class="shadow-[5px_5px_0px_0px_rgba(0,0,0,255)] appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mt-4">
                    <button type="submit" class="bg-green-400 shadow-[5px_5px_0px_0px_rgba(0,0,0,255)] border-2 hover:translate-y-[5px] hover:translate-x-[5px] hover:shadow-none transition-all font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Register
                    </button>
                </div>
            </form>
            
        </div>
        <footer class="bottom-5">
            <h1>Made By SynchronizeTeams</h1>
        </footer>
    </body>
</html>
