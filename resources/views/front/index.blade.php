@extends('layout.main')

@section('content')
    {{-- BANNER --}}
    <div class="flex justify-center py-2 bg-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-10  max-w-7xl">
            <div class="flex flex-col justify-center space-y-6">
                <h1 class="text-5xl font-bold text-gray-800 leading-tight">
                    Shape the Next Generation of AI with Your Expertise
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni id earum ullam voluptas veniam magnam
                    harum. Quam, quia?</p>
                <a href="#"
                    class="bg-green-500 hover:bg-green-600 text-white w-1/2 font-semibold py-3 px-6 rounded-lg transition duration-300 ease-in-out">
                    <span class="flex justify-center">Explore More</span>
                </a>
            </div>
            <div class="flex justify-center">
                <img src="https://cdn.pixabay.com/photo/2024/09/08/08/52/man-9031574_1280.png" alt="AI Expert"
                    class="max-w-full h-auto">
            </div>
        </div>
    </div>

    {{-- content --}}
    <div class="flex justify-center py-6">
        <h1 class="text-4xl font-bold text-center text-gray-800 max-w-3xl leading-snug">
            Share Your Expertise and Get Paid Working Where and When You Want
        </h1>
    </div>

    {{-- Grid Section --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto py-8">

        {{-- Card 1 --}}
        <div
            class="bg-white rounded-xl shadow-lg shadow-[#7ed49ffe] overflow-hidden p-6 flex flex-col items-center text-center">
            <img src="https://cdn.pixabay.com/photo/2017/02/19/02/46/seo-2078785_1280.png" alt="Image 1"
                class="w-32 h-32 object-cover rounded-full mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Heading 1</h2>
            <p class="text-gray-600 mt-2">
                Description content here. A short and engaging summary about the topic.
            </p>
        </div>

        {{-- Card 2 --}}
        <div
            class="bg-white rounded-xl shadow-lg shadow-[#7ed49ffe]  overflow-hidden p-6 flex flex-col items-center text-center">
            <img src="https://cdn.pixabay.com/photo/2024/09/04/19/11/website-9022660_1280.png" alt="Image 2"
                class="w-32 h-32 object-cover rounded-full mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Heading 2</h2>
            <p class="text-gray-600 mt-2">
                Description content here. A short and engaging summary about the topic.
            </p>
        </div>

        {{-- Card 3 --}}
        <div
            class="bg-white rounded-xl shadow-lg shadow-[#7ed49ffe]  overflow-hidden p-6 flex flex-col items-center text-center">
            <img src="https://cdn.pixabay.com/photo/2017/01/28/20/39/seo-2016484_1280.jpg" alt="Image 3"
                class="w-32 h-32 object-cover rounded-full mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Heading 3</h2>
            <p class="text-gray-600 mt-2">
                Description content here. A short and engaging summary about the topic.
            </p>
        </div>

    </div>

    <div class="max-w-screen-xl mx-auto py-12 px-6 lg:py-16 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-bold tracking-tight text-primary-800">Features</h2>
        </div>

        <div class="flex flex-col md:flex-row items-center md:items-start">
            <!-- Feature Image -->
            <div class="w-full md:w-1/2 mb-8 md:mb-0 md:pr-8">
                <img class="w-full rounded-lg shadow-lg h-1/2"
                    src="https://cdn.pixabay.com/photo/2022/10/04/04/41/online-7497335_1280.jpg" alt="Highlighted Features">
            </div>
            <!-- End Feature Image -->

            <!-- Features List -->
            <div class="w-full md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="p-6 border-l-4 border-green-500 bg-white shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Dynamic Personalization</h3>
                    <p class="text-gray-700 text-sm">Our platform adapts to user behavior in real-time, offering tailored
                        recommendations and dynamic content to enhance user experience.</p>
                </div>
                <div class="p-6 border-l-4 border-green-500 bg-white shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Mobile-Optimized Interface</h3>
                    <p class="text-gray-700 text-sm">Designed with a mobile-first approach, our platform ensures seamless
                        navigation and functionality across all devices.</p>
                </div>
                <div class="p-6 border-l-4 border-green-500 bg-white shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">24/7 Customer Support</h3>
                    <p class="text-gray-700 text-sm">Our dedicated support team is available around the clock via email,
                        phone, and live chat to assist with any inquiries.</p>
                </div>
                <div class="p-6 border-l-4 border-green-500 bg-white shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Secure Payment Processing</h3>
                    <p class="text-gray-700 text-sm">We implement advanced security protocols to safeguard customer
                        transactions and sensitive data.</p>
                </div>
            </div>
            <!-- End Features List -->
        </div>
    </div>



    <!-- our services section -->
    <section class="py-10" id="services">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:scale-110 transition-transform">
                    <img src="https://cdn.pixabay.com/photo/2016/04/21/13/27/computer-1343393_1280.jpg"
                        alt="wheat flour grinding" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-medium text-gray-800 mb-2">Our Development Service</h3>
                        <p class="text-gray-700 text-base">The development of transistors in the late 1940s at Bell
                            Laboratories allowed a new generation of computers to be designed with greatly reduced power
                            consumption. The first commercially available stored-program computer, the Ferranti Mark I,
                            contained 4050 valves and had a power consumption of 25 kilowatts. By comparison, the first
                            transistorized computer developed at the University of Manchester and operational by November
                            1953, consumed only 150 watts in its final version.
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:scale-110 transition-transform">
                    <img src="https://cdn.pixabay.com/photo/2024/06/22/18/09/ai-generated-8846756_1280.jpg" alt="Coffee"
                        class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-medium text-gray-800 mb-2">AI and AIML</h3>
                        <p class="text-gray-700 text-base">Several other breakthroughs in semiconductor technology include
                            the integrated circuit invented by Jack Kilby at Texas Instruments and Robert Noyce at Fairchild
                            Semiconductor in 1959, the first planar silicon dioxide transistors by Frosch and Derick in
                            1957,[16] the MOSFET demonstration by a Bell Labs team,[17][18][19][20] the planar process by
                            Jean Hoerni in 1959,[21][22][23] and the microprocessor invented by Ted Hoff, Federico Faggin,
                            Masatoshi Shima, and Stanley Mazor at Intel in 1971. These important inventions led to the
                            development of the personal computer (PC) in the 1970s, and the emergence of information and
                            communications technology (ICT).
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:scale-110 transition-transform">
                    <img src="https://cdn.pixabay.com/photo/2024/04/01/13/21/ai-generated-8668923_1280.jpg"
                        alt="Coffee" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-medium text-gray-800 mb-2">Cloud Computing</h3>
                        <p class="text-gray-700 text-base">Several other breakthroughs in semiconductor technology include
                            the integrated circuit invented by Jack Kilby at Texas Instruments and Robert Noyce at Fairchild
                            Semiconductor in 1959, the first planar silicon dioxide transistors by Frosch and Derick in
                            1957,[16] the MOSFET demonstration by a Bell Labs team,[17][18][19][20] the planar process by
                            Jean Hoerni in 1959,[21][22][23] and the microprocessor invented by Ted Hoff, Federico Faggin,
                            Masatoshi Shima, and Stanley Mazor at Intel in 1971. These important inventions led to the
                            development of the personal computer (PC) in the 1970s, and the emergence of information and
                            communications technology (ICT).
                            {{-- <details>
                            <summary>Read More</summary>
                            <p>Our jowar flour is also
                                a good source of protein and fiber, making it a healthy choice for your family.</p>
                        
                            </details> --}}
                        </p>

                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:scale-110 transition-transform">
                    <img src="https://cdn.pixabay.com/photo/2023/08/18/08/05/woman-8198027_1280.jpg"
                        alt="Coffee" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-medium text-gray-800 mb-2">Robo AI</h3>
                        <p class="text-gray-700 text-base">Innovations in technology have already revolutionized the world by the twenty-first century as people have gained access to different online services. This has changed the workforce drastically as thirty percent of U.S. workers were already in careers in this profession. 136.9 million people were personally connected to the Internet, which was equivalent to 51 million households.[26] Along with the Internet, new types of technology were also being introduced across the globe, which has improved efficiency and made things easier across the globe.

                            As technology revolutionized society, millions of processes could be completed in seconds. Innovations in communication were crucial as people increasingly relied on computers to communicate via telephone lines and cable networks. The introduction of the email was considered revolutionary as "companies in one part of the world could communicate by e-mail with suppliers and buyers in another part of the world...".[27]
                        </p>
                    </div>
                </div>
                <!-- special card -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:scale-110 transition-transform">
                    <div class="text-center text-white font-medium">Special product</div>
                    <img src="https://cdn.pixabay.com/photo/2019/09/29/22/06/light-bulb-4514505_1280.jpg"
                        alt="Coffee" class="w-full h-64 object-cover rounded-t-lg">
                    <div class="p-0 bg-white text-center rounded-b-lg md:min-h-full">
                        <h3 class="text-xl font-medium text-gray-800 mb-2">Idea Innovation </h3>
                        <p class="text-gray-700 text-base"><span class="font-medium underline">IBM introduced the first hard disk drive in 1956, as a component of their 305 RAMAC computer system.[33]: 6  Most digital data today is still stored magnetically on hard disks, or optically on media such as CD-ROMs.[34]: 4–5  Until 2002 most information was stored on analog devices, but that year digital storage capacity exceeded analog for the first time. As of 2007, almost 94% of the data stored worldwide was held digitally:[35] 52% on hard disks, 28% on optical devices, and 11% on digital magnetic tape. It has been estimated that the worldwide capacity to store information on electronic devices grew from less than 3 exabytes in 1986 to 295 exabytes in 2007,[36] doubling roughly every 3 years
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:scale-110 transition-transform">
                    <img src="https://cdn.pixabay.com/photo/2023/05/16/13/40/ai-generated-7997620_1280.jpg"
                        alt="papad" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-medium text-gray-800 mb-2">Easy Tech</h3>
                        <p class="text-gray-700 text-base">Hilbert and Lopez identify the exponential pace of technological change (a kind of Moore's law): machines' application-specific capacity to compute information per capita roughly doubled every 14 months between 1986 and 2007; the per capita capacity of the world's general-purpose computers doubled every 18 months during the same two decades; the global telecommunication capacity per capita doubled every 34 months; the world's storage capacity per capita required roughly 40 months to double (every 3 years); and per capita broadcast information has doubled every 12.3 years
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- about us -->
    <section class="bg-gray-100" id="aboutus">
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

   
    <!-- Visit us section -->
    <section class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:py-20 lg:px-8">
            <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900" id="contactUs">Visit Our Location</h2>
                <p class="mt-3 text-lg text-gray-500">Let us serve you the best</p>
            </div>
            <div class="mt-8 lg:mt-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="text-lg font-bold text-gray-900">Contact</h3>
                                <p class="mt-1 font-bold text-gray-600"><a href="tel:+123">Phone: +91
                                        123456789</a></p>
                                <a class="flex m-1" href="tel:+919823331842">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="flex items-center justify-between h-10 w-30 rounded-md bg-indigo-500 text-white p-2">
                                            <!-- Heroicon name: phone -->
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                            </svg>
                                            Call now
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Our Address</h3>
                                <p class="mt-1 text-gray-600">Sale galli, 60 foot road, Latur</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Hours</h3>
                                <p class="mt-1 text-gray-600">Monday - Sunday : 2pm - 9pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg overflow-hidden order-none sm:order-first">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.7850672491236!2d76.58802159999999!3d18.402630699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcf83ca88e84341%3A0x841e547bf3ad066d!2zQmFwcGEgZmxvdXIgbWlsbCB8IOCkrOCkquCljeCkquCkviDgpKrgpYDgpKAg4KSX4KS_4KSw4KSj4KWALCDgpK7gpL_gpLDgpJrgpYAg4KSV4KS-4KSC4KSh4KSqIOCkhuCko-CkvyDgpLbgpYfgpLXgpL7gpK_gpL4!5e0!3m2!1sen!2sin!4v1713433597892!5m2!1sen!2sin"
                            class="w-full" width="600" height="450" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section>
        <footer class="bg-gray-200 text-black py-4 px-3">
            <div class="container mx-auto flex flex-wrap items-center justify-between">
                <div class="w-full md:w-1/2 md:text-center md:mb-4 mb-8">
                    <p class="text-xs text-gray-900 md:text-sm">Copyright 2024 &copy; All Rights Reserved</p>
                </div>
                <div class="w-full md:w-1/2 md:text-center md:mb-0 mb-8">
                    <ul class="list-reset flex justify-center flex-wrap text-xs md:text-sm gap-3">
                        <li><a href="#contactUs" class="text-gray-900 hover:text-white">Contact</a></li>
                        <li class="mx-4"><a href="/privacy" class="text-gray-900 hover:text-white">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>

    <script>
        document.getElementById("hamburger").onclick = function toggleMenu() {
            const navToggle = document.getElementsByClassName("toggle");
            for (let i = 0; i < navToggle.length; i++) {
                navToggle.item(i).classList.toggle("hidden");
            }
        };
    </script>
@endsection
