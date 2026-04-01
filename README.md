# Very Simple PHP Database

Proyek sederhana ini mendemonstrasikan cara menghubungkan aplikasi PHP ke database MySQL menggunakan ekstensi mysqli. Ini adalah contoh dasar untuk pemula yang ingin belajar interaksi database dengan PHP.

## Deskripsi

Proyek ini terdiri dari dua file utama:
- `db.php`: Mengatur koneksi ke database MySQL.
- `index.php`: Menjalankan query sederhana untuk mengambil data dari tabel `users` dan menampilkannya.

## Persyaratan

- PHP 7.0 atau versi lebih baru
- Server MySQL (seperti XAMPP, WAMP, atau server MySQL standalone)
- Web server (Apache/Nginx) untuk menjalankan file PHP

## Instalasi

1. **Clone atau download proyek ini** ke direktori web server Anda (misalnya, `htdocs` di XAMPP).

2. **Buat database MySQL**:
   - Buka phpMyAdmin atau klien MySQL lainnya.
   - Buat database baru (misalnya, `nama_database_anda`).
   - Buat tabel `users` dengan kolom minimal `email` (tipe VARCHAR).

3. **Konfigurasi koneksi database**:
   - Buka file `db.php`.
   - Edit variabel `$host`, `$username`, `$password`, dan `$dbname` sesuai dengan pengaturan MySQL Anda.

4. **Tambahkan data contoh** (opsional):
   - Masukkan beberapa data ke tabel `users` untuk testing.

## Penggunaan

1. Pastikan web server dan MySQL server sedang berjalan.
2. Akses `index.php` melalui browser (misalnya, `http://localhost/very-simple-php-database/index.php`).
3. Halaman akan menampilkan pesan koneksi berhasil dan daftar email dari tabel `users`.

## Struktur File

- `db.php`: File konfigurasi dan koneksi database.
  - Mengatur kredensial database.
  - Menangani error koneksi dengan aman.
  - Mengatur charset untuk menghindari masalah encoding.

- `index.php`: File utama yang menjalankan query.
  - Memuat koneksi dari `db.php`.
  - Menjalankan query SELECT sederhana.
  - Menampilkan hasil atau pesan error.

## Catatan Keamanan

- **Jangan gunakan di produksi**: Kode ini adalah contoh edukasi. Untuk aplikasi nyata, gunakan prepared statements untuk mencegah SQL injection.
- **Lindungi kredensial**: Jangan commit file dengan kredensial asli ke repository. Gunakan file `.env` atau variabel environment.
- **Error handling**: Dalam produksi, jangan tampilkan detail error ke pengguna.

## Lisensi

Proyek ini bersifat open-source dan dapat digunakan untuk tujuan pembelajaran.