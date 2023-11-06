<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body  class="flex flex-col items-center mx-20 ">
    <div class="w-[80%] max-w-[1000px] py-4">
        <!-- tailwindcssでborder -->
        <header class="h-16 mb-10 border-b border-gray-400 flex items-center">
            <ul class="flex gap-10 justify-center ">
                <a class="text-blue-300 hover:text-blue-700 border-b border-blue-300">Home</a>
                <a class="text-blue-300 hover:text-blue-700 border-b border-blue-300">Profile</a>
                <a class="text-blue-300 hover:text-blue-700 border-b border-blue-300">Post</a>
            </ul>
         </header>
         <main class="w-[80%] flex flex-col min-h-screen">
            @yield('content')
        </main>

        <footer class="border-t border-gray-400 text-center mt-10 py-16">
            <small>&copy; 2023</small>
        </footer>


    </div>
</body>
</html>
