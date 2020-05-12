Ini adalah link source code dari tutorial https://www.youtube.com/playlist?list=PLx4zY98IACXhYdrurFvLT1fhTvaEysoSt

Clone Project ini setelah selesai pada terminal masuk kedalam directory project

Ketikkan:
1. Composer Install
2. cp .env.example .env
3. php artisan key:generate
4. php artisan migrate (Jangan lupa set up database)
5. php artisan db:seed

Jika ada masalah ketika menjalankan project ini (Note project ini tidak bisa dijanlankan menggunakan php artisan serve krn bakalan kacau linknya) (Silahkan cek video part 1 dan 2 kenapa hal ini bisa terjadi)
1. Project ini sengaja merubah server.php menjadi index.php agar project dapat dijalankan langsung tanpa perlu pergi ke folder public
2. Karena hal itu maka url pada asset yang sebelumnya asset('/gambar') menjadi asset('/public/gambar')
3. Jika ingin mengembalikan ke normal ubah index.php menjadi server.php kemudian ubah semua url asset menjadi kebalikan dari nomor 2. Lalu jalankan php artisan serve (cek part 2)
