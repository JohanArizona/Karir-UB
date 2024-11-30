<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
    <div class="flex items-center space-x-8 mr-8">
        <img src="asset/logo_karirub.svg" alt="KarirUB Logo" class="h-14 ml-4">
        <div class="hidden md:flex space-x-16">
            <a href="#" class="text-[#003759] text-xl font-semibold ml-12">Home </a>
            <a href="#" class="text-[#003759] text-xl font-semibold">Jobs</a>
            <a href="#" class="text-[#003759] text-xl font-semibold">Bookmark</a>
            <a href="#" class="text-[#003759] text-xl font-semibold">Articles</a>
        </div>
    </div>

    <!-- User Menu -->
    <div class="flex items-center space-x-10 mr-8">
        <button class="h-14 w-14 rounded-full bg-[#003759] text-white flex items-center justify-center text-lg">
            {{ auth()->user()->nama[0] }}
        </button>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="h-12 w-12 rounded-full flex items-center justify-center">
                <img src="asset/logo/logout.svg" alt="logout" class="h-10 w-10">
            </button>
        </form>
    </div>
</nav>

<div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
   <!-- Kolase Card Besar -->
<div class="w-[1248px] h-[623px] bg-[#FFFAFA] rounded-xl shadow-md overflow-hidden mb-8 ml-12 flex border border-[#B0B0B0]">
    <!-- Bagian Gambar -->
    <div class="w-3/5 h-full">
        <img src="images/thumbnail_artikel1.svg" class="object-cover w-full h-full" alt="Hero Thumbnail">
    </div>
    <!-- Bagian Konten -->
    <div class="w-1/2 h-full flex flex-col justify-center px-12 text-black">
        <div class="text-4xl font-bold mb-4 font-['Montserrat'] text-[#262626]">
            KarirUB Connects 1,000+ UB Alumni with Trusted Companies
        </div>
        <span class="text-[#003759] text-base font-semibold font-['Montserrat'] mb-4">KarirUB</span>
        <div class="mb-8 w-[502px] text-justify text-md font-medium font-['Montserrat']">
            KarirUB has become a bridge for more than 1,000 UB alumni in finding jobs that align with their educational backgrounds. Through its job search features, focused on qualifications and experience, the platform enables UB alumni to access relevant and quality career opportunities. Successful alumni have shared testimonials on the platform's benefits, and data shows UB alumni spread across various industries, marking KarirUB's success in bridging their career needs.
        </div>
        <div class="flex items-center text-[#8c8c8c] text-sm font-semibold font-['Montserrat'] mb-6">
            <img src="asset/icon/kalender_abu.svg" class="w-4 h-4 mr-2" alt="Kalender">
            Sabtu, 16 November 2024 21:25 WIB
        </div>
        <div>
            <button class="bg-[#003759] text-white text-lg font-bold w-[502px] h-[57px] rounded-md hover:bg-[#022E4A]">
                Read More
            </button>
        </div>
    </div>
</div>


    <!-- Wrapper -->
<div class="flex justify-center">
    <!-- Grid Container -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    
