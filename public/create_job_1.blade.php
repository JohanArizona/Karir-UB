<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-white overflow-y-hidden">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm h-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-12 w-auto" src="asset/logo_karirub.svg" alt="KarirUB">
                    </div>
                    <div class="ml-6 flex space-x-8">
                        <a href="#" class="text-gray-900 inline-flex items-center px-1 pt-1 text-md font-medium">Home</a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md font-semibold">Jobs</a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md font-semibold">Articles</a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md font-semibold">Add Jobs</a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md font-semibold">Add Articles</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md text-sm font-medium font">Logout</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Background Profile -->
    <div class="absolute w-full h-full z-[-1] justify-center items-center top-[-160px]">
        <img src="asset/background_create_job.svg" alt="Background Profile" class="w-full max-w-full h-auto max-w-none">
    </div>
    <!-- Create Job -->
    <div class="flex items-center justify-center min-h-screen relative -mt-4">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-6xl">
            <h1 class="text-2xl font-bold mb-6 text-[#003759] text-[36px]">Add New Job</h1>
            <form class="space-y-4">
            <div>
                <label for="company-name" class="block mb-2 mt-12">Company Name</label>
                <input type="text" id="company-name" name="company-name" class="border border-[#8C8C8C] bg-[#FFFAFA] rounded-lg px-4 py-2 w-full max-w-[480px]" placeholder="Enter company name" required>
            </div>
            <div>
                <label for="regency-city" class="block mb-2">Regency/City</label>
                <input type="text" id="regency-city" name="regency-city" class="border border-[#8C8C8C] bg-[#FFFAFA] rounded-lg px-4 py-2 w-full max-w-[480px]" placeholder="Enter regency/city" required>
            </div>
            <div>
                <label for="company-address" class="block mb-2">Company Address</label>
                <textarea id="company-address" name="company-address" class="resize-none border border-[#8C8C8C] bg-[#FFFAFA] rounded-lg px-4 py-2 w-full max-w-[480px]" rows="3" placeholder="Enter complete company address" required></textarea>
            </div>
            <div class="flex justify-end">
            <button type="submit" class="flex justify-end bg-[#003759] text-white font-medium py-2 px-4 rounded-md mt-8">Next step</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>