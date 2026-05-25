<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'londrina': ['"Londrina Solid"', 'cursive'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#121212] font-londrina min-h-screen flex items-center justify-center p-4">
    <div class="text-center flex flex-col items-center gap-6 max-w-lg w-full bg-white/5 backdrop-blur-md p-10 rounded-3xl border border-white/10 shadow-2xl">
        <img src="/images/logosalahsambung.png" alt="Logo" class="w-32 h-32 object-contain animate-bounce">
        
        <h1 class="text-6xl text-[#FFB200] font-black">404</h1>
        
        <p class="text-3xl text-white font-light">
            SalahSambung tidak dapat menemukan halaman tersebut
        </p>

        <div class="mt-4">
            @auth
                <a href="/dashboard" class="inline-block bg-[#FFB200] text-[#121212] text-2xl font-normal py-3 px-8 rounded-full hover:bg-yellow-400 transition-colors transform hover:scale-105 duration-200">
                    Kembali ke Dashboard
                </a>
            @else
                <a href="/" class="inline-block bg-[#FFB200] text-[#121212] text-2xl font-normal py-3 px-8 rounded-full hover:bg-yellow-400 transition-colors transform hover:scale-105 duration-200">
                    Kembali ke Beranda
                </a>
            @endauth
        </div>
    </div>
</body>
</html>
