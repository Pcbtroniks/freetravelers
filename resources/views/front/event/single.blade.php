@extends('layout.app')

@section('title', 'Freetravelers | Event')

@section('hero')

    {{--  --}}

@endsection

@section('content')

<main>

@include('front._partials.book-form')

    <!-- Content -->

    <main>

        
        {{-- Hero Single Post section --}}
        <section>
            <img src="{{ asset('assets/img/travel3.jpg') }}" alt="">
        </section>

        <!-- Title -->
        <section class="my-10 md:my-20 w-full">
            <div class="flex justify-center items-center">
                <h2 class="text-5xl font-extrabold uppercase text-black-soft">Event Title</h2>
            </div>
        </section>

        <!-- body -->
        <section>
            <!-- Event body -->
            <div class="leading-relaxed w-full px-4 md:px-16 text-justify mb-8 md:mb-16">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, ullam est. Tempore soluta voluptas consequatur nam pariatur quasi doloribus maxime itaque aliquam magnam, neque dolorum eveniet quos, saepe minus ducimus.
                </p>
            
            </div>
        </section>

    </main>

@endsection('content')