<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalahSambung - Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes fadein {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadein {
            animation: fadein 1s ease-out forwards;
        }
    </style>
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
</head>
<body class="bg-[#150D05] min-h-screen font-londrina antialiased overflow-x-hidden">

  {{-- ===== HERO SECTION ===== --}}
  <div class="min-h-screen relative overflow-hidden flex flex-col bg-[radial-gradient(circle_at_50%_50%,rgba(67,38,19,1)_0%,rgba(39,24,12,1)_100%)]">

    {{-- ===== DESKTOP NAVBAR ===== --}}
    <nav class="hidden md:flex pt-8 w-full relative z-10 justify-center px-10">
      <div class="w-full max-w-[1100px] bg-white/10 backdrop-blur-md rounded-[50px] h-[55px] flex items-center px-8 border border-white/5">
        {{-- Logo --}}
        <a href="/" class="flex items-center gap-3 no-underline">
          <div class="w-[30px] h-[30px] rounded-full bg-[#D9D9D9]"></div>
          <span class="font-light text-[24px] text-white leading-none">SalahSambung</span>
        </a>
        {{-- Nav links right --}}
        <div class="ml-auto flex items-center gap-6">
          <a href="/masuk" class="font-light text-[22px] text-white no-underline hover:opacity-70 transition-opacity">Masuk</a>
          <a href="/daftar" class="border border-[#FFB200] rounded-full text-[22px] text-white py-1 px-5 no-underline font-light hover:bg-[#FFB200]/10 transition-colors">Daftar</a>
        </div>
      </div>
    </nav>

    {{-- ===== MOBILE NAVBAR ===== --}}
    <nav class="flex md:hidden pt-7 px-5 relative z-10 justify-center">
      <div class="w-full bg-white/10 backdrop-blur-md rounded-full h-[50px] flex items-center px-5 relative border border-white/5">
        <a href="/" class="flex items-center gap-2 no-underline">
          <div class="w-[30px] h-[30px] rounded-full bg-[#D9D9D9]"></div>
          <span class="font-light text-[20px] text-white">SalahSambung</span>
        </a>
        <div class="ml-auto flex items-center gap-3">
          <a href="/masuk" class="font-light text-[18px] text-white no-underline">Masuk</a>
          <a href="/daftar" class="font-light text-[18px] text-white no-underline border border-[#FFB200] rounded-full py-1 px-3">Daftar</a>
        </div>
      </div>
    </nav>

    {{-- ===== DESKTOP HERO ===== --}}
    <div class="hidden md:flex flex-1 items-center max-w-[1100px] w-full mx-auto px-10">
      <div class="flex-1 animate-fadein pr-10">
        <h1 class="font-normal text-[85px] leading-[0.9] text-white mb-10 tracking-wide">
          Tongkrongan<br>kamu bosenin?<br>berati belum<br>pernah main ini!
        </h1>
        <a href="/masuk" class="bg-[#C7B09C] text-[#21201D] font-light text-[22px] rounded-xl py-3.5 px-8 inline-flex no-underline hover:bg-[#d4bfad] transition-colors">Main Sekarang</a>
      </div>
      {{-- Character Illustration Right --}}
      <div class="animate-float shrink-0 w-[420px] flex items-center justify-center">
        <img src="/images/villagerimpostorlpmobile.png" onerror="this.src='https://placehold.co/400x500/5B4000/FFF?text=Hero+Image'" alt="SalahSambung Cards" class="w-full object-contain drop-shadow-[0_20px_40px_rgba(0,0,0,0.4)]">
      </div>
    </div>

    {{-- ===== MOBILE HERO ===== --}}
    <div class="flex flex-col md:hidden flex-1 justify-center pt-10 px-6 items-center">
      <h1 class="font-normal text-[52px] leading-[0.9] text-white text-center mb-8 animate-fadein">
        Tongkrongan<br>kamu bosenin?<br>berati belum<br>pernah main ini!
      </h1>
      {{-- Mobile character --}}
      <div class="flex justify-center mb-5 mt-5 animate-float w-full max-w-[200px]">
        <img src="/images/villagerimpostorlpmobile.png" onerror="this.src='https://placehold.co/300x400/5B4000/FFF?text=Hero+Image'" alt="SalahSambung Cards" class="w-full object-contain">
      </div>
      <div class="flex justify-center pb-10">
        <a href="/masuk" class="bg-[#C7B09C] text-[#21201D] text-[20px] py-3.5 px-10 rounded-xl font-light no-underline">Main Sekarang</a>
      </div>
    </div>
  </div>

  <div class="bg-[#150D05] pt-12 pb-12">

    {{-- Section title --}}
    <h2 class="font-normal text-[17px] md:text-[22px] tracking-[0.3em] text-center text-white mb-12 uppercase">Satu Tongkrongan Dua Peran</h2>

    {{-- VILLAGER SECTION --}}
    <div class="w-full py-[60px] bg-gradient-to-r from-[rgba(100,75,0,0.5)] to-transparent">
      <div class="max-w-[1100px] mx-auto px-10 flex flex-col md:flex-row items-center justify-between gap-10">
        {{-- Villager Character --}}
        <div class="animate-float shrink-0 w-[140px] flex items-center justify-center">
          <img src="/images/villager.png" onerror="this.src='https://placehold.co/260x300/8A6020/FFF?text=Villager'" alt="villager Cards" class="w-full object-contain">
        </div>
        {{-- Villager Text --}}
        <div class="flex-1 text-center md:text-right">
          <div class="font-normal text-[80px] md:text-[110px] leading-none text-white mb-2">VILLAGER</div>
          <p class="font-light text-[20px] md:text-[24px] leading-[1.2] text-white/90 max-w-[500px] md:ml-auto">
            Dapatkan kata dan berikan clue yang luas<br class="hidden md:block">untuk menemukan Impostor
          </p>
        </div>
      </div>
    </div>

    {{-- IMPOSTOR SECTION --}}
    <div class="w-full py-[60px] bg-gradient-to-l from-[rgba(100,10,10,0.5)] to-transparent mt-8">
      <div class="max-w-[1100px] mx-auto px-10 flex flex-col md:flex-row items-center justify-between gap-10">
        {{-- Impostor Text (Mobile order adjustments) --}}
        <div class="flex-1 text-center md:text-left order-2 md:order-1">
          <div class="font-normal text-[80px] md:text-[110px] leading-none text-white mb-2">IMPOSTOR</div>
          <p class="font-light text-[20px] md:text-[24px] leading-[1.2] text-white/90 max-w-[550px]">
            Dapatkan clue dan berusaha tidak mencurigakan<br class="hidden md:block">sampai jumlah Impostor dan Villager seimbang
          </p>
        </div>
        {{-- Impostor Character --}}
        <div class="animate-float shrink-0 w-[140px] flex items-center justify-center order-1 md:order-2">
          <img src="/images/impostor.png" onerror="this.src='https://placehold.co/260x300/5C1010/FFF?text=Impostor'" alt="SalahSambung Cards" class="w-full object-contain">
        </div>
      </div>
    </div>
  </div>

  <div class="bg-[#150D05] pt-10 pb-10"></div>

  {{-- ===== FOOTER ===== --}}
  <footer class="bg-gradient-to-b from-[#432613] to-[#27180C] py-10 w-full mt-auto">
    <div class="max-w-[1100px] mx-auto px-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
      {{-- Brand --}}
      <div class="flex items-center gap-5">
        <div class="w-[80px] h-[80px] rounded-full bg-[#D9D9D9] shrink-0"></div>
        <div>
          <div class="font-normal text-[42px] md:text-[50px] text-white leading-none">SalahSambung</div>
          <div class="font-light text-[16px] md:text-[18px] text-white/80 mt-1">Tugas Website dan Database</div>
        </div>
      </div>
      {{-- Social Links --}}
      <div class="flex flex-col gap-2 items-start">
        <a href="#" class="flex items-center gap-3 no-underline text-white font-light text-[16px] md:text-[22px] hover:text-[#C7B09C] transition-colors">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
          WhatsApp
        </a>
        <a href="#" class="flex items-center gap-3 no-underline text-white font-light text-[16px] md:text-[22px] hover:text-[#C7B09C] transition-colors">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><rect x="2" y="2" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.8" fill="none"/><circle cx="11" cy="11" r="4" stroke="currentColor" stroke-width="1.8" fill="none"/><circle cx="16.5" cy="5.5" r="1.2" fill="currentColor"/></svg>
          Instagram
        </a>
        <a href="#" class="flex items-center gap-3 no-underline text-white font-light text-[16px] md:text-[22px] hover:text-[#C7B09C] transition-colors">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M11 2C6 2 2 6 2 11c0 4 2.6 7.4 6.2 8.6.45.08.62-.2.62-.44v-1.55c-2.52.55-3.05-1.22-3.05-1.22-.41-1.04-1-1.32-1-1.32-.82-.56.06-.55.06-.55.9.06 1.38.93 1.38.93.8 1.37 2.1.97 2.6.74.08-.58.31-.97.57-1.2-2-.23-4.1-1-4.1-4.44 0-.98.35-1.78.93-2.4-.09-.23-.4-1.14.09-2.37 0 0 .76-.24 2.5.93.73-.2 1.5-.3 2.28-.3.77 0 1.55.1 2.28.3 1.74-1.17 2.5-.93 2.5-.93.5 1.23.18 2.14.09 2.37.58.62.93 1.42.93 2.4 0 3.45-2.1 4.2-4.1 4.43.32.28.6.83.6 1.67v2.48c0 .24.16.52.62.44C17.4 18.4 20 15 20 11c0-5-4-9-9-9z" fill="currentColor"/></svg>
          GitHub
        </a>
      </div>
    </div>
  </footer>

</body>
</html>
