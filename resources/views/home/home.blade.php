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
