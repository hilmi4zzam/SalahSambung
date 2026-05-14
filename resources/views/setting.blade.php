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
                    screens: { 'md': '900px', 'lg': '900px' },
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
<body class="bg-[radial-gradient(circle_at_50%_50%,rgba(67,38,19,1)_0%,rgba(39,24,12,1)_100%)] min-h-screen font-londrina text-white flex items-start md:items-center justify-center p-4 py-8 md:p-8 overflow-x-hidden relative">
    
    {{-- Main Container --}}
    <div class="w-full max-w-[1000px] flex flex-col z-10">
        
        {{-- Back Button (Top) --}}
        <div class="w-full flex justify-start mb-6 md:mb-10 lg:mb-12">
            <a href="/dashboard" class="flex items-center gap-3 text-white hover:text-btn-bg transition-colors group">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="group-hover:-translate-x-1 transition-transform" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                <span class="text-[20px] md:text-[24px] font-light tracking-wide mt-1">Kembali</span>
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
            <form action="/buka-peran" method="GET" class="flex flex-col gap-5 md:gap-0 justify-between w-full md:w-[55%] lg:w-[45%]">
                
                {{-- Player Input Box --}}
                <div class="border-[3px] border-primary rounded-[24px] bg-bg-dark/50 px-6 py-4 flex items-center justify-between shadow-[0_4px_30px_rgba(255,178,0,0.15)] backdrop-blur-sm">
                    <div class="flex flex-col">
                        <label for="jumlah-pemain" class="text-[20px] md:text-[24px] font-light tracking-wide text-white mb-1">Jumlah Pemain :</label>
                        <div class="flex items-center gap-2">
                            <button type="button" onclick="updateValue('jumlah-pemain', -1, 3)" class="w-8 h-8 md:w-10 md:h-10 bg-primary/10 text-primary border-2 border-primary rounded-xl flex items-center justify-center text-3xl font-bold hover:bg-primary hover:text-bg-dark transition cursor-pointer mb-2">-</button>
                            <input type="number" id="jumlah-pemain" name="jumlah_pemain" value="3" min="3" max="50" readonly class="no-spinners bg-transparent border-none outline-none text-[60px] md:text-[80px] font-normal text-center text-white w-[70px] md:w-[90px] p-0 h-[70px] md:h-[90px] leading-none pointer-events-none" />
                            <button type="button" onclick="updateValue('jumlah-pemain', 1, 3)" class="w-8 h-8 md:w-10 md:h-10 bg-primary/10 text-primary border-2 border-primary rounded-xl flex items-center justify-center text-3xl font-bold hover:bg-primary hover:text-bg-dark transition cursor-pointer mb-2">+</button>
                        </div>
                    </div>
                    <div class="w-[70px] h-[70px] md:w-[100px] md:h-[100px] shrink-0 mr-2 md:mr-4">
                        <img src="/images/setting/worker-icon.svg" alt="Worker Icon" class="w-full h-full object-contain">
                    </div>
                </div>
                
                {{-- Impostor Input Box --}}
                <div class="border-[3px] border-danger rounded-[24px] bg-bg-dark/50 px-6 py-4 flex items-center justify-between shadow-[0_4px_30px_rgba(229,33,33,0.15)] backdrop-blur-sm">
                    <div class="flex flex-col">
                        <label for="jumlah-impostor" class="text-[20px] md:text-[24px] font-light tracking-wide text-white mb-1">Jumlah Impostor :</label>
                        <div class="flex items-center gap-2">
                            <button type="button" onclick="updateValue('jumlah-impostor', -1, 1)" class="w-8 h-8 md:w-10 md:h-10 bg-danger/10 text-danger border-2 border-danger rounded-xl flex items-center justify-center text-3xl font-bold hover:bg-danger hover:text-bg-dark transition cursor-pointer mb-2">-</button>
                            <input type="number" id="jumlah-impostor" name="jumlah_impostor" value="1" min="1" max="20" readonly class="no-spinners bg-transparent border-none outline-none text-[60px] md:text-[80px] font-normal text-center text-white w-[70px] md:w-[90px] p-0 h-[70px] md:h-[90px] leading-none pointer-events-none" />
                            <button type="button" onclick="updateValue('jumlah-impostor', 1, 1)" class="w-8 h-8 md:w-10 md:h-10 bg-danger/10 text-danger border-2 border-danger rounded-xl flex items-center justify-center text-3xl font-bold hover:bg-danger hover:text-bg-dark transition cursor-pointer mb-2">+</button>
                        </div>
                    </div>
                    <div class="w-[70px] h-[70px] md:w-[100px] md:h-[100px] shrink-0 mr-2 md:mr-4">
                        <img src="/images/setting/spy-icon.svg" alt="Spy Icon" class="w-full h-full object-contain">
                    </div>
                </div>

                {{-- Action Button --}}
                <button type="submit" class="block text-center bg-btn-bg text-[#21140A] rounded-[18px] py-3 md:py-4 px-6 text-[20px] md:text-[24px] font-light w-full hover:opacity-90 hover:scale-[1.02] transition-all cursor-pointer mt-4">
                    Lanjutkan Permainan
                </button>
                
            </form>
        </div>
    </div>
    <script>
        function updateValue(id, change, min) {
            const input = document.getElementById(id);
            let val = parseInt(input.value) || min;
            val += change;
            
            if (val < min) {
                val = min;
            }
            
            // Aturan opsional: Impostor harus lebih sedikit dari pemain.
            if (id === 'jumlah-impostor') {
                const jmlPemain = parseInt(document.getElementById('jumlah-pemain').value) || 3;
                if (val >= jmlPemain) {
                    val = jmlPemain - 1;
                }
            }
            
            input.value = val;
            
            // Jika pemain berkurang dan jumlah impostor sekarang >= pemain, turunkan impostor
            if (id === 'jumlah-pemain') {
                const impostorInput = document.getElementById('jumlah-impostor');
                let jmlImpostor = parseInt(impostorInput.value) || 1;
                if (jmlImpostor >= val) {
                    impostorInput.value = val - 1;
                }
            }
        }
    </script>
</body>
</html>
