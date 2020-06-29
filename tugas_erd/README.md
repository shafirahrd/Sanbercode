Aplikasi Web LaraHub
Description: 
Sebuah web portal bagi para developer yang menggunakan Laravel untuk menyimpan profil pribadi, forum tanya jawab dan forum lowongan project/ kerja. Di dalam aplikasi tersebut, user dapat membuat dan memperbaharui profil pribadi. Selain itu user dapat bertanya jawab mengenai hal-hal seputar Laravel.

Ketentuan Forum Tanya Jawab:

Setiap pertanyaan memiliki banyak jawaban dan terdapat jawaban yang dapat dipilih oleh pembuat pertanyaan sebagai jawaban paling tepat.
Setiap pertanyaan dan jawaban dapat memiliki komentar.
Setiap user dapat memberikan like dan dislike terhadap suatu pertanyaan atau jawaban.
Setiap pertanyaan dan jawaban memiliki jumlah vote yang dihitung dari jumlah like dikurangi dengan jumlah dislike.

Requirement
Data di profile mencakup : nama lengkap, alamat email, photo
Data di table pertanyaan: judul, isi, tanggal_dibuat, tanggal_diperbaharui.
Data di table jawaban: isi, tanggal_dibuat, tanggal_diperbaharui.
Data di table komentar: isi, tanggal_dibuat, pemberi_komentar_id
