<h1>FilamentPHP kullanılarak blog sitesi projenin kurulumu:</h1>

blog-api klasörüne girin <br>
<code>docker-compose up -d -build</code> <br>
komudunu çalıştırın.

Proje ayağa kalktığı zaman filamentphp için admin kullanıcısı oluşturmak için <br>
<code> php artisan make:filament-user </code>
komudunu kullanın. <br>

FilamentPHP'ye giriş yapın ve super_admin rolüne sahipsiniz. Projenin backend kısmına erişmiş oldunuz.

<hr>
<h1>Blog Sitesinin frontend kısmı için </h1><br>
composer update ondan sonra ise <br>
php artisan serve yazdığınızda proje çalışacaktır.
