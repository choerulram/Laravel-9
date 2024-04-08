# Belajar Dasar Laravel with Cara Fajar

Repository ini berisi contoh kode dan tutorial untuk mempelajari dasar-dasar pengembangan web dengan menggunakan framework Laravel, dibuat oleh Cara Fajar.

## Deskripsi
Repository ini berisi berbagai contoh kode dan tutorial yang dikembangkan oleh Cara Fajar untuk mempelajari dasar-dasar pengembangan web menggunakan framework Laravel. Materi yang dicakup meliputi:
- Pengenalan Laravel
- Routing
- Controller
- Views

## Instalasi
1. Clone repository ini: `git clone https://github.com/choerulram/Laravel-9.git`
2. Masuk ke direktori proyek: `cd Laravel-9`
3. Install dependencies: `composer install`
4. Salin file `.env.example` ke `.env` dan sesuaikan konfigurasi database Anda
5. Generate application key: `php artisan key:generate`
6. Jalankan migrasi database: `php artisan migrate`
7. Jalankan seeder (opsional): `php artisan db:seed`

## Import Database
Anda juga dapat mengimpor database dengan menggunakan file `laravel_belajar.sql` yang terdapat dalam repository ini. Langkah-langkahnya:
1. Buka manajemen database Anda (misalnya phpMyAdmin)
2. Buat database baru dengan nama `laravel_belajar`
3. Pilih database `laravel_belajar` dan lakukan import file `laravel_belajar.sql`

## Menjalankan Aplikasi
1. Start development server: `php artisan serve`
2. Buka browser dan akses `http://localhost:8000`

## Kontribusi
Anda dapat berkontribusi dengan melakukan pull request untuk perbaikan atau penambahan fitur.

## Lisensi
Repository ini dilisensikan di bawah [MIT License](LICENSE).
