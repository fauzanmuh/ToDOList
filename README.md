<h1 align="center">Selamat datang di repository ToDOList! 👋🏻</h1>

![collegetivity-preview](https://user-images.githubusercontent.com/46257169/171705042-12da6cff-6118-45f9-9349-04d9704ca12a.png)

<p></p>

<h4 align="center">Website yang menyediakan workspace bagi para mahasiswa  yang dibuat dengan <a href="https://laravel.com/" target="_blank">Laravel</a>.
</h4>

<h2 id="tentang">🎓 Tentang ToDOList</h2>

Website ini berperan sebagai workspace yang ditujukan bagi para mahasiswa untuk menjadi lebih produktif dan terorganisir. Mempunyai banak fitur seperti mengorganisir jadwal, tugas, to-do list dan banyak lagi.

<p></p>

<h2 id="fitur">✨ Fitur Tersedia</h2>

- Landing Page dan Autentikasi
  - Halaman [homepage, tentang, fitur, kontak]
  - Autentikasi [daftar dan login]
- Pengelolaan Data Akademik
  - Jadwal Pelajaran atau Jadwal Mata Kuliah
  - Tulisan dan Catatan Pembelajaran
  - Galeri serta File Manager
- Fitur Utility
  - To-do List
  - Kalender
  - Bookmark
- Fitur Penunjang Produktifitas
  - Whiteboard
  - Audio Relaxation
  - Pomodoro Timer
  - Virtual Meeting
- Resources
  - Journal
  - E-Book

<p></p>

<h2 id="download">Panduan Menjalankan & Install Aplikasi</h2>

Untuk menjalankan aplikasi atau web ini kamu harus install XAMPP atau web server lain dan mempunyai setidaknya satu web browser yang terinstall di komputer anda.

```bash
# Clone repository ini atau download di
$ git clone https://github.com/fauzanmuh/ToDOList.git

# Kemudian jalankan command composer install, ini akan menginstall resources yang laravel butuhkan
$ composer install

# Lakukan copy .env dengan cara ketik command seperti dibawah 
$ cp .env.example .env

# Generate key juga jangan lupa dengan command dibawah
$ php artisan key:generate

# Jangan lupa migrate database dengan cara membuat database di phpmyadmin atau aplikasi lainnya yang kalian pakai,
# lalu jangan lupa untuk mengganti variable DB_DATABASE di file .env yang di folder project
$ php artisan migrate

# Lalu jalankan aplikasi kalian dengan command dibawah
$ php artisan serve

# Selamat aplikasi dapat anda nikmati di local!
```
