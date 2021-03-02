<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        @routes
    </head>
    <body>
        <div class="text-gray-600 font-quicksand grid md:grid-cols-10"> <!-- content wrapper -->
            <div class="md:col-span-3 lg:col-span-2">
                <nav>
                    <div class="bg-yellow-600 flex justify-between items-center">
                        <h1 class="font-bold text-gray-100 uppercase p-4">
                            <a href="#">Ninja Food</a>
                        </h1>
                        <div class="cursor-pointer md:hidden pr-4 text-gray-100" id="burger">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                        </div>
                    </div>
                    <ul class="mt-4 pl-2 hidden md:block" id="menu">
                        <li class="text-gray-700 font-bold py-2 border-r-4 cursor-pointer border-yellow-600">
                            <a href="#" class="flex align-middle">
                                <svg class="w-6 h-6 mr-1 text-gray-400 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="py-2 cursor-pointer">
                            <a href="#" class="flex align-middle">
                                <svg class="w-6 h-6 mr-1 text-gray-400 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>About</span>
                            </a>
                        </li>
                        <li class="py-2 cursor-pointer">
                            <a href="#" class="flex align-middle">
                                <svg class="w-6 h-6 mr-1 text-gray-400 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"></path></svg>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> <!-- nav end -->

            <main class="md:col-span-7 lg:col-span-8 px-16 py-6 bg-gray-200">
                <div class="text-yellow-600 font-semibold hidden md:flex md:justify-end">
                    <a href="" class="text-primary mr-2 rounded-full bg-yellow-600 text-sm font-bold cursor-pointer py-2 px-4 text-gray-100 tracking-wide transition ease-linear duration-150 transform hover:scale-105">Login</a>
                    <a href="" class="text-primary rounded-full bg-yellow-600 text-sm font-bold cursor-pointer py-2 px-4 text-gray-100 tracking-wide transition ease-linear duration-150 transform hover:scale-105">Sign up</a>
                </div>

                <header>
                    <h2 class="text-gray-900 text-6xl font-semibold">Recipes</h2>
                    <h3 class="text-3xl font-semibold">For Ninjas</h3>
                </header>

                <div>
                    <h4 class="font-bold mt-12 pb-2 border-b border-gray-100">Latest Recipes</h4>
                    <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- cards go here -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-md transform hover:scale-105 relative transition ease-linear duration-100">
                            <img class="w-full h-32 sm:h-48 object-cover" src="{{ asset('img/img01.jpg') }}" alt="">
                            <!-- <div class="bg-red-600 text-gray-100 absolute left-0 top-0 py-1 px-2 ml-2 mt-2 inline text-xs uppercase font-bold rounded-full">
                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>em promoção</span>
                            </div> -->
                            <div class="p-4">
                                <span class="font-bold">Chicken Bacon Cheese Steak</span>
                                <span class="block text-gray-500 text-sm">Recipe by Isaac</span>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-lg overflow-hidden shadow-md transform hover:scale-105 relative transition ease-linear duration-100">
                            <img class="w-full h-32 sm:h-48 object-cover" src="{{ asset('img/img02.jpg') }}" alt="">
                            <div class="bg-red-600 text-gray-100 absolute left-0 top-0 py-1 px-2 ml-2 mt-2 inline text-xs uppercase font-bold rounded-full">
                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>em promoção</span>
                            </div>
                            <div class="p-4">
                                <span class="font-bold">Chicken Bacon Ranch</span>
                                <span class="block text-gray-500 text-sm">Recipe by Isaac</span>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-lg overflow-hidden shadow-md transform hover:scale-105 relative transition ease-linear duration-100">
                            <img class="w-full h-32 sm:h-48 object-cover" src="{{ asset('img/img03.jpg') }}" alt="">
                            <!-- <div class="bg-red-600 text-gray-100 absolute left-0 top-0 py-1 px-2 ml-2 mt-2 inline text-xs uppercase font-bold rounded-full">
                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>em promoção</span>
                            </div> -->
                            <div class="p-4">
                                <span class="font-bold">Chicken Bacon</span>
                                <span class="block text-gray-500 text-sm">Recipe by Isaac</span>
                            </div>
                        </div>
                    </div>

                    <h4 class="font-bold mt-12 pb-2 border-b border-gray-300">Most popular</h4>
                    <div class="mt-8">
                        <!-- cards go here -->
                    </div>

                    <div class="flex justify-center">
                        <div class="rounded-full bg-yellow-600 text-sm font-bold cursor-pointer py-2 px-4 text-gray-100 tracking-wide">Load more</div>
                    </div>
                </div>
            </main>
        </div>

        <script>
            document.getElementById('burger').addEventListener('click', () => {
                let menu = document.getElementById('menu');

                if(menu.classList.contains('hidden')) {
                    menu.classList.remove('hidden');
                } else {
                    menu.classList.add('hidden');
                }
            });
        </script>
    </body>
</html>
