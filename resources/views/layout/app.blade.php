<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Free Travelers')</title>

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('css')
</head>
<body>


    <!-- Header -->

        <!-- Header top -->

        <header class="relative">    

            @yield('hero')

        <!-- Header -->
        <section class="top-nav top-0 w-full flex justify-between items-center px-8 my-4 mt-9 {{ request()->routeIs('home') ? 'absolute' : '' }}">

            <!-- Icon -->
            <div>
                <a href="{{ route('home') }}">
                    <img class="w-48" src="{{ asset('assets/img/freetravelers-logo.jpg') }}" alt="Logo Freetravelers">
                </a>
            </div>

            <!-- Hamburguer Menu Bars-->
            <div id="OpenBurguerMenu" class="burguer-menu z-50 top-0 right-0 cursor-pointer" onclick="handleLateralMenu(this)">
                <div class="bar1 w-10 h-1 my-2 {{ request()->routeIs('home') ? 'bg-white' : 'bg-black'  }} duration-300"></div>
                <div class="bar2 w-10 h-1 my-2 {{ request()->routeIs('home') ? 'bg-white' : 'bg-black'  }} duration-300"></div>
                <div class="bar3 w-10 h-1 my-2 {{ request()->routeIs('home') ? 'bg-white' : 'bg-black'  }} duration-300"></div>
            </div>

        </section>

        </header>


    <!-- Overlay Menu -->

    @include('front._partials.menu')

    <!-- Content -->

    @yield('content')


    <footer class="p-4 bg-white shadow md:px-6 md:py-8 dark:bg-gray-900">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{route('home')}}" class="flex items-center mb-4 sm:mb-0">
                <img src="{{ asset('assets/img/freetravelers-logo.jpg') }}" class="mr-3 h-8" alt="Free Travelers Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Free Travelers</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© <script>document.write(new Date().getFullYear())</script> <noscript>2023</noscript> <a href="/" class="hover:underline">Free Travelers</a>. All Rights Reserved.
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400 mt-2">Powered by <a href="/" class="hover:underline">PCBTRONIKS</a>.</span>
    </footer>
    


    <span class="hidden burguer-menu-active"></span>
    <script>

        const OverlayMenu = document.querySelector('#OverlayMenu');
        const OpenBurguerMenuBtn = document.querySelector('#OpenBurguerMenu');

        const OverlayBookEvent = document.querySelector('#OverlayBookEvent');
        
        function CloseMenu(){
            OverlayMenu.style.width = '0%';
            OpenBurguerMenuBtn.classList.toggle('burguer-menu-active');
        }
        function OpenMenu(){
            OverlayMenu.style.width = '100%';
        }
        
        function CloseBookEvent(){
            OverlayBookEvent.style.width = '0%';
            // OpenBurguerMenuBtn.classList.toggle('burguer-menu-active');
        }
        function OpenBookEvent(){
            OverlayBookEvent.style.width = '100%';
        }

        function animateMenu(element) {
            element.classList.toggle('burguer-menu-active');
        }

        function handleLateralMenu(element){
            animateMenu(element);
            OpenMenu();
        }


    </script>
    
    @yield('js')
</body>
</html>