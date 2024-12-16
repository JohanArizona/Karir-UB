<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 font-[Montserrat]">
    <!-- Navigation -->
    @include('layouts.navbar_admin')

    <!-- Title Section -->
    <div class="pt-10 ml-8">
        <h1 class="text-3xl font-bold text-[#003759]">Uploaded Articles</h1>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card Loop -->
            @forelse($articles as $article)
                <div class="w-[400px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200 flex flex-col">
                    <!-- Image -->
                    <img src="{{ asset('storage/' . $article->gambar) }}" alt="{{ $article->judul }}" class="w-full h-[270px] object-cover">
                    
                    <!-- Content -->
                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <!-- Title and Description -->
                        <div>
                            <h2 class="text-neutral-800 text-[20px] font-semibold mb-2 line-clamp-2">
                                {{ $article->judul }}
                            </h2>
                            <span class="text-[#003759] text-sm font-semibold">KarirUB</span>
                            <p class="mt-2 mb-6 text-gray-700 text-sm line-clamp-3">
                                {{ $article->deskripsi }}
                            </p>
                            <div class="flex items-center text-[#8c8c8c] text-xs font-semibold">
                            <img src="{{ asset('asset/icon/kalender_abu.svg') }}" class="w-4 h-4 mr-2" alt="Kalender">
                                {{ \Carbon\Carbon::parse($article->tgl_post)->format('l, d M Y H:i') . ' WIB' }}
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="mt-4 flex justify-between items-center">
                            <a href="{{ route('articles.edit', $article->id_artikel) }}" class="w-[45%]">
                                <button class="w-full h-[48px] bg-[#009dff] rounded-md text-white text-sm font-medium hover:bg-blue-600 transition">
                                    Edit
                                </button>
                            </a>
                            <form id="delete-form-{{ $article->id_artikel }}" action="{{ route('admin.HapusArticles', $article->id_artikel) }}" method="POST" class="w-[45%]">
                                @csrf
                                @method('DELETE')
                                <button type="button" 
                                        class="w-full h-[48px] bg-[#f44336] rounded-md text-white text-sm font-medium hover:bg-red-600 transition"
                                        onclick="confirmDeleteArtikel({{ $article->id_artikel }})">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Empty State -->
                <div class="col-span-full text-center py-16">
                    <img src="{{ asset('asset/search_notfound.svg') }}" alt="No Articles Found" class="mx-auto mb-4 w-64 h-64">
                    <h3 class="text-2xl font-bold text-[#003759] mb-2">No Articles Found</h3>
                    <p class="text-gray-600">There are no uploaded articles yet!</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
    <div class="flex justify-center mt-10 mb-8">
        <nav class="flex items-center space-x-2">
        <img 
        src="{{ asset('asset/icon/arrow_left.svg') }}" 
        alt="Panah Prev" 
        class="hover:scale-110 transition-transform duration-200">
            <button class="px-3 py-2 rounded-md text-sm text-[#757575] hover:bg-[#FFFAFA] font-['Montserrat']">Previous</button>
            <button class="px-3 py-2 rounded-[10px] text-sm text-white bg-[#003759] font-['Montserrat']">1</button>
            <button class="px-3 py-2 rounded-[10px] text-sm text-gray-700 hover:bg-[#FFFAFA] font-['Montserrat']">2</button>
            <button class="px-3 py-2 rounded-md text-sm text-[#003759] hover:bg-[#FFFAFA] font-['Montserrat']">...</button>
            <button class="px-3 py-2 rounded-md text-sm text-[#003759] hover:bg-[#FFFAFA] font-['Montserrat']">Next</button>
            <img 
        src="{{ asset('asset/icon/arrow_right.svg') }}" 
        alt="Panah Next" 
        class="hover:scale-110 transition-transform duration-200">
        </nav>
    </div>
    </div>


    <!-- Footer -->
    @include('layouts.footer_admin')

    <!-- Delete Confirmation Script -->
    <script>
        function confirmDeleteArtikel(articleId) {
            Swal.fire({
                title: 'Are You Sure?',
                text: "This article will be permanently deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + articleId).submit();
                }
            });
        }
    </script>
</body>
</html>
