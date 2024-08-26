<header class="bg-white border-b border-gray-200 dark:bg-gray-900">
    <nav class="flex items-center justify-between p-4 bg-gray-100">
        <div class="flex items-center">
            <img src="logo/phonestore_logo.webp" alt="Mobile Store Logo" class="h-8 w-8 mr-2">
            <span class="font-bold text-xl">Mobile Store</span>
        </div>
        <!-- Hamburger Menu Button -->
        <div class="lg:hidden">
            <button id="nav-toggle" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <!-- Navigation Links -->
        <ul id="nav-menu" class="hidden lg:flex lg:space-x-12 mr-24 flex-col lg:flex-row items-center justify-center lg:items-center bg-gray-100 lg:bg-transparent w-full lg:w-auto p-4 lg:p-0 absolute lg:relative top-16 left-0 lg:top-0 lg:left-auto shadow-lg lg:shadow-none z-50 lg:z-auto">
            <li><a href="#" class="text-center text-gray-700 hover:text-blue-500 lg:hover:bg-transparent hover:bg-gray-200 py-2 lg:py-0 block w-full">Home</a></li>
            <li><a href="#" class="text-center text-gray-700 hover:text-blue-500 lg:hover:bg-transparent hover:bg-gray-200 py-2 lg:py-0 block w-full">About</a></li>
            <li><a href="#" class="text-center text-gray-700 hover:text-blue-500 lg:hover:bg-transparent hover:bg-gray-200 py-2 lg:py-0 block w-full">Services</a></li>
            <li><a href="#" class="text-center text-gray-700 hover:text-blue-500 lg:hover:bg-transparent hover:bg-gray-200 py-2 lg:py-0 block w-full">Pricing</a></li>
            <li><a href="#" class="text-center text-gray-700 hover:text-blue-500 lg:hover:bg-transparent hover:bg-gray-200 py-2 lg:py-0 block w-full">Contact</a></li>
            <li class="relative">
                <button id="admin-toggle" class="text-center text-gray-700 hover:text-blue-500 lg:hover:bg-transparent hover:bg-gray-200 py-2 lg:py-0 block w-full">{{ Auth::user()->name ?? 'Welcome' }}</button>
                <!-- Dropdown Menu -->
                <div id="admin-dropdown" class="hidden absolute bg-white shadow-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-600 right-0 mt-2 w-48 z-10">
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 bg-gray-100 rounded hover:bg-gray-200 dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-center">Profile</a>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 bg-gray-100 rounded hover:bg-gray-200 dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-center">
                            Log Out
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
</header>

<script>
    // Toggle the visibility of the dropdown when the Admin button is clicked
    const adminToggle = document.getElementById('admin-toggle');
    const adminDropdown = document.getElementById('admin-dropdown');

    adminToggle.addEventListener('click', () => {
        adminDropdown.classList.toggle('hidden');
    });

    // Close the dropdown if clicked outside
    document.addEventListener('click', function(event) {
        const isClickInside = adminToggle.contains(event.target) || adminDropdown.contains(event.target);

        if (!isClickInside) {
            adminDropdown.classList.add('hidden');
        }
    });
</script>
