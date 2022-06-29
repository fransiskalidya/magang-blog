<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CMS Blog

CMS ini memiliki fitur-fitur antara lain:
1. Authentikasi untuk admin
    ![Screenshot basic UI](img/1.png)

    User yang telah berhasil login akan ditampilkan pada pojok kanan atas navbar
2. CRUD Post
    - Create :
        ![Screenshot basic UI](img/2.png)

        Berikut adalah fitur add post untuk memasukkan postingan kedalam database. Dalam inputan category diambil dari foreign key category
    - Read :
        ![Screenshot basic UI](img/3.png)
 
        Data yang sebelumnya diinputkan telah berhasil ditampilkan pada menu index post
    - Update :
        ![Screenshot basic UI](img/4.png)

        Diatas ini merupakan halaman edit post. Dalam hal ini saya akan mengganti gambar postingan dengan logo bootstrap. Berikut adalah hasil akhirnya

        ![Screenshot basic UI](img/5.png)

    - Delete :

        Sebelum dihapus
        ![Screenshot basic UI](img/6.png)
        sesudah dihapus
        ![Screenshot basic UI](img/7.png)
3. CRUD kategori
    ![Screenshot basic UI](img/8.png)

    Sama halnya dengan post, CRUD kategori juga telah diterapkan
4. Informasi User
    ![Screenshot basic UI](img/9.png)

    Pada halaman ini ditampilkan list dari user
