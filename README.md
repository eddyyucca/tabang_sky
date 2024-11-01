# Cafe Tabang Sky Sales Application

Aplikasi Penjualan Cafe Tabang Sky adalah aplikasi berbasis web untuk mengelola transaksi penjualan di Cafe Tabang Sky. Aplikasi ini dirancang untuk mempermudah karyawan dalam melakukan pencatatan pesanan, pengelolaan menu, dan menghasilkan laporan penjualan secara terstruktur.

## Fitur Utama

- **Manajemen Menu**: Tambahkan, edit, dan hapus menu cafe sesuai dengan kebutuhan.
- **Pencatatan Pesanan**: Catat pesanan pelanggan secara cepat dan mudah, dengan pilihan menu yang dapat dipilih langsung.
- **Transaksi dan Pembayaran**: Kelola pembayaran dengan berbagai metode, termasuk tunai dan kartu, serta hitung total pesanan secara otomatis.
- **Laporan Penjualan**: Lihat laporan harian, mingguan, dan bulanan untuk membantu pemilik cafe dalam analisis penjualan.
- **Pengelolaan Stok**: Pantau stok bahan baku untuk memastikan ketersediaan bahan untuk setiap menu.
- **Notifikasi Stok Menipis**: Dapatkan notifikasi ketika stok bahan baku mulai menipis agar segera bisa diisi ulang.

## Teknologi yang Digunakan

- **Framework Backend**: CodeIgniter 3
- **Versi PHP**: PHP 8.3
- **Antarmuka Pengguna**: SB Admin 2 (Bootstrap 4)
- **Database**: MySQL

## Instalasi

1. **Clone repository ini**:
   ```bash
   git clone https://github.com/eddyyucca/tabang_sky.git
   ```
2. **Masuk ke direktori project**:
   ```bash
   cd tabang_sky
   ```
3. **Konfigurasi database**:

   - Buat database baru di MySQL.
   - Import file `cafe_tabang_sky.sql` untuk membuat tabel dan data awal.
   - Sesuaikan konfigurasi database di `application/config/database.php` sesuai dengan database Anda.

4. **Instalasi SB Admin 2**:

   - Pastikan asset SB Admin 2 sudah ada di dalam folder `public/assets` atau sesuai direktori yang Anda tentukan dalam `views`.
   - Sesuaikan tampilan dengan mengimpor tema SB Admin 2 di bagian `views`.

5. **Menjalankan Aplikasi**:
   - Jika menggunakan XAMPP atau LAMP, simpan folder project di `htdocs`.
   - Buka browser dan akses aplikasi melalui `http://localhost/tabang_sky`.

## Penggunaan

1. **Login** sebagai admin atau karyawan.
2. **Tambah Pesanan** dengan memilih item dari menu yang tersedia.
3. **Pembayaran** dilakukan sesuai metode yang dipilih.
4. **Lihat Laporan** untuk mengetahui detail penjualan sesuai periode yang diinginkan.

## Kontribusi

1. Fork repository ini.
2. Buat branch baru (`git checkout -b fitur-anda`).
3. Commit perubahan (`git commit -m 'Menambahkan fitur'`).
4. Push ke branch (`git push origin fitur-anda`).
5. Buat Pull Request.

## Lisensi

Aplikasi ini dilisensikan di bawah lisensi [MIT](LICENSE).
