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
<body class="bg-[#e6e6e6]/50 font-['Montserrat'] ">
    <!-- Navbar -->
    @include('layouts.navbar_usernondash')
    
    <!-- Background Profile -->
    <div class="absolute w-full z-[-1] justify-center items-center">
        <img src="{{ asset('asset/background_job.svg') }}" alt="Background Profile" class="w-full max-w-full h-auto max-w-none">
    </div>

    <!-- Detail Lowongan -->
    <div class="min-h-screen p-6">
        <div class="max-w-5xl mx-auto bg-[#fffafa] rounded-lg shadow-lg p-6 pt-10 mt-16">
            <!-- Header Section -->
            <div class="flex items-start justify-between mb-6">
                <div class="flex gap-4">
                    <img src="{{ asset('storage/' . $jobs->logo_company) }}" alt="Company Logo" class="w-[209px] h-[209px] rounded-lg">
                    <div>
                        <h1 class="pt-12 pl-2 text-[#003759] text-2xl font-bold font-['Montserrat'] leading-[33.60px]">
                            {{ $jobs->nama_loker }}
                        </h1>
                        <p class="pl-2 text-[#009dff] text-[28px] font-semibold font-['Montserrat'] leading-[44.80px]">
                            Rp {{ number_format($jobs->gaji, 0, ',', '.') }}
                        </p>
                        <div class="pl-2 flex flex-wrap gap-4 text-xs mt-2 text-[#0076bf] font-['Montserrat']">
                            <span class="flex items-center space-x-2">
                                <i class="fas fa-building"></i>
                                <span>{{ $jobs->nama_perusahaan }}</span>
                            </span>
                            <span class="flex items-center space-x-2">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>{{ $jobs->kota }}</span>
                            </span>
                            <span class="flex items-center space-x-2">
                                <i class="fas fa-briefcase"></i>
                                <span>{{ $jobs->tipe }}</span>
                            </span>
                            <span class="flex items-center space-x-2">
                                <i class="far fa-clock"></i>
                                <span>{{ $jobs->created_at->diffForHumans() }}</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3">
                    <button class="bg-[#fffafa] text-[#e6e6e6] px-4 py-1 rounded-[40px] text-sm font-semibold transition-colors mt-20">
                        <img src="{{ asset('asset/icon/bookmark_blue.svg') }}" alt="Bookmark Logo" class="hover:scale-110 transition-all">
                    </button>
                    <a href="https://api.whatsapp.com/send/?phone={{ urlencode($jobs->no_telp_perusahaan) }}&text=Halo,+saya+ingin+melamar+untuk+{{ urlencode($jobs->nama_loker) }}+di+{{ urlencode($jobs->nama_perusahaan) }}.">
                        <button class="bg-[#009DFF] hover:bg-[#074A73] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-md font-semibold transition-colors w-[140px] h-[50px] mr-8 mt-20">
                            Apply Now
                        </button>
                    </a>
                </div>
            </div>

            <!-- Job Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="flex items-center gap-2 p-4 w-[480px] h-[56px] rounded-[40px] border-2 border-[#003759] font-['Montserrat'] text-[#003759] font-semibold">
                    <img src="{{ asset('asset/logo/toga_biru.svg') }}" alt="Degree Icon" class="w-6 h-6">
                    @if($jobs->jenjang_minimum == 'D3')
                        <span>Minimum Diploma 3</span>
                    @elseif($jobs->jenjang_minimum == 'D4')
                        <span>Minimum Diploma 4</span>
                    @elseif($jobs->jenjang_minimum == 'S1')
                        <span>Minimum Bachelor's Degree</span>
                    @elseif($jobs->jenjang_minimum == 'S2')
                        <span>Minimum Master's Degree</span>
                    @elseif($jobs->jenjang_minimum == 'S3')
                        <span>Minimum Doctoral Degree</span>
                    @else
                        <span>{{ $jobs->jenjang_minimum }}</span>
                    @endif
                </div>
                <div class="flex items-center gap-2 p-4 w-[480px] h-[56px] rounded-[40px] border-2 border-[#003759] font-['Montserrat'] text-[#003759] font-semibold">
                    <img src="{{ asset('asset/logo/gender.svg') }}" alt="Gender Icon" class="w-6 h-6">
                    <span>No gender requirements</span>
                </div>
                <div class="flex items-center gap-2 p-4 w-[480px] h-[56px] rounded-[40px] border-2 border-[#003759] font-['Montserrat'] text-[#003759] font-semibold">
                    <img src="{{ asset('asset/logo/people_blue.svg') }}" alt="Age Icon" class="w-6 h-6">
                    <span>Minimum {{ $jobs->maksimal_usia }} Years Old</span>
                </div>
                <div class="flex items-center gap-2 p-4 w-[480px] h-[56px] rounded-[40px] border-2 border-[#003759] font-['Montserrat'] text-[#003759] font-semibold">
                    <img src="{{ asset('asset/logo/koper.svg') }}" alt="Fulltime Icon" class="w-6 h-6">
                    <span>{{ $jobs->workshift }}</span>
                </div>
            </div>

            <!-- Job Description -->
            <div class="mb-6 mr-2">
                <div class="border bt-2 mt-10 mb-10"></div>
                <h2 class="text-xl font-bold text-[#003759] mb-4">Job Description</h2>
                <p class="text-gray-600 mb-4 text-justify">
                    {{ $jobs->deskripsi }}
                </p>
            </div>

            <!-- Company Address -->
            <div>
                <div class="border bt-1 mt-8 mb-8"></div>
                <h2 class="text-xl font-bold text-[#003759] mb-4">Company Address</h2>
                <p class="text-gray-600">
                    {{ $jobs->alamat_perusahaan }}
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>
