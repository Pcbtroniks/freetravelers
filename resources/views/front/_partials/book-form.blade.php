<!-- Overlay Book Form -->

<div id="OverlayBookEvent" class="overlay-book-form  h-full w-0 fixed z-50 top-0 left-0 bg-[#e4e4e7] overflow-x-hidden duration-500">
    

    <a href="javascript:void(0)" onclick="CloseBookEvent()" class="absolute top-1 right-3 p-2 text-6xl text-[#818181] block duration-300 focus:text-[#f1f1f1] hover:text-[#f1f1f1]"> &times; </a>

    <div class="overlay-menu-content relative top-20 md:h-1/6 w-full text-center mt-8 md:mt-0 flex flex-col">
        
        <div class="w-full px-4 text-center">

            <form action="#" method="POST">
                <div class="max-w-4xl mx-auto">
                    
                    <div class="w-full">
                        <select name="event" id="eventSelect" class="w-full rounded text-neutral-500">
                            <option value="null" disabled selected>Select event...</option>
                            <option value="buenos-aires">Buenos Aires</option>
                            <option value="francia">Francia</option>
                            <option value="Guadalajara">Guadalajara</option>
                        </select>
                    </div>
                
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
                        <div class="grow">
                            <input class="w-full rounded text-neutral-500" type="text" name="phone" id="phone" placeholder="Phone">
                        </div>
                    </div>

                    <div class="w-full flex flex-col md:flex-row md:justify-between md:gap-x-4 mt-6 gap-y-6">
                        <div class="grow">
                            <input class="w-full rounded text-neutral-500" type="text" name="number_of_guest" id="number_of_guest" placeholder="Number of guest ">
                        </div>
                        <div class="grow">
                            <input class="w-full rounded text-neutral-500" type="text" name="age" id="age" placeholder="Estimated age">
                        </div>
                    </div>

                    <div class="w-full flex flex-col mt-6 gap-y-6 md:h-28">
                        <div>
                            <textarea name="comments" id="comments" class="w-full h-full" placeholder="Some Comments?"></textarea>
                        </div>
                    </div>

                    <div class="w-full mt-6 flex justify-end">
                        <button type="submit" class="border border-black rounded uppercase font-bold bg-white px-4 py-2">Send Request</button>
                    </div>

                </div>
            </form>
        
        </div>
    
    </div>
</div>