<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/style.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="bg-white font-[Montserrat]">
    <style>
        html {
            scroll-behavior: smooth;
        }

        #find-jobs, #advantage, #articles, #testimonial {
        scroll-margin-top: 80px; 
        }
    </style>

    <nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
        <div class="flex items-center space-x-8">
            <img src="asset/logo_karirub.svg" alt="KarirUB Logo" class="h-14 ml-4">
            <div class="hidden md:flex space-x-20">
                <a href="#find-jobs" class="text-[#003759] font-semibold ml-8 transition-all duration-200 ease-in-out hover:text-[#0081CE]">Find Jobs</a>
                <a href="#advantage" class="text-[#003759] font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Advantage</a>
                <a href="#articles" class="text-[#003759] font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Articles</a>
                <a href="#testimonials" class="text-[#003759] font-semibold transition-all duration-200 ease-in-out hover:text-[#0081CE]">Testimonial</a>
            </div>
        </div>
        <div class="flex space-x-4">
            <a href="{{ route('login') }}" class="font-semibold px-12 py-2 text-[#003759] rounded-full border-2 border-[#003759]">Login</a>
            <a href="{{ route('register.showStep1') }}" class="px-12 py-2 bg-[#003759] text-white rounded-full flex items-center justify-center">Register</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div id="find-jobs" class=" bg-[#e6e6e6]/50 h-[90vh] max-w-full mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
        <div class="ml-8">
            <h1 class="text-5xl font-bold mb-4">
                Find Your Dream Job <br> With<span class="text-[#005E99]"> KarirUB</span>
            </h1>
            <p class="text-black mb-4 mt-10 text-2xl font-semibold">Get a job that fits your profile today</p>
            
            <form action="{{ route('search.loker') }}" method="GET" class="relative max-w-md">
                <input
                    type="text"
                    name="query"
                    placeholder="Position or Jobs"
                    class="w-full p-4 pr-24 rounded-full border border-[#003759]"
                >
                <button type="submit" class="absolute right-0 top-0 h-full px-8 bg-[#005E99] text-white rounded-full">
                    Search
                </button>
            </form>
            
        </div>
        <div class="relative hidden md:block mb-24 ml-auto">
            <img src="asset/foto_dashboard.svg" alt="Professional" class="object-contain">
        </div>
    </div>


    <!-- Features -->
    <div id="advantage" class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-4xl text-[#003759] font-semibold mb-2">Why Choose Us?</h2>
            <p class="text-center text-xl text-gray-600 mb-12 font-semibold">A process that makes the difference</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-28 h-28 mx-auto mb-4 bg-[#003759] rounded-full flex items-center justify-center">
                        <img src="asset/logo/people.svg" alt="" class="w-16 h-16">
                    </div>
                    <h3 class="font-semibold mb-2 text-[#003759] text-2xl">Direct Connection</h3>
                    <p class="text-gray-600">KarirUB works with a wide range of reputable companies seeking top talent from UB, paving the way for a promising career.</p>
                </div>
                <div class="text-center">
                    <div class="w-28 h-28 mx-auto mb-4 bg-[#003759] rounded-full flex items-center justify-center">
                        <img src="asset/logo/catatan.svg" alt="" class="w-16 h-16">
                    </div>
                    <h3 class="font-semibold mb-2 text-[#003759] text-2xl">Accredited Job Opportunities</h3>
                    <p class="text-gray-600">KarirUB presents job vacancies relevant to the areas of expertise of UB students and alumni.</p>
                </div>
                <div class="text-center">
                    <div class="w-28 h-28 mx-auto mb-4 bg-[#003759] rounded-full flex items-center justify-center">
                        <img src="asset/logo/pintu.svg" alt="" class="w-16 h-16">
                    </div>
                    <h3 class="font-semibold mb-2 text-[#003759] text-2xl">Job Opportunities Access</h3>
                    <p class="text-gray-600">KarirUB provides direct access to job opportunities from various companies that have collaborated with Brawijaya University.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-16">
        <p class="text-center mb-2 font-semibold text-[#737373]">Easy To Get Vacancies</p>
        <h2 class="text-center text-3xl font-semibold mb-12 text-[#003759]">More Than 500 Companies Await You</h2>

        <div class="grid grid-cols-3 md:grid-cols-6 gap-8 items-center">
            <img src="asset/logo/logo_amd.svg" alt="Amd" class="w-15 mx-auto hover:scale-110 transition-transform duration-300">
            <img src="asset/logo/logo_videovo.svg" alt="Videovo" class="w-15 mx-auto hover:scale-110 transition-transform duration-300">
            <img src="asset/logo/logo_amazon.svg" alt="Amazon" class="w-20 mx-auto hover:scale-110 transition-transform duration-300">
            <img src="asset/logo/logo_google.svg" alt="Google" class="w-10 mx-auto hover:scale-110 transition-transform duration-300">
            <img src="asset/logo/logo_twitch.svg" alt="Twitch" class="w-10 mx-auto hover:scale-110 transition-transform duration-300">
            <img src="asset/logo/logo_intel.svg" alt="Intel" class="w-20 mx-auto hover:scale-110 transition-transform duration-300">
        </div>
        <div class="grid grid-cols-3 md:grid-cols-6 gap-8 items-center">
            <img src="asset/logo/logo_stripe.svg" alt="Stripe" class="w-18 mx-auto hover:scale-110 hover:opacity-80 transition duration-300">
            <img src="asset/logo/logo_ea.svg" alt="Ea" class="w-10 mx-auto hover:scale-110 hover:opacity-80 transition duration-300">
            <img src="asset/logo/logo_mcd.svg" alt="McDonald's" class="w-10 mx-auto hover:scale-110 hover:opacity-80 transition duration-300">
            <img src="asset/logo/logo_netflix.svg" alt="Netflix" class="w-20 mx-auto hover:scale-110 hover:opacity-80 transition duration-300">
            <img src="asset/logo/logo_samsung.svg" alt="Samsung" class="w-20 mx-auto hover:scale-110 hover:opacity-80 transition duration-300">
            <img src="asset/logo/logo_microsoft.svg" alt="Microsoft" class="w-10 mx-auto hover:scale-110 hover:opacity-80 transition duration-300">
        </div>
    </div>

<!-- Articles Section --> 
<section id="articles" class="bg-[#003759] text-white py-12">
    <div class="w-full max-w-screen-3xl mx-auto px-4">
        <h2 class="text-4xl font-semibold mb-0 text-center">Check Out Our Articles</h2>
        <p class="text-xl font-semibold mb-8 text-center">Get to know our newest update</p>
        <!-- Scrollable Container -->
        <div class="flex gap-6 overflow-x-auto no-scrollbar ::-webkit-scrollbar">
            @foreach($articles as $article)
            <div class="flex-shrink-0 bg-white rounded-lg overflow-hidden shadow-md w-80 min-h-[375px] relative">
                <!-- Cek apakah artikel memiliki gambar, jika tidak tampilkan gambar default -->
                <img src="{{ asset('storage/' . $article->gambar) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-gray-800 text-lg font-medium mb-2">{{ $article->judul }}</h3>
                    <!-- Tombol Read More -->
                    <a href="{{ route('guestDetailArticles', $article->id_artikel) }}" class="read-more absolute bottom-4 right-4 font-semibold text-sm text-red-600 hover:underline">Read more →</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold mb-8 text-center text-[#003759]">What Alumni Say?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="bg-[#005E99] text-white p-6 rounded-lg text-center hover:scale-110 transition-transform duration-300 hover:bg-[#003759] transition-colors">
                    <div class="w-24 h-24 rounded-full bg-white text-[#003759] flex items-center justify-center text-4xl font-semibold mx-auto mb-4">
                        DY
                    </div>
                    <h3 class="font-medium text-lg mb-2">Dimas Yoga Pratama</h3>
                    <p class="text-sm mb-4">Lowongan di KarirUB relevan dan prosesnya cepat. Cocok untuk fresh graduate!</p>
                    <p class="text-xs">- Sastra Inggris '05</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-[#005E99] text-white p-6 rounded-lg text-center hover:scale-110 transition-transform duration-300 hover:bg-[#003759] transition-colors">
                    <div class="w-24 h-24 rounded-full bg-white text-[#003759] flex items-center justify-center text-4xl font-semibold mx-auto mb-4">
                        RA
                    </div>
                    <h3 class="font-medium text-lg mb-2">Rahma Aliyyah</h3>
                    <p class="text-sm mb-4">KarirUB mempermudah saya mendapatkan pekerjaan pertama di bidang impian saya. Sangat membantu!</p>
                    <p class="text-xs">- Teknologi Informasi '19</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-[#005E99] text-white p-6 rounded-lg text-center hover:scale-110 transition-transform duration-300 hover:bg-[#003759] transition-colors">
                    <div class="w-24 h-24 rounded-full bg-white text-[#003759] flex items-center justify-center text-4xl font-semibold mx-auto mb-4">
                        TA
                    </div>
                    <h3 class="font-medium text-lg mb-2">T. Afifah Nashwa</h3>
                    <p class="text-sm mb-4">Platform yang praktis dan fokus untuk alumni UB. Sangat direkomendasikan!</p>
                    <p class="text-xs">- Ekonomi '11</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-white">
    <div class="flex items-center">
        <div class="flex flex-col md:flex-row items-center justify-between relative">
            <!-- Gambar -->
            <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="asset/foto_ctf.png" alt="Team working" class="w-full h-auto">
            </div>
            <div class="md:w-1/2 md:pl-12 text-center"> <!-- Menambahkan text-center untuk memusatkan teks -->
                <h2 class="text-xl mb-4 font-semibold text-gray-500">What You Waiting For?</h2>
                <h3 class="text-3xl mb-6 font-bold">Apply and get your job today</h3>
                <div class="space-y-4">
                    <button class="w-full max-w-[26rem] bg-[#005E99] text-white py-3 px-6 rounded-full hover:bg-[#003759] transition mb-8">
                        Create Account
                    </button>
            </div>
            </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    @include('layouts.footer')
</body>
</html>
