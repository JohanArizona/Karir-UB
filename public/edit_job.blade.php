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
    <div class="flex items-center justify-center py-16">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-6xl pb-[40px]">
            <h1 class="text-[#003759] text-2xl md:text-3xl font-bold mb-6">Edit Job Information</h1>
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
                              rows="9" placeholder="Enter complete company address" required></textarea>
                </div>

                <!-- Right Column -->
                <div>

                <label for="company-phone" class="block text-[#262626] font-medium mb-2">Company Phone Number</label>
                    <div class="flex items-center border border-gray-300 rounded-md bg-[#FFFAFA] focus-within:ring-[#003759] focus-within:border-[#003759]">
                        <!-- Country Code Dropdown -->
                        <select id="country-code" name="country-code" 
                                class="px-4 py-3 bg-transparent border-none outline-none text-[#262626] appearance-none">
                                <option value="+1">USA (+1)</option>
                                <option value="+44">GBR (+44)</option>
                                <option value="+62" selected>IDN (+62)</option>
                                <option value="+91">IND (+91)</option>
                                <option value="+33">FRA (+33)</option>
                                <option value="+49">DEU (+49)</option>
                                <option value="+81">JPN (+81)</option>
                                <option value="+86">CHN (+86)</option>
                                <option value="+55">BRA (+55)</option>
                                <option value="+61">AUS (+61)</option>
                                <option value="+93">AFG (+93)</option>
                                <option value="+355">ALB (+355)</option>
                                <option value="+213">DZA (+213)</option>
                                <option value="+376">AND (+376)</option>
                                <option value="+244">AGO (+244)</option>
                                <option value="+54">ARG (+54)</option>
                                <option value="+374">ARM (+374)</option>
                                <option value="+297">ABW (+297)</option>
                                <option value="+43">AUT (+43)</option>
                                <option value="+994">AZE (+994)</option>
                               
                        </select>
                
                        <!-- Vertical Divider -->
                        <div class="w-[1px] h-[50px] bg-gray-300"></div>
                
                        <!-- Phone Number Input -->
                        <input type="text" id="company-phone" name="company-phone"
                               class="flex-1 px-4 py-3 border-none bg-transparent focus:outline-none"
                               placeholder="Enter phone number" required
                               inputmode="numeric" pattern="[0-9]*" required>
                    </div>
                    <label class="block text-[#262626] font-medium mt-8 mb-2">Company Logo</label>
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

                <form class="grid grid-cols-1 md:grid-cols-2 gap-11" id="job-form">
                    <!-- Left Column -->
                    <div>
                        <label for="job-title" class="block text-[#262626] font-medium mb-2">Job Title/Position</label>
                        <input type="text" id="job-title" name="job-title" 
                               class="block w-full px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" 
                               placeholder="Enter job title/position" required>
                        
                               <label for="work-shift" class="block text-[#262626] font-medium mt-4 mb-2">Work Shift</label>
    <div class="relative">
        <select id="work-shift" name="work-shift" 
                class="block w-full px-4 py-3 pr-10 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] appearance-none" required>
            <option value="" disabled selected class="text-gray-400">Select work shift</option>
            <option value="morning">Full-time</option>
            <option value="afternoon">Part-time</option>
            <option value="night">Internship</option>
            <option value="flexible">Contract</option>
        </select>
        <svg class="absolute top-1/2 right-3 transform -translate-y-1/2 w-5 h-5 text-gray-500 pointer-events-none" 
             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
    
    <label for="minimum-education" class="block text-[#262626] font-medium mt-4 mb-2">Minimum Education</label>
    <div class="relative">
        <select id="minimum-education" name="minimum-education" 
                class="block w-full px-4 py-3 pr-10 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] appearance-none" required>
            <option value="" disabled selected class="text-gray-400">Select minimum education</option>
            <option value="high-school">D3</option>
            <option value="associate-degree">D4</option>
            <option value="bachelor-degree">S1</option>
            <option value="master-degree">S2</option>
            <option value="master-degree">S3</option>
        </select>
        <svg class="absolute top-1/2 right-3 transform -translate-y-1/2 w-5 h-5 text-gray-500 pointer-events-none" 
             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
    
                        <label for="job-description" class="block text-[#262626] font-medium mt-4 mb-2">Job Description</label>
                        <textarea id="job-description" name="job-description" 
                                  class="block w-full px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] resize-none" 
                                  rows="5" placeholder="Enter full job description" required></textarea>
                    </div>
    
                    <!-- Right Column -->
                    <div>
                        <label for="type-of-job" class="block text-[#262626] font-medium mb-2">Type of Job</label>
                        <div class="relative">
                            <select id="type-of-job" name="type-of-job"
                                    class="block w-full px-4 py-3 pr-10 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759] appearance-none" required>
                                <option value="" disabled selected class="text-gray-400">Select type of job</option>
                                <option value="onsite">Onsite</option>
                                <option value="hybrid">Hybrid</option>
                                <option value="remote">Remote</option>
                            </select>
                            <svg class="absolute top-1/2 right-3 transform -translate-y-1/2 w-5 h-5 text-gray-500 pointer-events-none" 
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        
                        
                        <label for="salary" class="block text-[#262626] font-medium mt-4 mb-2">Salary</label>
                        <input type="number" id="salary" name="salary" 
                               class="block w-full px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" 
                               placeholder="Enter salary" min="0" required>
    
                        <label for="minimum-age" class="block text-[#262626] font-medium mt-4 mb-2">Minimum Age</label>
                        <input type="number" id="minimum-age" name="minimum-age" 
                               class="block w-full px-4 py-3 border border-gray-300 rounded-md bg-[#FFFAFA] focus:ring-[#003759] focus:border-[#003759]" 
                               placeholder="Enter minimum age" min="0" required>
                    </div>
    
                    <!-- Submit Button -->
                    <div class="col-span-1 md:col-span-2 flex justify-end mt-6">
                        <button type="submit" 
                                class="bg-[#005E99] hover:bg-[#005481] text-[#FFFAFA] font-medium py-2 px-8 rounded-md">
                            Update
                        </button>
                    </div>
                </form>
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
