<!-- footer -->
<footer class="bg-gray-900 text-white py-10 px-4">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Company Info -->
        <div>
            <h3 class="text-xl font-semibold mb-2">Your Company</h3>
            <p class="text-sm text-gray-400">
                Empowering your digital journey with innovative solutions. We are committed to excellence and impact.
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="text-lg font-semibold mb-3">Quick Links</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="/" class="hover:underline text-gray-300">Home</a></li>
                <li><a href="/about" class="hover:underline text-gray-300">About Us</a></li>
                <li><a href="#contactUs" class="hover:underline text-gray-300">Contact</a></li>
                <li><a href="/privacy" class="hover:underline text-gray-300">Privacy Policy</a></li>
            </ul>
        </div>

        <!-- Social or Contact -->
        <div>
            <h4 class="text-lg font-semibold mb-3">Connect With Us</h4>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-blue-500 transition"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-sky-400 transition"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-pink-400 transition"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-blue-300 transition"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div class="border-t border-gray-700 mt-8 pt-4 text-center text-sm text-gray-500">
        &copy; {{ now()->year }} Your Company. All rights reserved.
    </div>
</footer>
