# SalahSambung

## 📖 Latar Belakang
Karena adanya sebuah permasalahan dilingkungan sekitar yang pada saat itu sedang bermain who's the spy tapi kehabisan kata dan mengharuskan setiap user untuk berlangganan untuk mendapatkan kata yang baru, maka dari itu saya menghadirkan **SalahSambung**.

Aplikasi ini adalah game tebak-tebakan sosial (Local Multiplayer / Pass-and-Play) di mana para pemain harus berdiskusi untuk mencari tahu siapa pemain yang memiliki peran atau kata yang berbeda dari mayoritas (Impostor/Spy).

## 🚀 Teknologi yang Digunakan
Proyek ini dibangun menggunakan modern web stack:
- **PHP 8.3**
- **Laravel 13.x**
- **Laravel Socialite** (Untuk integrasi Login via Google)
- **Tailwind CSS 4.0**
- **Vite**
- **MySQL / SQLite** (Database Relasional)

## ✨ Fitur-Fitur
- **Autentikasi Pengguna:** Pendaftaran dan Login lokal, serta opsi masuk cepat menggunakan **Google Login**.
- **Pengaturan Game Fleksibel:** Bisa menentukan jumlah pemain dan jumlah impostor sesuai keinginan sebelum permainan dimulai.
- **Pembagian Peran Cerdas:** Sistem akan mengacak kata dari database (*Word Bank*) sehingga Villager mendapatkan kata asli, dan Impostor mendapatkan clue pengganti.
- **Sistem Voting:** Halaman terdedikasi untuk melakukan pemilihan (voting) tersangka.
- **Riwayat Permainan:** Mencatat setiap pertandingan dan pemenang di riwayat pada halaman Dashboard pengguna.
- **Manajemen Profil & Riwayat:** Pengguna dapat memperbarui nama profil mereka dan menghapus catatan riwayat permainan tertentu.

## 🗄️ Tabel Database
Berikut merupakan tabel-tabel utama yang ada di sistem ini:
- **users**: Menyimpan data akun pengguna termasuk google_id untuk fitur OAuth.
- **word_banks**: Menyimpan pasangan kosa kata permainan. Berisi kolom kata_villager dan clue_impostor.
- **game_histories**: Mencatat rekam jejak permainan dengan kolom user_id (pembuat room) dan winner_role (Villager/Impostor).

## 🎮 Langkah-Langkah Bermain
1. **Login & Persiapan:** Buat akun atau masuk menggunakan Google, lalu masuk ke halaman *Setting Pemain* (Main Semeja).
2. **Atur Pemain:** Tentukan **Jumlah Pemain** (misal: 5 orang) dan **Jumlah Impostor** (misal: 1 orang) yang akan bermain.
3. **Buka Peran (Pass-and-Play):** Serahkan perangkat/HP secara bergantian ke masing-masing pemain untuk menekan tombol **Buka Peran**.
   - *Mayoritas (Villager)* akan melihat satu kata yang sama persis.
   - *Impostor* akan melihat kata (clue) yang menyerupai tetapi sedikit berbeda.
4. **Mulai Deskripsi:** Secara bergiliran, setiap pemain harus menyebutkan 1 kalimat singkat atau petunjuk yang mendeskripsikan kata yang mereka pegang tanpa menyebutkannya secara langsung.
5. **Diskusi & Tuduhan:** Setelah giliran selesai, para pemain berdiskusi, mencurigai siapa yang deskripsinya melenceng dari kata Villager.
6. **Voting:** Masuk ke halaman **Voting** dan pilih pemain yang kalian anggap sebagai Impostor.
7. **Penentuan Pemenang:** Jika pemain yang divote adalah Impostor, **Villager Menang**. Jika salah tebak/Impostor lolos, **Impostor yang Menang**. Hasil ini akan otomatis terekam di Dashboard.