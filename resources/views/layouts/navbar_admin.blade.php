    <!-- Navigation -->
    <nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
        <div class="flex items-center space-x-8 mr-8">
            <img src="{{ asset('asset/logo_karirub.svg') }}" alt="KarirUB Logo" class="h-14 ml-4">
                    <div class="hidden md:flex space-x-16">
                        <a href="{{ route('admin.dashboard') }}" class="text-[#003759] text-xl font-semibold ml-12">Home </a>
                        <a href="{{ route('adminJob') }}" class="text-[#003759] text-xl font-semibold">Jobs</a>
                        <a href="{{ route('adminArticles') }}" class="text-[#003759] text-xl font-semibold">Articles</a>
                        <a href="{{ route('admin.jobs.create.step1') }}" class="text-[#003759] text-xl font-semibold">Add Jobs</a>
                        <a href="{{ route('articles.create') }}" class="text-[#003759] text-xl font-semibold">Add Articles</a>
                    </div>
                </div>
            <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="bg-[#EC221F] hover:bg-[#C31E1B] text-white px-6 py-2 rounded-md font-medium">Logout</button>
            </form>
        </div>
    </nav>