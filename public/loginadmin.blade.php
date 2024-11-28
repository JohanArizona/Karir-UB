<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KarirUB - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-[#003759] to-[#0076bf] flex items-center justify-center h-screen overflow-y-hidden">
    <div class="bg-[#FFFAFA] p-20 rounded-3xl shadow-lg w-full max-w-xl min-h-[650px]">
        <h1 class="text-[42px] font-bold mt-4 text-[#003759]">Admin Login</h1>
        <h2 class="text-[25px] mb-20 text-[#003759]">Welcome to Kar</h2>
        <form class="space-y-4">
        <div>
            <input type="email" id="email" name="email" class="border rounded-xl px-4 py-2 w-full border-[#595959] min-h-[50px] placeholder:text-xl" placeholder="Email Address" required>
        </div>
        <div>
            <input type="password" id="password" name="password" class="border rounded-xl px-4 py-2 w-full border-[#595959] min-h-[50px] placeholder:text-xl mb-20" placeholder="Password" required>
        </div>
        <button type="submit" class="bg-[#003759] text-white font-semibold py-2 px-4 rounded-full h-14 w-full text-[22px]">Login</button>
        </form>
    </div>
    <div class="absolute top-[125px] left-[-500px] z-[-1]">
        <img src="asset/atribut_login_admin.svg" alt="Icon">
    </div>
</body>
</html>