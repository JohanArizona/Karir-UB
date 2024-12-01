<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Add New Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <img src="{{ asset('asset/background_create_job.png') }}" alt="Background" class="w-full h-auto">
    </div>

    <!-- Create Job Section -->
    <div class="flex items-center justify-center py-40">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-5xl">
            <h1 class="text-[#003759] text-2xl md:text-3xl font-bold mb-6">Add New Job</h1>
            <form action="{{ route('admin.jobs.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-11" id="job-form">
                @csrf
                <!-- Left Column -->
                <div>
                    <label for="nama_loker" class="block text-[#262626] font-medium mb-2">Job Title/Position</label>
                    <input type="text" id="nama_loker" name="nama_loker" required 
                        class="block w-full px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]"
                        placeholder="Enter job title or position">
                    
                    <label for="workshift" class="block text-[#262626] font-medium mt-4 mb-2">Work Shift</label>
                    <select id="workshift" name="workshift" required 
                        class="block w-full px-4 py-3 pr-10 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] appearance-none">
                        <option value="" disabled selected class="text-gray-400">Select work shift</option>
                        <option value="Full-time">Full-time</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Internship">Internship</option>
                        <option value="Contract">Contract</option>
                    </select>

                    <label for="jenjang_minimum" class="block text-[#262626] font-medium mt-4 mb-2">Minimum Education</label>
                    <select id="jenjang_minimum" name="jenjang_minimum" required 
                        class="block w-full px-4 py-3 pr-10 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] appearance-none">
                        <option value="" disabled selected class="text-gray-400">Select minimum education</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>

                    <label for="deskripsi" class="block text-[#262626] font-medium mt-4 mb-2">Job Description</label>
                    <textarea id="deskripsi" name="deskripsi" required 
                        class="block w-[960px] px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] resize-none" 
                        rows="5" placeholder="Enter job description"></textarea>
                </div>

                <!-- Right Column -->
                <div>
                    <label for="tipe" class="block text-[#262626] font-medium mb-2">Type of Job</label>
                    <select id="tipe" name="tipe" required 
                        class="block w-full px-4 py-3 pr-10 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] appearance-none">
                        <option value="" disabled selected class="text-gray-400">Select type of job</option>
                        <option value="Onsite">Onsite</option>
                        <option value="Hybrid">Hybrid</option>
                        <option value="Remote">Remote</option>
                    </select>

                    <label for="gaji" class="block text-[#262626] font-medium mt-4 mb-2">Salary</label>
                    <input type="text" id="gaji" name="gaji" required 
                        class="block w-full px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]"
                        placeholder="Enter salary">

                    <label for="maksimal_usia" class="block text-[#262626] font-medium mt-4 mb-2">Minimum Age</label>
                    <input type="number" id="maksimal_usia" name="maksimal_usia" required 
                        class="block w-full px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]"
                        placeholder="Enter minimum age">
                </div>

                <div class="col-span-2">
                    <button type="submit" class="ml-[820px] w-[120px] h-[50px] bg-[#055282] text-[#FFFAFA] py-2 rounded-md hover:bg-[#033F65]">
                        Post Job
                    </button>
                </div>
            </form>
        </div>
    </div>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '<strong>Successful!</strong>',
                text: '{{ session('success') }}',
                confirmButtonColor: '#005E99',
                iconColor: '#009DFF',
                confirmButtonText: '<strong>Continue</strong>',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('admin.jobs.create.step1') }}";
                }
            });
        </script>
    @endif
</body>
</html>
