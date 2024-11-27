<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
        <div class="flex items-center space-x-8">
            <img src="asset/logo_karirub.svg" alt="KarirUB Logo" class="h-14 ml-4">
            <div class="hidden md:flex space-x-20">
                <a href="#" class="text-[#003759] font-semibold ml-4">Find Jobs</a>
                <a href="#" class="text-[#003759] font-semibold">Advantage</a>
                <a href="#" class="text-[#003759] font-semibold">Articles</a>
                <a href="#" class="text-[#003759] font-semibold">Testimonial</a>
            </div>
        </div>
        <div class="flex space-x-4">
        <a href="{{ route('login') }}" class="font-semibold px-12 py-2 text-[#003759] rounded-full border-2 border-[#003759]">Login</a>
        <a href="{{ route('register') }}" class="px-12 py-2 bg-[#003759] text-white rounded-full">Register</a>
        </div>
    </nav>
