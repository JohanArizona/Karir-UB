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
        <!--Navbar-->
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
                <!-- Menampilkan inisial atau nama pengguna -->
                <button class="h-14 w-14 rounded-full bg-[#003759] text-white flex items-center justify-center text-lg">
                    {{ auth()->user()->nama[0] }} <!-- Menampilkan inisial nama pengguna -->
                </button>
        
                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="h-12 w-12 rounded-full flex items-center justify-center">
                        <img src="asset/logo/logout.svg" alt="logout" class="h-10 w-10">
                    </button>
                </form>
            </div>
        </nav>
        
        <!-- Background Profile -->
        <div class="absolute w-full z-[-1] justify-center items-center">
            <img src="asset/background_job.svg" alt="Background Profile" class="w-full max-w-full h-auto max-w-none">
        </div>

        <!-- Detail Lowongan -->
        <div class="min-h-screen p-6">
            <div class="max-w-5xl mx-auto bg-[#fffafa] rounded-lg shadow-lg p-6 pt-10 mt-16">
                <!-- Header Section -->
                <div class="flex items-start justify-between mb-6">
                    <div class="flex gap-4">
                        <img src="asset/company_profile.svg" alt="Description" class="w-[209px] h-[209px]">
                        <div>
                            <h1 class="pt-12 pl-2 text-[#003759] text-2xl font-bold font-['Montserrat'] leading-[33.60px]">UI/UX Designer</h1>
                            <p class="pl-2 text-[#009dff] text-[28px] font-semibold font-['Montserrat'] leading-[44.80px]">Rp 4.000.000</p>
                            <div class="pl-2 flex flex-wrap gap-4 text-xs mt-2 text-[#0076bf] font-['Montserrat']">
                                <span class="flex items-center space-x-2">
                                    <i class="fas fa-building"></i>
                                    <span>LinkedIn Indonesia</span>
                                </span>
                                <span class="flex items-center space-x-2">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Jakarta</span>
                                </span>
                                <span class="flex items-center space-x-2">
                                    <i class="fas fa-briefcase"></i>
                                    <span>Onsite</span>
                                </span>
                                <span class="flex items-center space-x-2">
                                    <i class="far fa-clock"></i>
                                    <span>2 Days Ago</span>
                                </span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <button class="bg-[#fffafa] hover:bg-[#fffafa] text-[#e6e6e6] px-4 py-1 rounded-[40px] text-sm font-semibold transition-colors mt-20">
                            <img src="asset/icon/bookmark_blue.svg" alt="Bookmark Logo">
                        </button>
                        <button class="bg-[#009DFF] hover:bg-[#009DFF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-md font-semibold transition-colors w-[140px] h-[50px] mr-8 mt-20">
                            Apply Now
                        </button>
                    </div>
                </div>

                <!-- Job Info Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="flex items-center gap-2 p-4 w-[480px] h-[56px] rounded-[40px] border-2 border-[#003759] font-['Montserrat'] text-[#003759] font-semibold">
                        <img src="asset/logo/toga_biru.svg" alt="Degree Icon" class="w-6 h-6 ">
                        <span>Bachelor's Degree Minimum</span>
                    </div>
                    <div class="flex items-center gap-2 p-4 w-[480px] h-[56px] rounded-[40px] border-2 border-[#003759] font-['Montserrat'] text-[#003759] font-semibold">
                        <img src="asset/logo/gender.svg" alt="Gender Icon" class="w-6 h-6">
                        <span>No gender requirements</span>
                    </div>
                    <div class="flex items-center gap-2 p-4 w-[480px] h-[56px] rounded-[40px] border-2 border-[#003759] font-['Montserrat'] text-[#003759] font-semibold">
                        <img src="asset/logo/people_blue.svg" alt="Age Icon" class="w-6 h-6">
                        <span>No age requirements</span>
                    </div>
                    <div class="flex items-center gap-2 p-4 w-[480px] h-[56px] rounded-[40px] border-2 border-[#003759] font-['Montserrat'] text-[#003759] font-semibold">
                        <img src="asset/icon/koper.svg" alt="Fulltime Icon" class="w-6 h-6">
                        <span>Fulltime</span>
                    </div>
                </div>
                

                <!-- Job Description -->
                <div class="mb-6">
                    <div class="border bt-2 mt-10 mb-10"></div>
                    <h2 class="text-xl font-bold text-[#003759] mb-4">Job Description</h2>
                    <p class="text-gray-600 mb-4">
                        We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                    </p>
                </div>

                <!-- Responsibilities -->
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-[#003759] mb-4">Responsibilities</h2>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Develop visually attractive designs for marketing communications for online and offline promotional collateral.</li>
                        <li>Create UI mockups and prototypes that effectively demonstrate site functionality and appearance.</li>
                        <li>Implement project briefs and can utilize creativity to communicate ideas and support business objectives.</li>
                        <li>Maintain brand consistency throughout all assets.</li>
                        <li>Maintain communication with appropriate departments and external parties to complete projects.</li>
                        <li>Follow the deadline and the lead time.</li>
                        <li>Develop creative ideas and come up with new design innovations.</li>
                    </ul>
                </div>

                <!-- Requirements -->
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-[#003759] mb-4">Requirements</h2>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Bachelor's degree in Graphic Design, Motion, Animation, or a related field.</li>
                        <li>Proficient in Adobe Photoshop, Illustrator, and Figma</li>
                        <li>Ability to work on multiple projects concurrently.</li>
                        <li>Able to decipher design briefs and execute precisely.</li>
                        <li>Strong attention to detail and ability to work in a fast-paced environment.</li>
                        <li>Well-organized, have a strong sense of urgency, and good time management skill.</li>
                        <li>A portfolio is a must.</li>
                    </ul>
                </div>

                <!-- Company Address -->
                <div>
                    <div class="border bt-1 mt-8 mb-8"></div>
                    <h2 class="text-xl font-bold text-[#003759] mb-4">Company Address</h2>
                    <p class="text-gray-600">
                        Gedung Graha Mampang Lantai 1 Suite 101, Jl. Mampang Prapatan Raya Kav.100, Kel. Duren Tiga, Kec. Pancoran, Jakarta Selatan.
                    </p>
                </div>
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