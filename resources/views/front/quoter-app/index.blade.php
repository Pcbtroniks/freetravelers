@extends('layout.app')

@section('content')

<main class="bg-indigo-50">

    <section class="max-w-7xl px-8 lg:px-16 lg:flex justify-center mx-auto items-center py-8 bg-[#f4f9ff]">

        <div class="lg:w-1/2">
            <div>
                <h1 class="text-5xl mb-8 font-semibold">Cotizador Freetraveler</h1>
            </div>
            <div>
                <p class="text-lg font-thin text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta accusantium quidem est fuga eius nihil at error, officiis illo optio, necessitatibus, dolores minima odit.</p>
            </div>
            <div class="flex mt-8 justify-center lg:justify-start">
                <div class="mr-8">
                    <a href="https://cotizador.freetraveler.com.mx/">
                        <button class="px-6 py-2 rounded-lg bg-sky-500 text-white border border-sky-700 hover:bg-sky-700 hover:border-sky-500 font-bold">Ingresar</button>
                    </a>
                </div>
                <div>
                    <a href="{{ route('contact') }}">
                        <button class="px-6 py-2 rounded-lg text-sky-500 border border-sky-700 hover:bg-sky-500 hover:text-white hover:border-sky-500 font-bold">Contacto</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/2">

            <div class="w-full">
                <img class="w-full mt-16 lg:mt-0" src="{{asset('assets/img/working-team.svg')}}" alt="Brand Image">
            </div>

        </div>

    </section>

</main>

@endsection
