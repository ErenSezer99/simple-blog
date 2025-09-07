# Laravel Blog Projesi

Bu proje basit bir blog uygulamasıdır. Kullanıcılar kayıt olabilir, giriş yapabilir, gönderi oluşturup gönderileri düzenleyebilir ve silebilirler.

## Özellikler
- Kullanıcı kayıt ve giriş sistemi
- Yeni gönderi oluşturma, düzenleme ve silme
- Gönderi detay sayfası
- Gönderi yazar bilgisinin görüntülenmesi
- Tailwind CSS ile basit tasarım

## Kullanılan Teknolojiler
- Laravel 12
- PHP 8.2
- Tailwind CSS
- SQLite

## Kurulum
1. Depoyu klonlayın:
   ```bash
   git clone https://github.com/kullaniciadi/proje-adi.git
   cd proje-adi

2. Gerekli bağımlılıkları yükleyin:
   composer install
   npm install && npm run build

3. .env dosyasını oluşturun:
   cp .env.example .env

4. Veritabanını ayarlayın (SQLite):
   touch database/database.sqlite
   php artisan migrate --seed

5. Sunucuyu başlatın:
   php artisan serve

6. Uygulamaya tarayıcıdan erişin:
   http://localhost:8000
   