<!-- Card 1 -->
    <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200 border border-[#B0B0B0] ">
        <img src="images/thumbnail_artikel1.svg" class="w-[438px] h-[270px] object-cover" alt="Thumbnail">
        <div class="p-6">
            <div class="mb-2 text-neutral-800 text-[32px] font-semibold font-['Montserrat']">The Advantages of KarirUB: UB Alumni...</div>
            <span class="text-[#003759] text-base font-semibold font-['Montserrat']">KarirUB</span>
            <div class="mt-2 mb-12 w-[352px] h-[68px] text-justify text-neutral-800 text-md font-medium font-['Montserrat']">Since its launch, KarirUB has boosted the job placement rate for UB alumni by 30%. Key features, such as job filtering based on qualifications and...</div>
            <div class="flex items-center text-[#8c8c8c] text-sm font-semibold font-['Montserrat'] mb-4">
                <img src="asset/icon/kalender_abu.svg" class="w-4 h-4 mr-2" alt="Kalender">
                Sabtu, 16 November 2024 21:25 WIB
            </div>
            
            <div class="flex justify-between items-center">
                <button class="w-[355px] h-[57px] rounded-[10px] border border-black text-black text-base font-bold font-['Montserrat']">
                    Read Article
                </button>
            </div>
        </div>
    </div>

        <!-- Card 2 -->
    <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200 border border-[#B0B0B0]
    ">
        <img src="images/thumbnail_artikel1.svg" class="w-[438px] h-[270px] object-cover" alt="Thumbnail">
        <div class="p-6">
            <div class="mb-2 text-neutral-800 text-[32px] font-semibold font-['Montserrat']">The Advantages of KarirUB: UB Alumni...</div>
            <span class="text-[#003759] text-base font-semibold font-['Montserrat']">KarirUB</span>
            <div class="mt-2 mb-12 w-[352px] h-[68px] text-justify text-neutral-800 text-md font-medium font-['Montserrat']">Since its launch, KarirUB has boosted the job placement rate for UB alumni by 30%. Key features, such as job filtering based on qualifications and...</div>
            <div class="flex items-center text-[#8c8c8c] text-sm font-semibold font-['Montserrat'] mb-4">
                <img src="asset/icon/kalender_abu.svg" class="w-4 h-4 mr-2" alt="Kalender">
                Sabtu, 16 November 2024 21:25 WIB
            </div>
            
            <div class="flex justify-between items-center">
                <button class="w-[355px] h-[57px] rounded-[10px] border border-black text-black text-base font-bold font-['Montserrat']">
                    Read Article
                </button>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200 border border-[#B0B0B0]
    ">
        <img src="images/thumbnail_artikel1.svg" class="w-[438px] h-[270px] object-cover" alt="Thumbnail">
        <div class="p-6">
            <div class="mb-2 text-neutral-800 text-[32px] font-semibold font-['Montserrat']">The Advantages of KarirUB: UB Alumni...</div>
            <span class="text-[#003759] text-base font-semibold font-['Montserrat']">KarirUB</span>
            <div class="mt-2 mb-12 w-[352px] h-[68px] text-justify text-neutral-800 text-md font-medium font-['Montserrat']">Since its launch, KarirUB has boosted the job placement rate for UB alumni by 30%. Key features, such as job filtering based on qualifications and...</div>
            <div class="flex items-center text-[#8c8c8c] text-sm font-semibold font-['Montserrat'] mb-4">
                <img src="asset/icon/kalender_abu.svg" class="w-4 h-4 mr-2" alt="Kalender">
                Sabtu, 16 November 2024 21:25 WIB
            </div>
            
            <div class="flex justify-between items-center">
                <button class="w-[355px] h-[57px] rounded-[10px] border border-black text-black text-base font-bold font-['Montserrat']">
                    Read Article
                </button>
            </div>
        </div>
    </div>
    <!-- Card 4 -->
    <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200 border border-[#B0B0B0]
    ">
        <img src="images/thumbnail_artikel1.svg" class="w-[438px] h-[270px] object-cover" alt="Thumbnail">
        <div class="p-6">
            <div class="mb-2 text-neutral-800 text-[32px] font-semibold font-['Montserrat']">The Advantages of KarirUB: UB Alumni...</div>
            <span class="text-[#003759] text-base font-semibold font-['Montserrat']">KarirUB</span>
            <div class="mt-2 mb-12 w-[352px] h-[68px] text-justify text-neutral-800 text-md font-medium font-['Montserrat']">Since its launch, KarirUB has boosted the job placement rate for UB alumni by 30%. Key features, such as job filtering based on qualifications and...</div>
            <div class="flex items-center text-[#8c8c8c] text-sm font-semibold font-['Montserrat'] mb-4">
                <img src="asset/icon/kalender_abu.svg" class="w-4 h-4 mr-2" alt="Kalender">
                Sabtu, 16 November 2024 21:25 WIB
            </div>
            
            <div class="flex justify-between items-center">
                <button class="w-[355px] h-[57px] rounded-[10px] border border-black text-black text-base font-bold font-['Montserrat']">
                    Read Article
                </button>
            </div>
        </div>
    </div>
    <!-- Card 5 -->
    <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200 border border-[#B0B0B0]
    ">
        <img src="images/thumbnail_artikel1.svg" class="w-[438px] h-[270px] object-cover" alt="Thumbnail">
        <div class="p-6">
            <div class="mb-2 text-neutral-800 text-[32px] font-semibold font-['Montserrat']">The Advantages of KarirUB: UB Alumni...</div>
            <span class="text-[#003759] text-base font-semibold font-['Montserrat']">KarirUB</span>
            <div class="mt-2 mb-12 w-[352px] h-[68px] text-justify text-neutral-800 text-md font-medium font-['Montserrat']">Since its launch, KarirUB has boosted the job placement rate for UB alumni by 30%. Key features, such as job filtering based on qualifications and...</div>
            <div class="flex items-center text-[#8c8c8c] text-sm font-semibold font-['Montserrat'] mb-4">
                <img src="asset/icon/kalender_abu.svg" class="w-4 h-4 mr-2" alt="Kalender">
                Sabtu, 16 November 2024 21:25 WIB
            </div>
            
            <div class="flex justify-between items-center">
                <button class="w-[355px] h-[57px] rounded-[10px] border border-black text-black text-base font-bold font-['Montserrat']">
                    Read Article
                </button>
            </div>
        </div>
    </div>
    <!-- Card 6 -->
    <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200 border border-[#B0B0B0]
    ">
        <img src="images/thumbnail_artikel1.svg" class="w-[438px] h-[270px] object-cover" alt="Thumbnail">
        <div class="p-6">
            <div class="mb-2 text-neutral-800 text-[32px] font-semibold font-['Montserrat']">The Advantages of KarirUB: UB Alumni...</div>
            <span class="text-[#003759] text-base font-semibold font-['Montserrat']">KarirUB</span>
            <div class="mt-2 mb-12 w-[352px] h-[68px] text-justify text-neutral-800 text-md font-medium font-['Montserrat']">Since its launch, KarirUB has boosted the job placement rate for UB alumni by 30%. Key features, such as job filtering based on qualifications and...</div>
            <div class="flex items-center text-[#8c8c8c] text-sm font-semibold font-['Montserrat'] mb-4">
                <img src="asset/icon/kalender_abu.svg" class="w-4 h-4 mr-2" alt="Kalender">
                Sabtu, 16 November 2024 21:25 WIB
            </div>
            <div class="flex justify-between items-center">
                <button class="w-[355px] h-[57px] rounded-[10px] border border-black text-black text-base font-bold font-['Montserrat']">
                    Read Article
                </button>
            </div>
        </div>
    </div>
</div>
</div>


    <!-- Pagination -->
    <div class="flex justify-center mt-10 mb-8">
        <nav class="flex items-center space-x-2">
            <img src="asset/logo/arrow_left.svg" alt="Panah Prev">
            <button class="px-3 py-2 rounded-md text-sm text-[#757575] hover:bg-[#FFFAFA] font-['Montserrat']">Previous</button>
            <button class="px-3 py-2 rounded-[10px] text-sm text-white bg-[#003759] font-['Montserrat']">1</button>
            <button class="px-3 py-2 rounded-[10px] text-sm text-gray-700 hover:bg-[#FFFAFA] font-['Montserrat']">2</button>
            <button class="px-3 py-2 rounded-md text-sm text-[#003759] hover:bg-[#FFFAFA] font-['Montserrat']">...</button>
            <button class="px-3 py-2 rounded-md text-sm text-[#003759] hover:bg-[#FFFAFA] font-['Montserrat']">Next</button>
            <img src="asset/logo/arrow_right.svg" alt="Panah Next">
        </nav>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gradient-to-r from-[#0076BF] to-[#003759] text-[#FFFAFA] w-full h-full flex-shrink-0 mx-auto py-12">
    <!-- Footer Content -->
</footer>

</body>
</html>
