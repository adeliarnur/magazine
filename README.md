# magazine
Frontend USER

## Aplikasi yang dibutuhkan untuk kontribusi
1. git bisa download di
   * http://git-scm.com/download/mac (untuk mac)
   * http://msysgit.github.io/       (untuk windows)
1. xampp

## Cara mendownload projek
1. buka windows explorer
1. buka C:\xampp\htdocs
1. klik kanan, lalu klik 'open Powershell here' atau 'open cmd here'
1. copy paste perintah berikut `git clone https://github.com/RHEFAR/magazine.git`
1. tunggu sampai download selesai

## Cara menjalankan/melihat proyek
1. jalankan xampp, start apache
1. buka browser, ketik localhost/magazine

## Cara menjalankan database
1. buka folder "Database"
1. download file "psi.sql"
1. lalu import di phpmyadmin dengan nama database "psi"

## Cara mengupdate proyek di github setelah melakukan perubahan di komputer pribadi
1. buka windows explorer
1. buka C:\xampp\htdocs
1. klik kanan, lalu klik 'open Powershell here' atau 'open cmd here'
1. copy paste perintah berikut `git status`
1. kemudian, `git pull origin master`
1. kemudian, `git add .`
1. kemudian, `git commit -m "pesan keterangan perubahan yang dilakukan (bebas)"`
1. copy paste perintah berikut `git status`
1. kemudian, `git push origin master`
