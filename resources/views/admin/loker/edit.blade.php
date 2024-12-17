<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Edit Job Information</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body class="bg-white font-[montserrat]">

    <!-- Navigation -->
    @include('layouts.navbar_admin')

    <!-- Background Profile -->
    <div class="absolute w-full -z-10 top-[-160px]">
        <img src="{{ asset('asset/background_create_job.png') }}" alt="Background" class="w-full h-auto">
    </div>

    <!-- Edit Job Section -->
    <div class="flex items-center justify-center py-16">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-6xl pb-[40px]">
            <h1 class="text-[#003759] text-2xl md:text-3xl font-bold mb-6">Edit Job Information</h1>
                <form action="{{ route('admin.loker.update', $loker->id_loker) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @csrf
                    @method('PUT')

                    <!-- Success Alert -->
                    @if (session('success'))
                        <div class="bg-green-100 text-green-800 p-4 rounded-md col-span-2 mb-4">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <!-- Left Column -->
                    <div class="space-y-6">
                        <label for="nama_perusahaan" class="block text-[#262626] font-medium">Company Name</label>
                        <input type="text" id="nama_perusahaan" name="nama_perusahaan" value="{{ $loker->nama_perusahaan }}" 
                            class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>

                        <label for="kota" class="block text-[#262626] font-medium">Regency/City</label>
                        <input type="text" id="kota" name="kota" value="{{ $loker->kota }}" 
                            class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>

                        <label for="alamat_perusahaan" class="block text-[#262626] font-medium">Company Address</label>
                        <textarea id="alamat_perusahaan" name="alamat_perusahaan" 
                                class="block w-full px-4 py-2 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] resize-none" rows="9" required>{{ $loker->alamat_perusahaan }}</textarea>

                        <label for="nama_loker" class="block text-[#262626] font-medium">Job Title/Position</label>
                        <input type="text" id="nama_loker" name="nama_loker" value="{{ $loker->nama_loker }}" 
                            class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>

                        <label for="workshift" class="block text-[#262626] font-medium">Work Shift</label>
                        <input type="text" id="workshift" name="workshift" value="{{ $loker->workshift }}" 
                            class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>

                        <label for="jenjang_minimum" class="block text-[#262626] font-medium">Minimum Education Level</label>
                        <input type="text" id="jenjang_minimum" name="jenjang_minimum" value="{{ $loker->jenjang_minimum }}" 
                            class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <label for="no_telp_perusahaan" class="block text-[#262626] font-medium">Company Phone Number</label>
                        <input type="text" id="no_telp_perusahaan" name="no_telp_perusahaan" value="{{ $loker->no_telp_perusahaan }}" 
                            class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>

                            <label for="logo_company" class="block text-[#262626] font-medium">Company Logo</label>
<div id="drop-area" 
    class="border-2 border-dashed border-gray-300 bg-[#FFFAFA] rounded-lg flex flex-col items-center justify-center h-[364px]">
    <input type="file" id="logo_company" name="logo_company" accept="image/*" class="hidden" onchange="handleFilePreview(event)">
    
    <!-- Preview Container -->
    <div id="placeholder" class="flex flex-col items-center space-y-2">
        <!-- If logo exists in database -->
        @if($loker->logo_company)
            <img id="preview-image" src="{{ asset('storage/'.$loker->logo_company) }}" alt="Company Logo" class="w-48 h-48 object-cover rounded-md">
        @else
            <img id="preview-image" src="{{ asset('asset/icon/upload.svg') }}" alt="Upload Icon" class="w-24 h-24 rounded-md">
        @endif
        <span id="file-info" class="text-gray-500 text-sm">Drag your file(s) or <span class="text-[#009DFF] underline">browse</span></span>
        <span id="max-file-info" class="text-xs text-gray-400">Max 2 MB files are allowed</span>
    </div>
</div>

