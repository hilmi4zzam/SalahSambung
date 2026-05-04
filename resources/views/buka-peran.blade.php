<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalahSambung - Buka Peran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: { 'md': '900px', 'lg': '900px' },
                    fontFamily: { 'londrina': ['"Londrina Solid"', 'sans-serif'] },
                    colors: {
                        'primary': '#FFB200',
                        'danger': '#E52121',
                        'bg-dark': '#150D05', /* Slightly darker than 21140A to match screenshot */
                        'btn-bg': '#C7B09C',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-bg-dark min-h-screen font-londrina text-white flex items-start md:items-center justify-center p-5 md:p-8 overflow-x-hidden relative">
    
    {{-- Main Container --}}
    <div class="w-full max-w-[900px] lg:max-w-[1000px] flex flex-col z-10">
        
        {{-- Back Button (Top) --}}
        <div class="w-full flex justify-start mb-6 md:mb-2 mt-2 md:mt-0">
            <a href="/setting" class="flex items-center gap-2 md:gap-3 text-white hover:text-btn-bg transition-colors group">
                <svg viewBox="0 0 24 24" fill="none" class="w-5 h-5 md:w-6 md:h-6 group-hover:-translate-x-1 transition-transform" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                <span class="text-[20px] md:text-[24px] font-light tracking-wide mt-1">Kembali</span>
            </a>
        </div>

        {{-- Content Columns --}}
        <div class="w-full flex flex-col md:flex-row items-center md:items-center justify-between gap-8 md:gap-12 lg:gap-16">
            
            {{-- Left Column (Card) --}}
            <div class="w-[300px] md:w-[320px] lg:w-[380px] bg-[url('/images/dashboard_illustration.png')] bg-[length:100%_100%] p-4 sm:p-6 md:p-5 lg:p-6 flex flex-col items-center justify-between h-[380px] sm:h-[420px] md:h-[440px] lg:h-[480px] shrink-0">
                <h2 class="text-[22px] md:text-[26px] font-normal tracking-wide text-white mt-4">PEMAIN 1</h2>
                
                <div class="flex-1 w-full flex items-center justify-center py-2 md:py-3 lg:py-4">
                    <img src="/images/villagerimpostorlpmobile.png" alt="Cards" class="w-[60%] md:w-[65%] lg:w-[70%] h-auto object-contain">
                </div>

                <button class="bg-btn-bg text-bg-dark rounded-[16px] md:rounded-[18px] lg:rounded-[20px] py-2 md:py-2.5 lg:py-3 px-6 md:px-6 text-[20px] md:text-[24px] font-light w-[80%] hover:opacity-90 hover:scale-[1.02] transition-all cursor-pointer mb-2 sm:mb-4 md:mb-3 lg:mb-4">
                    Buka Peranmu
                </button>
            </div>

            {{-- Right Column (Instructions) --}}
            <div class="flex flex-col justify-center gap-6 md:gap-8 lg:gap-10 w-full max-w-[290px] md:max-w-[450px]">
                
                {{-- Step 1 --}}
                <div class="flex items-center justify-between gap-2 md:gap-6">
                    <div class="flex items-start gap-1 md:gap-0 text-[20px] md:text-[24px] font-light leading-[1.15] w-[55%]">
                        <span>1.</span>
                        <p>Tentukan<br>pemain pertama<br>dengan<br>Hompimpa!</p>
                    </div>
                    <div class="w-[45%] flex justify-end">
                        <img src="/images/hompimpa.png" alt="Hompimpa" class="w-full max-w-[110px] md:max-w-[130px] lg:max-w-[150px] object-contain">
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="flex items-center justify-between gap-2 md:gap-4 lg:gap-6">
                    <div class="w-[45%] flex justify-start">
                        <img src="/images/pingsut.png" alt="Pingsut" class="w-full max-w-[110px] md:max-w-[130px] lg:max-w-[150px] object-contain">
                    </div>
                    <div class="flex items-start gap-1 md:gap-2 text-[20px] md:text-[24px] font-light leading-[1.15] w-[55%]">
                        <span>2.</span>
                        <p>Tentukan arah putar<br>pemain dengan batu,<br>gunting & kertas. Yang<br>kalah menjadi pemain<br>kedua atau acuan arah<br>putar</p>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="flex items-center justify-between gap-2 md:gap-4 lg:gap-6">
                    <div class="flex items-start gap-1 md:gap-2 text-[20px] md:text-[24px] font-light leading-[1.15] w-[55%]">
                        <span>3.</span>
                        <p>Buka kartu<br>secara<br>bergantian dan<br>berurutan</p>
                    </div>
                    <div class="w-[45%] flex justify-end">
                        <img src="/images/berputar.png" alt="Berputar" class="w-full max-w-[110px] md:max-w-[130px] lg:max-w-[150px] object-contain">
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
