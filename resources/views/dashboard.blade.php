<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="bg-white font-[Montserrat]">
    
  @include('layouts.navbar_userlogin')
  <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <!-- Container untuk teks dan search bar -->
      <div class="flex items-center justify-between mb-12">
          <!-- Teks -->
          <h1 class="text-[40px] font-bold text-gray-800">
              Hi {{ explode(' ', auth()->user()->nama)[0] }}, what kind of <br> job are you looking for?
          </h1>

          <!-- Search Bar -->

          <form action="{{ route('search.lokerLogin') }}" method="GET" class="relative max-w-[650px] w-full">
              <!-- Ikon search -->
              <img 
                  src="asset/logo/search_putih.svg" 
                  alt="search" 
                  class="absolute h-6 w-6 left-4 top-1/2 transform -translate-y-1/2"
              >
              
              <!-- Input field -->
              <input 
                  type="text"
                  name="query"
                  placeholder="Position or Jobs"
                  class="w-full pl-14 pr-4 py-4 border text-lg h-20 border-[#B0B0B0] rounded-full focus:outline-none focus:border-[#003759] bg-[#FFFAFA]"
              >

              <!-- Tombol search -->
              <button 
                  class="absolute right-0 top-1/2 transform -translate-y-1/2 px-4 py-2 text-white bg-[#005E99] text-2xl font-semibold rounded-full h-full w-48"
              >
                  Search
              </button>
          </form>
    </div>
    <div class="relative w-full overflow-hidden">
    <!-- Container untuk carousel gambar -->
    <div id="poster-carousel" class="flex transition-transform duration-700 ease-in-out">
          <!-- Poster pertama -->
          <div class="flex-shrink-0 w-full">
              <img src="asset/background_dashboard_user1.svg" alt="Hiring Logo" class="w-full h-auto object-cover">
          </div>

          <!-- Poster kedua -->
          <div class="flex-shrink-0 w-full">
              <img src="asset/background_dashboard_user2.svg" alt="Hiring Logo" class="w-full h-auto object-cover">
          </div>
    </div>

      <!-- Tombol navigasi -->
      <div class="absolute top-1/2 left-0 transform -translate-y-1/2 p-4 bg-black bg-opacity-50 text-white cursor-pointer rounded-full hover:bg-opacity-80" onclick="prevSlide()">&#10094;</div>
      <div class="absolute top-1/2 right-0 transform -translate-y-1/2 p-4 bg-black bg-opacity-50 text-white cursor-pointer rounded-full hover:bg-opacity-80" onclick="nextSlide()">&#10095;</div>
  </div>

  <!-- Script untuk penggeseran manual dan otomatis -->
  <script>
      let currentIndex = 0;
      const posters = document.querySelector('#poster-carousel');
      const totalPosters = document.querySelectorAll('#poster-carousel > div').length;

      // Clone pertama poster dan tambahkan di akhir
      const firstPoster = document.querySelector('#poster-carousel > div:first-child').cloneNode(true);
      document.querySelector('#poster-carousel').appendChild(firstPoster);

      function moveToSlide(index) {
          currentIndex = index;
          const offset = -currentIndex * 100; // Geser ke kiri sesuai index
          posters.style.transform = `translateX(${offset}%)`; // Terapkan geser
      }

      function nextSlide() {
          currentIndex = (currentIndex + 1) % (totalPosters + 1); // Geser ke gambar berikutnya, termasuk gambar yang telah di-clone
          if (currentIndex === 0) {
              // Jika sampai ke gambar pertama, geser ke posisi tanpa animasi
              posters.style.transition = 'none';
              posters.style.transform = 'translateX(0)';
              setTimeout(() => {
                  posters.style.transition = 'transform 0.7s ease-in-out';
              }, 50); // Tunggu sedikit untuk menghindari efek janggal
          }
          moveToSlide(currentIndex);
      }

      function prevSlide() {
          currentIndex = (currentIndex - 1 + totalPosters) % totalPosters;
          moveToSlide(currentIndex);
      }

      // Geser otomatis setiap 10 detik
      setInterval(nextSlide, 10000); // 10000 ms = 10 detik

      // Inisialisasi
      moveToSlide(currentIndex);

      // FAQ
      function toggleAnswer(index) {
        var answer = document.getElementById('answer' + index);
        var icon = document.getElementById('icon' + index);

        if (answer.style.maxHeight === '0px' || answer.style.maxHeight === '') {
          answer.style.maxHeight = '200px';  // Ganti dengan nilai max-height yang sesuai
          answer.style.paddingTop = '15px';
          answer.style.paddingBottom = '10px';
          icon.style.transform = 'rotate(180deg)';
        } else {
          answer.style.maxHeight = '0px';
          answer.style.paddingTop = '0';
          answer.style.paddingBottom = '0';
          icon.style.transform = 'rotate(0deg)';
        }
      }
  </script>
  </div>

  <!-- Job Recommendation -->
  <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-8 ">
    <h1 class="text-[#003759] text-3xl font-[Montserrat] mb-4 font-semibold">Job Recommendation</h1>
    <div class="max-w-none mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($jobs as $job)
        <div class="bg-[#FFFAFA] rounded-3xl shadow-md p-8 border transform transition-transform duration-200 hover:scale-105">
        <a href="{{ route('userDetailJob', $job['id_loker']) }}" class="absolute inset-0 z-20"></a>
            <div class="flex items-start space-x-6">
                <div class="flex-shrink-0">
                    <img src="{{ asset('storage/' . $job->logo_company) }}" alt="Company Logo" class="w-32 h-32 rounded-2xl shadow-md">
                </div>
                <div class="flex-grow">
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2 text-[#0076BF]">
                            <i class="fas fa-building"></i>
                            <span class="text-sm">{{ $job->nama_perusahaan }}</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-[#0076BF]">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>{{ $job->kota }}</span>
                        </div>
                        <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                            <i class="fas fa-briefcase"></i>
                            <span>{{ $job->tipe }}</span>
                        </div>
                        <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                            <i class="far fa-clock"></i>
                            <span>{{ $job->days_ago }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center mt-6">
                <div>
                    <h2 class="text-normal font-semibold text-[#262626] font-[montserrat]">{{ $job->nama_loker }}</h2>
                    <p class="text-[#009dff] text-xl font-semibold mt-2">Rp {{ number_format($job->gaji, 0, ',', '.') }}</p>
                </div>
                <div class="flex space-x-2">
                    <button class="z-20 bg-[#009DFF] hover:bg-[#0076BF] text-[#e6e6e6] px-2 py-2 rounded-[40px] text-sm font-semibold transition-colors">
                        <img src="asset/logo/logo_bookmark.svg" alt="Bookmark Logo" class="w-6 h-auto">
                    </button>
                    <a href="https://api.whatsapp.com/send/?phone={{ urlencode($job->no_telp_perusahaan) }}&text=Halo,+saya+ingin+melamar+untuk+{{ urlencode($job->nama_loker) }}+di+{{ urlencode($job->nama_perusahaan) }}."
                        class="z-20 bg-[#009DFF] hover:bg-[#0076BF] text-[#e6e6e6] px-4 py-2 rounded-[40px] text-sm font-semibold transition-colors w-[83.18px] text-center block">
                        Apply
                    </a>
                </div>
            </div>
            <p class="mt-4 text-[#262626] leading-relaxed font-['Montserrat'] text-justify">
                {{ $job->deskripsi }}
            </p>
        </div>
        @endforeach
    </div>
</div>


  <!-- Favorite Industry -->
  <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-8 mt-[-32]">
    <h1 class="text-[#003759] text-3xl font-[Montserrat] mb-4 font-semibold">Favorite Industry</h1>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <div class="relative md:bg-cover bg-center rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
        <img src="asset/industry/manufacturing.svg" alt="manufacturing" class="h-full w-full object-cover">
      </div>
      <div class="relative md:bg-cover bg-center rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
        <img src="asset/industry/finance.svg" alt="finance" class="h-full w-full object-cover">
      </div>
      <div class="relative md:bg-cover bg-center rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
        <img src="asset/industry/consultant.svg" alt="consultant" class="h-full w-full object-cover">
      </div>
      <div class="relative md:bg-cover bg-center rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
        <img src="asset/industry/logistic.svg" alt="logistic" class="h-full w-full object-cover">
      </div>
      <div class="relative md:bg-cover bg-center rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
        <img src="asset/industry/telekomunikasi.svg" alt="telecommunications" class="h-full w-full object-cover">
      </div>
      <div class="relative md:bg-cover bg-center rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
        <img src="asset/industry/it.svg" alt="computer/it" class="h-full w-full object-cover">
      </div>
      <div class="relative md:bg-cover bg-center rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
        <img src="asset/industry/food.svg" alt="food/beverage" class="h-full w-full object-cover">
      </div>
      <div class="relative md:bg-cover bg-center rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
        <img src="asset/industry/konstruksi.svg" alt="construction" class="h-full w-full object-cover">
      </div>
    </div>
  </div>

  <!-- FAQ Section -->
  <h2 class="text-[#003759] text-4xl font-[Montserrat] mt-12 font-semibold text-center pb-8">FAQ</h2>
  <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
    <div class="w-2/4 space-y-4">
      <div class="space-y-2">
            <!-- FAQ 1 -->
            <div>
              <div class="faq-item bg-[#005E99] rounded-lg p-6">
                <button class="faq-question text-white text-left w-full text-xl flex items-center justify-between focus:outline-none" onclick="toggleAnswer(0)">
                  How do I access the applicant dashboard?
                  <span class="dropdown-icon transform rotate-0 transition-transform duration-300" id="icon0"><img src="asset/icon/dropdown.svg" alt="dropdown"></span>
                </button>
              </div>
              <div id="answer0" class="bg-[#009DFF] faq-answer text-white text-lg overflow-hidden transition-all duration-500 ease-in-out w-full rounded-lg p-6" style="max-height: 0; padding-top: 0; padding-bottom: 0;">
                  <p>To access the applicant dashboard, you need to log in to your KarirUB account using your registered email and password. If you don't have an account yet, click on Register and follow the instructions to create one.</p>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div>
              <div class="faq-item bg-[#005E99] rounded-lg p-6">
                <button class="faq-question text-white text-left w-full text-xl flex items-center justify-between focus:outline-none" onclick="toggleAnswer(1)">
                  What should I do if I forget my password?
                  <span class="dropdown-icon transform rotate-0 transition-transform duration-300" id="icon1"><img src="asset/icon/dropdown.svg" alt="dropdown"></span>
                </button>
              </div>
              <div id="answer1" class="bg-[#009DFF] faq-answer text-white text-lg overflow-hidden transition-all duration-500 ease-in-out w-full rounded-lg p-6" style="max-height: 0; padding-top: 0; padding-bottom: 0;">
                  <p>If you forget your password, click on the Forgot Password link on the login page. Follow the instructions to reset your password and regain access to your account.</p>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div>
              <div class="faq-item bg-[#005E99] rounded-lg p-6">
                <button class="faq-question text-white text-left w-full text-xl flex items-center justify-between focus:outline-none" onclick="toggleAnswer(2)">
                  Can I save job postings for later?
                  <span class="dropdown-icon transform rotate-0 transition-transform duration-300" id="icon2"><img src="asset/icon/dropdown.svg" alt="dropdown"></span>
                </button>
              </div>
              <div id="answer2" class="bg-[#009DFF] faq-answer text-white text-lg overflow-hidden transition-all duration-500 ease-in-out w-full rounded-lg p-6" style="max-height: 0; padding-top: 0; padding-bottom: 0;">
                  <p>Yes, you can save job postings by clicking on the Save Job button available in each listing. Saved jobs will appear in the Saved Jobs section for easy access later.</p>
              </div>
            </div>

            <!-- FAQ 4 -->
            <div>
              <div class="faq-item bg-[#005E99] rounded-lg p-6">
                <button class="faq-question text-white text-left w-full text-xl flex items-center justify-between focus:outline-none" onclick="toggleAnswer(3)">
                  Can I view job postings without applying immediately?
                  <span class="dropdown-icon transform rotate-0 transition-transform duration-300" id="icon3"><img src="asset/icon/dropdown.svg" alt="dropdown"></span>
                </button>
              </div>
              <div id="answer3" class="bg-[#009DFF] faq-answer text-white text-lg overflow-hidden transition-all duration-500 ease-in-out w-full rounded-lg p-6" style="max-height: 0; padding-top: 0; padding-bottom: 0;">
                  <p>Yes, you can browse job postings and save them for later without applying immediately. Use the Bookmark feature to keep track of listings you are interested in.</p>
              </div>
            </div>
            <!-- FAQ 5 -->
            <div>
              <div class="faq-item bg-[#005E99] rounded-lg p-6">
                <button class="faq-question text-white text-left w-full text-xl flex items-center justify-between focus:outline-none" onclick="toggleAnswer(4)">
                  How can I update my profile information?
                  <span class="dropdown-icon transform rotate-0 transition-transform duration-300" id="icon4"><img src="asset/icon/dropdown.svg" alt="dropdown"></span>
                </button>
              </div>
              <div id="answer4" class="bg-[#009DFF] faq-answer text-white text-lg overflow-hidden transition-all duration-500 ease-in-out w-full rounded-lg p-4" style="max-height: 0; padding-top: 0; padding-bottom: 0;">
                  <p>You can update your or profile by clicking on the Profile section of the dashboard. Make sure your profile is complete to increase your chances of being shortlisted.</p>
              </div>
            </div>
        </div>
      </div>
      <!-- Right-side Image Section -->
      <div class="w-2/4 flex justify-center">
        <img src="asset/faq.svg" alt="FAQ Image" class="max-w-full h-auto">
      </div>
  </div>

  <!-- Footer -->
  @include('layouts.footer')
</body>
</html>