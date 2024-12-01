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
    <div class="absolute w-full max-w-full -z-10 top-[-160px]">
        <img src="{{ asset('asset/background_create_job.png') }}" alt="Background" class="w-full h-auto">
    </div>

    <!-- Create Job Section -->
    <div class="flex items-center justify-center py-40">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-6xl">
            <h1 class="text-[#003759] text-2xl md:text-3xl font-bold mb-6">Add New Job</h1>
            <form class="grid grid-cols-1 md:grid-cols-2 gap-8" action="{{ route('admin.jobs.create.step1') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Left Column -->
                <div>
                    <label for="nama_perusahaan" class="block text-[#262626] font-medium mb-2">Company Name</label>
                    <input type="text" id="nama_perusahaan" name="nama_perusahaan" required 
                        class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" 
                        placeholder="Enter company name">

                    <label for="kota" class="block text-[#262626] font-medium mt-6 mb-2">Regency/City</label>
                    <input type="text" id="kota" name="kota" required 
                        class="block w-full px-4 py-4 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" 
                        placeholder="Enter regency/city">

                    <label for="alamat_perusahaan" class="block text-[#262626] font-medium mt-6 mb-2">Company Address</label>
                    <textarea id="alamat_perusahaan" name="alamat_perusahaan" required 
                        class="block w-full px-4 py-2 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] resize-none" 
                        rows="5" placeholder="Enter complete company address"></textarea>
                </div>

                <!-- Right Column -->
                <div>
                    <label for="no_telp_perusahaan" class="block text-[#262626] font-medium mb-2">Phone Number</label>
                    <div class="flex items-center border border-gray-300 rounded-md bg-[#FFFAFA] focus-within:ring-[#003759] focus-within:border-[#003759]">
                        <select id="kode_negara" name="kode_negara" required 
                            class="px-4 py-3 bg-transparent border-none outline-none text-[#262626] appearance-none">
                            <option value="+62">+62 (Indonesia)</option>
                            <option value="+1">+1 (USA)</option>
                            <option value="+44">+44 (UK)</option>
                        </select>
                        <div class="w-[1px] h-[50px] bg-gray-300"></div>
                        <input type="text" id="no_telp_perusahaan" name="no_telp_perusahaan" required 
                            placeholder="Phone number" class="flex-1 px-4 py-3 border-none bg-transparent focus:outline-none">
                    </div>

                    <label for="logo" class="block text-[#262626] font-medium mt-6 mb-2">Company Logo</label>
                    <div id="drop-area" class="border-2 border-dashed border-gray-300 bg-[#FFFAFA] rounded-lg flex flex-col items-center justify-center h-[350px] space-y-4">
                        <input type="file" id="logo" name="logo" accept="image/*" required class="hidden">
                        <label for="logo" class="text-gray-500 text-center cursor-pointer">
                            Drag your file(s) or <span class="text-[#009DFF] underline">browse</span><br>
                            Max 10 MB files are allowed
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-span-1 md:col-span-2 flex justify-end">
                    <button type="submit" 
                        class="bg-[#055282] hover:bg-[#033F65] text-[#FFFAFA] font-medium py-2 px-6 rounded-md">
                        Next Step
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>