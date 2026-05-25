<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalahSambung - Main Online</title>
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
<body class="bg-[#150D05] font-londrina min-h-screen flex items-center justify-center p-4">
    <div class="text-center flex flex-col items-center justify-center gap-6 max-w-lg w-full bg-[url('/images/dashboard_illustration.png')] bg-[length:100%_100%] bg-top bg-no-repeat p-12 min-h-[500px]">
        
        <h1 class="text-6xl text-[#FFB200] font-black leading-none">Maintenance</h1>
        
        <p class="text-3xl text-white font-light">
            Fitur ini sedang dalam perkembangan.
        </p>

        <div class="mt-4">
            <a href="/dashboard" class="inline-block bg-[#C7B09C] text-[#21201D] text-2xl font-light py-3 px-8 rounded-[18px] hover:bg-[#d4bfad] transition-colors">
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</body>
</html>