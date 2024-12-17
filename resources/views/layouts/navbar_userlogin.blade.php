<nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white font-['montserrat'] text-semibold shadow max-w-full mx-auto">
    <div class="flex items-center space-x-8 mr-8">
        <img src="{{ asset('asset/logo_karirub.svg') }}" alt="KarirUB Logo" class="h-14 ml-4">
        <div class="hidden md:flex space-x-16">
            <a href="{{ route('dashboard') }}" class="text-[#003759] text-xl font-semibold ml-12 transition-all duration-200 ease-in-out hover:text-[#0081CE]">Home </a>
            <a href="{{ route('search.lokerLogin') }}" class="text-[#003759] text-xl font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Jobs</a>
            <a href="#" class="text-[#003759] text-xl font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Bookmark</a>
            <a href="{{ route('userArticles') }}" class="text-[#003759] text-xl font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Articles</a>
        </div>
    </div>

    <!-- User Menu -->
    <div class="flex items-center space-x-10 mr-8">
        <!-- Menampilkan inisial atau nama pengguna -->
        <a href="{{ route('profile') }}" class="h-14 w-14 rounded-full bg-[#003759] text-white flex items-center justify-center text-lg">
            {{ auth()->user()->nama[0] }} <!-- Menampilkan inisial nama pengguna -->
        </a>

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="h-12 w-12 rounded-full flex items-center justify-center">
                <img src="{{ asset('asset/logo/logout.svg') }}" alt="logout" class="h-10 w-10">
            </button>
        </form>
    </div>
</nav>