<script>
    function handleFilePreview(event) {
        const fileInput = event.target;
        const previewImage = document.getElementById('preview-image');
        const fileInfo = document.getElementById('file-info');
        const maxFileInfo = document.getElementById('max-file-info');
        const file = fileInput.files[0];

        if (file) {
            // Validasi ukuran file
            if (file.size > 2 * 1024 * 1024) { // 2MB
                Swal.fire({
                    icon: 'error',
                    title: 'File Too Large',
                    text: 'Maximum file size is 2 MB'
                });
                fileInput.value = ''; // Reset input file
                return;
            }

            // Menampilkan gambar yang dipilih
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewImage.classList.remove('w-24', 'h-24');
                previewImage.classList.add('w-48', 'h-48', 'object-cover');
            };
            reader.readAsDataURL(file);

            // Mengupdate teks dengan nama file dan ukuran
            const fileSize = (file.size / 1024 / 1024).toFixed(2); // Ukuran dalam MB
            fileInfo.innerHTML = `<span class="text-gray-700">Size: ${fileSize} MB</span>`;

            // Sembunyikan "Max 2 MB files are allowed"
            maxFileInfo.style.display = "none";
        }
    }

    // Tambahkan event listener untuk membuka file input saat drop area diklik
    document.getElementById('drop-area').addEventListener('click', function() {
        document.getElementById('logo_company').click();
    });
</script>

                        <label for="tipe" class="block text-[#262626] font-medium">Type of Job</label>
                        <div class="relative">
                            <select id="tipe" name="tipe" 
                                class="block w-full px-4 py-4 pr-10 border border-gray-300 rounded-md bg-[#FFFAFA] 
                                    focus:ring-[#003759] focus:border-[#003759] 
                                    appearance-none 
                                    cursor-pointer" required>
                                <option value="Onsite" {{ $loker->tipe == 'Onsite' ? 'selected' : '' }}>Onsite</option>
                                <option value="Remote" {{ $loker->tipe == 'Remote' ? 'selected' : '' }}>Remote</option>
                                <option value="Hybrid" {{ $loker->tipe == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                        

                        <label for="gaji" class="block text-[#262626] font-medium">Salary</label>
                        <input type="number" id="gaji" name="gaji" value="{{ $loker->gaji }}" 
                            class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>
                        
                        <label for="maksimal_usia" class="block text-[#262626] font-medium">Maximum Age</label>
                        <input type="number" id="maksimal_usia" name="maksimal_usia" value="{{ $loker->maksimal_usia }}" 
                            class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>
                    </div>

                    <!-- Deskripsi Field -->
                    <div class="col-span-1 md:col-span-2">
                        <label for="deskripsi" class="block text-[#262626] font-medium">Job Description</label>
                        <textarea id="deskripsi" name="deskripsi" 
                                class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] resize-y" rows="6" required>{{ $loker->deskripsi }}</textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-span-1 md:col-span-2 flex justify-end mt-6">
                        <button type="submit" class="bg-[#005E99] hover:bg-[#005481] text-[#FFFAFA] font-medium py-2 px-8 rounded-md">
                            Update
                        </button>
                    </div>
                </form>
        </div>
    </div>

    @include('layouts.footer_admin')

    <script>
        @if(session('success'))
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
        @endif 

        const dropArea = document.getElementById('drop-area');
        const fileInput = document.getElementById('company-logo');
        const previewContainer = document.getElementById('preview-container');
        const placeholderText = document.getElementById('placeholder-text');

        // Handle drag and drop
        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.classList.add('bg-gray-100');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('bg-gray-100');
        });

        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            dropArea.classList.remove('bg-gray-100');
            const files = e.dataTransfer.files;
            fileInput.files = files; // Attach files to input element
            handleFileSelect({ target: fileInput });
        });

        // Handle file input and preview
        function handleFileSelect(event) {
            const files = event.target.files;
            previewContainer.innerHTML = ''; // Clear previous preview

            if (files.length > 0) {
                const file = files[0];

                // Validate file size
                if (file.size > 10 * 1024 * 1024) {
                    alert('File size exceeds 10 MB.');
                    fileInput.value = ''; // Reset file input
                    return;
                }

                // Hide placeholder text
                placeholderText.style.display = 'none';

                // Create image preview
                const reader = new FileReader();
                reader.onload = (e) => {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = 'Preview';
                    img.className = 'w-24 h-24 object-cover rounded-lg shadow-md';

                    const info = document.createElement('p');
                    info.textContent = `File size: ${(file.size / 1024 / 1024).toFixed(2)} MB`;
                    info.className = 'text-gray-600 mt-2 text-sm';

                    previewContainer.appendChild(img);
                    previewContainer.appendChild(info);
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

</body>
</html>
