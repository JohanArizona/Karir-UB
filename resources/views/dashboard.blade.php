<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    
    @include('layouts.navbar_userlogin')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Container untuk teks dan search bar -->
        <div class="flex items-center justify-between mb-4">
            <!-- Teks -->
            <h1 class="text-3xl font-bold text-gray-800">
                Hi {{ auth()->user()->nama }}, what kind of job are you looking for?
            </h1>

            <!-- Search Bar -->
            <div class="relative max-w-md">
                <input 
                    type="text" 
                    placeholder="Job title or keywords"
                    class="w-full px-4 py-2 border border-[#B0B0B0] rounded-full focus:outline-none focus:border-[#003759] bg-[#FFFAFA]"
                >
                <button 
                    class="absolute right-3 top-1/2 transform -translate-y-1/2"
                >
                    <img src="asset/logo/search.svg" alt="search" class="h-5 w-5">
                </button>
            </div>
        </div>

        <!-- Bagian lainnya -->
        <div class="bg-blue-500 rounded-lg p-8 text-center mb-8">
            <img src="asset/background_dashboard_user.svg" alt="Hiring Logo" class="mx-auto mb-4 h-full">
            <h2 class="text-2xl font-bold text-white mb-2">We Are Hiring</h2>
            <p class="text-white">Join Our Team</p>
            <a href="#" class="bg-yellow-500 text-gray-800 px-6 py-3 rounded-md font-medium hover:bg-yellow-600 mt-4 inline-block">Apply Now</a>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Container Grid untuk Card -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-3xl shadow-lg p-8">
            <div class="flex items-start space-x-6">
                <!-- Company Logo -->
                <div class="flex-shrink-0">
                    <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                </div>
                <!-- Job Details -->
                <div class="flex-grow">
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2 text-blue-500">
                            <i class="fas fa-building"></i>
                            <span class="text-lg">Volkswagen Indonesia</span>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-600">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jakarta</span>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-600">
                            <i class="fas fa-briefcase"></i>
                            <span>Onsite</span>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-400">
                            <i class="far fa-clock"></i>
                            <span>2 Days Ago</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center mt-6">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">Database Admin</h2>
                    <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                </div>
                <div class="flex space-x-4">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold transition-colors">
                        B
                    </button>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold transition-colors">
                        Apply
                    </button>
                </div>
            </div>
            <p class="mt-4 text-gray-600 leading-relaxed">
                We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
            </p>
        </div>

        <!-- Duplikasi Card untuk Menambahkan Lebih Banyak Card -->
        <div class="bg-white rounded-3xl shadow-lg p-8">
            <!-- Konten card sama dengan di atas -->
        </div>
        <div class="bg-white rounded-3xl shadow-lg p-8">
            <!-- Konten card sama dengan di atas -->
        </div>
    </div>
</div>


    <div class="mt-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Favorite Industry</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Industry icons and labels here -->
      </div>
    </div>

    <div class="mt-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">FAQ</h2>
      <div class="space-y-4">
        <!-- FAQ sections here -->
      </div>
    </div>
  </div>

    <!-- Footer -->
    @include('layouts.footer')
</body>
</html>