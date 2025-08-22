@extends('app')

@section('content')
    <div class="pt-20 relative w-full h-screen overflow-hidden">
        <img src="{{ asset('assets/home2.png') }}" alt="Hero Background"
            class="absolute inset-0 w-full h-full object-cover -z-10" />

        <!-- Fade Gradient Bottom -->
        <div class="absolute inset-x-0 bottom-0 h-64 bg-gradient-to-b from-transparent to-black -z-10"></div>

        <!-- Overlay Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4 md:px-10">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold font-poppins text-white leading-tight">
                TIME TO <span class="text-yellow-400">SEE SOMEPLACE</span><br>
                ON YOUR <span class="text-blue-400">SCREEN</span>
            </h1>
            <a href="{{ route('showVR') }}"
                class="mt-6 inline-flex items-center bg-gray-800 text-yellow-300 text-sm sm:text-base font-semibold px-6 py-2 rounded-full hover:bg-blue-800 transition">
                LET'S TRY ON
            </a>
            <p class="mt-6 text-white text-base sm:text-lg md:text-xl max-w-xl font-poppins">
                RISMART—the ultimate platform that brings tourism to life through Virtual Reality (VR) and Augmented Reality
                (AR).
            </p>
        </div>
    </div>



    <!-- VR SECTION -->
    <section class="w-full bg-black py-16 md:py-24 px-4 md:px-10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <!-- Image Section -->
            <div class="flex justify-center">
                <img src="{{ asset('assets/vr.jpeg') }}" alt="VR Headset"
                    class="w-full max-w-xs sm:max-w-sm md:max-w-md object-contain">
            </div>

            <!-- Text Section -->
            <div class="text-center md:text-left text-amber-500">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                    What is <span class="text-purple-700">VR?</span>
                </h2>
                <p class="text-gray-500 text-base sm:text-lg md:text-xl leading-relaxed font-poppins">
                    Virtual Reality (VR) is a computer-generated environment that simulates a real or imaginary world,
                    allowing users to interact with it as if they were physically present.
                    <br><br>
                    When using VR, you typically wear a VR headset that covers your eyes and displays a 3D virtual world.
                </p>
            </div>
        </div>
    </section>


    <!-- AR SECTION -->
    <section class="w-full bg-gradient-to-t from-blue-950 to-black py-16 md:py-24 px-4 md:px-10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <!-- Text Section -->
            <div class="text-center md:text-left">
                <h2 class="text-3xl text-amber-500 sm:text-4xl md:text-5xl font-bold mb-6">Same as <span class="text-purple-700">AR?</span></h2>
                <p class="text-white text-base sm:text-lg md:text-xl leading-relaxed font-poppins">
                    Augmented Reality (AR) overlays digital information—like images, sounds, or 3D models—onto the real
                    world
                    through a device, such as a smartphone or AR glasses.
                    <br><br>
                    Unlike VR which fully immerses you in a virtual space, AR enhances your physical environment
                    with interactive digital elements.
                </p>
            </div>

            <!-- Image Section -->
            <div class="flex justify-center">
                <img src="{{ asset('assets/ar.png') }}" alt="AR Navigation"
                    class="w-full max-w-xs sm:max-w-sm md:max-w-md object-contain rounded-3xl">
            </div>
        </div>
    </section>


    <!-- TEAM SLIDER SECTION -->
    <!-- TEAM SLIDER SECTION -->
    <section class="w-full py-20 bg-gradient-to-t from-yellow-500 via-blue-900 via-20 to-blue-950 h-[1000px]">

        <div class="relative max-w-4xl mx-auto bg-blue-950 shadow-xl rounded-xl py-3 px-5 z-7">
            <div class="swiper team-swiper">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                            <!-- Text -->
                            <div class="md:w-3/5 order-2 md:order-1">
                                <h3 class="text-2xl font-bold text-slate-100">
                                    Prof. Dr. Ika Barokah Suryaningsih, S.E., M.M., CPIA., CHRM., CRP., QIA.
                                </h3>
                                <p class="mt-4 text-lg text-white/70 leading-relaxed">
                                    "Virtual Reality (VR) is a computer-generated environment that simulates a real or
                                    imaginary world..."
                                </p>
                            </div>

                            <!-- Image + Buttons -->
                            <div class="md:w-2/5 order-1 md:order-2 flex flex-col items-center">
                                <div class="relative w-full max-w-[280px]">
                                    <img src="{{ asset('assets/bunda.png') }}" alt="Prof Ika" class="w-full object-contain">
                                </div>
                                <!-- Navigation moved below image -->
                                <div class="flex justify-center gap-4 mt-6">
                                    <div class="swiper-button-prev !static !m-0"></div>
                                    <div class="swiper-button-next !static !m-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 ">
                            <!-- Text -->
                            <div class="md:w-3/5 order-2 md:order-1">
                                <h3 class="text-2xl font-bold text-slate-100">
                                    Prof. Dr. Sumani, S.E., M.Si., CRA.
                                </h3>
                                <p class="mt-4 text-lg text-white/70 leading-relaxed">
                                    "Virtual Reality (VR) is a computer-generated environment that simulates a real or
                                    imaginary world..."
                                </p>
                            </div>

                            <!-- Image + Buttons -->
                            <div class="md:w-2/5 order-1 md:order-2 flex flex-col items-center">
                                <div class="relative w-full max-w-[280px]">
                                    <img src="{{ asset('assets/paksum.png') }}" alt="Prof Sumani"
                                        class="w-full object-contain">
                                </div>
                                <!-- Navigation moved below image -->
                                <div class="flex justify-center gap-4 mt-6">
                                    <div class="swiper-button-prev !static !m-0"></div>
                                    <div class="swiper-button-next !static !m-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- End swiper-wrapper -->
            </div>
        </div>
    </section>
    <section class="bg-yellow-500 h-[1000px]">

    </section>
    {{-- <img src="{{asset('assets/wave.svg')}}" alt="" class="w-full h-1/2 block"> --}}


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom Style -->
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            position: static !important;
            /* Biar tidak absolute */
            color: #4b5563;
            background: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 20px;
        }
    </style>


    <!-- Init Swiper -->
    <script>
        var swiper = new Swiper('.team-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endsection
