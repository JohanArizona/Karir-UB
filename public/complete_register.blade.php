<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KarirUB - Complete Your Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <body class="h-screen bg-white font-[montserrat]">
  <div class="relative h-full">
    <!-- Tombol Previous -->
    <a href="#" class="absolute top-12 left-12 text-[#003759] text-[18px] font-semibold font-montserrat">&larr; Previous</a>
    <div class="flex h-full">
      <!-- Bagian kiri -->
      <div class="w-1/2 bg-[#FFFAFA] flex flex-col justify-center px-16 pl-32 custom-shadow">
        <h1 class="font-montserrat w-[498px] h-[120px] text-4xl font-bold text-[#003759] leading-[57.6px] mb-2">Complete Your Registration</h1>
        <form action="#" method="post" class="space-y-5">
          <!-- Alumni Number Input -->
          <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5 font-montserrat">
            <input 
              type="text" 
              id="alumniNumber" 
              name="alumniNumber" 
              placeholder="Alumni Number" 
              class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-montserrat"
            />
          </div>
          <!-- Faculty Dropdown -->
          <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5 font-montserrat">
            <select 
              id="faculty" 
              name="faculty" 
              class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-montserrat"
            >
              <option value="" disabled selected>Faculty</option>
              <option value="fp">Faculty of Agriculture</option>
              <option value="fapet">Faculty of Animal Husbandry</option>
              <option value="ft">Faculty of Engineering</option>
              <option value="fk">Faculty of Medicine</option>
              <option value="fpik">Faculty of Fisheries and Marine Sciences</option>
              <option value="fmipa">Faculty of Mathematics and Natural Sciences</option>
              <option value="ftp">Faculty of Agricultural Technology</option>
              <option value="fkh">Faculty of Veterinary Medicine</option>
              <option value="filkom">Faculty of Computer Science</option>
              <option value="fkg">Faculty of Dentistry</option>
              <option value="fikes">Faculty of Health Sciences</option>
              <option value="fh">Faculty of Law</option>
              <option value="feb">Faculty of Economics and Business</option>
              <option value="fia">Faculty of Administrative Sciences</option>
              <option value="fisip">Faculty of Social and Political Sciences</option>
              <option value="fib">Faculty of Cultural Sciences</option>
            </select>
          </div>
          <!-- Major Input -->
          <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5">
            <input 
              type="text" 
              id="major" 
              name="major" 
              placeholder="Major" 
              class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-montserrat"
            />
          </div>
          <!-- Graduation Year Input -->
          <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5">
            <input 
              type="text" 
              id="graduationYear" 
              name="graduationYear" 
              placeholder="Graduation Year" 
              class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-montserrat"
            />
          </div>
          <!-- Location Input -->
          <div class="w-[480px] h-[60px] px-6 py-4 bg-white rounded-[10px] border border-[#595959] flex flex-col justify-center items-start gap-1.5">
            <input 
              type="text" 
              id="location" 
              name="location" 
              placeholder="Location" 
              class="w-full bg-transparent outline-none text-[#595959] text-[16px] font-normal font-montserrat"
            />
          </div>
          <!-- Sign Up Button -->
          <button type="submit" class=" w-[480px] h-[60px] bg-[#003759] text-white text-[22px] font-semibold rounded-full hover:bg-[#003759]">
            Sign Up
          </button>
        </form>
      </div>
      <!-- Bagian kanan -->
      <div class="w-1/2 bg-blue-100 flex flex-col items-center justify-center">
        <img src="images/assets/logoutama.svg" alt="KarirUB Logo" class="h-[195px] w-[218px]">
        <div class="text-[#003759] text-4xl font-montserrat leading-[46.8px] font-bold">
          Jobseeker
        </div>
      </div>
    </div>
  </div>
</body>
</html>
