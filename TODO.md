# TODO - Kuis PERTEMUAN 7 (Partner)

- [ ]   1. Buat branch git: fitur-partner-24.12.3123
- [ ]   2. Buat Model Partner (app/Models/Partner.php) dengan fillable: name, logo_url
- [ ]   3. Buat migration `partners` (kolom: id, name, logo_url, timestamps)
- [ ]   4. Jalankan `php artisan migrate`
- [ ]   5. Buat seeder `PartnerSeeder` pakai Faker (min 5 data)
- [ ]   6. Jalankan seeder: `php artisan db:seed --class=PartnerSeeder`
- [ ]   7. Buat controller `PartnerController` (admin) untuk: index, store
- [ ]   8. Daftarkan route GET `/admin/partners` dan route POST `/admin/partners`
- [ ]   9. Buat view list: `resources/views/admin/partners/index.blade.php` (extends layouts.admin, foreach)
- [ ]   10. Buat view form create: `resources/views/admin/partners/create.blade.php`
- [ ]   11. Tambahkan mekanisme validasi & redirect pada store()
- [ ]   12. Test via browser: tampil list & submit form
- [ ]   13. Git commit & push ke branch fitur-partner-24.12.3123
