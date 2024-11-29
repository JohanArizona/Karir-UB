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
            <img src="{{ asset('asset/logo_karirub.svg') }}" alt="KarirUB Logo" class="h-14 ml-4">
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
    <div class="absolute w-full -z-10 top-[-160px]">
        <img src="images/assets/background_create_job.svg" alt="Background" class="w-full h-auto">
    </div>

    <!-- Create Job Section -->
    <div class="flex items-center justify-center py-40">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-5xl">
            <h1 class="text-[#003759] text-2xl md:text-3xl font-bold mb-6">Add New Job</h1>
                <!-- resources/views/create-job-step2.blade.php -->
                <form action="{{ route('admin.jobs.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama_loker" class="block mb-2">Job Title/Position</label>
                        <input type="text" id="nama_loker" name="nama_loker" required 
                            class="w-full px-3 py-2 border rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="workshift" class="block mb-2">Work Shift</label>
                        <select id="workshift" name="workshift" required 
                            class="w-full px-3 py-2 border rounded-md">
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                            <option value="Internship">Internship</option>
                            <option value="Contract">Contract</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="jenjang_minimum" class="block mb-2">Minimum Education</label>
                        <select id="jenjang_minimum" name="jenjang_minimum" required 
                            class="w-full px-3 py-2 border rounded-md">
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="tipe" class="block mb-2">Type of Job</label>
                        <select id="tipe" name="tipe" required 
                            class="w-full px-3 py-2 border rounded-md">
                            <option value="Onsite">Onsite</option>
                            <option value="Hybrid">Hybrid</option>
                            <option value="Remote">Remote</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="gaji" class="block mb-2">Salary</label>
                        <input type="text" id="gaji" name="gaji" required 
                            class="w-full px-3 py-2 border rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="maksimal_usia" class="block mb-2">Minimum Age</label>
                        <input type="number" id="maksimal_usia" name="maksimal_usia" required 
                            class="w-full px-3 py-2 border rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="deskripsi" class="block mb-2">Job Description</label>
                        <textarea id="deskripsi" name="deskripsi" required 
                            class="w-full px-3 py-2 border rounded-md h-32"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-[#003759] text-white py-2 rounded-md hover:bg-blue-700">
                        Post Job
                    </button>
                </form>
        </div>
    </div>
</body>
</html>
