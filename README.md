# Sistem Informasi Akademik (SIAKAD)

## Deskripsi Aplikasi

Sistem Informasi Akademik (SIAKAD) merupakan aplikasi berbasis web yang dikembangkan menggunakan framework Laravel untuk membantu pengelolaan data akademik secara terstruktur dan efisien. Aplikasi ini menyediakan fitur manajemen data dosen, mahasiswa, mata kuliah, jadwal perkuliahan, serta Kartu Rencana Studi (KRS).

Sistem menerapkan konsep MVC (Model-View-Controller), Authentication, Middleware, Eloquent ORM, Migration, Seeder, dan Relationship Database untuk mendukung pengelolaan data yang terintegrasi.

---

## Akun Login

### Administrator

**Email:** [admin@gmail.com](mailto:admin@gmail.com)
**Password:** password

### Mahasiswa

**Email:** [mahasiswa@gmail.com](mailto:mahasiswa@gmail.com)
**Password:** password

---

## Repository GitHub

**URL Repository:**
https://github.com/irvanmuda2-ath/tubes-siakad-ifa2024-irvan-muda-athaya

---

## Fitur Utama

### 1. Autentikasi Pengguna

Sistem menyediakan fitur login untuk membatasi akses pengguna berdasarkan hak akses yang dimiliki.

### 2. Dashboard

Menampilkan informasi ringkas mengenai jumlah data dosen, mahasiswa, mata kuliah, jadwal perkuliahan, dan data KRS yang tersimpan dalam sistem.

### 3. Manajemen Data Dosen

Fitur untuk menambah, melihat, mengubah, dan menghapus data dosen.

### 4. Manajemen Data Mahasiswa

Fitur untuk mengelola data mahasiswa secara lengkap mulai dari penambahan hingga penghapusan data.

### 5. Manajemen Mata Kuliah

Digunakan untuk mengelola informasi mata kuliah seperti kode mata kuliah, nama mata kuliah, dan jumlah SKS.

### 6. Manajemen Jadwal Perkuliahan

Menyediakan pengelolaan jadwal kuliah berdasarkan mata kuliah, dosen pengampu, kelas, hari, dan jam perkuliahan.

### 7. Manajemen KRS

Memfasilitasi proses pengambilan mata kuliah oleh mahasiswa serta menampilkan daftar mata kuliah yang telah dipilih.

### 8. Logout

Digunakan untuk mengakhiri sesi pengguna dan keluar dari sistem secara aman.

---

## Teknologi yang Digunakan

* Laravel 12
* PHP
* MySQL
* Bootstrap 5
* Eloquent ORM
* Middleware
* Migration
* Seeder
* Git & GitHub

---

## Struktur Database

Aplikasi menggunakan beberapa tabel utama, yaitu:

* users
* dosens
* mahasiswas
* mata_kuliahs
* jadwals
* krs

Relasi antar tabel diterapkan menggunakan Eloquent Relationship untuk mempermudah pengelolaan data akademik.

---

## Tujuan Pengembangan

Aplikasi ini dikembangkan sebagai Tugas Besar Mata Kuliah Pemrograman Web Lanjut dengan tujuan mengimplementasikan konsep pengembangan aplikasi web menggunakan Laravel, manajemen basis data relasional, autentikasi pengguna, serta pengelolaan data akademik berbasis web.
