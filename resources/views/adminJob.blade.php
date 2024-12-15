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
<body class="bg-white font-[montserrat]">
    <!-- Navigation -->
    @include('layouts.navbar_admin')

    <!-- Title Section -->
    <div class="pt-10 ml-8">
        <h1 class="text-3xl font-bold text-[#003759] font-[montserrat] ">Uploaded Jobs</h1>
    </div>
        <!-- Bagian Card Loker -->
        <div class="pl-8 pr-8 pt-4 max-w-none mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-20">
        @forelse($lokers as $loker)
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="{{ asset('storage/' . $loker->logo_company) }}" alt="{{ $loker->nama_perusahaan }} Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
                            <div class="flex items-center space-x-2 text-[#0076BF]">
                                <i class="fas fa-building"></i>
                                <span class="text-sm">{{ $loker->nama_perusahaan }}</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-sm text-[#0076BF]">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>{{ $loker->kota }}</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-briefcase"></i>
                                <span>{{ $loker->tipe }}</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="far fa-clock"></i>
                                <span>{{ $loker->days_ago }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 font-['Montserrat']">{{ $loker->nama_loker }}</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp {{ number_format($loker->gaji, 0, ',', '.') }}</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <a href="{{ route('admin.loker.edit', $loker->id_loker) }}" class="bg-[#009DFF] hover:bg-[#0070B6] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                            Edit
                        </a>
                        <form action="{{ route('admin.hapusJobs', $loker->id_loker) }}" method="POST" id="delete-form-{{ $loker->id_loker }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" 
                                    class="bg-[#F44336] hover:bg-[#B22E24] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']"
                                    onclick="confirmDeleteLoker({{ $loker->id_loker }})">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-[#262626] font-['Montserrat'] leading-relaxed text-justify">
                    {{ $loker->deskripsi }}
                </p>
            </div>
        @empty
            <div class="col-span-full text-center py-16">
                <img src="{{ asset('asset/search_notfound.svg') }}" alt="Tidak Ada Lowongan" class="mx-auto mb-4 w-64 h-64">
                <h3 class="text-2xl font-bold text-[#003759] mb-2"> Data Lowongan Kerja Tidak Ada</h3>
                <p class="text-gray-600 mb-6">Belum ada lowongan kerja yang di upload xixi >/<</p>
            </div>
        @endforelse
        </div>

    
        <!-- Pagination -->
        <div class="flex justify-center mt-8">
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
        function confirmDeleteLoker(lokerId) {
            Swal.fire({
                title: 'Are you sure? ',
                text: "This job information will be permanently deleted",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + lokerId).submit();
                }
            });
        }
    </script>
</body>
</html>