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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>
    <!-- Navigation -->
    @include('layouts.navbar_admin')

    <!-- Title Section -->
    <div class="pt-10 ml-8">
        <h1 class="text-3xl font-bold text-[#003759] font-[montserrat] ">Uploaded Articles</h1>
    </div>

    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Wrapper -->
        <div class="flex justify-center">
            <!-- Grid Container -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card Content -->
            @forelse($articles as $article)
                <!-- Card 1 -->
                <div class="w-[400px] h-[670px] bg-[#fffafa] rounded-xl shadow-md overflow-hidden border border-gray-200">
                <img src="{{ asset('storage/' . $article->gambar) }}" alt="{{ $article->title }}" class="w-[438px] h-[270px] object-cover" alt="Thumbnail">
                    <div class="p-6">
                        <div class="mb-2 text-neutral-800 text-[32px] font-semibold font-['Montserrat']">{{ $article->judul }}</div>
                        <span class="text-[#003759] text-base font-semibold font-['Montserrat']">KarirUB</span>
                        <div class="mt-2 mb-12 w-[352px] h-[68px] break-words text-justify text-md font-medium font-['Montserrat'] overflow-hidden text-ellipsis line-clamp-3">
                        {{ $article->deskripsi }}
                        </div>
                        <div class="flex items-center text-[#8c8c8c] text-sm font-semibold font-['Montserrat'] mb-4">
                            <img src="asset/icon/kalender_abu.svg" class="w-4 h-4 mr-2" alt="Kalender">
                            {{ \Carbon\Carbon::parse($article->tgl_post)->format('l, d M Y H:i'). ' WIB' }}
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <a href="{{ route('articles.edit', $article->id_artikel) }}">
                            <button class="w-[166px] h-[57px] bg-[#009dff] rounded-[5px] text-white text-lg font-medium hover:bg-blue-600 transition-colors">
                                Edit
                            </button>   
                            </a>
                            <form id="delete-form-{{ $article->id_artikel }}" action="{{ route('admin.HapusArticles', $article->id_artikel) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button"
                                    class="w-[166px] h-[57px] bg-[#f44336] rounded-[5px] text-white text-lg font-medium hover:bg-red-600 transition-colors"
                                    onclick="confirmDeleteArtikel({{ $article->id_artikel }})">
                                Delete
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-16">
                <img src="{{ asset('asset/search_notfound.svg') }}" alt="Tidak Ada Lowongan" class="mx-auto mb-4 w-64 h-64">
                <h3 class="text-2xl font-bold text-[#003759] mb-2"> Data Artikel Tidak Ada</h3>
                <p class="text-gray-600 mb-6">Belum ada artikel yang di upload xixi >/<</p>
                </div>
                @endforelse
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
    @include('layouts.footer_admin')

    <!-- script konfirmasi delete -->
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
            customClass: {
                popup: 'swal2-popup',
                title: 'swal2-title',
                content: 'swal2-content',
                confirmButton: 'swal2-confirm',
                cancelButton: 'swal2-cancel'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form jika pengguna mengonfirmasi
                document.getElementById('delete-form-' + articleId).submit();
            }
        });
    }
    </script>
</body>
</html>