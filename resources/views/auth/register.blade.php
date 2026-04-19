<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - SalahSambung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'londrina': ['"Londrina Solid"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#150D05] min-h-screen font-londrina text-white antialiased flex flex-col items-center justify-center relative overflow-x-hidden py-10">
    {{-- Decorative Background --}}
    <div class="fixed inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(67,38,19,0.8)_0%,rgba(21,13,5,1)_100%)] z-0"></div>

    <div class="relative z-10 w-full max-w-md p-8 bg-white/5 backdrop-blur-xl rounded-3xl border border-white/10 shadow-2xl">
        <div class="flex flex-col items-center mb-8">
            <a href="/" class="flex items-center gap-3 no-underline mb-4">
                <div class="w-[40px] h-[40px] rounded-full bg-[#D9D9D9]"></div>
                <span class="font-light text-[28px] text-white leading-none">SalahSambung</span>
            </a>
            <h1 class="text-4xl font-normal text-center text-white">Daftar Akun</h1>
        </div>

        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-lg font-light text-white/80 mb-1">Nama</label>
                <input type="text" id="name" name="name" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:border-[#FFB200] transition-colors" placeholder="Masukkan nama kamu">
            </div>

            <div>
                <label for="email" class="block text-lg font-light text-white/80 mb-1">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:border-[#FFB200] transition-colors" placeholder="Masukkan email kamu">
            </div>
            
            <div>
                <label for="password" class="block text-lg font-light text-white/80 mb-1">Password</label>
                <input type="password" id="password" name="password" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:border-[#FFB200] transition-colors" placeholder="Buat password">
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full bg-[#C7B09C] hover:bg-[#d4bfad] text-[#21201D] text-xl font-light py-3.5 rounded-xl transition-colors">
                    Daftar
                </button>
            </div>
        </form>

        <div class="my-6 flex items-center justify-center gap-3">
            <div class="h-px bg-white/20 flex-1"></div>
            <span class="text-white/50 text-sm">ATAU</span>
            <div class="h-px bg-white/20 flex-1"></div>
        </div>

        <div class="space-y-3">
            <button class="w-full bg-white hover:bg-gray-100 text-gray-900 text-lg font-light py-3 rounded-xl transition-colors flex items-center justify-center gap-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                Daftar dengan Google
            </button>
            
            {{-- Tombol antisipasi sementara --}}
            <a href="/dashboard" class="w-full block text-center border border-[#FFB200] text-[#FFB200] hover:bg-[#FFB200]/10 text-lg font-light py-3 rounded-xl transition-colors">
                Lanjut ke Dashboard (Preview)
            </a>
        </div>

        <p class="text-center mt-8 text-white/70 font-light text-lg">
            Sudah punya akun? <a href="/masuk" class="text-[#FFB200] hover:underline">Masuk sekarang</a>
        </p>
    </div>
</body>
</html>
