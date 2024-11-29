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
                <form method="POST" action="{{ route('admin.jobs.store') }}" enctype="multipart/form-data">
                    @csrf
                    <label for="job-title">Job Title</label>
                    <input type="text" id="job-title" name="job-title" required>

                    <label for="work-shift">Work Shift</label>
                    <select id="work-shift" name="work-shift" required>
                        <option value="Full-time">Full-time</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Internship">Internship</option>
                        <option value="Contract">Contract</option>
                    </select>

                    <label for="minimum-education">Minimum Education</label>
                    <select id="minimum-education" name="minimum-education" required>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>

                    <label for="company-logo">Company Logo</label>
                    <input type="file" id="company-logo" name="company-logo" accept="image/*" required>

                    <label for="description">Job Description</label>
                    <textarea id="description" name="description" required></textarea>

                    <button type="submit">Post Job</button>
                </form>
        </div>
    </div>
</body>
</html>
