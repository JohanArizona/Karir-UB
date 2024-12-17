<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - KarirUB</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="h-screen">
  <div class="flex h-full">
    <!-- Bagian kiri -->
    <div class="w-1/2 bg-[#FFFAFA] flex flex-col justify-center px-16 pl-32 custom-shadow">
      <h1 class="font-montserrat text-[48px] font-bold text-[#003759] leading-[57.6px] mb-2">Login</h1>
      <p class="text-[#003759] font-semibold mb-6 text-[28px]">Welcome to KarirUB</p>
      <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf
        <!-- Email Input -->
        <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5">
          <input 
            type="email" 
            id="email" 
            name="email"
            value="{{ old('email') }}"
            placeholder="Email Address" 
            class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-['Montserrat']"
            required autofocus
          />
          @error('email')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
        </div> 
        <!-- Forgot Password Link -->
        <div class="w-[480px] h-3 text-right">
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-[18px] text-[#003759] font-montserrat font-semibold">Forgot?</a>
          @endif
        </div>
        <!-- Password Input -->
        <div class="w-[480px] h-[60px] px-6 py-5 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5">
          <input 
            type="password" 
            id="password" 
            name="password" 
            placeholder="Password" 
            class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-['Montserrat'] leading-6"
            required
          />
          @error('password')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
          @enderror
        </div>
        <!-- Login Button -->
        <button type="submit" class="w-[480px] h-[60px] bg-[#003759] text-white text-[22px] font-semibold rounded-full transition-all duration-300 ease-in-out hover:bg-[#005E99]">
          Login
        </button>
      </form>
      <p class="mt-4 text-[22px] ml-20">
        Don’t have an account? <a href="{{ route('register.showStep1') }}" class="text-[#003759] font-semibold transition-all duration-300 ease-in-out hover:text-[#005E99]">Register</a>
      </p>
    </div>
    <!-- Bagian kanan -->
    <div class="w-1/2 bg-blue-100 flex flex-col items-center justify-center">
      <img src="asset/logo_karirub.png" alt="KarirUB Logo" class="h-[218px] w-[195px]">
      <div class="text-[#003759] text-4xl font-[Montserrat] mb-4 font-bold">
        Jobseeker
      </div>
    </div>
  </div>
</body>
</html>
