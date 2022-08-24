@extends('layout.app')

@section('content')

<main>

@include('layout._partials.book-form')

    <!-- Content -->

    <main>

        <!-- Season -->
        <section class="my-10 md:my-20 w-full">
            <div class="flex justify-center items-center">
                <h2 class="text-4xl font-bold uppercase text-[#71716a]">Contact</h2>
            </div>
        </section>

        <!-- Main -->
        <section>
            <!-- Contact Form -->
            <div class="w-full px-4 text-center mb-8 md:mb-16">

                <form action="#" method="POST">
                    <div class="max-w-4xl mx-auto">
                    
                        <div class="w-full flex flex-col md:flex-row md:justify-between md:gap-x-4 mt-6 gap-y-6">
                            <div class="md:grow">
                                <input class="w-full rounded text-neutral-500" type="text" name="name" id="name" placeholder="First name">
                            </div>
                            <div class="md:grow">
                                <input class="w-full rounded text-neutral-500" type="text" name="lastname" id="lastname" placeholder="Last name">
                            </div>
                        </div>

                        <div class="w-full flex flex-col md:flex-row md:justify-between md:gap-x-4 mt-6 gap-y-6">
                            <div class="grow">
                                <input class="w-full rounded text-neutral-500" type="text" name="email" id="email" placeholder="Email Address ">
                            </div>
                        </div>

                        <div class="w-full flex flex-col mt-6 gap-y-6 md:h-28">
                            <div>
                                <textarea name="comments" id="comments" class="w-full h-full rounded" placeholder="Your message"></textarea>
                            </div>
                        </div>

                        <div class="w-full mt-6 flex justify-end">
                            <button type="submit" class="border border-black rounded uppercase font-bold bg-white px-4 py-2">Send Request</button>
                        </div>

                    </div>
                </form>
            
            </div>
        </section>

    </main>

@endsection('content')