<nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
    <div class="flex items-center space-x-8 mr-8">
        <a href="{{ route('dashboard') }}">
        <img src="{{ asset('asset/logo_karirub.svg') }}" alt="KarirUB Logo" class="h-14 ml-4">
        </a>
        <div class="hidden md:flex space-x-16">
            <a href="{{ route('dashboard') }}" class="text-[#003759] text-xl font-semibold ml-12 transition-all duration-200 ease-in-out hover:text-[#0081CE]">Home </a>
            <a href="{{ route('search.lokerLogin') }}" class="text-[#003759] text-xl font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Jobs</a>
            <a href="#" class="text-[#003759] text-xl font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Bookmark</a>
            <a href="{{ route('userArticles') }}" class="text-[#003759] text-xl font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Articles</a>
        </div>
    </div>

    <!-- Search Bar -->
    <form action="{{ route('search.lokerLogin') }}" method="GET" class="relative max-w-[450px] w-full ml-auto mr-16">
            <!-- Input field -->
            <input 
                type="text"
                name="query"
                placeholder="Job title or Position"
                class="w-full pl-10 pr-4 border text-lg h-14 border-[#B0B0B0] rounded-full focus:outline-none focus:border-[#003759] bg-[#FFFAFA]"
            >

            <!-- Tombol search -->
            <button 
                class="absolute right-0 top-1/2 transform -translate-y-1/2 px-4 py-2 text-white text-2xl font-semibold"
            >
                  <!-- Ikon search -->

 <img 
    src="{{ asset('asset/logo/search.svg') }}" 
    alt="search" 
    class="absolute h-6 w-6 right-4 top-1/2 transform -translate-y-1/2">

            
            </button>
    </form>
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
