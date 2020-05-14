Bagi yang ingin tutorial instalasi project ini silahkan cek https://youtu.be/XpGbmo3ZctE

Intruksi manual
Ketikkan:
1. Composer Install
2. cp .env.example .env
3. php artisan key:generate
4. php artisan migrate (Jangan lupa set up database)
5. php artisan db:seed

Bagi yang ingin kembangkan menjadi lebih baik maka saya akan kasih beberapa clue
1. Integrasikan semua page menggunakan meta dan belajar membuat site map
2. Integrasikan text editor menggunakan Laravel File Manager (Silahkan cek video terbaru saya untuk tutorialnya)
3. Belajar menggunakan ajax dan datatables (Cek video terbaru saya soal ajax datatables)
4. Tambahkan captcha untuk menghindari bot jahat pada halaman login (Jika sudah hosting)
5. Gunakan package laravel sluggable dan integarsikan menggunakan ajax agar slug tergenerate otomatis dan menjadi unik meski judul postingan sama
6. Tambahkan opsi publish dan unpublish
7. Belajar menggunakan package laravel intevention image untuk membagi ukuran gambar sesuai dengan dimensi yang dibutuhkan ketika ditampikan pada halaman depan / halam details blog / sidebar (Gunakan berbagai macam ukuran untuk meningkatkan perfoma)
8. Belajar menggunakan lazyload
9. Belajar menggunakan webpack untuk mengecilkan ukuran css
10. Belajar menggunakan laravel query cache agar untuk meningkatkan perfoma load data
11. Belajarlah mengintegrasikan blog ini dengan google analystic dan buat admin panelnya (banyak package soal ini di github)
12. Buatlah menu archieve post berdasarkan tahun
13. Belajar menambahkan iklan pada blog
14. Belajar mengembangkan landing page atau halaman home agar lebih menarik. Tampilkanlah featured Post. Postingan per kategori. Postingan terpanas dll pada sectionnya masing2 (Cluenya tinggal select where id_category == 'id_kategori' lalu lempar ke blade home trus tampikan)
15. Remove semua modules js dan css pada folder public yang tidak terpakai (Tapi terload karena pas tutorial saya mau cepet)
16. Jika udah Percaya Diri silahkan upload projectnya ke hosting masing-masing (Jangan lupa gunakan let's encript https untuk menghilangkan semua iklan atau hal yang gak perlu yg diinjek pada website kita)
17. Test Score website kalian menggunakan tool ini https://gtmetrix.com/
18. Semoga berhasil

Btw saya mungkin gak bisa cover semua hal diatas pada chanel saya.. tapi gak ada salahnya kan belajar mandiri?
Good luck.. Kamu bisa.. iya kamu.. !!
