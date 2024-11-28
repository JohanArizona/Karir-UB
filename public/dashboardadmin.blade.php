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
<body class="bg-gray-50">
   <!-- Navigation -->
   <nav class="bg-white shadow-sm h-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <div class="flex items-center">
                    <img class="h-12 w-auto" src="asset/logo_karirub.svg" alt="KarirUB">
                    <div class="ml-8 flex space-x-16">
                        <a href="#" class="text-gray-500 hover:text-gray-900 font-semibold text-md">Home</a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 font-semibold text-md">Jobs</a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 font-semibold text-md">Articles</a>
                        <a href="#" class="text-[#003759] font-bold text-md">Add Jobs</a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 font-semibold text-md">Add Articles</a>
                    </div>
                </div>
                <button class="bg-red-500 text-white px-6 py-2 rounded-md font-medium">Logout</button>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-[#262626]">Welcome Admin01,</h1>
            <h2 class="text-4xl font-bold text-[#262626]">What's new?</h2>
        </div>

        <!-- Action Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <div class="h-[300px] bg-[#005e99] rounded-lg p-8 text-center cursor-pointer hover:bg-[#008DE6] transition pt-20">
                <div class="text-[#fffafa] mb-6">
                    <i class="fas fa-briefcase text-5xl"></i>
                </div>
                <h3 class="text-3xl font-semibold text-[#fffafa]">Create New Job</h3>
            </div>
            <div class="bg-[#005e99] rounded-lg p-8 text-center cursor-pointer hover:bg-[#008DE6] transition pt-20">
                <div class="text-[#fffafa] mb-6">
                    <i class="fas fa-file-alt text-5xl"></i>
                </div>
                <h3 class="text-3xl font-semibold text-[#fffafa]">Create New Article</h3>
            </div>
        </div>

        <!-- Container for Cards -->
        <div class="max-w-none mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-20">
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
                        <h2 class="text-xl font-semibold text-gray-800 font-['Montserrat']">Admin</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <button class="bg-[#009DFF] hover:bg-[#004773] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                            Edit
                        </button>
                        <button class="bg-[#F44336] hover:bg-[#004773] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat'] ">
                            Delete
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-[#262626] font-['Montserrat'] leading-relaxed">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>

            <!-- Card 2 -->
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
                        <h2 class="text-xl font-semibold text-gray-800 font-['Montserrat']">Database Admin</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <button class="bg-[#009DFF] hover:bg-[#004773] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                            Edit
                        </button>
                        <button class="bg-[#F44336] hover:bg-[#004773] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat'] ">
                            Delete
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-[#262626] font-['Montserrat'] leading-relaxed">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>

        
            <!-- Card 3 -->
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
                        <h2 class="text-xl font-semibold text-gray-800 font-['Montserrat']">Programmer</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <button class="bg-[#009DFF] hover:bg-[#004773] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                            Edit
                        </button>
                        <button class="bg-[#F44336] hover:bg-[#004773] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat'] ">
                            Delete
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                 <p class="mt-4 text-[#262626] font-['Montserrat'] leading-relaxed">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>


            <!-- Card 4 -->
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
                            <h2 class="text-xl font-semibold text-gray-800 font-['Montserrat']">Admin</h2>
                            <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                        </div>
                        <!-- Action Buttons -->
                        <div class="flex space-x-4">
                            <button class="bg-[#009DFF] hover:bg-[#004773] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                                Edit
                            </button>
                            <button class="bg-[#F44336] hover:bg-[#004773] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat'] ">
                                Delete
                            </button>
                        </div>
                    </div>
                    <!-- Job Description -->
                    <p class="mt-4 text-[#262626] font-['Montserrat'] leading-relaxed">
                        We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                    </p>
                </div>
    
            <!-- Card 5 -->
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
                            <h2 class="text-xl font-semibold font-[Montserrat] text-gray-800">Admin</h2>
                            <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                        </div>
                        <!-- Action Buttons -->
                        <div class="flex space-x-4">
                            <button class="bg-[#009DFF] hover:bg-[#004773] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                                Edit
                            </button>
                            <button class="bg-[#F44336] hover:bg-[#004773] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat'] ">
                                Delete
                            </button>
                        </div>
                    </div>
                    <!-- Job Description -->
                    <p class="mt-4 text-[#262626] font-['Montserrat'] leading-relaxed">
                        We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                    </p>
                </div>
    
        </div>


        <!-- Uploaded Articles -->
        <div>
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-[#003759] text-[30px] font-semibold font-['Montserrat']">Uploaded Articles</h3>
                <a href="#" class="text-[#008de6] text- font-bold font-['Montserrat']">View More ></a>
            </div>
            <div class="space-y-4">
                <!-- Article Card -->
                <div class="bg-white rounded-lg shadow">
                    <div class="flex">
                        <img src="images/assets/thumbnail1_admin.svg" alt="Article thumbnail" class="w-[325px] h-[190px] rounded-[5px] object-cover">
                        <div class="p-4 flex-1">
                            <div class="flex items-center justify-between">
                                <div class="pt-10 text-sm text-gray-500 font-semibold font-['Montserrat']">Sabtu, 16 November 2024 21:25 WIB</div>
                                <div class=" flex space-x-2">
                                    <button class=" bg-[#009DFF] hover:bg-[#004773] text-[#fffafa] px-6 py-2 mt-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                                        Edit
                                    </button>
                                    <button class=" bg-[#F44336] hover:bg-[#004773] text-[#fffafa] px-6 py-2 mt-2 mr-4  rounded-full text-sm font-bold transition-colors font-['Montserrat'] ">
                                        Delete
                                    </button>
                                </div>
                            </div>
                            <h4 class="text-[28px] font-semibold font-['Montserrat'] mb-2">KarirUB Connects 1,000+ UB Alumni with Trusted Companies</h4>
                        </div>
                    </div>
                </div>
                <!-- More article cards would go here -->
            </div>
        </div>
    </main>

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