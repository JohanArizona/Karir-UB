<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
        <div class="flex items-center space-x-8 mr-8">
            <img src="{{ asset('asset/logo_karirub.svg') }}" alt="KarirUB Logo" class="h-14 ml-4">
                    <div class="hidden md:flex space-x-16">
                        <a href="#" class="text-[#003759] text-xl font-semibold ml-12">Home </a>
                        <a href="#" class="text-[#003759] text-xl font-semibold">Jobs</a>
                        <a href="#" class="text-[#003759] text-xl font-semibold">Articles</a>
                        <a href="#" class="text-[#003759] text-xl font-semibold">Add Jobs</a>
                        <a href="#" class="text-[#003759] text-xl font-semibold">Add Articles</a>
                    </div>
                </div>
            <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="bg-[#EC221F] hover:bg-[#C31E1B] text-white px-6 py-2 rounded-md font-medium">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Title Section -->
    <div class="pt-10 ml-20">
        <h1 class="text-3xl font-bold text-[#003759] font-[montserrat] ">Uploaded Articles</h1>
    </div>

    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Wrapper -->
        <div class="flex justify-center">
            <!-- Grid Container -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card Content -->
                <!-- Card 1 -->
                <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200">
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
                            <button class="w-[166px] h-[57px] bg-[#009dff] rounded-[5px] text-white text-lg font-medium hover:bg-blue-600 transition-colors">
                                Edit
                            </button>
                            <button class="w-[166px] h-[57px] bg-[#f44336] rounded-[5px] text-white text-lg font-medium hover:bg-red-600 transition-colors">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            <!-- Card 2 -->
            <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200">
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
                        <button class="w-[166px] h-[57px] bg-[#009dff] rounded-[5px] text-white text-lg font-medium hover:bg-blue-600 transition-colors">
                            Edit
                        </button>
                        <button class="w-[166px] h-[57px] bg-[#f44336] rounded-[5px] text-white text-lg font-medium hover:bg-red-600 transition-colors">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200">
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
                        <button class="w-[166px] h-[57px] bg-[#009dff] rounded-[5px] text-white text-lg font-medium hover:bg-blue-600 transition-colors">
                            Edit
                        </button>
                        <button class="w-[166px] h-[57px] bg-[#f44336] rounded-[5px] text-white text-lg font-medium hover:bg-red-600 transition-colors">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200">
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
                        <button class="w-[166px] h-[57px] bg-[#009dff] rounded-[5px] text-white text-lg font-medium hover:bg-blue-600 transition-colors">
                            Edit
                        </button>
                        <button class="w-[166px] h-[57px] bg-[#f44336] rounded-[5px] text-white text-lg font-medium hover:bg-red-600 transition-colors">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200">
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
                        <button class="w-[166px] h-[57px] bg-[#009dff] rounded-[5px] text-white text-lg font-medium hover:bg-blue-600 transition-colors">
                            Edit
                        </button>
                        <button class="w-[166px] h-[57px] bg-[#f44336] rounded-[5px] text-white text-lg font-medium hover:bg-red-600 transition-colors">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200">
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
                        <button class="w-[166px] h-[57px] bg-[#009dff] rounded-[5px] text-white text-lg font-medium hover:bg-blue-600 transition-colors">
                            Edit
                        </button>
                        <button class="w-[166px] h-[57px] bg-[#f44336] rounded-[5px] text-white text-lg font-medium hover:bg-red-600 transition-colors">
                            Delete
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
    <div class="container mx-auto px-6 md:flex justify-between">
        <!-- Main Footer Content -->
        <div class="mb-8 md:mb-0 mx-0">
            <img src="asset/logo_karirub_putih.svg" alt="KarirUB Logo" class="h-14 mr-12">
            <p class="font-bold text-lg">Apply and get your job today</p>
        </div>

        <!-- Navigation -->
        <div class="flex space-x-64 pb-12">
            <div>
                <h4 class="font-bold mb-2">Navigation</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-200">Find Jobs</a></li>
                    <li><a href="#" class="hover:text-gray-200">Advantage</a></li>
                    <li><a href="#" class="hover:text-gray-200">Articles</a></li>
                    <li><a href="#" class="hover:text-gray-200">Testimonial</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Quick Link</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-200">Contact Us</a></li>
                    <li><a href="#" class="hover:text-gray-200">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Services</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-200">KarirUB Care</a></li>
                    <li><a href="#" class="hover:text-gray-200">Terms and Condition</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Social Media & Copyright -->
    <div class="container mx-auto px-6 mt-12 pt-8 border-t border-[#FFFAFA]-400 flex items-center justify-between relative">
        <!-- Copyright -->
        <div class="text-sm text-center flex-1">
            © 2015 - 2024 | PT Pengembangan Karir
        </div>

        <!-- Social Media Icons -->
        <div class="flex space-x-4 absolute -top-14 right-0">
            <a href="#"><img src="asset/logo_medsos/logo_ig.svg" alt="Instagram" class="w-8 h-8"></a>
            <a href="#"><img src="asset/logo_medsos/logo_x.svg" alt="Twitter" class="w-8 h-8"></a>
            <a href="#"><img src="asset/logo_medsos/logo_fb.svg" alt="Facebook" class="w-8 h-8"></a>
            <a href="#"><img src="asset/logo_medsos/logo_tiktok.svg" alt="Tiktok" class="w-8 h-8"></a>
            <a href="#"><img src="asset/logo_medsos/logo_path.svg" alt="Path" class="w-8 h-8"></a>
        </div>
    </div>

    <!-- Help Button -->
    <a href="https://api.whatsapp.com/send/?phone=%2B6281217260945&text&type=phone_number&app_absent=0" class="fixed bottom-8 right-8">
        <button class="bg-blue-500 text-[#FFFAFA] px-6 py-3 rounded-full hover:bg-blue-600 flex items-center space-x-2">
            <img src="asset/logo_bantuan.svg" alt="Bantuan" class="w-6 h-6">
            <span>Bantuan</span>
        </button>
    </a>
</footer>
</body>
</html>