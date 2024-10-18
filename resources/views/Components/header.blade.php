<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white font-bold text-xl">Contact Futsal</a>
        <div class="hidden md:flex space-x-4">
            <a href="/" class="text-gray-300 hover:text-white">Login</a>
        </div>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div class="md:hidden" id="mobile-menu" style="display: none;">
        <a href="/" class="block px-4 py-2 text-sm text-gray-300 hover:text-white">Login</a>
    </div>
</nav>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'block' : 'none';
    });
</script>
