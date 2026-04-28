<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalahSambung - Setting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: { 'md': '800px', 'lg': '1024px' },
                    fontFamily: { 'londrina': ['"Londrina Solid"', 'sans-serif'] },
                    colors: {
                        'primary': '#FFB200',
                        'danger': '#E52121',
                        'bg-dark': '#21140A',
                        'btn-bg': '#C7B09C',
                        'panel-bg': '#2A1A0F',
                    }
                }
            }
        }
    </script>
    <style>
        .no-spinners::-webkit-outer-spin-button,
        .no-spinners::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .no-spinners {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body class="bg-bg-dark min-h-screen font-londrina text-white flex items-start md:items-center justify-center p-4 py-8 md:p-8 overflow-x-hidden relative">
    
    {{-- Main Container --}}
    <div class="w-full max-w-[1000px] flex flex-col z-10">
        
        {{-- Back Button (Top) --}}
        <div class="w-full flex justify-start mb-6 md:mb-10 lg:mb-12">
            <a href="/dashboard" class="flex items-center gap-3 text-white hover:text-btn-bg transition-colors group">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="group-hover:-translate-x-1 transition-transform" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                <span class="text-[18px] md:text-[20px] font-light tracking-wide mt-1">Kembali</span>
            </a>
        </div>

        {{-- Content Columns --}}
        <div class="w-full flex flex-col md:flex-row items-stretch justify-between gap-12 md:gap-6">
            
            {{-- Left Column --}}
            <div class="w-full md:w-[45%] lg:w-[50%] flex flex-col justify-between">
                {{-- Big Title --}}
                <h1 class="text-[55px] md:text-[75px] lg:text-[90px] font-normal leading-[0.85] text-white m-0 mt-10 md:mt-0 text-center md:text-left">
                    Temukan<br>
                    impostor<br>
                    sebelum<br>
                    mereka<br>
                    mengalah<br>
                    kanmu
                </h1>
            </div>

            {{-- Right Column --}}
            <div class="flex flex-col gap-5 md:gap-0 justify-between w-full md:w-[55%] lg:w-[45%]">
                
                {{-- Player Input Box --}}
                <div class="border-[3px] border-primary rounded-[24px] bg-bg-dark/50 px-8 py-4 flex items-center justify-between shadow-[0_4px_30px_rgba(255,178,0,0.15)] backdrop-blur-sm">
                    <div class="flex flex-col">
                        <label for="jumlah-pemain" class="text-[20px] md:text-[24px] font-light tracking-wide text-white mb-1">Jumlah Pemain :</label>
                        <input type="number" id="jumlah-pemain" value="4" min="1" max="99" class="no-spinners bg-transparent border-none outline-none text-[60px] md:text-[80px] font-normal text-white w-[100px] p-0 h-[70px] md:h-[90px] leading-none" />
                    </div>
                    <div class="w-[70px] h-[70px] md:w-[100px] md:h-[100px] shrink-0 mr-2 md:mr-4">
                        <img src="/images/setting/worker-icon.svg" alt="Worker Icon" class="w-full h-full object-contain">
                    </div>
                </div>
                
                {{-- Impostor Input Box --}}
                <div class="border-[3px] border-danger rounded-[24px] bg-bg-dark/50 px-8 py-4 flex items-center justify-between shadow-[0_4px_30px_rgba(229,33,33,0.15)] backdrop-blur-sm">
                    <div class="flex flex-col">
                        <label for="jumlah-impostor" class="text-[20px] md:text-[24px] font-light tracking-wide text-white mb-1">Jumlah Impostor :</label>
                        <input type="number" id="jumlah-impostor" value="1" min="1" max="99" class="no-spinners bg-transparent border-none outline-none text-[60px] md:text-[80px] font-normal text-white w-[100px] p-0 h-[70px] md:h-[90px] leading-none" />
                    </div>
                    <div class="w-[70px] h-[70px] md:w-[100px] md:h-[100px] shrink-0 mr-2 md:mr-4">
                        <img src="/images/setting/spy-icon.svg" alt="Spy Icon" class="w-full h-full object-contain">
                    </div>
                </div>

                {{-- Action Button --}}
                <button class="bg-btn-bg text-[#21140A] rounded-[18px] py-3 md:py-4 px-6 text-[24px] md:text-[28px] font-light w-full hover:opacity-90 hover:scale-[1.02] transition-all cursor-pointer">
                    Lanjutkan Permainan
                </button>
                
            </div>
        </div>
    </div>
</body>
</html>
