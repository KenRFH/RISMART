@extends('app')

@section('content')
    <!-- HERO SECTION -->
    <section class="relative w-full h-screen overflow-hidden">
        <div class="swiper hero-swiper h-full">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 h-full">
                        <!-- Left Content -->
                        <div class="flex flex-col justify-center p-10 bg-black text-white">
                            <h3 class="text-sm font-semibold tracking-widest mb-4">SPOTLIGHT</h3>
                            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                                Discover Indonesia's Iconic Treasures
                            </h1>
                            <p class="text-lg mb-6">
                                Immerse yourself in Indonesia's vibrant culture through its unique handicrafts,
                                rich traditions, and mouth-watering culinary delights.
                            </p>
                            <a href="#"
                                class="inline-block px-6 py-3 border border-white text-white font-medium rounded-md hover:bg-white hover:text-black transition">
                                Explore Indonesia’s Hallmark →
                            </a>
                        </div>
                        <!-- Right Image -->
                        <div class="relative">
                            <img src="{{ asset('assets/jember.jpeg') }}" alt="Village"
                                class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-0 left-0 p-6 bg-gradient-to-t from-black/70 to-transparent text-white">
                                <h2 class="text-xl font-semibold">5 Award-Winning Tourist Villages</h2>
                                <p class="text-sm">Looking for something different to start your holiday?...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 h-full bg-black">
                        <!-- Left Content -->
                        <div class="flex flex-col justify-center p-10 bg-black text-white">
                            <h3 class="text-sm font-semibold tracking-widest mb-4">SPOTLIGHT</h3>
                            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                                Explore Wonderful Indonesia
                            </h1>
                            <p class="text-lg mb-6">
                                From beaches to mountains, Indonesia offers endless natural wonders
                                waiting to be explored.
                            </p>
                            <a href="#"
                                class="inline-block px-6 py-3 border border-white text-white font-medium rounded-md hover:bg-white hover:text-black transition">
                                Start Your Journey →
                            </a>
                        </div>
                        <!-- Right Image -->
                        <div class="relative">
                            <img src="{{ asset('assets/unej.webp') }}" alt="Beach"
                                class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-0 left-0 p-6 bg-gradient-to-t from-black to-transparent text-white">
                                <h2 class="text-xl font-semibold">7 Tourism Awards</h2>
                                <p class="text-sm">Indonesia is widely known to boast its cultural heritages...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination fraction -->
            <div class="swiper-pagination !bottom-6 !left-10 !w-auto"></div>
            <!-- Nav Buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- VR SECTION -->
    <section class="w-full bg-white py-20 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center">
                <img src="{{ asset('assets/vr2.png') }}" alt="VR Headset" class="w-full max-w-sm md:max-w-md object-cover">
            </div>
            <div class="text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-amber-400">
                    What is <span class="text-purple-500">VR?</span>
                </h2>
                <p class="text-black text-lg leading-relaxed font-poppins">
                    Virtual Reality (VR) is a computer-generated environment that simulates
                    a real or imaginary world, allowing users to interact with it as if
                    they were physically present. <br><br>
                    Typically, VR requires a headset that covers your eyes and immerses
                    you in a 3D environment.
                </p>
            </div>
        </div>
    </section>

    <!-- AR SECTION -->
    <section class="w-full bg-white py-20 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="text-center md:text-left order-2 md:order-1">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-amber-400">
                    Same as <span class="text-purple-500">AR?</span>
                </h2>
                <p class="text-slate-600 text-lg leading-relaxed font-poppins">
                    Augmented Reality (AR) overlays digital information—like images, sounds,
                    or 3D models—onto the real world through devices such as smartphones or AR glasses.
                    <br><br>
                    Unlike VR which fully immerses you, AR enhances your environment with interactive digital elements.
                </p>
            </div>
            <div class="flex justify-center order-1 md:order-2">
                <img src="{{ asset('assets/ar.png') }}" alt="AR Navigation"
                    class="w-full max-w-sm md:max-w-md object-cover">
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section class="relative w-full py-24">
        <img src="{{ asset('assets/unej.webp') }}" alt="Background"
            class="absolute inset-0 w-full h-full object-cover opacity-80" />
        <div class="absolute inset-0 bg-gradient-to-b from-white via-transparent to-black/70"></div>

        <div class="relative max-w-5xl mx-auto shadow-2xl rounded-2xl mt-20 py-10 px-6 md:px-12 z-10 bg-white/70">
            <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-800 mb-12">Our Team</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
                <!-- Left (Text tetap) -->
                <div>
                    <h3 class="text-2xl font-bold text-slate-700">
                        Meet Our Professors
                    </h3>
                    <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                        Experts and mentors who support the development of immersive tourism through VR and AR.
                    </p>
                </div>

                <!-- Right (Swiper hanya gambar) -->
                <div class="swiper team-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('assets/bunda.png') }}" alt="Prof Ika" class="max-w-[260px]">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('assets/paksum.png') }}" alt="Prof Sumani" class="max-w-[260px]">
                        </div>
                    </div>
                    <!-- Nav & Pagination -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination mt-6"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admin log in access -->
    <div class="fixed bottom-6 right-6 z-50 group">
        <!-- Bubble Text -->
        <span
            class="absolute right-16 bottom-1/2 translate-y-1/2 whitespace-nowrap bg-black text-white text-sm px-4 py-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 group-hover:translate-x-0 -translate-x-2 transition-all duration-300">
            Are you an Admin? Log In!
        </span>

        <!-- Circle Button -->
        <a href="{{ route('login') }}"
        class="w-14 h-14 p-3 rounded-full bg-amber-500 flex items-center justify-center shadow-lg hover:bg-amber-600 transition">
            <svg fill="#ffffff" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M276.941 440.584v565.722c0 422.4 374.174 625.468 674.71 788.668l8.02 4.292 8.131-4.292c300.537-163.2 674.71-366.268 674.71-788.668V440.584l-682.84-321.657L276.94 440.584Zm682.73 1479.529c-9.262 0-18.523-2.372-26.993-6.89l-34.9-18.974C588.095
                    1726.08 164 1495.906 164 1006.306V404.78c0-21.91 12.65-41.788 32.414-51.162L935.727 5.42c15.134-7.228 32.866-7.228 48 0l739.313 348.2c19.765 9.374 32.414 29.252 32.414 51.162v601.525c0 489.6-424.207 719.774-733.779 887.943l-34.899 18.975c-8.47 4.517-17.731
                    6.889-27.105 6.889Zm467.158-547.652h-313.412l-91.595-91.482v-83.803H905.041v-116.78h-83.69l-58.503-58.504c-1.92.113-3.84.113-5.76.113-176.075 0-319.285-143.21-319.285-319.285 0-176.075 143.21-319.398 319.285-319.398 176.075 0 319.285 143.323 319.285 319.398
                    0 1.92 0 3.84-.113 5.647l350.57 350.682v313.412Zm-266.654-112.941h153.713v-153.713L958.462 750.155l3.953-37.27c1.017-123.897-91.595-216.621-205.327-216.621S550.744 588.988 550.744 702.72c0 113.845 92.612 206.344 206.344 206.344l47.21-5.309 63.811
                    63.7h149.873v116.78h116.781v149.986l25.412 25.299Zm-313.4-553.57c0 46.758-37.949 84.706-84.706 84.706-46.758 0-84.706-37.948-84.706-84.706s37.948-84.706 84.706-84.706c46.757 0 84.706 37.948 84.706 84.706" fill-rule="evenodd"></path>
                </g>
            </svg>
        </a>
    </div>


    <!-- Swiper CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Init Swiper -->
    <script>
        var heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.hero-swiper .swiper-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.hero-swiper .swiper-button-next',
                prevEl: '.hero-swiper .swiper-button-prev',
            },
        });

        var teamSwiper = new Swiper('.team-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.team-swiper .swiper-button-next',
                prevEl: '.team-swiper .swiper-button-prev',
            },
            pagination: {
                el: '.team-swiper .swiper-pagination',
                clickable: true,
            },
        });
    </script>
@endsection
