<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="bg-white font-['Montserrat']">
    @include('layouts.navbar_admin')
    <!-- Main Content -->
    <main class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-[#262626]">Welcome Admin01,</h1>
            <h2 class="text-4xl font-bold text-[#262626]">What's new?</h2>
        </div>

        <!-- Action Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <a href="{{ route('admin.jobs.create.step1') }}" class="block">
                <div class="h-[300px] bg-[#005e99] rounded-lg p-8 text-center hover:bg-[#004A78] transition pt-20">
                    <div class="text-[#fffafa] mb-6">
                        <i class="fas fa-briefcase text-5xl"></i>
                    </div>
                    <span class="text-3xl font-semibold text-[#fffafa]">Create New Job</span>
                </div>
            </a>
            <a href="{{ route('articles.create') }}" class="block">
                <div class="h-[300px] bg-[#005e99] rounded-lg p-8 text-center hover:bg-[#004A78] transition pt-20">
                    <div class="text-[#fffafa] mb-6">
                        <i class="fas fa-file-alt text-5xl"></i>
                    </div>
                    <span class="text-3xl font-semibold text-[#fffafa]">Create New Article</span>
                </div>
            </a>
        </div>


        <!-- Container for Cards -->
        <div class="flex justify-between items-center mb-4">
                <h3 class="text-[#003759] text-[30px] font-semibold font-['Montserrat']">Uploaded Jobs</h3>
                <a href="#" class="text-[#008de6] text- font-bold font-['Montserrat']">View More ></a>
        </div>
        <div class="max-w-none mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-20">
            <!-- Card 1 -->
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
                            <div class="flex items-center space-x-2 text-[#0076BF]">
                                <i class="fas fa-building"></i>
                                <span class="text-sm">Volkswagen Indonesia</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-sm text-[#0076BF]">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jakarta</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-briefcase"></i>
                                <span>Onsite</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="far fa-clock"></i>
                                <span>2 Days Ago</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 font-['Montserrat']">Admin</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <button class="bg-[#009DFF] hover:bg-[#0070B6] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                            Edit
                        </button>
                        <button class="bg-[#F44336] hover:bg-[#B22E24] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat'] ">
                            Delete
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-[#262626] font-['Montserrat'] leading-relaxed text-justify">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
                            <div class="flex items-center space-x-2 text-[#0076BF]">
                                <i class="fas fa-building"></i>
                                <span class="text-sm">Volkswagen Indonesia</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-sm text-[#0076BF]">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jakarta</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-briefcase"></i>
                                <span>Onsite</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="far fa-clock"></i>
                                <span>2 Days Ago</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 font-['Montserrat']">Database Admin</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <button class="bg-[#009DFF] hover:bg-[#0070B6] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                            Edit
                        </button>
                        <button class="bg-[#F44336] hover:bg-[#B22E24] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat'] ">
                            Delete
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                <p class="mt-4 text-[#262626] font-['Montserrat'] leading-relaxed text-justify">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>

        
            <!-- Card 3 -->
            <div class="bg-white rounded-3xl shadow-lg p-8">
                <div class="flex items-start space-x-6">
                    <!-- Company Logo -->
                    <div class="flex-shrink-0">
                        <img src="/api/placeholder/120/120" alt="Volkswagen Logo" class="w-32 h-32 rounded-2xl shadow-md">
                    </div>

                    <!-- Job Details -->
                    <div class="flex-grow">
                        <div class="space-y-2">
                            <!-- Company Details -->
                            <div class="flex items-center space-x-2 text-[#0076BF]">
                                <i class="fas fa-building"></i>
                                <span class="text-sm">Volkswagen Indonesia</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-sm text-[#0076BF]">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jakarta</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="fas fa-briefcase"></i>
                                <span>Onsite</span>
                            </div>
                            
                            <div class="flex items-center space-x-2 text-[#0076BF] text-sm">
                                <i class="far fa-clock"></i>
                                <span>2 Days Ago</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <!-- Job Title and Salary -->
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 font-['Montserrat']">Programmer</h2>
                        <p class="text-blue-500 text-xl font-semibold mt-2">Rp 4.000.000</p>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <button class="bg-[#009DFF] hover:bg-[#0070B6] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                            Edit
                        </button>
                        <button class="bg-[#F44336] hover:bg-[#B22E24] text-[#fffafa] px-8 py-2 rounded-full text-sm font-bold transition-colors font-['Montserrat'] ">
                            Delete
                        </button>
                    </div>
                </div>
                <!-- Job Description -->
                 <p class="mt-4 text-[#262626] font-['Montserrat'] leading-relaxed text-justify">
                    We are looking for a Database Admin to manage and maintain our databases, ensuring performance, security, and reliability. Ideal candidates have experience in database administration, strong problem-solving skills, and proficiency in SQL.
                </p>
            </div>
        </div>


        <!-- Uploaded Articles -->
        <div>
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-[#003759] text-[30px] font-semibold font-['Montserrat']">Uploaded Articles</h3>
                <a href="#" class="text-[#008de6] text- font-bold font-['Montserrat']">View More ></a>
            </div>
            <div class="space-y-4">
                <!-- Article Card -->
                @foreach($articles as $article)
                    <!-- Article Card -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="flex">
                            <img src="images/assets/thumbnail1_admin.svg" alt="Article thumbnail" class="w-[325px] h-[190px] rounded-[5px] object-cover">
                            <div class="p-4 flex-1">
                                <div class="flex items-center justify-between">
                                    <div class="pt-10 text-sm text-gray-500 font-semibold font-['Montserrat']">
                                        {{ \Carbon\Carbon::parse($article->tgl_post)->format('l, d F Y H:i WIB') }}
                                    </div>
                                    <div class="flex space-x-2">
                                        <a href="{{ route('articles.edit', $article->id_artikel) }}" class="bg-[#009DFF] hover:bg-[#0070B6] text-[#fffafa] px-6 py-2 mt-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                                            Edit
                                        </a>
                                        <form action="{{ route('articles.destroy', $article->id_artikel) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-[#F44336] hover:bg-[#B22E24] text-[#fffafa] px-6 py-2 mt-2 rounded-full text-sm font-bold transition-colors font-['Montserrat']">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <h4 class="text-[28px] font-semibold font-['Montserrat'] mb-2">{{ $article->judul }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <!-- Footer -->
    @include('layouts.footer_admin')
</body>
</html>