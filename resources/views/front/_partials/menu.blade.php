<div id="OverlayMenu" class="overlay-menu  h-full w-0 fixed z-50 top-0 left-0 bg-black overflow-x-hidden duration-500">
    
    <img class="absolute top-9 left-8 w-48" src="{{asset('assets/img/freetravelers-logo.jpg')}}" alt="Logo Freetravelers">

    <a href="javascript:void(0)" onclick="CloseMenu()" class="absolute top-9 right-11 p-2 text-6xl text-[#818181] block duration-300 focus:text-[#f1f1f1] hover:text-[#f1f1f1]"> &times; </a>

    <div class="overlay-menu-content relative top-1/4 md:h-1/6 w-full text-center mt-8 md:mt-0 flex flex-col">
        <a href="{{ route('home') }}" class="capitalize text-white text-4xl my-5 duration-300 focus:text-[#818181] hover:text-[#818181]">Inicio</a>
        <a href="{{ route('calendar') }}" class="capitalize text-white text-4xl my-5 duration-300 focus:text-[#818181] hover:text-[#818181]">Eventos</a>
        <a href="#" class="capitalize text-white text-4xl my-5 duration-300 focus:text-[#818181] hover:text-[#818181]">Nosotros</a>
        <a href="{{ route('contact') }}" class="capitalize text-white text-4xl my-5 duration-300 focus:text-[#818181] hover:text-[#818181]">Contacto</a>
    </div>
</div>