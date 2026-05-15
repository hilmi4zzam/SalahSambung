<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalahSambung - Voting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        'md': '768px',
                        'lg': '900px',
                    },
                    fontFamily: {
                        'londrina': ['"Londrina Solid"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-[#150D05] min-h-screen font-londrina text-white flex flex-col relative overflow-x-hidden">

    {{-- Background Gradient Wrapper --}}
    <div class="w-full flex-1 flex flex-col bg-[radial-gradient(circle_at_50%_50%,rgba(67,38,19,1)_0%,rgba(39,24,12,1)_100%)]">
        
        {{-- TOP SECTION (Gradient Background) --}}
        <div class="w-full px-5 md:px-8 pt-8 pb-16 md:pb-24 flex flex-col relative z-10">
            <div class="w-full max-w-[900px] lg:max-w-[1000px] mx-auto flex flex-col items-center">
                {{-- Back Button --}}
                <div class="w-full flex justify-start mb-6 md:mb-8 mt-2 md:mt-0">
                    <a href="javascript:history.back()" class="flex items-center gap-2 md:gap-3 text-white hover:text-[#C7B09C] transition-colors group">
                        <svg viewBox="0 0 24 24" fill="none" class="w-5 h-5 md:w-6 md:h-6 group-hover:-translate-x-1 transition-transform" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 12H5M12 19l-7-7 7-7"/>
                        </svg>
                        <span class="text-[20px] md:text-[24px] font-light tracking-wide mt-1">Kembali</span>
                    </a>
                </div>

                {{-- Big Title --}}
                <h1 class="font-normal text-[32px] sm:text-[40px] md:text-[48px] lg:text-[56px] leading-[1.1] text-center max-w-[700px] tracking-wide text-white">
                    Lakukan putaran minimal sebanyak 2 kali lalu Voting
                </h1>
            </div>
        </div>

        {{-- BOTTOM SECTION (Dark Container) --}}
        <div class="w-full flex-1 bg-[#150D05] rounded-t-[30px] md:rounded-t-[40px] mt-[-30px] md:mt-[-40px] relative z-20 px-5 md:px-8 pt-10 md:pt-14 pb-16 shadow-[0_-10px_40px_rgba(0,0,0,0.3)] flex flex-col items-center">
            
            {{-- Subtitle --}}
            <p class="font-light text-[18px] sm:text-[20px] md:text-[24px] text-[#BDBDBC] text-center mb-8 md:mb-12">
                Ketuk salah satu pemain untuk di voting
            </p>

            {{-- Player Grid --}}
            <div class="w-full max-w-[700px] lg:max-w-[800px] mx-auto flex flex-wrap justify-center gap-4 md:gap-5 mb-10 md:mb-12">
                
                {{-- Pemain 1 --}}
                <button class="w-full sm:w-auto min-w-[140px] max-w-[180px] md:max-w-[200px] flex-1 h-[50px] md:h-[60px] rounded-[16px] md:rounded-[18px] border-[2px] md:border-[3px] border-[#E61612] bg-transparent hover:bg-[#E61612]/10 transition-colors flex items-center justify-center group focus:outline-none focus:ring-2 focus:ring-[#E61612]/50">
                    <span class="font-light text-[20px] md:text-[24px] text-white mt-1 group-hover:scale-105 transition-transform">Pemain 1</span>
                </button>

                {{-- Pemain 2 --}}
                <button class="w-full sm:w-auto min-w-[140px] max-w-[180px] md:max-w-[200px] flex-1 h-[50px] md:h-[60px] rounded-[16px] md:rounded-[18px] border-[2px] md:border-[3px] border-[#C26910] bg-transparent hover:bg-[#C26910]/10 transition-colors flex items-center justify-center group focus:outline-none focus:ring-2 focus:ring-[#C26910]/50">
                    <span class="font-light text-[20px] md:text-[24px] text-white mt-1 group-hover:scale-105 transition-transform">Pemain 2</span>
                </button>

                {{-- Pemain 3 --}}
                <button class="w-full sm:w-auto min-w-[140px] max-w-[180px] md:max-w-[200px] flex-1 h-[50px] md:h-[60px] rounded-[16px] md:rounded-[18px] border-[2px] md:border-[3px] border-[#FFB200] bg-transparent hover:bg-[#FFB200]/10 transition-colors flex items-center justify-center group focus:outline-none focus:ring-2 focus:ring-[#FFB200]/50">
                    <span class="font-light text-[20px] md:text-[24px] text-white mt-1 group-hover:scale-105 transition-transform">Pemain 3</span>
                </button>

                {{-- Pemain 4 --}}
                <button class="w-full sm:w-auto min-w-[140px] max-w-[180px] md:max-w-[200px] flex-1 h-[50px] md:h-[60px] rounded-[16px] md:rounded-[18px] border-[2px] md:border-[3px] border-[#01690F] bg-transparent hover:bg-[#01690F]/10 transition-colors flex items-center justify-center group focus:outline-none focus:ring-2 focus:ring-[#01690F]/50">
                    <span class="font-light text-[20px] md:text-[24px] text-white mt-1 group-hover:scale-105 transition-transform">Pemain 4</span>
                </button>

                {{-- Pemain 5 --}}
                <button class="w-full sm:w-auto min-w-[140px] max-w-[180px] md:max-w-[200px] flex-1 h-[50px] md:h-[60px] rounded-[16px] md:rounded-[18px] border-[2px] md:border-[3px] border-[#127CE6] bg-transparent hover:bg-[#127CE6]/10 transition-colors flex items-center justify-center group focus:outline-none focus:ring-2 focus:ring-[#127CE6]/50">
                    <span class="font-light text-[20px] md:text-[24px] text-white mt-1 group-hover:scale-105 transition-transform">Pemain 5</span>
                </button>

            </div>

            {{-- Voting Button --}}
            <button class="w-full max-w-[700px] lg:max-w-[800px] mx-auto h-[55px] md:h-[65px] rounded-[16px] md:rounded-[20px] bg-[#C7B09C] hover:bg-[#d4bfad] transition-colors flex items-center justify-center group shadow-lg focus:outline-none focus:ring-2 focus:ring-[#C7B09C]/50">
                <span class="font-light text-[22px] md:text-[26px] text-[#21201D] mt-1 group-hover:scale-105 transition-transform">Voting</span>
            </button>

        </div>
    </div>

</body>
</html>
