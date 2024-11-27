
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
<body class="bg-white">
    <!-- Primary Navigation Menu -->
    <nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
        <div class="flex items-center space-x-8 mr-8">
            <img src="asset/logo_karirub.svg" alt="KarirUB Logo" class="h-14 mr-12">
            <div class="hidden md:flex space-x-20">
                <a href="#" class="text-[#003759] font-semibold">Find Jobs</a>
                <a href="#" class="text-[#003759] font-semibold">Advantage</a>
                <a href="#" class="text-[#003759] font-semibold">Articles</a>
                <a href="#" class="text-[#003759] font-semibold">Testimonial</a>
            </div>
        </div>
        
        <!-- Search Bar -->
        <div class="flex-1 max-w-xl mx-8">
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Job title or keywords"
                    class="w-full px-4 py-2 border border-[#B0B0B0] rounded-full focus:outline-none focus:border-[#003759] bg-[#FFFAFA]"
                >
                <button 
                    class="absolute right-3 top-1/2 transform -translate-y-1/2"
                >
                <img src="asset/logo/search.svg" alt="search" class="h-5 w-5 mr-2">
                </button>
            </div>
        </div>

        <!-- User Menu -->
        <div class="flex items-center space-x-4">
            <button class="h-10 w-10 rounded-full bg-[#003759] text-white flex items-center justify-center">
                D
            </button>
        </div>
        <!-- User Menu -->
        <div class="flex items-center space-x-4">
            <button class="ml-6 h-10 w-10 rounded-full text-white flex items-center justify-center">
                <img src="asset/logo/logout.svg" alt="logout">
            </button>
        </div>
    </nav>

    <!-- Background Profile -->
    <div class="absolute w-full z-[-3] flex justify-center items-center">
        <img src="asset/background_profile.svg" alt="Background Profile" class="w-full max-w-full h-auto max-w-none">
    </div>

    <!-- Profile Pengguna -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mt-64 mb-16">
            <!-- Left Profile Card -->
            <div class="bg-[#FFFAFA] rounded-lg p-6 shadow-lg border border-[#8C8C8C] md:col-span-1 h-[760px]">
                <!-- Profile Picture -->
                <div class="relative mb-4">
                    <div class="w-40 h-40 bg-[#003759] rounded-full flex items-center justify-center text-white text-4xl mx-auto">
                        D
                    </div>
                    <button class="absolute bottom-0 right-1/2 translate-x-16 translate-y-2 bg-[#008DE6] p-2 rounded-full border border-4 border-[#FFFFFF]">
                        <img src="asset/camera.svg" alt="Ganti Foto">
                    </button>
                </div>
                
                <!-- Name and Last Update -->
                <div class="text-center mb-6">
                    <h2 class="text-xl font-semibold">Dimas Yoga Pratama</h2>
                    <p class="text-gray-500 text-sm">Last Update: 16 November 2024</p>
                </div>

                <!-- Profile Section -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-4">Profile</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <img src="asset/logo/sms.svg" alt="email">
                            <span class="text-sm">dimasyp@student.ub.ac.id</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <img src="asset/logo/telp.svg" alt="">
                            <span class="text-sm">081234567890</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <img src="asset/logo/kalender.svg" alt="">
                            <span class="text-sm">April 8, 2005</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <img src="asset/logo/lokasi.svg" alt="">
                            <span class="text-sm">Malang</span>
                        </div>
                    </div>
                </div>

                <!-- Education Section -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-4">Education</h3>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3">
                            <img src="asset/logo/idcard.svg" alt="">
                            <span class="text-sm">235150700111022</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <img src="asset/logo/universitas.svg" alt="">
                            <span class="text-sm">Faculty of Computer Science</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <img src="asset/logo/book.svg" alt="">
                            <span class="text-sm">Information Technology</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <img src="asset/logo/toga.svg" alt="">
                            <span class="text-sm">2023</span>
                        </div>
                    </div>
                </div>

            <!-- Share Profile Section -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Share Your Profile</h3>
                <div class="flex items-center border border-[#8C8C8C] rounded-lg">
                    <!-- Profile link display -->
                    <div class="rounded-bl rounded-tl p-3 text-sm text-gray-600 flex-1 border-r border-[#8C8C8C]">
                        <span>https://www.karirub.com/dimasyp</span>
                    </div>
                    <!-- Copy button -->
                    <button class="rounded-tr-lg rounded-br-lg p-2 text-gray-600 hover:bg-gray-100">
                        <img src="asset/logo/salin.svg" alt="Copy Icon">
                    </button>
                </div>
            </div>
        </div>

        <!-- Right Edit Form -->
        <div class="bg-[#FFFAFA] rounded-lg p-6 shadow-lg border border-[#8C8C8C] md:col-span-2 h-[820px]">
            <h2 class="text-xl font-semibold mb-6">Edit Profile</h2>
            <form class="space-y-6">
                <!-- Personal Information -->
                <div class="space-y-4">
                    <!-- Full Name -->
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Full Name*</label>
                        <input type="text" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                    <!-- Email -->
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Email*</label>
                        <input type="email" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                    <!-- Phone Number -->
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Phone Number*</label>
                        <input type="tel" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                    <!-- Birth Date & Location -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Birth Date -->
                        <div class="relative">
                            <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Birth Date</label>
                            <input type="date" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                        </div>
                        <!-- Location -->
                        <div class="relative">
                            <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Location</label>
                            <input type="text" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                        </div>
                    </div>
                </div>

                <!-- Education Information -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold">Education</h3>
                    <!-- Alumni Number -->
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Alumni Number</label>
                        <input type="text" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                    <!-- Faculty -->
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Faculty</label>
                        <select class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                            <option>Select Faculty</option>
                            <option>Faculty of Computer Science</option>
                        </select>
                    </div>
                    <!-- Major -->
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Major</label>
                        <input type="text" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                    <!-- Graduation Year -->
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Graduation Year</label>
                        <input type="number" min="1900" max="2099" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                </div>
                <!-- Button -->
                <div class="flex justify-end">
                    <button type="submit" class="px-10 py-3 bg-[#005E99] text-white text-xl rounded font-semibold">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>




        <!-- Footer -->
        <footer>
            <div class="bg-gradient-to-r from-[#0076BF] to-[#003759] text-white py-12 max-w-full">
                <div class="container mx-auto px-4">
                    <!-- Main Footer Content -->
                    <div class="grid justify-start">
                        <img src="asset/logo_karirub_putih.svg" alt="" class="w-full mb-20 size-15">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-20">
                        <!-- About Section -->
                        <div>
                            <h3 class="text-xl font-bold mb-4">About KarirUB</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-200">About Us</a></li>
                                <li><a href="#" class="hover:text-blue-200">Contact Us</a></li>
                                <li><a href="#" class="hover:text-blue-200">Inspiration</a></li>
                                <li><a href="#" class="hover:text-blue-200">Join With Us</a></li>
                            </ul>
                        </div>
            
                        <!-- For Jobseeker Section -->
                        <div>
                            <h3 class="text-xl font-bold mb-4">For Jobseeker</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-200">Vacancies</a></li>
                                <li><a href="#" class="hover:text-blue-200">Company</a></li>
                                <li><a href="#" class="hover:text-blue-200">Application Status</a></li>
                                <li><a href="#" class="hover:text-blue-200">Vacancies Saved</a></li>
                                <li><a href="#" class="hover:text-blue-200">Subscribed Companies</a></li>
                                <li><a href="#" class="hover:text-blue-200">Vacancies Recommendation</a></li>
                                <li><a href="#" class="hover:text-blue-200">As Per Reference</a></li>
                                <li><a href="#" class="hover:text-blue-200">Proficiency Test</a></li>
                                <li><a href="#" class="hover:text-blue-200">FAQ for Jobseeker</a></li>
                            </ul>
                        </div>
            
                        <!-- For Company Section -->
                        <div class="w-80">
                            <h3 class="text-xl font-bold mb-4">For Company</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-200">Advertise With Us</a></li>
                                <li><a href="#" class="hover:text-blue-200">FAQ for Company</a></li>
                            </ul>
            
                        <!-- Email Subscription -->
                        <div class="mt-8 w-fit border-b border-white-1000">
                            <h3 class="text-xl font-bold mb-4">Fill your email here</h3>
                                <div class="flex items-center">
                                    <input type="email" placeholder="yourmail@example.com" class="focus:outline-none focus:ring-0 text-xs w-40 bg-transparent p-2 h-8 text-white-800">
                                    <button class="bg-[#E6F5FF] text-xs font-bold text-[#003759] h-7 px-4 w-22 rounded-xl hover:bg-[#E6F5FF]">
                                        Get Info
                                    </button>
                                </div>
                            </div>
                        </div>
            
                        <!-- Help & Email Section -->
                        <div>
                            <h3 class="text-xl font-bold mb-4">Help</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-200">KarirUB Care</a></li>
                                <li><a href="#" class="hover:text-blue-200">Terms and Condition</a></li>
                            </ul>
                        </div>
                    </div>
            
                    <!-- Social Media & Copyright -->
                    <div class="mt-12 pt-8 border-t border-blue-400">
                        <div class="text-lg font-bold mt-4 mb-4">Follow Us</div>
                            <div class="flex justify-between items-center">
                            <!-- Social Media Icons -->
                            <div class="flex space-x-4 items-center">
                                <!-- Logo Instagram -->
                                <a href="#" class="">
                                    <img src="asset/logo_medsos/logo_ig.svg" alt="Instagram" class="w-10 h-10">
                                </a>
                                <!-- Logo Twitter -->
                                <a href="#" class="">
                                    <img src="asset/logo_medsos/logo_x.svg" alt="Twitter" class="w-10 h-10">
                                </a>
                                <!-- Logo Facebook -->
                                <a href="#" class="">
                                    <img src="asset/logo_medsos/logo_fb.svg" alt="Facebook" class="w-10 h-10">
                                </a>
                                <!-- Logo Tiktok -->
                                <a href="#" class="">
                                    <img src="asset/logo_medsos/logo_tiktok.svg" alt="Tiktok" class="w-10 h-10">
                                </a>
                                <!-- Logo Path -->
                                <a href="#" class="">
                                    <img src="asset/logo_medsos/logo_path.svg" alt="Path" class="w-10 h-10">
                                </a>
                            </div>
            
                            <!-- Copyright -->
                            <div class="text-sm">
                                © 2015 - 2024 | PT Pengembangan Karir
                            </div>
                        </div>
                    </div>
                    <div class="text-lg font-bold mt-4 mb-4">@karirub</div>
                </div>
            
                <!-- Help Button -->
                <a href="https://api.whatsapp.com/send/?phone=%2B6281217260945&text&type=phone_number&app_absent=0">
                <div class="fixed bottom-8 right-8">
                    <button class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 flex items-center space-x-2">
                        <img src="asset/logo_bantuan.svg" alt="Bantuan" class="w-6 h-6">
                        <span>Bantuan</span>
                    </button>
                </div>
                </a>
            </div>
        </footer>
    </body>
</html>