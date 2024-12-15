<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - KarirUB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-white">
    <!-- Navbar -->
    @include('layouts.navbar_userlogin')

    <div class="absolute w-full z-[-3] flex justify-center items-center">
    <img src="{{ asset('asset/background_profile.svg') }}" alt="Background Profile" class="w-full max-w-full h-auto max-w-none">

    </div>

    <!-- Profile Section -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mt-64 mb-16">
        <!-- Left Profile Card -->
        <div class="bg-[#FFFAFA] rounded-lg p-6 shadow-lg border border-[#8C8C8C] md:col-span-1 h-[760px]">
            <!-- Profile Picture -->
            <div class="relative mb-4">
                <div class="w-40 h-40 bg-[#003759] rounded-full flex items-center justify-center text-white text-4xl mx-auto">
                    {{ strtoupper($user->nama[0]) }}
                </div>
                <button class="absolute bottom-0 right-1/2 translate-x-16 translate-y-2 bg-[#008DE6] p-2 rounded-full border border-4 border-[#FFFFFF]">
                    <img src="asset/camera.svg" alt="Change Photo">
                </button>
            </div>
            
            <!-- Name and Last Update -->
            <div class="text-center mb-6">
                <h2 class="text-xl font-semibold">{{ $user->nama }}</h2>
                <p class="text-gray-500 text-sm">Last Update: {{ $user->updated_at->format('d F Y') }}</p>
            </div>

            <!-- Profile Section -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-4">Profile</h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <img src="asset/logo/sms.svg" alt="email">
                        <span class="text-sm">{{ $user->email }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="asset/logo/telp.svg" alt="phone">
                        <span class="text-sm">{{ $user->nomer_telpon ?? 'Not provided' }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="asset/logo/kalender.svg" alt="birthdate">
                        <span class="text-sm">{{ $user->tanggal_lahir ?? 'Not provided' }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="asset/logo/lokasi.svg" alt="location">
                        <span class="text-sm">{{ $user->kota ?? 'Not provided' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Edit Form -->
        <div class="bg-[#FFFAFA] rounded-lg p-6 shadow-lg border border-[#8C8C8C] md:col-span-2 h-[820px]">
            <h2 class="text-xl font-semibold mb-6">Edit Profile</h2>
            <form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
                @csrf
                <!-- User Information -->
                <div class="space-y-4">
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">NIA*</label>
                        <input type="text" name="NIA" value="{{ old('NIA', $user->NIA) }}" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium" required>
                    </div>
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Name*</label>
                        <input type="text" name="nama" value="{{ old('nama', $user->nama) }}" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium" required>
                    </div>
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Email*</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium" required>
                    </div>
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Phone Number</label>
                        <input type="tel" name="nomer_telpon" value="{{ old('nomer_telpon', $user->nomer_telpon) }}" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">City</label>
                        <input type="text" name="kota" value="{{ old('kota', $user->kota) }}" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Date of Birth</label>
                        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                </div>
                
                <!-- Education Information -->
                <div class="space-y-4">
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Faculty</label>
                        <input type="text" name="fakultas" value="{{ old('fakultas', $jenjangPendidikan->fakultas ?? '') }}" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Study Program</label>
                        <input type="text" name="program_studi" value="{{ old('program_studi', $jenjangPendidikan->program_studi ?? '') }}" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                    <div class="relative">
                        <label class="bg-[#FFFAFA] absolute p-1 left-3 -top-3.5 text-sm text-[#595959] z-10">Year of Graduation</label>
                        <input type="text" name="tahun_lulus" value="{{ old('tahun_lulus', $jenjangPendidikan->tahun_lulus ?? '') }}" class="w-full py-3 pl-3 pr-2 border border-[#8C8C8C] rounded bg-[#FFFAFA] text-[#595959] font-medium">
                    </div>
                </div>

                <button type="submit" class="w-full py-3 bg-[#0071C5] text-white rounded font-semibold">Update Profile</button>
            </form>
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>
