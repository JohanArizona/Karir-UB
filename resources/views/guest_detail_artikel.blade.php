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
    @include('layouts.navigation')

    <!-- Article -->
    <div class="max-w-7xl mx-auto py-12 px-6">
        <div class="flex flex-col lg:flex-row items-start gap-12">
            <!-- Main Article Section -->
            <div class="w-full lg:w-2/3">
                <h1 class="text-[32px] font-[600] leading-normal text-[#262626] font-[Montserrat] mb-4">
                    {{ $article->judul }}
                </h1>
                <div class="flex flex-col text-sm mb-8">
                    <span class="text-[#005E99] font-bold">KarirUB</span>
                    <span class="text-gray-500">
                        {{ \Carbon\Carbon::parse($article->tgl_post)->format('l, d M Y H:i') . ' WIB' }}
                    </span>
                </div>                
                <img src="{{ asset('storage/' . $article->gambar) }}" alt="Article Image" class="w-full h-auto mb-8">
                
                <!-- Article Paragraphs -->
                <p class="text-[18px] font-[500] leading-normal text-[#262626] font-[Montserrat] text-justify mb-6">
                    {{ $article->isi_artikel }}
                </p>
                <!-- Add more article paragraphs here if needed -->
            </div>

        <!-- Most Popular Section -->
        <aside class="w-full lg:w-1/3">
            <div class="mb-6">
                <h2 class="text-[32px] font-montserrat font-bold text-[#262626] mb-2">
                    MOST POPULAR
                </h2>
                <div class="w-[56.018px] h-[3px] bg-[#005E99]"></div>
            </div>

            <!-- Artikel Terbaru (Latest) -->
            <div class="flex flex-col gap-4 mb-6">
                <a href="{{ route('guestDetailArticles', $latestArticle->id_artikel) }}">
                    <img src="{{ asset('storage/' . $latestArticle->gambar) }}" alt="{{ $latestArticle->judul }}" class="w-[440px] h-[260px] flex-shrink-0 object-cover">
                </a>
                <a href="{{ route('guestDetailArticles', $latestArticle->id_artikel) }}" class="text-[#262626] font-montserrat text-[20px] font-semibold leading-normal pb-6">
                    {{ $latestArticle->judul }}
                </a>
            </div>

            <!-- Artikel Lainnya (Other Articles) -->
            <div class="flex flex-col gap-4">
                @foreach ($otherArticles as $other)
                <div class="flex gap-4">
                    <a href="{{ route('guestDetailArticles', $other->id_artikel) }}" class="flex-shrink-0">
                        <img src="{{ asset('storage/' . $other->gambar) }}" alt="{{ $other->judul }}" class="w-[210px] h-[140px] object-cover pb-6">
                    </a>
                    <a href="{{ route('userDetailArticles', $other->id_artikel) }}" class="text-[#262626] font-montserrat text-[18px] font-semibold leading-normal pb-6">
                        {{ $other->judul }}
                    </a>
                </div>
                @endforeach
            </div>
        </aside>
    </div>
    </div>

<!-- Footer -->
@include('layouts.footer')

</body>
</html>