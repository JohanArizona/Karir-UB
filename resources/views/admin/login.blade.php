<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-[#003759] to-[#0076bf] flex items-center justify-center h-screen overflow-y-hidden">
    <div class="bg-[#FFFAFA] p-20 rounded-3xl shadow-lg w-full max-w-xl">
        <h1 class="text-[42px] font-bold mt-4 text-[#003759]">Admin Login</h1>
        <form class="space-y-4" action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div>
                <input type="email" name="email" class="border rounded-xl px-4 py-2 w-full" placeholder="Email Address" required>
            </div>
            <div>
                <input type="password" name="password" class="border rounded-xl px-4 py-2 w-full" placeholder="Password" required>
            </div>
            <button type="submit" class="bg-[#003759] text-white py-2 px-4 rounded-full w-full">Login</button>
        </form>
    </div>
    <div class="absolute top-[125px] left-[-400px] z-[-1]">
        <img src="{{ asset('asset/atribut_login_admin.svg') }}" alt="Icon">
    </div>
</body>
</html>
