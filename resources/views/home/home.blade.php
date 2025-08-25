@extends('app')

@section('content')
    <!-- HERO SECTION -->
    <div class="relative w-full h-screen overflow-hidden flex items-center justify-center">
        <img src="{{ asset('assets/home2.png') }}"
             alt="Hero Background"
             class="absolute inset-0 w-full h-full object-cover -z-10" />
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/30 to-blue-950 -z-10"></div>

        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold font-poppins text-white leading-tight drop-shadow-lg">
                TIME TO <span class="text-yellow-400">SEE SOMEPLACE</span><br>
                ON YOUR <span class="text-blue-400">SCREEN</span>
            </h1>
            <a href="{{ route('showVR') }}"
               class="mt-8 inline-block bg-yellow-400 text-gray-900 text-sm sm:text-base font-bold px-8 py-3 rounded-full shadow-lg hover:bg-yellow-500 hover:scale-105 transition">
                LET'S TRY ON
            </a>
            <p class="mt-8 text-gray-200 text-lg sm:text-xl md:text-2xl max-w-2xl mx-auto font-light font-poppins">
                RISMART — the ultimate platform that brings tourism to life through
                <span class="font-semibold text-yellow-300">Virtual Reality (VR)</span> and
                <span class="font-semibold text-blue-300">Augmented Reality (AR)</span>.
            </p>
        </div>
    </div>

    <!-- VR SECTION -->
    <section class="w-full bg-blue-950 py-20 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center">
                <img src="{{ asset('assets/vr2.png') }}"
                     alt="VR Headset"
                     class="w-full max-w-sm md:max-w-md object-cover">
            </div>
            <div class="text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-amber-400">
                    What is <span class="text-purple-500">VR?</span>
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed font-poppins">
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
                <img src="{{ asset('assets/ar.png') }}"
                     alt="AR Navigation"
                     class="w-full max-w-sm md:max-w-md object-cover">
            </div>
        </div>
    </section>

    <!-- TEAM SLIDER SECTION -->
    <!-- TEAM SLIDER SECTION -->
<!-- TEAM SLIDER SECTION -->
<!-- TEAM SLIDER SECTION -->
<section class="relative w-full py-24">
    <img src="{{ asset('assets/unej.webp') }}"
         alt="Background"
         class="absolute inset-0 w-full h-full object-cover opacity-80" />
    <div class="absolute inset-0 bg-gradient-to-b from-white via-transparent to-black/70"></div>

    <div class="relative max-w-5xl mx-auto bg-blur-sm backdrop-blur-md shadow-2xl rounded-2xl mt-20 py-10 px-6 md:px-12 z-10">
        <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-800 mb-12">Our Team</h2>

        <!-- Wrapper slider + tombol -->
        <div class="relative">
            <div class="swiper team-swiper relative">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col md:flex-row items-center gap-10">
                            <div class="md:w-3/5 order-2 md:order-1">
                                <h3 class="text-2xl font-bold text-slate-700">
                                    Prof. Dr. Ika Barokah Suryaningsih, S.E., M.M., CPIA., CHRM., CRP., QIA.
                                </h3>
                                <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                                    "Virtual Reality (VR) is a computer-generated environment that simulates a real or imaginary world..."
                                </p>
                            </div>
                            <div class="md:w-2/5 order-1 md:order-2 flex flex-col items-center">
                                <div class="w-full max-w-[260px]">
                                    <img src="{{ asset('assets/bunda.png') }}" alt="Prof Ika">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col md:flex-row items-center gap-10">
                            <div class="md:w-3/5 order-2 md:order-1">
                                <h3 class="text-2xl font-bold text-slate-700">
                                    Prof. Dr. Sumani, S.E., M.Si., CRA.
                                </h3>
                                <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                                    "Virtual Reality (VR) is a computer-generated environment that simulates a real or imaginary world..."
                                </p>
                            </div>
                            <div class="md:w-2/5 order-1 md:order-2 flex flex-col items-center">
                                <div class="w-full max-w-[260px]">
                                    <img src="{{ asset('assets/paksum.png') }}" alt="Prof Sumani">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End swiper-wrapper -->
            </div>

            <!-- Tombol Navigasi di bawah gambar slider -->
            <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 flex gap-6">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>





    <!-- Swiper CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom Style -->
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: #374151;
            background: white;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all .3s ease;
        }
        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: #facc15; /* amber-400 */
            color: #111827;
            transform: scale(1.1);
        }
        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 18px;
            font-weight: bold;
        }
    </style>

    <!-- Init Swiper -->
    <script>
        var swiper = new Swiper('.team-swiper', {
            slidesPerView: 1,
            spaceBetween: 40,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endsection
