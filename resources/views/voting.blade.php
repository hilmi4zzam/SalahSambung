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
            <p class="font-light text-[20px] md:text-[24px] md:text-[24px] text-[#ffffff] text-center mb-8 md:mb-12">
                Ketuk salah satu pemain untuk di voting
            </p>

            {{-- Player Grid --}}
            <div class="w-full max-w-[700px] lg:max-w-[800px] mx-auto flex flex-wrap justify-center gap-4 md:gap-5 mb-10 md:mb-12">
                
                @for ($i = 1; $i <= ($jumlah_pemain ?? 3); $i++)
                    <button id="player-btn-{{ $i }}" onclick="selectPlayer({{ $i }})" class="player-btn w-full sm:w-auto min-w-[140px] max-w-[180px] md:max-w-[200px] flex-1 h-[50px] md:h-[60px] rounded-[16px] md:rounded-[18px] border-[2px] md:border-[2px] border-[#8c8b89] bg-transparent hover:bg-[#8c8b89]/10 transition-colors flex items-center justify-center group focus:outline-none">
                        <span class="font-light text-[20px] md:text-[24px] text-white mt-1">Pemain {{ $i }}</span>
                    </button>
                @endfor

            </div>

            {{-- Voting Button --}}
            <button onclick="processVote()" class="w-full max-w-[700px] lg:max-w-[800px] mx-auto h-[55px] md:h-[65px] rounded-[16px] md:rounded-[20px] bg-[#C7B09C] rounded-[16px] md:rounded-[18px] lg:rounded-[20px] py-2 md:py-2.5 lg:py-3 px-6 md:px-6 text-[20px] md:text-[24px] font-light w-[80%] hover:opacity-90 hover:scale-[1.02] transition-all cursor-pointer mb-2 sm:mb-4 md:mb-3 lg:mb-4 flex items-center justify-center group shadow-lg focus:outline-none focus:ring-2 focus:ring-[#C7B09C]/50">
                <span class="font-light text-[20px] md:text-[24px] text-[#21201D]">Voting</span>
            </button>

        </div>
    </div>

    {{-- Popups --}}
    {{-- Not Impostor Popup --}}
    <div id="not-impostor-popup" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 backdrop-blur-sm px-4">
        <div class="bg-[url('/images/dashboard_illustration.png')] bg-[length:100%_100%] bg-top bg-no-repeat p-6 md:p-8 max-w-[400px] w-full text-center flex flex-col items-center">
            <h2 id="not-impostor-text" class="text-[28px] md:text-[32px] text-white mb-6 leading-tight">Pemain X bukan impostor</h2>
            <button onclick="closeNotImpostor()" class="bg-[#C7B09C] text-[#21201D] font-light text-[20px] md:text-[24px] rounded-[16px] px-8 py-2 hover:bg-[#d4bfad] transition-colors w-full">Lanjut</button>
        </div>
    </div>

    {{-- Impostor Popup --}}
    <div id="impostor-popup" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 backdrop-blur-sm px-4">
        <div class="bg-[url('/images/dashboard_illustration.png')] bg-[length:100%_100%] bg-top bg-no-repeat p-6 md:p-8 max-w-[400px] w-full text-center flex flex-col items-center">
            <h2 id="impostor-text" class="text-text-[28px] md:text-[32px] text-[#ffffff] mb-2 leading-tight">Pemain X adalah Impostor!</h2>
            <p class="text-[16px] md:text-[20px] text-white/80 mb-6 font-light">Tebak kata dari Villager</p>
            <input type="text" id="guess-input" placeholder-light placeholder="Masukkan tebakan..." class="w-full bg-transparent border-[2px] border-[#C7B09C] text-center rounded-[16px] text-[20px] text-white mb-8 pb-1 pt-1 placeholder-white/30">
            <button onclick="checkGuess()" class="bg-[#C7B09C] text-[#21201D] font-light text-[20px] md:text-[24px] rounded-[16px] px-8 py-2 hover:bg-[#d4bfad] transition-colors w-full">Tebak</button>
        </div>
    </div>

    <div id="result-popup" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 backdrop-blur-sm px-4">
        <div class="bg-[url('/images/dashboard_illustration.png')] bg-[length:100%_100%] bg-top bg-no-repeat p-6 md:p-8 max-w-[400px] w-full text-center flex flex-col items-center">
            <h2 id="result-title" class="text-[28px] md:text-[32px] text-white mb-6 leading-tight">Pemenang</h2>
            <a href="/dashboard" class="bg-[#C7B09C] text-[#21201D] font-light text-[20px] md:text-[24px] rounded-[16px] px-8 py-2 hover:bg-[#d4bfad] transition-colors w-full">Selesai</a>
        </div>
    </div>

    <script>
        const roles = JSON.parse(sessionStorage.getItem('gameRoles') || '[]');
        const wordVillager = sessionStorage.getItem('wordVillager') || '';

        let selectedPlayer = null;

        function selectPlayer(index) {
            selectedPlayer = index;
            // Update ui select button
            document.querySelectorAll('.player-btn').forEach((btn) => {
                btn.classList.remove('border-[#FFB200]', 'ring-1', 'ring-[#FFB200]/50');
                btn.classList.add('border-[#8c8b89]');
            });
            const activeBtn = document.getElementById('player-btn-' + index);
            if(activeBtn) {
                activeBtn.classList.remove('border-[#8c8b89]');
                activeBtn.classList.add('border-[#FFB200]', 'ring-1', 'ring-[#FFB200]/50');
            }
        }

        function processVote() {
            if (!selectedPlayer) {
                alert('Pilih pemain terlebih dahulu!');
                return;
            }

            const role = roles[selectedPlayer - 1];

            if (role === 'IMPOSTOR') {
                document.getElementById('impostor-text').innerText = 'Pemain ' + selectedPlayer + ' adalah Impostor!';
                document.getElementById('impostor-popup').classList.replace('hidden', 'flex');
            } else {
                document.getElementById('not-impostor-text').innerText = 'Pemain ' + selectedPlayer + ' BUKAN Impostor';
                document.getElementById('not-impostor-popup').classList.replace('hidden', 'flex');
            }
        }

        function closeNotImpostor() {
            document.getElementById('not-impostor-popup').classList.replace('flex', 'hidden');
            // Remove the selected player from view
            const btn = document.getElementById('player-btn-' + selectedPlayer);
            if (btn) btn.style.display = 'none';

            // Mark player as eliminated so we can count remaining
            roles[selectedPlayer - 1] = 'ELIMINATED';
            
            let remainingVillagers = roles.filter(role => role === 'VILLAGER').length;
            let remainingImpostors = roles.filter(role => role === 'IMPOSTOR').length;

            if (remainingImpostors >= remainingVillagers) {
                const resultPopup = document.getElementById('result-popup');
                const resultTitle = document.getElementById('result-title');
                const resultDesc = document.getElementById('result-desc');

                resultTitle.innerText = 'Impostor Menang!';
                resultTitle.classList.remove('text-[#ffffff]');
                resultTitle.classList.add('text-[#ffffff]');
                resultPopup.firstElementChild.classList.remove('border-[#FFB200]');
                
                saveGameHistory('Impostor');

                resultPopup.classList.replace('hidden', 'flex');
            }

            selectedPlayer = null;
        }

        function saveGameHistory(winner) {
            fetch('/api/history', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    winner_role: winner
                })
            }).catch(console.error);
        }

        function checkGuess() {
            const guess = document.getElementById('guess-input').value.trim().toLowerCase();
            const actualWord = wordVillager.toLowerCase();

            document.getElementById('impostor-popup').classList.replace('flex', 'hidden');

            const resultPopup = document.getElementById('result-popup');
            const resultTitle = document.getElementById('result-title');
            const resultDesc = document.getElementById('result-desc');

            if (guess === actualWord) {
                resultTitle.innerText = 'Impostor Menang!';
                resultTitle.classList.remove('text-[#ffffff]');
                resultTitle.classList.add('text-[#ffffff]');
                resultPopup.firstElementChild.classList.remove('border-[#FFB200]');
                resultPopup.firstElementChild.classList.add('border-[#E61612]');
                saveGameHistory('Impostor');
            } else {
                resultTitle.innerText = 'Villager Menang!';
                resultTitle.classList.remove('text-[#ffffff]');
                resultTitle.classList.add('text-[#ffffff]');
                resultPopup.firstElementChild.classList.remove('border-[#E61612]');
                resultPopup.firstElementChild.classList.add('border-[#FFB200]');
                saveGameHistory('Villager');
            }

            resultPopup.classList.replace('hidden', 'flex');
        }
    </script>

</body>
</html>
