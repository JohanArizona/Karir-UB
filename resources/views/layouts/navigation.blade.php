<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
        <div class="flex items-center space-x-8">
            <a href="{{ route('welcome') }}#find-jobs">
                <img src="{{ asset('asset/logo_karirub.svg') }}" alt="KarirUB Logo" class="h-14 ml-4">
            </a>
            <div class="hidden md:flex space-x-20">
                <a href="{{ route('welcome') }}#find-jobs" class="text-[#003759] font-semibold ml-8 transition-all duration-200 ease-in-out hover:text-[#0081CE]">Find Jobs</a>
                <a href="{{ route('welcome') }}#advantage" class="text-[#003759] font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Advantage</a>
                <a href="{{ route('welcome') }}#articles" class="text-[#003759] font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Articles</a>
                <a href="{{ route('welcome') }}#testimonials" class="text-[#003759] font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Testimonial</a>
            </div>
        </div>
        <div class="flex space-x-4">
            <!-- Login Button with Hover Effect -->
            <a href="{{ route('login') }}" class="font-semibold px-12 py-2 text-[#003759] rounded-full border-2 border-[#003759] transition-all duration-300 ease-in-out hover:bg-[#005E99] hover:text-white">
                Login
            </a>
            <!-- Register Button with Hover Effect -->
            <a href="{{ route('register.showStep1') }}" class="px-12 py-2 bg-[#003759] text-white rounded-full flex items-center justify-center transition-all duration-300 ease-in-out hover:bg-[#005E99]">
                Register
            </a>
        </div>
    </nav>
</nav>
