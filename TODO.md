# TODO - Kuis PERTEMUAN 7 (Partner)

- [x]   1. Buat branch git: fitur-partner-24.12.3123
- [x]   2. Buat Model Partner (app/Models/Partner.php) dengan fillable: name, logo_url
- [x]   3. Buat migration `partners` (kolom: id, name, logo_url, timestamps)
- [x]   4. Jalankan `php artisan migrate`
- [x]   5. Buat seeder `PartnerSeeder` pakai Faker (min 5 data)
- [x]   6. Jalankan seeder: `php artisan db:seed --class=PartnerSeeder`
- [x]   7. Buat controller `PartnerController` (admin) untuk: index, store
- [x]   8. Daftarkan route GET `/admin/partners` dan route POST `/admin/partners`
- [x]   9. Buat view list: `resources/views/admin/partners/index.blade.php` (extends layouts.admin, foreach)
- [x]   10. Buat view form create: `resources/views/admin/partners/create.blade.php`
- [x]   11. Tambahkan mekanisme validasi & redirect pada store()
- [ ]   12. Test via browser: tampil list & submit form
- [x]   13. Git commit & push ke branch fitur-partner-24.12.3123
