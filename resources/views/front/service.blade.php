@extends('layout.main')

@section('content')
{{-- Grid Section --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto pt-44">

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


@endsection