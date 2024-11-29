<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-white font-[montserrat]">
    <!--Navbar-->
    <nav x-data="{ open: false }">
        <!-- Primary Navigation Menu -->
        <nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
            <div class="flex items-center space-x-8">
                <img src="asset/logo_karirub.svg" alt="KarirUB Logo" class="h-14 ml-4">
                <div class="hidden md:flex space-x-20">
                    <a href="#" class="text-[#003759] font-semibold ml-8">Find Jobs</a>
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
    
    
    <!-- Job Listings -->
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="max-w-none mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-20">
           
            <!-- Job Card 1 -->
            <div class="bg-[#FFFAFA] rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
                            <div class="flex items-center space-x-2 text-[#0076BF]">
                                <i class="fas fa-building"></i>
                                <span class="text-sm">Volkswagen Indonesia</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-sm text-[#0076BF]">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jakarta</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-briefcase"></i>
                                <span>Onsite</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="far fa-clock"></i>
                                <span>2 Days Ago</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-normal font-semibold text-[#262626] font-[montserrat]">Database Admin</h2>
                        <p class="text-[#009dff] text-xl font-semibold mt-2">Rp 7.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-2">
                        <button class="bg-[#009DFF] hover:bg-[#009DFF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors ">
                            <img src="asset/logo/bookmark_gray.svg" alt="Bookmark Logo">
                        </button>
                        <button class="bg-[#009DFF] hover:bg-[#009DFF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors w-[83.18px]">
                            Apply
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-[#262626] leading-relaxed font-['Montserrat'] text-justify">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>

            <!-- Job Card 2 -->
            <div class="bg-[#FFFAFA] rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-building"></i>
                                <span class="text-sm">Volkswagen Indonesia</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jakarta</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-briefcase"></i>
                                <span>Onsite</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="far fa-clock"></i>
                                <span>2 Days Ago</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-normal font-semibold text-[#262626] font-[montserrat]">Programmer</h2>
                        <p class="text-[#009dff] text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-2">
                        <button class="bg-[#009DFF] hover:bg-[#009DFF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors">
                            <img src="asset/logo/bookmark_gray.svg" alt="Bookmark Logo">
                        </button>
                        <button class="bg-[#009DFF] hover:bg-[#009DFF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors w-[83.18px]">
                            Apply
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-[#262626] leading-relaxed font-['Montserrat'] text-justify">
                    We are looking for a Programmer to develop and maintain software solutions. Ideal candidates have coding expertise, problem-solving skills, and experience with relevant programming languages]. Join our team and contribute to our success!.
                </p>
            </div>

            <!-- Job Card 3 -->
            <div class="bg-[#FFFAFA] rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-building"></i>
                                <span class="text-sm">Volkswagen Indonesia</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jakarta</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-briefcase"></i>
                                <span>Onsite</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="far fa-clock"></i>
                                <span>2 Days Ago</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-normal font-semibold text-[#262626] font-[montserrat]">Social Media Admin</h2>
                        <p class="text-[#009dff] text-xl font-semibold mt-2">Rp 7.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-2">
                        <button class="bg-[#009DFF] hover:bg-[#009DFF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors">
                            <img src="asset/logo/bookmark_gray.svg" alt="Bookmark Logo">
                        </button>
                        <button class="bg-[#009DFF] hover:bg-[#009DFF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors w-[83.18px]">
                            Apply
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-[#262626] leading-relaxed font-['Montserrat'] text-justify">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>

            <!-- Job Card 4 -->
            <div class="bg-[#FFFAFA] rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-building"></i>
                                <span class="text-sm">Volkswagen Indonesia</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jakarta</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-briefcase"></i>
                                <span>Onsite</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="far fa-clock"></i>
                                <span>2 Days Ago</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-normal font-semibold text-[#262626] font-[montserrat]">UI/UX Designer</h2>
                        <p class="text-[#009dff] text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-2">
                        <button class="bg-[#009DFF] hover:bg-[#009DFF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors">
                            <img src="asset/logo/bookmark_gray.svg" alt="Bookmark Logo">
                        </button>
                        <button class="bg-[#009DFF] hover:bg-[#009DFF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors w-[83.18px]">
                            Apply
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-[#262626] leading-relaxed font-['Montserrat'] text-justify">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>
        </div>

    
        <!-- Pagination -->
        <div class="flex justify-center mt-8">
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