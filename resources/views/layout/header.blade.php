<nav class="fixed top-0 left-0 w-full glassmorphism shadow-lg p-4 md:p-6 flex justify-between items-center rounded-b-lg z-50 bg-white">
    <div class="text-2xl font-extrabold tracking-wide text-[#4b7d44]">Learner</div>

    <!-- Mobile Menu Button -->
    <button id="menu-btn" class="md:hidden focus:outline-none" aria-label="Toggle Menu" aria-expanded="false">
        <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <!-- Navigation Links -->
    <ul id="menu" class="hidden md:flex space-x-8 text-lg font-medium transition-all duration-300">
        <li><a href="{{route('front.index')}}" class="hover:text-gray-500 transition duration-300">Home</a></li>
        <li><a href="{{route('front.about')}}" class="hover:text-gray-500 transition duration-300">About</a></li>
        <li><a href="{{route('front.service')}}" class="hover:text-gray-500 transition duration-300">Services</a></li>
        <li><a href="{{route('front.contact')}}" class="hover:text-gray-500 transition duration-300">Contact</a></li>
    </ul>

    <!-- Sign Up Button -->
    <button class="hidden md:block px-5 py-2 bg-[#76c26c] hover:bg-[#68ad5d] text-white font-semibold rounded-lg transition duration-300 shadow-md">
        Sign Up
    </button>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden fixed top-16 left-0 w-full bg-white shadow-lg p-5 rounded-b-lg transition-all duration-300 md:hidden">
    <ul class="flex flex-col space-y-4 text-lg font-medium">
        <li><a href="{{route('front.index')}}" class="hover:text-gray-500 transition duration-300">Home</a></li>
        <li><a href="{{route('front.about')}}" class="hover:text-gray-500 transition duration-300">About</a></li>
        <li><a href="{{route('front.service')}}" class="hover:text-gray-500 transition duration-300">Services</a></li>
        <li><a href="{{route('front.contact')}}" class="hover:text-gray-500 transition duration-300">Contact</a></li>
    </ul>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', function () {
        const isOpen = mobileMenu.classList.contains('hidden');

        mobileMenu.classList.toggle('hidden', !isOpen);
        menuBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
});
</script>
