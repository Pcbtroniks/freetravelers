@extends('layout.app')

@section('title', 'Freetravelers | Contact')

@section('content')

<main>

@include('front._partials.book-form')

    <!-- Content -->

    <main>

        <!-- Season -->
        <section class="my-10 md:my-20 w-full">
            <div class="flex justify-center items-center">
                <h2 class="text-5xl font-extrabold uppercase text-black-soft">Contact</h2>
            </div>
        </section>

        <!-- Main -->
        <section>
            <!-- Contact Form -->
            <div class="w-full px-4 md:px-16 text-center mb-8 md:mb-16 text-black-soft">

                <form action="#" method="POST">
                    <div class="max-w-4xl mx-auto">
                    
                        <div class="w-full flex flex-col md:flex-row md:justify-between md:gap-x-4 mt-6 gap-y-6">
                            <div class="md:grow flex flex-col items-start">
                                <label for="name" class="font-bold">First name *</label>
                                <input class="w-full rounded text-neutral-500" type="text" name="name" id="name" placeholder="First name">
                            </div>
                            <div class="md:grow flex flex-col items-start">
                                <label for="lastname" class="font-bold">Last name *</label>
                                <input class="w-full rounded text-neutral-500" type="text" name="lastname" id="lastname" placeholder="Last name">
                            </div>
                        </div>

                        <div class="w-full flex flex-col md:flex-row md:justify-between md:gap-x-4 mt-6 gap-y-6">
                            <div class="md:grow flex flex-col items-start">
                                <label for="email" class="font-bold">Email address *</label>
                                <input class="w-full rounded text-neutral-500" type="text" name="email" id="email" placeholder="Email Address ">
                            </div>
                        </div>

                        <div class="w-full flex flex-col mt-6 gap-y-6">
                            <div class="md:grow flex flex-col items-start h-40">
                                <label for="message" class="font-bold">Message *</label>
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