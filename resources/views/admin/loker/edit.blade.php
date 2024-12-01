<!-- resources/views/admin/loker/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Edit Lowongan Kerja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar_admin')

    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-6">Edit Lowongan Kerja</h2>
        
        <form action="{{ route('admin.loker.update', $loker->id_loker) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            
            <!-- Success Alert -->
            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" value="{{ $loker->nama_perusahaan }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Kota</label>
                <input type="text" name="kota" value="{{ $loker->kota }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Alamat Perusahaan</label>
                <input type="text" name="alamat_perusahaan" value="{{ $loker->alamat_perusahaan }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Logo Perusahaan</label>
                <input type="file" name="logo_company" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Lowongan</label>
                <input type="text" name="nama_loker" value="{{ $loker->nama_loker }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Workshift</label>
                <input type="text" name="workshift" value="{{ $loker->workshift }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Jenjang Minimum</label>
                <input type="text" name="jenjang_minimum" value="{{ $loker->jenjang_minimum }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Tipe Pekerjaan</label>
                <select name="tipe" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
                    <option value="Onsite" {{ $loker->tipe == 'Onsite' ? 'selected' : '' }}>Onsite</option>
                    <option value="Remote" {{ $loker->tipe == 'Remote' ? 'selected' : '' }}>Remote</option>
                    <option value="Hybrid" {{ $loker->tipe == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Gaji</label>
                <input type="number" name="gaji" value="{{ $loker->gaji }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Maksimal Usia</label>
                <input type="number" name="maksimal_usia" value="{{ $loker->maksimal_usia }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
                <textarea name="deskripsi" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" rows="5">{{ $loker->deskripsi }}</textarea>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">No. Telp Perusahaan</label>
                <input type="text" name="no_telp_perusahaan" value="{{ $loker->no_telp_perusahaan }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Lowongan Kerja
                </button>
            </div>
        </form>
    </div>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '<strong>Successful!</strong>',
                text: '{{ session('success') }}',
                confirmButtonColor: '#005E99',
                iconColor: '#009DFF',
                confirmButtonText: '<strong>Continue</strong>',
                customClass: {
                    popup: 'swal2-popup',
                    title: 'swal2-title',
                    content: 'swal2-content',
                    confirmButton: 'swal2-confirm',
                    cancelButton: 'swal2-cancel'
                }
            });
        </script>
    @endif
    
    @include('layouts.footer_admin')
</body>
</html>
