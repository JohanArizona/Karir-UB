<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Article</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        /* Styling SweetAlert2 */
        .swal2-popup {
            font-family: 'Montserrat', sans-serif; /* Ganti font */
            background-color: #FFFFFF; /* Ganti latar belakang */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow untuk popup */
        }

        .swal2-title {
            color: #003759; /* Ganti warna judul */
            font-size: 24px; /* Ukuran font judul */
        }

        .swal2-content {
            color: #666; /* Ganti warna konten */
            font-size: 16px; /* Ukuran font konten */
        }

        .swal2-confirm {
            background-color: #005E99; /* Ganti warna tombol OK */
            border-radius: 6px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .swal2-confirm:hover {
            background-color: #004b73; /* Warna hover tombol OK */
        }

        .swal2-cancel {
            background-color: #f0f0f0; /* Ganti warna tombol Cancel */
            border-radius: 6px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .swal2-cancel:hover {
            background-color: #e0e0e0; /* Warna hover tombol Cancel */
        }
    </style>
</head>
<body class="bg-white font-[montserrat]">
    <!-- Navigation -->
    @include('layouts.navbar_admin')

    <!-- Background Profile -->
    <div class="absolute w-full -z-10 top-[-200px]">
    <img src="{{ asset('asset/background_create_job.svg') }}" alt="Background" class="w-full h-auto">

    </div>

    <!-- Form Section -->
    <div class="flex items-center justify-center py-40 px-6">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-3xl">
            <h1 class="text-2xl font-bold text-[#003759] mb-6">Add New Article</h1>

            <!-- Success Alert -->
            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter article title" 
                           class="block w-full px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" required>
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="description" name="description" rows="6" placeholder="Enter full article description"
                              class="block w-full px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] resize-none" required></textarea>
                </div>

                <!-- Content -->
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                    <textarea id="content" name="content" rows="10" placeholder="Enter article content"
                              class="block w-full px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] resize-none" required></textarea>
                </div>

                <!-- Cover Image -->
                <div>
                    <label for="cover_image" class="block text-sm font-medium text-gray-700 mb-2">Cover Image</label>
                    <input type="file" id="cover_image" name="cover_image" accept="image/*" class="hidden" required onchange="handleFilePreview(event)">
                    <div id="preview-container"
                        class="border-2 border-dashed border-gray-300 bg-[#FFFAFA] rounded-lg flex flex-col items-center justify-center h-36 space-y-2 cursor-pointer"
                        onclick="document.getElementById('cover_image').click()">
                        <div id="placeholder" class="flex flex-col items-center space-y-2">
                            <img src="{{ asset('asset/icon/upload.svg') }}" alt="Upload Icon" class="w-8 h-8">
                            <span class="text-gray-500 text-sm">Drag your file(s) or <span class="text-[#009DFF] underline">browse</span></span>
                            <span class="text-xs text-gray-400">Max 10 MB files are allowed</span>
                            <div id="preview-container" class="flex flex-col items-center mt-4">
                                            <!-- Preview image will be inserted here -->
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" 
                            class="bg-[#005E99] hover:bg-[#005481] text-white font-medium py-2 px-6 rounded-md w-[100px] h-[40px]">
                        Post
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Display the selected file name
        document.getElementById('cover_image').addEventListener('change', function(e) {
            const fileName = e.target.files[0].name;
            document.getElementById('file-name').textContent = 'Selected file: ' + fileName;
        });

        // Check for success message from Laravel
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

        // Optional: Add form submission handling
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Perform form validation
            const title = document.getElementById('title').value;
            const description = document.getElementById('description').value;
            const content = document.getElementById('content').value;
            const coverImage = document.getElementById('cover_image').files[0];

            // Basic validation
            if (!title || !description || !content || !coverImage) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill in all fields and select a cover image',
                    confirmButtonColor: '#005E99'
                });
                return;
            }

            // If validation passes, submit the form
            this.submit();
        });

        function handleFilePreview(event) {
    const fileInput = event.target;
    const previewContainer = document.getElementById('preview-container');
    const placeholder = document.getElementById('placeholder');

    // Clear existing content in the preview container
    previewContainer.innerHTML = '';

    if (fileInput.files && fileInput.files[0]) {
        const file = fileInput.files[0];
        const fileReader = new FileReader();

        // Validate file type
        if (!file.type.startsWith('image/')) {
            Swal.fire({
                icon: 'error',
                title: 'Invalid File',
                text: 'Please upload a valid image file.',
                confirmButtonColor: '#005E99',
            });
            fileInput.value = ''; // Clear invalid file
            return;
        }

        // Validate file size (10MB limit)
        const maxFileSize = 10 * 1024 * 1024; // 10MB in bytes
        if (file.size > maxFileSize) {
            Swal.fire({
                icon: 'error',
                title: 'File Too Large',
                text: 'The file exceeds the 10 MB limit.',
                confirmButtonColor: '#005E99',
            });
            fileInput.value = ''; // Clear invalid file
            return;
        }

        // Read the file and display the preview
        fileReader.onload = function (e) {
            // Create image preview
            const imgPreview = document.createElement('img');
            imgPreview.src = e.target.result;
            imgPreview.alt = 'Image Preview';
            imgPreview.className = 'h-24 w-24 object-cover rounded-md shadow-md mb-2';

            // Create file size text
            const fileSizeKB = (file.size / 1024).toFixed(2); // Convert to KB
            const fileInfoText = document.createElement('span');
            fileInfoText.textContent = `Size: ${fileSizeKB} KB`;
            fileInfoText.className = 'text-xs text-gray-500';

            // Append preview and file size to the container
            previewContainer.appendChild(imgPreview);
            previewContainer.appendChild(fileInfoText);
        };

        fileReader.readAsDataURL(file);
    } else {
        // Restore placeholder if no file is selected
        previewContainer.innerHTML = placeholder.outerHTML;
    }
}


    </script>
</body>
</html>
