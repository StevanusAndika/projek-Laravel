<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## # Sistem Informasi Perpustakaan Berbasis Web Menggunakan Laravel

## Deskripsi Proyek
Proyek ini adalah implementasi sistem informasi perpustakaan berbasis web menggunakan framework Laravel. Sistem ini memiliki dua jenis hak akses pengguna, yaitu admin dan penyewa. Berikut adalah beberapa fitur dan aturan dalam sistem:

### Hak Akses Pengguna
1. Admin dan penyewa adalah dua jenis hak akses pengguna dalam sistem.

### Kategori Buku
2. Setiap buku dapat memiliki beberapa kategori yang berbeda.

### Jumlah Buku
3. Satu buku dapat memiliki jumlah lebih dari satu, dengan perbedaan diidentifikasi oleh kode buku.

### Tampilan List Buku
4. List buku dapat dilihat tanpa perlu melakukan login.

### Pencarian Buku
5. Pengguna dapat melakukan pencarian buku berdasarkan judul atau kategori.

### Peminjaman Buku
6. Untuk meminjam buku, pengguna harus membuat akun sebagai penyewa.

### Registrasi Penyewa
7. Pengunjung dapat mendaftar sebagai penyewa, tetapi akun harus diapprove oleh admin melalui validasi manual.

### Tugas Admin
8. Admin memiliki tugas untuk menambahkan data buku dan mengassign kategori ke buku.

### Batasan Penyewa
9. Penyewa hanya dapat meminjam/menyewa maksimal 3 buku.

### Waktu Peminjaman
10. Waktu peminjaman maksimal adalah 7 hari.

### List Buku yang Sedang Dipinjam
11. Admin dapat melihat list buku yang sedang dipinjam.

### Denda Keterlambatan Pengembalian
12. Admin dapat melihat penyewa yang terkena denda apabila buku belum dikembalikan dalam waktu lebih dari 7 hari.

### Log Peminjaman
13. Admin memiliki akses untuk melihat log peminjaman buku.

## Cara instalasi/penggunaan :
1. **Instalasi Laravel:**
   Pastikan Anda sudah menginstal Laravel. Jika belum, gunakan perintah berikut di terminal:
   ```bash
   composer create-project --prefer-dist laravel/laravel nama-proyek-perpustakaan
   ```

2. **Instalasi Debugbar:**
   Install Debugbar dengan menggunakan Composer:
   ```bash
   composer require barryvdh/laravel-debugbar --dev
   ```
   Kemudian, sesuaikan konfigurasi di file `config/app.php`:
   ```php
   'providers' => [
       // ...
       Barryvdh\Debugbar\ServiceProvider::class,
   ],
   'aliases' => [
       // ...
       'Debugbar' => Barryvdh\Debugbar\Facade::class,
   ],
   ```
   Ikuti petunjuk konfigurasi di [Medium](https://adinata-id.medium.com/cara-mudah-debug-aplikasi-laravel-dengan-laravel-debugbar-db0fdac5c8dd).

3. **Instalasi Select2:**
   Tambahkan link CDN Select2 di file layout atau template Anda:
   ```html
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   ```
   Lalu, ikuti petunjuk instalasi dari [Select2 Documentation](https://select2.org/getting-started/installation).

4. **Instalasi Bootstrap 5:**
   Tambahkan link CDN Bootstrap di file layout atau template Anda:
   ```html
   <!-- CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

   <!-- JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   ```
   cara penggunaan dan komponen Bootstrap dari [Dokumentasi Bootstrap](https://getbootstrap.com/docs/5.3/getting-started/introduction/).

5. **XAMPP:**
   Unduh dan instal XAMPP dari [situs resmi](https://www.apachefriends.org/download.html). Pastikan sudah menyertakan PHP 8.2.4 dan MySQL.

6. **Desain Tampilan Web:**
   Desain tampilan web sesuai kebutuhan sistem informasi perpustakaan. Gunakan Blade templates pada Laravel untuk mempermudah pengelolaan tampilan.

7. **Pengembangan Fungsionalitas:**
   Tambahkan logika dan fungsionalitas yang diperlukan seperti manajemen buku, peminjaman, pengembalian, dan pencarian.

Pastikan untuk menjalankan migrasi dan menyesuaikan model dan controller sesuai kebutuhan aplikasi perpustakaan. Juga, pertimbangkan keamanan dengan melarang akses tanpa otentikasi untuk beberapa bagian sistem.
