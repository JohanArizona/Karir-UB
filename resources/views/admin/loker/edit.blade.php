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
                <div>
                    <label for="company-name" class="block text-[#262626] font-medium mb-2">Company Name</label>
                    <input type="text" id="company-name" name="company-name" value="{{ $loker->nama_perusahaan }}" 
                           class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>

                    <label for="regency-city" class="block text-[#262626] font-medium mt-6 mb-2">Regency/City</label>
                    <input type="text" id="regency-city" name="regency-city" value="{{ $loker->kota }}" 
                           class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>

                    <label for="company-address" class="block text-[#262626] font-medium mt-6 mb-2">Company Address</label>
                    <textarea id="company-address" name="company-address" 
                              class="block w-full px-4 py-2 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] resize-none" rows="9" required>{{ $loker->alamat_perusahaan }}</textarea>
                </div>

                <!-- Right Column -->
                <div>
                    <label for="company-phone" class="block text-[#262626] font-medium mb-2">Company Phone Number</label>
                    <input type="text" id="company-phone" name="company-phone" value="{{ $loker->no_telp_perusahaan }}" 
                           class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>

                    <label for="company-logo" class="block text-[#262626] font-medium mt-6 mb-2">Company Logo</label>
                    <div id="drop-area" 
                         class="border-2 border-dashed border-gray-300 bg-[#FFFAFA] rounded-lg flex flex-col items-center justify-center h-[350px]">
                        <input type="file" id="company-logo" name="company-logo" accept="image/*" class="hidden" onchange="handleFileSelect(event)">
                        <label id="placeholder-text" for="company-logo" class="text-gray-500 text-center cursor-pointer">
                            Drag your file(s) or <span class="text-[#009DFF] underline">browse</span><br>
                            Max 10 MB files are allowed
                        </label>
                        <div id="preview-container" class="flex flex-col items-center mt-4">
                            <!-- Preview image will be inserted here -->
                        </div>
                    </div>
                </div>

                <!-- Additional Fields -->
                <div>
                    <label for="job-title" class="block text-[#262626] font-medium mb-2">Job Title/Position</label>
                    <input type="text" id="job-title" name="job-title" value="{{ $loker->nama_loker }}" 
                           class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>

                    <label for="work-shift" class="block text-[#262626] font-medium mt-6 mb-2">Work Shift</label>
                    <input type="text" id="work-shift" name="work-shift" value="{{ $loker->workshift }}" 
                           class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>
                </div>

                <div>
                    <label for="type-of-job" class="block text-[#262626] font-medium mb-2">Type of Job</label>
                    <select id="type-of-job" name="type-of-job" 
                            class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>
                        <option value="Onsite" {{ $loker->tipe == 'Onsite' ? 'selected' : '' }}>Onsite</option>
                        <option value="Remote" {{ $loker->tipe == 'Remote' ? 'selected' : '' }}>Remote</option>
                        <option value="Hybrid" {{ $loker->tipe == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                    </select>

                    <label for="salary" class="block text-[#262626] font-medium mt-6 mb-2">Salary</label>
                    <input type="number" id="salary" name="salary" value="{{ $loker->gaji }}" 
                           class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>
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
