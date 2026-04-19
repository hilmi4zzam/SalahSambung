<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SalahSambung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        'md': '1085px',
                    },
                    fontFamily: {
                        'londrina': ['"Londrina Solid"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .spotlight {
            clip-path: polygon(0 0, 100% 0, 75% 100%, 25% 100%);
        }
    </style>
</head>

<body class="bg-[#150D05] min-h-screen font-londrina text-white flex flex-col relative overflow-x-hidden">

    {{-- Spotlight Background --}}
    <div
        class="absolute top-0 left-1/2 -translate-x-1/2 w-[150%] md:w-[1200px] h-[700px] bg-gradient-to-b from-[#3E2512] to-[#150D05] spotlight z-0 pointer-events-none">
    </div>

    {{-- NAVBAR --}}
    <nav class="relative z-10 w-full px-5 pt-8 pb-4 flex justify-center">
        <div
            class="w-full max-w-[800px] bg-white/10 backdrop-blur-md rounded-full h-[55px] flex items-center px-6 justify-between border border-white/5 shadow-lg">
            {{-- Left Logo --}}
            <a href="/" class="flex items-center gap-3 no-underline">
                <div class="w-[30px] h-[30px] rounded-full bg-[#D9D9D9]"></div>
                <span class="font-normal text-[22px] md:text-[24px] text-white leading-none">SalahSambung</span>
            </a>

            {{-- Right Links --}}
            <div class="flex items-center gap-6">
                <a href="#"
                    class="text-[#FFB200] text-lg md:text-xl font-normal border-b-2 border-[#FFB200] pb-1">Main</a>
                <a href="#histori"
                    class="text-white/70 text-lg md:text-xl font-light hover:text-white transition-colors">Histori</a>
            </div>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main class="relative z-10 flex-1 w-full max-w-[1100px] mx-auto px-5 pt-12 flex flex-col items-center">

        <h1 class="text-[50px] md:text-[65px] font-normal text-center mb-8 text-white leading-[1.1]">
            Cari Tahu Siapa<br>Impostornya!
        </h1>

        {{-- Action Buttons --}}
        <div class="flex flex-col md:flex-row items-center gap-4 mb-8">
            <a href="#"
                class="bg-[#C7B09C] text-[#21201D] px-8 py-2.5 rounded-[18px] text-2xl font-normal hover:opacity-90 transition-opacity w-full md:w-auto text-center">
                Main Semeja
            </a>
            <a href="#"
                class="border-[2px] border-[#FFB200] bg-[#150D05] text-white px-8 py-2.5 rounded-[18px] text-2xl font-normal flex items-center justify-center gap-2 hover:bg-[#FFB200]/10 transition-colors w-full md:w-auto">
                Main Online
                <svg width="20" height="20" viewBox="0 0 24 24" fill="#EF4444" class="text-red-500">
                    <path
                        d="M19 11H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2zm-7 6.5a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5zM17 11V7A5 5 0 0 0 7 7v4h2V7a3 3 0 0 1 6 0v4z" />
                </svg>
            </a>
        </div>

        {{-- Mask Illustration --}}
        <div class="mb-[-60px] mt-20 relative z-20">
            <img src="/images/topeng.png" alt="gambar topeng" class="w-[310px] h-[180px] object-contain">
        </div>

        {{-- HISTORY SECTION --}}
        <div id="histori"
            class="w-full max-w-[700px] pt-24 px-6 md:px-12 pb-16 relative z-10 mt-auto mb-[-20px] bg-[url('/images/dashboard_mobile_illustration.png')] md:bg-[url('/images/dashboard_illustration.png')] bg-[length:100%_100%] bg-top bg-no-repeat min-h-[400px]">
            <h2 class="text-[26px] text-white font-normal mb-8 text-center tracking-[0.5em] uppercase">
                Histori
            </h2>

            <div class="space-y-5 md:space-y-8">
                {{-- History Item: Villager --}}
                <div class="flex flex-col">
                    <div
                        class="bg-[#3D2C20] rounded-[24px] px-4 md:px-6 py-3 md:py-3.5 flex items-center justify-between mb-2">
                        <div class="flex items-center gap-3 md:gap-12 flex-1 min-w-0">
                            {{-- Role --}}
                            <div class="flex items-center gap-2 md:gap-3 w-[90px] md:w-[130px] shrink-0">
                                <svg class="w-4 h-4 md:w-5 md:h-5 shrink-0" viewBox="0 0 24 24" fill="#FFB200">
                                    <path d="M2 22h20v-2H2v2zm9-4l5-9-3 3-2-6-2 6-3-3 5 9z" />
                                </svg>
                                <span
                                    class="text-white text-[16px] md:text-[22px] font-normal tracking-wide">Villager</span>
                            </div>
                            {{-- Object --}}
                            <div class="flex items-center gap-2 md:gap-3 min-w-0">
                                <span class="text-[#FFB200] font-bold text-[18px] md:text-[24px] shrink-0">T</span>
                                <span
                                    class="text-white text-[16px] md:text-[22px] font-normal tracking-wide truncate">Tiang
                                    Listrik</span>
                            </div>
                        </div>
                        {{-- Delete Button --}}
                        <button
                            class="w-[30px] h-[30px] md:w-[36px] md:h-[36px] rounded-[10px] flex items-center justify-center border border-[#EF4444] bg-transparent hover:bg-[#EF4444]/10 transition-colors shrink-0 ml-4">
                            <svg class="w-4 h-4 md:w-[18px] md:h-[18px]" viewBox="0 0 24 24" fill="none"
                                stroke="#EF4444" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2" />
                            </svg>
                        </button>
                    </div>
                    <div
                        class="text-right text-[#E1C5A8] text-[10px] md:text-[13px] font-light pr-4 md:pr-6 tracking-widest mt-1">
                        01.47 PM - 18 / 4 / 26</div>
                </div>

                {{-- History Item: Villager --}}
                <div class="flex flex-col">
                    <div
                        class="bg-[#3D2C20] rounded-[24px] px-4 md:px-6 py-3 md:py-3.5 flex items-center justify-between mb-2">
                        <div class="flex items-center gap-3 md:gap-12 flex-1 min-w-0">
                            {{-- Role --}}
                            <div class="flex items-center gap-2 md:gap-3 w-[90px] md:w-[130px] shrink-0">
                                <svg class="w-4 h-4 md:w-5 md:h-5 shrink-0" viewBox="0 0 24 24" fill="#FFB200">
                                    <path d="M2 22h20v-2H2v2zm9-4l5-9-3 3-2-6-2 6-3-3 5 9z" />
                                </svg>
                                <span
                                    class="text-white text-[16px] md:text-[22px] font-normal tracking-wide">Villager</span>
                            </div>
                            {{-- Object --}}
                            <div class="flex items-center gap-2 md:gap-3 min-w-0">
                                <span class="text-[#FFB200] font-bold text-[18px] md:text-[24px] shrink-0">T</span>
                                <span
                                    class="text-white text-[16px] md:text-[22px] font-normal tracking-wide truncate">Bianglala</span>
                            </div>
                        </div>
                        {{-- Delete Button --}}
                        <button
                            class="w-[30px] h-[30px] md:w-[36px] md:h-[36px] rounded-[10px] flex items-center justify-center border border-[#EF4444] bg-transparent hover:bg-[#EF4444]/10 transition-colors shrink-0 ml-4">
                            <svg class="w-4 h-4 md:w-[18px] md:h-[18px]" viewBox="0 0 24 24" fill="none"
                                stroke="#EF4444" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2" />
                            </svg>
                        </button>
                    </div>
                    <div
                        class="text-right text-[#E1C5A8] text-[10px] md:text-[13px] font-light pr-4 md:pr-6 tracking-widest mt-1">
                        09.00 AM - 18 / 4 / 26</div>
                </div>

                {{-- History Item: Impostor --}}
                <div class="flex flex-col">
                    <div
                        class="bg-[#3D2C20] rounded-[24px] px-4 md:px-6 py-3 md:py-3.5 flex items-center justify-between mb-2">
                        <div class="flex items-center gap-3 md:gap-12 flex-1 min-w-0">
                            {{-- Role --}}
                            <div class="flex items-center gap-2 md:gap-3 w-[90px] md:w-[130px] shrink-0">
                                <svg class="w-4 h-4 md:w-5 md:h-5 shrink-0" viewBox="0 0 24 24" fill="#FFB200">
                                    <path d="M2 22h20v-2H2v2zm9-4l5-9-3 3-2-6-2 6-3-3 5 9z" />
                                </svg>
                                <span
                                    class="text-white text-[16px] md:text-[22px] font-normal tracking-wide">Impostor</span>
                            </div>
                            {{-- Object --}}
                            <div class="flex items-center gap-2 md:gap-3 min-w-0">
                                <span class="text-[#FFB200] font-bold text-[18px] md:text-[24px] shrink-0">T</span>
                                <span
                                    class="text-white text-[16px] md:text-[22px] font-normal tracking-wide truncate">Helm</span>
                            </div>
                        </div>
                        {{-- Delete Button --}}
                        <button
                            class="w-[30px] h-[30px] md:w-[36px] md:h-[36px] rounded-[10px] flex items-center justify-center border border-[#EF4444] bg-transparent hover:bg-[#EF4444]/10 transition-colors shrink-0 ml-4">
                            <svg class="w-4 h-4 md:w-[18px] md:h-[18px]" viewBox="0 0 24 24" fill="none"
                                stroke="#EF4444" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2" />
                            </svg>
                        </button>
                    </div>
                    <div
                        class="text-right text-[#E1C5A8] text-[10px] md:text-[13px] font-light pr-4 md:pr-6 tracking-widest mt-1">
                        03.21 AM - 18 / 4 / 26</div>
                </div>
            </div>
        </div>
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-gradient-to-b from-[#432613] to-[#27180C] py-10 w-full relative z-10">
        <div
            class="max-w-[1100px] mx-auto px-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            {{-- Brand --}}
            <div class="flex items-center gap-5">
                <div class="w-[80px] h-[80px] rounded-full bg-[#D9D9D9] shrink-0"></div>
                <div>
                    <div class="font-normal text-[42px] md:text-[50px] text-white leading-none">SalahSambung</div>
                    <div class="font-light text-[16px] md:text-[18px] text-white/80 mt-1">Tugas Website dan Database
                    </div>
                </div>
            </div>
            {{-- Social Links --}}
            <div class="flex flex-col gap-2 items-start">
                <a href="#"
                    class="flex items-center gap-3 no-underline text-white font-light text-[16px] md:text-[22px] hover:text-[#C7B09C] transition-colors">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z" />
                    </svg>
                    WhatsApp
                </a>
                <a href="#"
                    class="flex items-center gap-3 no-underline text-white font-light text-[16px] md:text-[22px] hover:text-[#C7B09C] transition-colors">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <rect x="2" y="2" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.8"
                            fill="none" />
                        <circle cx="11" cy="11" r="4" stroke="currentColor" stroke-width="1.8" fill="none" />
                        <circle cx="16.5" cy="5.5" r="1.2" fill="currentColor" />
                    </svg>
                    Instagram
                </a>
                <a href="#"
                    class="flex items-center gap-3 no-underline text-white font-light text-[16px] md:text-[22px] hover:text-[#C7B09C] transition-colors">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M11 2C6 2 2 6 2 11c0 4 2.6 7.4 6.2 8.6.45.08.62-.2.62-.44v-1.55c-2.52.55-3.05-1.22-3.05-1.22-.41-1.04-1-1.32-1-1.32-.82-.56.06-.55.06-.55.9.06 1.38.93 1.38.93.8 1.37 2.1.97 2.6.74.08-.58.31-.97.57-1.2-2-.23-4.1-1-4.1-4.44 0-.98.35-1.78.93-2.4-.09-.23-.4-1.14.09-2.37 0 0 .76-.24 2.5.93.73-.2 1.5-.3 2.28-.3.77 0 1.55.1 2.28.3 1.74-1.17 2.5-.93 2.5-.93.5 1.23.18 2.14.09 2.37.58.62.93 1.42.93 2.4 0 3.45-2.1 4.2-4.1 4.43.32.28.6.83.6 1.67v2.48c0 .24.16.52.62.44C17.4 18.4 20 15 20 11c0-5-4-9-9-9z"
                            fill="currentColor" />
                    </svg>
                    GitHub
                </a>
            </div>
        </div>
    </footer>

</body>

</html>