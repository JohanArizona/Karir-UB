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
    <nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
        <div class="flex items-center space-x-8 mr-8">
            <img src="asset/logo_karirub.svg" alt="KarirUB Logo" class="h-14 ml-4">
            <div class="hidden md:flex space-x-16">
                <a href="#" class="text-gray-500 text-lg font-semibold">Home</a>
                <a href="#" class="text-gray-500 text-lg font-semibold">Jobs</a>
                <a href="#" class="text-gray-500 text-lg font-semibold">Articles</a>
                <a href="#" class="text-gray-500 text-lg font-semibold">Add Jobs</a>
                <a href="#" class="text-[#003759] text-lg font-bold">Add Articles</a>
            </div>
        </div>
        <button class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-md font-medium">Logout</button>
    </nav>

    <!-- Background Profile -->
    <div class="absolute w-full -z-10 top-[-160px]">
        <img src="images/assets/background_create_job.svg" alt="Background" class="w-full h-auto">
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
                    <input type="file" id="cover_image" name="cover_image" accept="image/*" class="hidden" required>
                    <div class="border-2 border-dashed border-gray-300 bg-[#FFFAFA] rounded-lg flex flex-col items-center justify-center h-36 space-y-2 cursor-pointer"
                         onclick="document.getElementById('cover_image').click()">
                        <img src="asset/upload_icon.svg" alt="Upload Icon" class="w-8 h-8">
                        <span class="text-gray-500 text-sm">Drag your file(s) or <span class="text-[#009DFF] underline">browse</span></span>
                        <span class="text-xs text-gray-400">Max 10 MB files are allowed</span>
                    </div>
                    <p id="file-name" class="mt-2 text-sm text-gray-500"></p> <!-- Display file name here -->
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
    </script>
</body>
</html>
