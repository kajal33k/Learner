@extends('layout.main')
@section('content')

<section class="relative bg-gradient-to-r from-gray-600 to-green-700 text-white py-20 mt-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold">About Us</h1>
            <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto text-blue-100">
                Learn more about our mission, values, and the passionate team behind our services.
            </p>
        </div>
    </div>

    <!-- Optional Decorative SVG -->
    <div class="absolute bottom-0 w-full">
        <svg class="w-full h-16 text-white" fill="currentColor" viewBox="0 0 1440 320">
            <path fill-opacity="1"
                  d="M0,192L80,202.7C160,213,320,235,480,240C640,245,800,235,960,218.7C1120,203,1280,181,1360,170.7L1440,160V320H0Z">
            </path>
        </svg>
    </div>
</section>

 <!-- about us -->
 <section class="bg-white" id="aboutus">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">About Us</h2>
                <p class="mt-4 text-gray-600 text-lg">
                    During the early computing, Alan Turing, J. Presper Eckert, and John Mauchly were considered some of
                    the major pioneers of computer technology in the mid-1900s. Giving them such credit for their
                    developments, most of their efforts were focused on designing the first digital computer. Along with
                    that, topics such as artificial intelligence began to be brought up as Turing was beginning to
                    question such technology of the time period.[8]</p>
            </div>
            <div class="mt-12 md:mt-0">
                <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image"
                    class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>

<!-- why us  -->
<section class="text-gray-700 body-font mt-10">
    <div class="flex justify-center text-3xl font-bold text-gray-800 text-center">
        Why Us?
    </div>
    <div class="container px-5 py-12 mx-auto">
        <div class="flex flex-wrap text-center justify-center">
            <div class="p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                    <div class="flex justify-center">
                        <img src="https://image3.jdomni.in/banner/13062021/58/97/7C/E53960D1295621EFCB5B13F335_1623567851299.png?output-format=webp"
                            class="w-32 mb-3">
                    </div>
                    <h2 class="title-font font-regular text-2xl text-gray-900">Latest Milling Machinery</h2>
                </div>
            </div>

            <div class="p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                    <div class="flex justify-center">
                        <img src="https://image2.jdomni.in/banner/13062021/3E/57/E8/1D6E23DD7E12571705CAC761E7_1623567977295.png?output-format=webp"
                            class="w-32 mb-3">
                    </div>
                    <h2 class="title-font font-regular text-2xl text-gray-900">Reasonable Rates</h2>
                </div>
            </div>

            <div class="p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                    <div class="flex justify-center">
                        <img src="https://image3.jdomni.in/banner/13062021/16/7E/7E/5A9920439E52EF309F27B43EEB_1623568010437.png?output-format=webp"
                            class="w-32 mb-3">
                    </div>
                    <h2 class="title-font font-regular text-2xl text-gray-900">Time Efficiency</h2>
                </div>
            </div>

            <div class="p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                    <div class="flex justify-center">
                        <img src="https://image3.jdomni.in/banner/13062021/EB/99/EE/8B46027500E987A5142ECC1CE1_1623567959360.png?output-format=webp"
                            class="w-32 mb-3">
                    </div>
                    <h2 class="title-font font-regular text-2xl text-gray-900">Expertise in Industry</h2>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection