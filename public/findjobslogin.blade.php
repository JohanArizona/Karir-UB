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
        <div class="flex items-center space-x-8">
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
            <button class="h-10 w-10 rounded-full bg-[#003759] text-white flex items-center justify-center mr-8">
                D
            </button>
        </div>
    </nav>

    <!-- Job Listings -->
    <div class="bg-white max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="max-w-none mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-20">
            <!-- Job Card 1 -->
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
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
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Database Admin</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold transition-colors">
                            B
                        </button>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold transition-colors">
                            Apply
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-gray-600 leading-relaxed">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>

            <!-- Job Card 2 -->
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
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
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Database Admin</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold transition-colors">
                            B
                        </button>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold transition-colors">
                            Apply
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-gray-600 leading-relaxed">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>

            <!-- Job Card 3 -->
            <!-- Job Card 1 -->
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
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
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Database Admin</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold transition-colors">
                            B
                        </button>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold transition-colors">
                            Apply
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-gray-600 leading-relaxed">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>

            <!-- Job Card 4 -->
            <!-- Job Card 1 -->
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
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
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Database Admin</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold transition-colors">
                            B
                        </button>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-lg font-semibold transition-colors">
                            Apply
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-gray-600 leading-relaxed">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>
        </div>
        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2">
                <button class="px-3 py-2 rounded-md text-sm text-gray-500 hover:bg-gray-100">Previous</button>
                <button class="px-3 py-2 rounded-md text-sm text-white bg-blue-500">1</button>
                <button class="px-3 py-2 rounded-md text-sm text-gray-700 hover:bg-gray-100">2</button>
                <button class="px-3 py-2 rounded-md text-sm text-gray-500 hover:bg-gray-100">Next</button>
            </nav>
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