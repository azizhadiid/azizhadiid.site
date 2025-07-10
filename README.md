# 🌐 Personal Website – [Aziz Alhadiid]

Ini adalah proyek **Personal Website** sederhana yang saya buat menggunakan **Laravel 12**, **Bootstrap 5**, dan **Brevo (Email API)**. Website ini berfungsi sebagai halaman profil pribadi, menampilkan informasi data diri, portofolio proyek, serta form kontak untuk komunikasi langsung melalui email.

## 🔧 Teknologi yang Digunakan

- **Laravel 12** – Framework PHP modern dan powerful
- **Bootstrap 5** – Library CSS untuk desain responsif dan elegan
- **Brevo (Email API)** – Layanan email transactional (SMTP/API)
- **Blade Template Engine** – Untuk tampilan frontend Laravel

## 📁 Fitur Utama

- ✅ Tampilan Data Diri (About Me)
- ✅ Halaman Portofolio Proyek
- ✅ Form Kontak Terhubung ke Email via Brevo API
- ✅ Desain responsif dan modern menggunakan Bootstrap
- ✅ Validasi form dan alert feedback (sukses/gagal)

## 🚀 Instalasi & Setup

```bash
# Clone repositori
git clone https://github.com/username/personal-website.git
cd personal-website

# Install dependensi
composer install

# Copy dan konfigurasi file .env
cp .env.example .env

# Generate key
php artisan key:generate

# Setup database (jika menggunakan)
php artisan migrate

# Konfigurasi Brevo (Email API)
# Tambahkan di file .env
MAIL_MAILER=smtp
MAIL_HOST=smtp-relay.brevo.com
MAIL_PORT=587
MAIL_USERNAME=your_brevo_email@example.com
MAIL_PASSWORD=your_brevo_smtp_key
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_brevo_email@example.com
MAIL_FROM_NAME="${APP_NAME}"

# Jalankan server lokal
php artisan serve
```

## 🖼️ Screenshot
![Homepage](/public/beranda.png)

## 📬 Kontak
Jika kamu tertarik untuk bekerja sama atau memiliki pertanyaan, silakan hubungi melalui form kontak di website ini atau email langsung ke azizalhadiid88@gmail.com.