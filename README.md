<h2>My Bimbel</h2>

Website daftar-daftar jenis kursus

<h2 id="fitur">🧐 Fitur apa saja yang ada di website bimbel ini?</h2>

-   [Dashboard Admin Sufee](https://github.com/puikinsh/sufee-admin-dashboard)
    -   Dashboard UI
-   Landing Page
    -   Halaman Home
    -   Data Jenjang
    -   Data Program

<h2 id="installation">💻 Instalasi</h2>

1. Clone repository

```bash
git clone https://github.com/muhamadrizkihasan/myBimbel
cd myBimbel
composer install
cp .env.example .env
```

2. Konfigurasi database melalui file `.env`

```conf
DB_DATABASE=db_bimbel
```

3. Migrasi and symlink

```bash
php artisan key:generate
php artisan storage:link
php artisan migrate
```

4. Jalankan website

```bash
php artisan serve
```