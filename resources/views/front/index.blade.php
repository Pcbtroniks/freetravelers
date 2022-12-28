@extends('layout.app')

@section('hero')

<!-- Hero Section -->
<section class="h-screen relative">
    <div class="hero__video absolute top-0 left-0 -z-10 w-full h-full">
        
        <video playsinline autoplay loop muted class="relative w-full h-full object-cover">
            <source src="./assets/vids/Travel720.mp4" type="video/mp4">
        </video>

        <div class="absolute text-center font-bold text-white text-b top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <h1 class="text-5xl md:text-7xl mb-8">#FreeTravelers</h1>
            <div class="flex justify-center items-center gap-4">
                {{-- <button class="bg-white w-full min-w-fit text-[#3f3f46] rounded-md p-2 md:p-4 font-bold">Buy ticket</button>
                <button class="bg-white w-full min-w-fit text-[#3f3f46] rounded-md p-2 md:p-4 font-bold">Book an event</button>     --}}
            </div>
        </div>

    </div>
</section>

@endsection

@section('content')

<main>

<!-- Season -->
<section class="my-10 md:my-20 w-full">
    <div class="flex justify-center items-center">
        {{-- <h2 class="text-4xl font-bold uppercase text-blue-600">Summer 2022</h2> --}}
        <h2 class="text-4xl font-bold uppercase text-[#71716a]">Summer 2022</h2>
    </div>
</section>

<!-- Events -->
<section>
    <!-- Event -->
    <!-- <div class="relative">

        <div class="absoulte">
            <img class="h-[192px] md:min-h-[228px] lg:min-h-[284px] w-full object-cover" src="./assets/img/travel1.jpg" alt="Evento mustra 1">
        </div>

        <div class="text-white text-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            
            <div> 
                <span class="uppercase text-xl">Tuesday</span>
                <br>
                <p class="uppercase">14 jun - 27 sep</p>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold"> Salida a Buenos Aires </h3>
            </div>

            <div class="mt-2">
                <button class="bg-white text-[#3f3f46] rounded-md p-2 md:p-4 font-bold">Vew More</button>
            </div>
        </div>
    </div> -->
    @foreach($events as $event)
    <div class="relative">

        <div class="absoulte">
            <img class="img-bg h-[192px] md:min-h-[228px] lg:min-h-[284px] w-full object-cover" src="/storage/{{ $event->cover }}" alt="{{ $event->title }}">
        </div>

        <div class="text-white text-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            
            <div> 
                <span class="uppercase text-xl font-bold event__title">{{ $event->date }}</span>
                <br>
                <p class="uppercase">{{ $event->start_date }} - {{ $event->end_date }}</p>
            </div>
            
            <div>
                <h3 class="text-2xl lg:text-5xl font-bold event__title"> {{ $event->title }} </h3>
            </div>

            <div class="mt-2">
                <button class="bg-white text-[#3f3f46] rounded-md p-2 md:p-4 font-bold">Vew More</button>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Event
    <div class="relative">

        <div class="absoulte">
            <img class="h-[192px] md:min-h-[228px] lg:min-h-[284px] w-full object-cover" src="./assets/img/travel2.jpg" alt="Evento mustra 1">
        </div>

        <div class="text-white text-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            
            <div> 
                <span class="uppercase text-xl">Tuesday</span>
                <br>
                <p class="uppercase">14 jun - 27 sep</p>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold"> Paris </h3>
            </div>

            <div class="mt-2">
                <button class="bg-white text-[#3f3f46] rounded-md p-2 md:p-4 font-bold">Vew More</button>
            </div>
        </div>
    </div>
     Event
    <div class="relative">

        <div class="absoulte">
            <img class="h-[192px] md:min-h-[228px] lg:min-h-[284px]  w-full object-cover" src="./assets/img/travel3.jpg" alt="Evento mustra 1">
        </div>

        <div class="text-white text-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            
            <div> 
                <span class="uppercase text-xl">Tuesday</span>
                <br>
                <p class="uppercase">14 jun - 27 sep</p>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold">Festival de Guadalajara</h3>
            </div>

            <div class="mt-2">
                <button class="bg-white text-[#3f3f46] rounded-md p-2 md:p-4 font-bold">Vew More</button>
            </div>
        </div>
    </div>
    -->


</section>

<!-- Highlights -->
<section class="my-10 md:my-20 w-full">
    <div class="flex justify-center items-center">
        <h2 class="text-4xl font-bold uppercase text-[#71716a]">Highlights</h2>
    </div>

    <section class="overflow-hidden text-gray-700 ">
        <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
          <div class="flex flex-wrap -m-1 md:-m-2">
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="./assets/img/travel4.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(76).webp">
              </div>
            </div>
            <div class="flex flex-wrap w-1/3">
              <div class="w-full p-1 md:p-2">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                  src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp">
              </div>
            </div>
          </div>
        </div>


      </section>
</section>
</main>

@endsection

@section('css')
<style>

    @media (min-width: 768px) {
        .event__title{
        font-size: 2.25rem;
    }
    }

    .img-bg {
        position: relative;
    }
    .img-bg::before {
        content: '';
        position: absolute;
        z-index: 10;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .9);
    }
</style>
@endsection