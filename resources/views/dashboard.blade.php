<x-layouts.app :title="__('Dashboard')">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <header class="bg-white shadow p-4 flex justify-between items-center px-6">
            <h2 class="text-xl font-semibold text-gray-700">Dashboard Overview</h2>
            <div class="flex items-center gap-4">
                <input type="text" placeholder="Search..."
                    class="p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 outline-none">
               <a href="{{ route('logout') }}"> <button
                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition">Logout</button>
       </a>
                </div>
        </header>

        <!-- Main Content -->
        <main class="flex justify-center py-12 px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 w-full max-w-7xl">
                <!-- Card Component -->
                <div class="bg-white rounded-lg shadow-md p-6 relative">
                    <div class="absolute -top-5 left-5 bg-blue-100 p-3 rounded-lg">
                        <img src="https://cdn.pixabay.com/photo/2018/04/06/21/18/silhouette-3296991_1280.png"
                            class="w-8 h-8">
                    </div>
                    <p class="mt-6 text-gray-500 text-sm font-bold">Followers</p>
                    <p class="text-2xl font-semibold">+245</p>
                    <p class="mt-2 text-gray-400 text-xs font-bold">🔄 Just Updated</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 relative">
                    <div class="absolute -top-5 left-5 bg-pink-500 p-3 rounded-lg">
                        <img src="https://cdn.pixabay.com/photo/2020/09/17/22/52/website-5580513_1280.png"
                            class="w-8 h-8">
                    </div>
                    <p class="mt-6 text-gray-500 text-sm font-bold">Website Visits</p>
                    <p class="text-2xl font-semibold">75,521</p>
                    <p class="mt-2 text-gray-400 text-xs font-bold">🏷️ Tracked from Google Analytics</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 relative">
                    <div class="absolute -top-5 left-5 bg-green-500 p-3 rounded-lg">
                        <img src="https://cdn-icons-png.flaticon.com/512/263/263142.png" class="w-8 h-8">
                    </div>
                    <p class="mt-6 text-gray-500 text-sm font-bold">Revenue</p>
                    <p class="text-2xl font-semibold">$34,245</p>
                    <p class="mt-2 text-gray-400 text-xs font-bold">📅 Last 24 Hours</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 relative">
                    <div class="absolute -top-5 left-5 bg-orange-500 p-3 rounded-lg">
                        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" class="w-8 h-8">
                    </div>
                    <p class="mt-6 text-gray-500 text-sm font-bold">Bookings</p>
                    <p class="text-2xl font-semibold">184</p>
                    <p class="mt-2 text-red-500 text-xs font-bold">⚠️ Get More Space...</p>
                </div>
            </div>
        </main>

        <div class="mt-6 space-y-4">
            <h2 class="text-2xl font-bold text-gray-800">Recent Activities</h2>
            
            <div class="overflow-hidden rounded-lg shadow-md">
                <table class="w-full bg-white">
                    <thead class="bg-[#76C26C] text-gray-700 text-sm uppercase">
                        <tr>
                            <th class="py-3 px-4 text-left">Date</th>
                            <th class="py-3 px-4 text-left">Activity</th>
                            <th class="py-3 px-4 text-left">Participants</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-gray-700">
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4">2024-09-01</td>
                            <td class="py-3 px-4">Activity one</td>
                            <td class="py-3 px-4">20</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4">2024-09-15</td>
                            <td class="py-3 px-4">Activity Two</td>
                            <td class="py-3 px-4">30</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4">2024-09-25</td>
                            <td class="py-3 px-4">Activity Three</td>
                            <td class="py-3 px-4">25</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
            <div class="w-full flex justify-center">
                <img src="https://cdn.pixabay.com/photo/2016/10/17/18/54/world-map-1748403_1280.png" alt="Recent Activity Image" class="rounded-lg shadow-md w-full max-w-full">
            </div>
        </div>
        
    </div>
    <footer class="bg-[#76C26C] text-black py-8">
        <div class="container mx-auto px-6">
            <!-- Social Media & Copyright -->
            <div class="flex flex-col md:flex-row items-center justify-center">
                <p class="text-black text-sm">&copy; 2025 RVG. All Rights Reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    
</x-layouts.app>
