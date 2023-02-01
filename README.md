### Nama          : Thoriq Achmad Ramadhan 
### Universitas   : Universitas Brawijaya
### Asal          : Kota Malang

# Website Sistem Pengelolaan Data Mahasiswa
Dibuat menggunakan Laravel & MySQL

https://github.com/EdwanNidzar/magang/issues/1#issue-1565495038

## Fitur
### 1. Menambah Data Mahasiswa
![fitur1](https://user-images.githubusercontent.com/95998981/212691615-de3be5c0-d5a3-482f-9f0d-3664b8cedd35.png)
![fitur1 2](https://user-images.githubusercontent.com/95998981/212691771-c0a000fa-0047-4990-9869-631e6b327dde.png)
Fitur ini digunakan untuk menambahkan data baru Mahasiswa. Fitur ini dapat digunakan dengan menekan tombol "+ Tambah Mahasiswa", kemudian isi seluruh field yang ada sesuai dengan data mahasiswa yang ingin ditambahkan. Pastikan seluruh data sudah terisi dengan benar, kemudian tekan tombol "SIMPAN" untuk menambahkan data baru. Terdapat tombol "back" untuk kembali ke menu utama.

### 2. Mengedit Data Mahasiswa
![fitur2](https://user-images.githubusercontent.com/95998981/212692317-151b66ce-e609-4f44-bd33-564c138a6814.png)
![fitur2 1](https://user-images.githubusercontent.com/95998981/212692346-3d466c0d-b8df-45d2-a28a-66719e497d75.png)
Fitur ini digunakan untuk memperbarui data Mahasiswa. Fitur ini dapat digunakan dengan menekan tombol "Update" pada data Mahasiswa yang ingin diubah. Isi field yang ingin diubah sesuai dengan kebutuhan. Pastikan seluruh data baru sudah terisi dengan benar, kemudian tekan tombol "SIMPAN" untuk mengubah data Mahasiswa. Terdapat tombol "back" untuk kembali ke menu utama.

### 3. Menghapus Data Mahasiswa
![fitur3](https://user-images.githubusercontent.com/95998981/212692407-2ffbf45c-d70d-463f-94be-6bb8ad0b334e.png)
Fitur ini digunakan untuk menghapus data Mahasiswa. Pilih data Mahasiswa yang ingin dihapus, kemudian tekan tombol "Delete" untuk menghapus. 

### 4. Cari Data Mahasiswa
![fitur4](https://user-images.githubusercontent.com/95998981/212692469-3c5a1294-b3c5-4356-9bac-8ec3aa618feb.png)
Fitur ini digunakan untuk mencari data mahasiswa berdasarkan nama atau prodi. Akses fitur ini dengan menekan dan mengisi field yang ada di atas dengan keterangan "Cari Nama Mahasiswa atau Prodi". Setelah mengisi field sesuai dengan data yang ingin dicari tekan tombol "Cari" untuk mencari data Mahasiswa.

### 5. Mengurutkan Data Mahasiswa
![fitur5](https://user-images.githubusercontent.com/95998981/212692520-1b1f3f7f-1e25-47dd-804b-19b5772d55d5.png)
![fitur5 2](https://user-images.githubusercontent.com/95998981/212692733-0e18e89e-683b-40cb-a857-2971145fdfe6.png)
Fitur ini digunakan untuk mengurutkan data mahasiswa berdasarkan kolom tertentu. Akses fitur ini dengan menekan header tabel sesuai dengan kolom yang ingin diurutkan. Pengurutan dapat dilakukan secara menaik(ascending) atau menurun(descending). Contoh di atas diurutkan berdasarkan Semester.

## Proses Instalasi
nb: Lakukan perintah di dalam tanda petik dua("") tanpa memasukkan tanda petiknya.

- Buka folder di file manager kemudian buka terminal. 
- Tuliskan syntax "git clone https://github.com/puskipus/sistem-pengelolaan-data-mahasiswa.git", tunggu proses cloning selesai. 
- Buka file di text editor. 
- Buka file .env dan ubah konfigurasi sesuai database Anda. Pastikan sebelumnya sudah membuat database terlebih dahulu.
- Lakukan migrasi database dengan syntax "php artisan migrate", tunggu proses selesai.
- Jalankan laravel dengan syntax "php artisan serve", buka url hasil run di browser.
