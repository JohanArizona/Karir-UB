<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Article</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-montserrat">
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
        <img src="asset/background_create_job.svg" alt="Background" class="w-full h-auto">
    </div>

    <!-- Form Section -->
    <div class="flex items-center justify-center py-40 px-6">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-3xl">
            <h1 class="text-2xl font-bold text-[#003759] mb-6">Edit Article</h1>
            <form class="space-y-6">
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

                <!-- Cover Image -->
                <div>
                    <label for="cover-image" class="block text-sm font-medium text-gray-700 mb-2">Cover Image</label>
                    <div class="border-2 border-dashed border-gray-300 bg-[#FFFAFA] rounded-lg flex flex-col items-center justify-center h-36 space-y-2 cursor-pointer">
                        <img src="asset/upload_icon.svg" alt="Upload Icon" class="w-8 h-8">
                        <span class="text-gray-500 text-sm">Drag your file(s) or <span class="text-[#009DFF] underline">browse</span></span>
                        <span class="text-xs text-gray-400">Max 10 MB files are allowed</span>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" 
                            class="bg-[#005E99] hover:bg-[#005481] text-white font-medium py-2 px-6 rounded-md w-[100px] h-[40px]">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
