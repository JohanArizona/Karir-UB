<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="bg-white font-[montserrat]">
    <!-- Navbar -->
    @include('layouts.navbar_usernondash')
    
    <!-- Job Listings Grid -->
    <div class="pt-10 pl-8 pr-8 max-w-none mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-20">
        @forelse($jobs as $job)
        <div class="bg-[#FFFAFA] rounded-3xl shadow-lg p-8 transform transition-transform duration-200 hover:scale-105">
        <a href="{{ route('userDetailJob', $job['id_loker']) }}" class="absolute inset-0 z-2"></a>
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="{{ $job['company_logo'] }}" alt="{{ $job['company'] }} Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <div class="flex items-center space-x-2 text-[#0076BF]">
                                <i class="fas fa-building"></i>
                                <span class="text-sm">{{ $job['company'] }}</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-sm text-[#0076BF]">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>{{ $job['location'] }}</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-briefcase"></i>
                                <span>{{ $job['work_type'] }}</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="far fa-clock"></i>
                                <span>{{ $job['posted_at']->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <div>
                        <h2 class="text-normal font-semibold text-[#262626] font-[montserrat]">{{ $job['title'] }}</h2>
                        <p class="text-[#009dff] text-xl font-semibold mt-2">
                            Rp {{ number_format($job['salary'], 0, ',', '.') }}
                        </p>
                    </div>
                    
                    <div class="flex space-x-2">
                        <button class="z-20 bg-[#009DFF] hover:bg-[#0076BF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors">
                        <img src="{{ asset('asset/icon/bookmark_gray.svg') }}" alt="Bookmark Logo">

                        </button>
                        <a href="https://api.whatsapp.com/send/?phone={{ urlencode($job['contact']) }}&text=Halo,+saya+ingin+melamar+untuk+{{ urlencode($job['title']) }}+di+{{ urlencode($job['company']) }}."
                        class="z-20 bg-[#009DFF] hover:bg-[#0076BF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors w-[83.18px] text-center block">
                        Apply
                        </a>
                    </div>
                </div>

                <p class="mt-4 text-[#262626] leading-relaxed font-['Montserrat'] text-justify">
                    {{ Str::limit($job['description'], 150) }}
                </p>
                </a>
        </div>
        @empty
            <div class="col-span-full text-center py-16">
                <img src="{{ asset('asset/search_notfound.svg') }}" alt="Tidak Ada Lowongan" class="mx-auto mb-4 w-64 h-64">
                <h3 class="text-2xl font-bold text-[#003759] mb-2">Lowongan Kerja Tidak Ditemukan</h3>
                <p class="text-gray-600 mb-6">Maaf, tidak ada lowongan kerja yang cocok dengan pencarian Anda.</p>
            </div>
        @endforelse
    </div>


    
    <!-- Pagination -->
    @if($jobs->count() > 9)
    <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2">
            <img 
        src="{{ asset('asset/icon/arrow_left.svg') }}" 
        alt="Panah Prev" 
        class="hover:scale-110 transition-transform duration-200">
    
    <button class="px-3 py-2 rounded-md text-sm text-[#757575] font-['Montserrat'] hover:scale-110 transition-transform duration-200">
        Previous
    </button>
    <button class="px-3 py-2 rounded-[10px] text-sm text-white bg-[#003759] font-['Montserrat'] hover:scale-110 transition-transform duration-200">
        1
    </button>
    <button class="px-3 py-2 rounded-[10px] text-sm text-gray-700 font-['Montserrat'] hover:scale-110 transition-transform duration-200">
        2
    </button>
    <button class="px-3 py-2 rounded-md text-sm text-[#003759] font-['Montserrat'] hover:scale-110 transition-transform duration-200">
        ...
    </button>
    <button class="px-3 py-2 rounded-md text-sm text-[#003759] font-['Montserrat'] hover:scale-110 transition-transform duration-200">
        Next
    </button>
    <img 
        src="{{ asset('asset/icon/arrow_right.svg') }}" 
        alt="Panah Next" 
        class="hover:scale-110 transition-transform duration-200">
            </nav>
    </div>
    @endif
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</body>
</html>