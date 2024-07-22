<h1>FilamentPHP kullanılarak blog sitesi projenin kurulumu:</h1>
Not: Projeyi çalıştırabilmek için bilgisayarınızda <a href="https://www.docker.com/products/docker-desktop/">docker</a> ve <a href="https://getcomposer.org/">composer</a> bulunması gerekmektedir. İndimek için üstüne tıklayabilirsiniz. <br>

Projeyi istediğiniz yöntemle bilgisayaranıza yükleyin

blog-api klasörüne girin <br>
<code>docker-compose up -d -build</code> <br>
komudunu çalıştırın. Projeniz dockere kurulacaktır.

env dosyası için <br> <code>copy .env.example .env</code> <br> komutunu çalıştırın. Mail işlemleri içinde mail ayarlarınızı yapmayı unutmayın.

Proje ayağa kalktığı zaman filamentphp için admin kullanıcısı oluşturmak için <br>
<code> php artisan make:filament-user </code>
komudunu kullanın. Ve kullanıcı oluşturun. <br>
<code>php artisan shield:install </code> komutunu kullanın ve admin kullanıcısı oluşturun.

FilamentPHP'ye giriş yapın ve super_admin rolüne sahipsiniz. Projenin backend kısmına erişmiş oldunuz.

<hr><br>
<h1>Blog Sitesinin Frontend kısmı için </h1><br>
Projeyi indirin ve klasörün içine girin. <br>
<code>composer install</code> kodunu kullanın ve işlemin bitmesini bekleyin. <br>
<code>php artisan serve</code> yazdığınızda proje çalışacaktır.
