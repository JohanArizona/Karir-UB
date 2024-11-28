<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Add New Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-white font-[montserrat]">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
        <div class="flex items-center space-x-8 mr-8">
            <img src="asset/logo_karirub.svg" alt="KarirUB Logo" class="h-14 ml-4">
                    <div class="hidden md:flex space-x-16">
                        <a href="#" class="text-[#003759] text-xl font-semibold ml-12">Home </a>
                        <a href="#" class="text-[#003759] text-xl font-semibold">Jobs</a>
                        <a href="#" class="text-[#003759] text-xl font-semibold">Articles</a>
                        <a href="#" class="text-[#003759] text-xl font-semibold">Add Jobs</a>
                        <a href="#" class="text-[#003759] text-xl font-semibold">Add Articles</a>
                    </div>
                </div>
            <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="bg-[#EC221F] hover:bg-[#C31E1B] text-white px-6 py-2 rounded-md font-medium">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Background Profile -->
    <div class="absolute w-full max-w-full -z-10 top-[-160px]">
        <img src="asset/background_create_job.png" alt="Background" class="w-full h-auto">
    </div>

    <!-- Create Job Section -->
    <div class="flex items-center justify-center py-40">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-6xl">
            <h1 class="text-[#003759] text-2xl md:text-3xl font-bold mb-6">Add New Job</h1>
            <form class="grid grid-cols-1 md:grid-cols-2 gap-8" id="job-form">
                <!-- Left Column -->
                <div>
                    <label for="company-name" class="block text-[#262626] font-medium mb-2">Company Name</label>
                    <input type="text" id="company-name" name="company-name" 
                           class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" 
                           placeholder="Enter company name" required>
                    
                    <label for="regency-city" class="block text-[#262626] font-medium mt-6 mb-2">Regency/City</label>
                    <input type="text" id="regency-city" name="regency-city" 
                           class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" 
                           placeholder="Enter regency/city" required>

                    <label for="company-address" class="block text-[#262626] font-medium mt-6 mb-2">Company Address</label>
                    <textarea id="company-address" name="company-address" 
                              class="block w-full px-4 py-2 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] resize-none" 
                              rows="5" placeholder="Enter complete company address" required></textarea>
                </div>

                <!-- Right Column -->
                <div>
                    <label class="block text-[#262626] font-medium mb-2">Company Logo</label>
                    <div id="drop-area" class="border-2 border-dashed border-gray-300 bg-[#FFFAFA] rounded-lg flex flex-col items-center justify-center h-[350px] space-y-4">
                        <!-- Icon -->
                        <img src="images/assets/upload_drag.svg" alt="Cloud Icon" class="w-10 h-10">
                        <!-- Input file -->
                        <input type="file" id="file-input" accept="image/*, .pdf" class="hidden" />
                        <!-- Label teks -->
                        <label for="file-input" class="text-gray-500 text-center cursor-pointer">
                            Drag your file(s) or <span class="text-[#009DFF] underline">browse</span><br>
                            Max 10 MB files are allowed
                        </label>
                    </div>
                    <!-- File Preview -->
                    <div id="file-preview" class="mt-4 text-sm text-gray-700"></div>
                </div>
                

                <!-- Submit Button -->
                <div class="col-span-1 md:col-span-2 flex justify-end">
                    <button type="submit" 
                            class="bg-[#005E99] hover:bg-[#005481] text-[#FFFAFA] font-medium py-2 px-6 rounded-md">
                        Next Step
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script -->
    <script>
        // JavaScript for file upload
        const dropArea = document.getElementById("drop-area");
        const fileInput = document.getElementById("file-input");
        const filePreview = document.getElementById("file-preview");

        // Drag and Drop events
        dropArea.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropArea.classList.add("border-blue-500");
        });

        dropArea.addEventListener("dragleave", () => {
            dropArea.classList.remove("border-blue-500");
        });

        dropArea.addEventListener("drop", (e) => {
            e.preventDefault();
            dropArea.classList.remove("border-blue-500");
            handleFileUpload(e.dataTransfer.files);
        });

        // File input change
        fileInput.addEventListener("change", (e) => {
            handleFileUpload(e.target.files);
        });

        // Handle file upload
        function handleFileUpload(files) {
            const file = files[0];
            if (file) {
                if (file.size > 10 * 1024 * 1024) { // Check file size (10 MB max)
                    filePreview.innerHTML = "<span class='text-red-500'>File is too large! Please select a file under 10 MB.</span>";
                } else {
                    filePreview.innerHTML = `<span class="text-green-500">Uploaded: ${file.name}</span>`;
                }
            }
        }
    </script>
</body>
</html>
