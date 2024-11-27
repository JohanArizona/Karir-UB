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
        <div class="absolute w-full z-[-1] justify-center items-center">
            <img src="asset/background_job.svg" alt="Background Profile" class="w-full max-w-full h-auto max-w-none">
        </div>

        <!-- Detail Lowongan -->
        <div class="min-h-screen p-6">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6">
                <!-- Header Section -->
                <div class="flex items-start justify-between mb-6">
                    <div class="flex gap-4">
                        <div class="w-16 h-16 bg-[#0A66C2] rounded-lg flex items-center justify-center">
                            <span class="text-3xl font-bold text-white">in</span>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-800">UI/UX Designer</h1>
                            <p class="text-blue-500 text-xl font-semibold">Rp 4.000.000</p>
                            <div class="flex flex-wrap gap-4 text-gray-600 text-sm mt-2">
                                <span>LinkedIn Indonesia</span>
                                <span>Jakarta</span>
                                <span>Onsite</span>
                                <span>2 Days Ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                            </svg>
                        </button>
                        <button class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                            Apply Now
                        </button>
                    </div>
                </div>

                <!-- Job Info Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="flex items-center gap-2 p-4 border rounded-lg">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Bachelor's Degree Minimum</span>
                    </div>
                    <div class="flex items-center gap-2 p-4 border rounded-lg">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span>No gender requirements</span>
                    </div>
                    <div class="flex items-center gap-2 p-4 border rounded-lg">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>No age requirements</span>
                    </div>
                    <div class="flex items-center gap-2 p-4 border rounded-lg">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Fulltime</span>
                    </div>
                </div>

                <!-- Job Description -->
                <div class="mb-6">
                    <div class="border bt-2 mt-10 mb-10"></div>
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Job Description</h2>
                    <p class="text-gray-600 mb-4">
                        We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                    </p>
                </div>

                <!-- Responsibilities -->
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Responsibilities</h2>
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
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Requirements</h2>
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
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Company Address</h2>
                    <p class="text-gray-600">
                        Gedung Graha Mampang Lantai 1 Suite 101, Jl. Mampang Prapatan Raya Kav.100, Kel. Duren Tiga, Kec. Pancoran, Jakarta Selatan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer -->
         <footer class="bg-blue-600 text-white mt-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <img src="/api/placeholder/120/40" alt="KarirUB" class="mb-4">
                        <p class="text-sm">Apply and get your job today</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Navigation</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-gray-200">Find Jobs</a></li>
                            <li><a href="#" class="hover:text-gray-200">Advantage</a></li>
                            <li><a href="#" class="hover:text-gray-200">Articles</a></li>
                            <li><a href="#" class="hover:text-gray-200">Testimonial</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Quick Link</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-gray-200">Contact Us</a></li>
                            <li><a href="#" class="hover:text-gray-200">FAQs</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Services</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-gray-200">KarirUB Care</a></li>
                            <li><a href="#" class="hover:text-gray-200">Terms and Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex justify-end space-x-4">
                        <a href="#" class="hover:text-gray-200"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-gray-200"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-200"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-gray-200"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="hover:text-gray-200"><i class="fab fa-pinterest"></i></a>
                </div>
                <div class="mt-8 pt-8 border-t border-blue-500 flex justify-center items-center">
                    <div class="text-sm">© 2015 - 2024 | PT Pengembangan Karir</div>
                </div>
            </div>
            <div class="text-center py-4">
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