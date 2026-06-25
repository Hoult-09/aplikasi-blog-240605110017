# Aplikasi Blog CMS - Tugas UAS Pemrograman Web

### Identitas Mahasiswa
* Nama Lengkap: Muhammad Raffi Fahlevi
* NIM: 240605110017
* Dosen Pengampu: A'la Syauqi, M.Kom.

---

### Deskripsi Singkat Aplikasi
Aplikasi ini merupakan Sistem Manajemen Blog (CMS) yang dikembangkan menggunakan arsitektur gabungan. Fitur administrator/CMS (Kelola Penulis, Artikel, dan Kategori) dibangun menggunakan Native PHP dengan request asynchronous (Fetch API). Sedangkan halaman publik/pengunjung dibangun menggunakan framework Laravel (MVC) untuk menampilkan artikel terbaru, penyaringan kategori, dan detail artikel secara dinamis dari database yang sama.

---

### Langkah-langkah Menjalankan Aplikasi Secara Lokal
1. Ekstrak proyek ke dalam folder server lokal (laragon/www/aplikasi-blog).
2. Pastikan database MySQL lokal aktif dan import file database db_blog.sql via HeidiSQL atau phpMyAdmin.
3. Salin file .env.example menjadi .env lalu sesuaikan konfigurasi database (DB_DATABASE=db_blog, DB_USERNAME=root, DB_PASSWORD=).
4. Buka terminal pada direktori proyek, lalu jalankan perintah: composer install
5. Buat application key baru dengan menjalankan perintah: php artisan key:generate
6. Bersihkan cache konfigurasi dengan perintah: php artisan config:clear
7. Akses halaman utama pengunjung melalui URL: http://localhost/aplikasi-blog/public/

---

### Tautan Video YouTube Demonstrasi
[Masukkan Link Video YouTube di Sini setelah Selesai Rekaman]
