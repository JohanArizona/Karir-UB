<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Add New Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/js/create-job.js'])
</head>
<body class="bg-white font-[montserrat]">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 flex justify-between items-center p-4 bg-white shadow max-w-full mx-auto">
        <div class="flex items-center space-x-8 mr-8">
            <img src="asset/logo_karirub.svg" alt="KarirUB Logo" class="h-14 ml-4">
            <div class="hidden md:flex space-x-16">
                <a href="#" class="text-[#003759] text-xl font-semibold ml-12">Home</a>
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
    </nav>

    <!-- Background Profile -->
    <div class="absolute w-full max-w-full -z-10 top-[-160px]">
        <img src="asset/background_create_job.png" alt="Background" class="w-full h-auto">
    </div>

    <!-- Create Job Section -->
    <div class="flex items-center justify-center py-20">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-6xl">
            <h1 class="text-[#003759] text-2xl md:text-3xl font-bold mb-6">Add New Job</h1>
            <!-- resources/views/create-job-step1.blade.php -->
            <form method="POST" action="{{ route('admin.jobs.create.step1') }}">
                @csrf
                <label for="company-name">Company Name</label>
                <input type="text" id="company-name" name="company-name" required>

                <label for="regency-city">Regency/City</label>
                <input type="text" id="regency-city" name="regency-city" required>

                <label for="company-address">Company Address</label>
                <textarea id="company-address" name="company-address" required></textarea>

                <button type="submit">Next Step</button>
            </form>
        </div>
    </div>

    <script>
    // Tambahkan event listener untuk menyimpan data ke input hidden sebelum submit
    document.getElementById('job-form').addEventListener('submit', function(e) {
        e.preventDefault();
        document.getElementById('hidden-company-name').value = document.getElementById('company-name').value;
        document.getElementById('hidden-regency-city').value = document.getElementById('regency-city').value;
        document.getElementById('hidden-company-address').value = document.getElementById('company-address').value;
        this.submit();
    });
    </script>
</body>
</html>