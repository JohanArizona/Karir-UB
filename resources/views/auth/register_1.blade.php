<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KarirUB - Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="h-screen bg-white font-[montserrat]">
  <div class="flex h-full">
    <!-- Bagian kiri -->
    <div class="w-1/2 bg-[#FFFAFA] flex flex-col justify-center px-16 pl-32 custom-shadow">
      <h1 class="font-montserrat text-[40px] font-bold text-[#003759] leading-[57.6px] mb-1">Register</h1>
      <p class="text-[#003759] font-semibold mb-6 text-[24px]">Welcome to KarirUB</p>
      <form action="{{ route('register.processStep1') }}" method="post" class="space-y-5">
        @csrf
        <!-- Full Name Input -->
        <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5">
            <input 
                type="text" 
                id="nama" 
                name="nama" 
                placeholder="Full Name" 
                class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-montserrat"
            />
        </div>
        
        <!-- Email Address Input -->
        <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5">
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="Email Address" 
                class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-montserrat"
            />
        </div>
        
        <!-- Password Input -->
        <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5">
            <input 
                type="password" 
                id="password" 
                name="password" 
                placeholder="Create Password" 
                class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-montserrat"
            />
        </div>
        
        <!-- Birth Date Input -->
        <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-row items-center gap-2">
            <input 
                type="date" 
                id="tanggal_lahir" 
                name="tanggal_lahir" 
                placeholder="Birth Date" 
                class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-montserrat"
            />
        </div>
        
        <!-- Phone Number Input -->
        <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5">
            <input 
                type="tel" 
                id="nomer_telpon" 
                name="nomer_telpon" 
                placeholder="Phone Number" 
                class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-montserrat"
            />
        </div>
        
        <!-- Terms and Conditions -->
        <div class="flex items-center space-x-2">
            <input type="checkbox" id="terms" name="terms" class="h-5 w-5 border-[#595959] rounded">
            <label for="terms" class="text-[#595959] text-[14px] font-montserrat">
                I agree to the <a href="#" class="text-[#003759] font-semibold">Terms of Use</a> and <a href="#" class="text-[#003759] font-semibold">Privacy Policy</a>
            </label>
        </div>
        
        <!-- Next Button -->
        <button type="submit" class="w-[480px] h-[60px] bg-[#003759] text-white text-[22px] font-semibold rounded-full">
            Next
        </button>
      </form>
      <p class="mt-4 ml-20 text-[20px]">
        Already have an account? <a href="{{ route('login') }}" class="text-[#003759] font-semibold font-montserrat">Login</a>
      </p>
    </div>
    <!-- Bagian kanan -->
    <div class="w-1/2 bg-blue-100 flex flex-col items-center justify-center">
      <img src="{{ asset('asset/logo_karirub.svg')}}" alt="KarirUB Logo" class="h-[195px] w-[218px]">
      <div class="text-[#003759] text-4xl font-montserrat leading-[46.8px] font-bold">
        Jobseeker
      </div>
    </div>
  </div>
</body>
</html>
