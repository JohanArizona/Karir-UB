@php
    // Ambil artikel terbaru
    $latestArticle = $articles->sortByDesc('tgl_post')->first();
    // Ambil artikel lainnya (selain yang terbaru)
    $otherArticles = $articles->except($latestArticle->id_artikel);
@endphp

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    @include('layouts.navbar_usernondash')

    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Kolase Card Besar -->
    <div class="w-[1248px] h-[623px] bg-[#FFFAFA] rounded-xl shadow-md overflow-hidden mb-8 ml-12 flex border border-[#B0B0B0]">
            <!-- Bagian Gambar -->
            <div class="w-3/5 h-full">
                <img src="{{ asset('storage/' . $latestArticle->gambar) }}" class="object-cover w-full h-full" alt="Hero Thumbnail">
            </div>
            <!-- Bagian Konten -->
            <div class="w-1/2 h-full flex flex-col justify-center px-12 text-black">
                <div class="text-4xl font-bold mb-4 font-['Montserrat'] text-[#262626]">
                    {{ $latestArticle->judul }}
                </div>
                <span class="text-[#003759] text-base font-semibold font-['Montserrat'] mb-4">{{ $latestArticle->sumber ?? 'KarirUB' }}</span>
                <div class="mb-8 w-[502px] text-justify text-md font-medium font-['Montserrat']">
                    {{ Str::limit($latestArticle->isi_artikel, 200) }} <!-- Mengambil 150 karakter pertama -->
                </div>
                <div class="flex items-center text-[#8c8c8c] text-sm font-semibold font-['Montserrat'] mb-6">
                    <img src="asset/icon/kalender_abu.svg" class="w-4 h-4 mr-2" alt="Kalender">
                    {{ \Carbon\Carbon::parse($latestArticle->tgl_post)->format('l, d M Y H:i') . ' WIB' }}
                </div>
                <div>
                    <a href="{{ route('userDetailArticles', $latestArticle->id_artikel) }}">
                    <button class="bg-[#003759] text-white text-lg font-bold w-[502px] h-[57px] rounded-md hover:bg-[#022E4A]">
                        Read More
                    </button>
                    </a>
                </div>
            </div>
    </div>

    <!-- Wrapper -->
    <div class="flex justify-center">
        <!-- Grid Container -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Card artikel -->
            @foreach($otherArticles as $article)
                <!-- Card 1 -->
                <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200 border-[#B0B0B0]">
                    <!-- Gambar Thumbnail -->
                    <img src="{{ asset('storage/' . $article->gambar) }}" class="w-[438px] h-[270px] object-cover" alt="Thumbnail">
                    
                    <div class="p-6">
                        <!-- Judul Artikel -->
                        <div class="mb-2 text-neutral-800 text-[32px] font-semibold font-['Montserrat']">{{ $article->judul }}</div>
                        
                        <!-- Sumber Artikel -->
                        <span class="text-[#003759] text-base font-semibold font-['Montserrat']">KarirUB</span>
                        
                        <!-- Deskripsi Artikel -->
                        <div class="mt-2 mb-12 w-[352px] h-[68px] break-words text-justify text-md font-medium font-['Montserrat'] overflow-hidden text-ellipsis line-clamp-3">
                            {{ Str::limit($article->deskripsi, 100) }} <!-- Mengambil 100 karakter pertama -->
                        </div>
                        
                        <!-- Tanggal Posting -->
                        <div class="flex items-center text-[#8c8c8c] text-sm font-semibold font-['Montserrat'] mb-4">
                            <img src="asset/icon/kalender_abu.svg" class="w-4 h-4 mr-2" alt="Kalender">
                            {{ \Carbon\Carbon::parse($article->tgl_post)->format('l, d M Y H:i') . ' WIB' }}
                        </div>
                        
                        <!-- Tombol Baca Artikel -->
                        <div class="flex justify-between items-center">
                        <a href="{{ route('userDetailArticles', $article->id_artikel) }}">
                            <button class="w-[355px] h-[57px] rounded-[10px] border border-black text-black text-base font-bold font-['Montserrat']">
                                Read Article
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            @endforeach
            
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
@include('layouts.footer')

</body>
</html>