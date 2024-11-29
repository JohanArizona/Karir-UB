<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
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
    
<!-- Article -->
    <div class="max-w-7xl mx-auto py-12 px-6">
        <div class="flex flex-col lg:flex-row items-start gap-12">
            <!-- Main Article Section -->
            <div class="w-full lg:w-2/3">
                <h1 class="text-[32px] font-[600] leading-normal text-[#262626] font-[Montserrat] mb-4">
                    KarirUB Connects 1,000+ UB Alumni with Trusted Companies
                </h1>
                <div class="flex flex-col text-sm mb-8">
                    <span class="text-[#005E99] font-bold">KarirUB</span>
                    <span class="text-gray-500">Sabtu, 16 November 2024 21:25 WIB</span>
                </div>                
                <img src="images/assets/article1_image.svg" alt="Skyscrapers Image" class="w-full h-auto mb-8">
                
            <!-- Article Paragraphs -->
            <p class="text-[18px] font-[500] leading-normal text-[#262626] font-[Montserrat] text-justify mb-6">
                KarirUB has become a bridge for more than 1,000 UB alumni in finding jobs that align with their educational backgrounds. Through its job search features, focused on qualifications and experience, the platform enables UB alumni to access relevant and quality career opportunities. Successful alumni have shared testimonials on the platform’s benefits, and data shows UB alumni spread across various industries, marking KarirUB’s success in bridging their career needs.
            </p>
            <p class="text-[18px] font-[500] leading-normal text-[#262626] font-[Montserrat] text-justify mb-6">
                KarirUB has become a vital resource for more than 1,000 Universitas Brawijaya (UB) alumni, enabling them to secure jobs that align closely with their educational backgrounds. The platform’s design prioritizes ease of use and relevance, making it simple for users to find job opportunities tailored to their qualifications and experience. By bridging the gap between alumni and the job market, KarirUB has solidified its position as a trusted tool for career development.
            </p>
            <p class="text-[18px] font-[500] leading-normal text-[#262626] font-[Montserrat] text-justify mb-6">
                One of KarirUB’s standout features is its ability to connect users with companies that match their specific expertise and aspirations. Alumni can filter job openings based on criteria such as education, skills, and work history, ensuring a higher likelihood of finding suitable roles. This targeted approach has been particularly beneficial for fresh graduates and experienced professionals alike, offering them clarity and direction in their job searches.
            </p>
            <p class="text-[18px] font-[500] leading-normal text-[#262626] font-[Montserrat] text-justify mb-6">
                Testimonials from successful alumni highlight the transformative role of KarirUB in their career journeys. Many have expressed gratitude for the platform’s intuitive interface and its ability to present them with opportunities that might otherwise have been difficult to discover. These successes reflect the platform’s commitment to delivering value to its users and enhancing their employability.
            </p>
            <p class="text-[18px] font-[500] leading-normal text-[#262626] font-[Montserrat] text-justify mb-6">
                The reach of KarirUB extends across various industries, from technology and healthcare to education and retail. Its record of successful placements showcases the platform’s effectiveness in connecting UB alumni with employers. This demonstrates the capability of UB graduates to excel in diverse professional environments, further strengthening the university’s reputation.
            </p>
            <p class="text-[18px] font-[500] leading-normal text-[#262626] font-[Montserrat] text-justify">
                Ultimately, KarirUB has proven to be a game-changer in addressing the career needs of UB alumni. Its continuous innovation and user-centric approach have established it as an indispensable tool for career advancement. As more alumni turn to KarirUB, the platform’s ability to support their professional growth will undoubtedly continue to grow.
            </p>
        </div>
          <!-- Most Popular Section -->
        <aside class="w-full lg:w-1/3">
            <div class="mb-6">
                <h2 class="text-[32px] font-montserrat font-bold text-[#262626] mb-2">
                    MOST POPULAR
                </h2>
                <div class="w-[56.018px] h-[3px] bg-[#005E99]"></div>
            </div>
 <!-- Item 1 -->
<div class="flex flex-col gap-4">
    <a href="#">
        <img src="images/assets/thumbnail1.svg" alt="Thumbnail 1" class="w-[440px] h-[260px] flex-shrink-0 object-cover">
    </a>
    <a href="#" class="text-[#262626] font-montserrat text-[20px] font-semibold leading-normal pb-6">
        The Advantages of KarirUB: UB Alumni Job Placement Rate Increases by 30%!
    </a>
</div>

<!-- Item 2 -->
<div class="flex gap-4">
    <img src="images/assets/thumbnail2.svg" alt="Thumbnail 2" class="w-[210px] flex-shrink-0 object-cover pb-6">
    <a href="#" class="w-[1024px] text-[#262626] font-montserrat text-[18px] font-semibold leading-normal pb-6">
        Top Companies Entrust Their Recruitment to UB Alumni through KarirUB
    </a>
</div>

<!-- Item 3 -->
<div class="flex gap-4">
    <img src="images/assets/thumbnail3.svg" alt="Thumbnail 3" class="w-[210px] flex-shrink-0 object-cover pb-6">
    <a href="#" class="w-[160px] text-[#262626] font-montserrat text-[18px] font-semibold leading-normal pb-6">
        Supporting UB Alumni Career Growth: KarirUB Prepares 500+ New Job Opportunities Every Month
    </a>
</div>

<!-- Item 4 -->
<div class="flex gap-4">
    <img src="images/assets/thumbnail4.svg" alt="Thumbnail 4" class="w-[210px] flex-shrink-0 object-cover pb-6">
    <a href="#" class="w-[560px] text-[#262626] font-montserrat text-[18px] font-semibold leading-normal pt-4">
        KarirUB: Bridging Alumni UB to Global Career Opportunities
    </a>
</div>
  </div>
    </div>
    </aside>
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

    