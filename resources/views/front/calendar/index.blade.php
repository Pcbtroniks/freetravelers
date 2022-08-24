@extends('layout.app')

@section('content')

<main>

@include('layout._partials.book-form')
<!-- Season -->
<section class="my-10 md:my-20 w-full">
    <div class="flex justify-center items-center">
        <h2 class="text-4xl font-bold uppercase text-[#71716a]">Calendar</h2>
    </div>
</section>

<!-- Events -->
<section>
    <!-- Event -->
    <div class="px-4">
    
        <!-- Event card -->
        <div class="py-4 border my-4">
            <div class="grid grid-cols-3 py-4 leading-none text-center">
                <div class="flex flex-col justify-center items-center">
                    <p>Wensday</p>
                    <p class="font-bold">14</p>
                    <p>June</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div>
                        <h2 class="font-bold text-center">Salida a Buenos Aires</h2>
                    </div>
                    <br>
                    <div>
                        desde:
                    </div>
                </div>
                <div>
                    <p class="font-bold">Lorem ipsum</p>
                    <span>Ipsum dolor sit annet, asd.</span>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <button class="border border-black rounded py-1 px-4 text-xs font-bold uppercase">Buy Tickets</button>
                <button onclick="OpenBookEvent()" class="border border-black rounded py-1 px-4 text-xs font-bold uppercase">Book Tables</button>
            </div>
        </div>
        <!-- Event card -->
        <div class="py-4 border my-4">
            <div class="grid grid-cols-3 py-4 leading-none text-center">
                <div class="flex flex-col justify-center items-center">
                    <p>Wensday</p>
                    <p class="font-bold">14</p>
                    <p>June</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div>
                        <h2 class="font-bold text-center">Salida a Buenos Aires</h2>
                    </div>
                    <br>
                    <div>
                        desde:
                    </div>
                </div>
                <div>
                    <p class="font-bold">Lorem ipsum</p>
                    <span>Ipsum dolor sit annet, asd.</span>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <button class="border border-black rounded py-1 px-4 text-xs font-bold uppercase">Buy Tickets</button>
                <button onclick="OpenBookEvent()" class="border border-black rounded py-1 px-4 text-xs font-bold uppercase">Book Tables</button>
            </div>
        </div>
        <!-- Event card -->
        <div class="py-4 border my-4">
            <div class="grid grid-cols-3 py-4 leading-none text-center">
                <div class="flex flex-col justify-center items-center">
                    <p>Wensday</p>
                    <p class="font-bold">14</p>
                    <p>June</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div>
                        <h2 class="font-bold text-center">Salida a Buenos Aires</h2>
                    </div>
                    <br>
                    <div>
                        desde:
                    </div>
                </div>
                <div>
                    <p class="font-bold">Lorem ipsum</p>
                    <span>Ipsum dolor sit annet, asd.</span>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <button class="border border-black rounded py-1 px-4 text-xs font-bold uppercase">Buy Tickets</button>
                <button onclick="OpenBookEvent()" class="border border-black rounded py-1 px-4 text-xs font-bold uppercase">Book Tables</button>
            </div>
        </div>

    </div>

</section>

</main>

@endsection('content')