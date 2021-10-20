<?= $this->extend('/blog') ?>

<?= $this->section('content') ?>
    <p>Dengan gaji rata rata sebesar <em>IDR 90.000.000</em> per tahun di Indonesia, PHP merupakan salah satu bahasa pemrograman paling populer di komunitas para developer. PHP merupakan bahasa dibalik CMS paling terkenal, yakni <i>Wordpress</i> yang telah digunakan 79% dari seluruh website di dunia, termasuk salah satu <i>social media</i> yang digunakan terbanyak, <a href='https://facebook.com' rel="nofollow">Facebook</a>, dan ensiklopedia terbesar di seluruh dunia, <a href='https://wikipedia.com' rel='nofollow'>Wikipedia</a>.
    <p>Hari ini, kita memiliki beberapa framework PHP berperforma tinggi, seperti Laravel, CodeIgniter, CakePHP, dan lain lain. Framework - framework ini menyediakan <i>library</i> dan fungsi API untuk mempercepat proses <i>development</i> secara aman.</p>
    <p>Namun, di balik kesuksesan PHP merubah muka dari pengembangan website di dunia, beberapa orang menyebut bahwa <quote>PHP is a dead language</quote>. Faktanya adalah pada survei yang dilakukan beberapa saat lalu, 62% sampel mengatakan bahwa PHP merupakan bahasa yang ditakuti, dan 3% ingin untuk mempelajari PHP. Namun trend pencarian di Google dengan kata kunci "PHP" dan "JavaScript" berkata lain ( berdasarkan Google Trends pada waktu penulisan ), menunjukan bahwa PHP bukan bahasa yang akan mati dalam waktu dekat. Dengan itu, maka coba kita simak 5 framework PHP terbaik yang tersedia saat ini.</p>

    <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/2674_RC03/embed_loader.js"></script> <script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"php","geo":"","time":"2020-10-01 2021-10-01"},{"keyword":"javascript","geo":"","time":"2020-10-01 2021-10-01"}],"category":0,"property":""}, {"exploreQuery":"q=php,javascript&date=today 12-m,today 12-m","guestPath":"https://trends.google.co.id:443/trends/embed/"}); </script>

    <h2 class='mt-5'>1. Laravel</h2>
    <figure>
        <img src="<?= base_url('assets/blogContent/Laravel.png') ?>" class='w-100' alt='Laravel Banner'>
        <figcaption>Laravel logo</figcaption>
    </figure>
    <p>Laravel adalah salah satu framework PHP paling populer untuk development web dengan lebih dari 64 ribu bintang di GitHub. Walaupun berada pada urutan ke 7 pada daftar framework PHP performa tertinggi, Laravel tetap menjadi nomor 1 dalam daftar kami, karena komunitasnya yang sangat besar, fitur yang lengkap, dan kemudahan untuk digunakan.</p>
    <p><strong>Alasan penggunaan Laravel</strong></p>
    <ul>
        <li>
            <h3 class='h5'>Open Source, Komunitas Besar, dan Dokumentasi Ekstensif</h3>
            <p>Laravel adalah sebuah framework web development yang bersifat open source dan gratis. Laravel pun menerima support yang sangat baik dan inspiratif dari komunitas developer PHP, sehingga Laravel selalu bergerak secara kreatif dan inovatif. Sejak peluncurannya di tahun 2011 hingga sekarang, telah ada 20 rilis yang bersifat mayor, dengan Laravel 8 merupakan versi terbaru yang stabil. Komunitas Laravel pun menyedian versi - versi LTS. Laravel 6.0 LTS saat ini masih dalam support dan versi di bawah itu sudah tidak lagi menerima support dan <i>maintainance</i> ( <i>end of service</i> ).
        </li>
        <li>
            <h3 class='h5'>Performa, Keamanan, dan Skalabilitas Tinggi</h3>
            <p>Anda dapat secara aman mengembangkan aplikasi dengan framework Laravel menggunakan aristektur MVC. Dengan menggunakan OOP ( Object oriented programming ) dan pendekatan functional programming, anda dapat mengembangkan basis-kode yang sangat modular untuk aplikasi anda. Aristektur yang modular dan tersegmentasi membuat Laravel menjadi sangat <i>extensible</i> yang berarti developer Laravel dapat memanfaatkan <i>first-party package</i> yang siap digunakan seperti Envoy, Passport, Horizon, Cashier, dan Fortify. Hal ini pun dapat mengiritkan waktu pengembangan dan produk baru dapat hadir dengan lebih cepat. Fitur autentikasi built-in pun dapat memanfaatkan penyimpanan data yang terenkripsi untuk keamanan lebih tinggi. Performa pun dapat ditingkatkan secara signifikan dengan menggunakan sesi dan <i>cached</i> memory, mengoptimalkan proses koleksi sampah yang berarti meningkatkan eksekusi task.</p>
        </li>
    </ul>
    <p><strong>Siapa yang menggunakan Laravel untuk pengembangan aplikasi web mereka?</strong></p>
    <ul>
        <li>Mastercard</li>
        <li>Razorpay</li>
        <li>OLX</li>
        <li>Wattpad</li>
        <li>TransferGo</li>
        <li>9Gag</li>
        <li>Lebih dari 3.000 perusahaan lain</li>
    </ul>

    <h2 class='mt-5'>2. Codeigniter</h2>
    <figure>
        <img src="<?= base_url('assets/blogContent/CodeIgniter.png') ?>" class='w-100' alt='Codeigniter Banner'>
        <figcaption>Codeigniter logo</figcaption>
    </figure>
    <p>Codeigniter adalah sebuah framework aplikasi web dengan ukuran yang sangat kecil. CodeIgniter 4, versi terakhir dari CodeIgniter, sekarang hanya berukuran 1.2MB. Seperti Laravel, framework ini open source dan memiliki lebih dari 18 ribu bintang pada GitHub. Seperti layaknya framework lain, CodeIgniter menyediakan library dan interface yang intuitif untuk meningkatkan web development PHP. Saat ini CodeIgniter tidak terdapat pada daftar <a href='https://phpbenchmarks.com' rel='nofollow'>PHP Benchmarks</a>, namun dikonsidersasi sebagai salah satu framework PHP terbaik.</p>
    
    <p><strong>Apa saja fitur dari CodeIgniter?</strong></p>
    <ul>
        <li>Persyaratan Server
            <ul>
                <li>Framework CodeIgniter versi 4 memerlukan PHP versi 7.2 atau lebih</li>
                <li>Dapat menggunakan MySQL, PostgreSQL, SQLite 3</li>
            </ul>
        </li>
        <li>
            Dapat dimulai dengan mudah. Anda dapat langsung mengunduh CodeIgniter atau menggunakan <i>composer</i> untuk meng-installnya. Bayangkan seperti "create-react-app" dari CodeIgniter - PHP. Apa yang perlu anda lakukan adalah:
            <code>composer create-project codeigniter4/appstarter project-root</code>
        </li>
        <li>
            Aplikasi CodeIgniter dapat dibangun menggunakan aristektur MVC dan mengikuti pola OOP.
        </li>
        <li>
            CodeIgniter menyediakan kelas untuk FTP, manipulasi gambar, mengirimkan email, <i>unit-testing</i>, keamanan, enkripsi, tipografi, <i>pagination</i>, validasi form, dan lain lain.
        </li>
    </ul>

    <p><strong>Siapa yang menggunakan CodeIgniter untuk pengembangan aplikasi web mereka?</strong></p>
    <ul>
        <li>Sprout Social</li>
        <li>Buffer</li>
        <li>Grindr</li>
        <li>3M</li>
        <li>Geekyants</li>
        <li>Accenture</li>
        <li>Lebih dari 1.700 perusahaan lain</li>
    </ul>

    <h2 class='mt-5'>3. Yii</h2>
    <figure>
        <img src="<?= base_url('assets/blogContent/Yii.png') ?>" class='w-100' alt='Yii Banner'>
        <figcaption>Yii logo</figcaption>
    </figure>
    <p>Framework Yii memiliki lebih dari 11 juta pengunduhan dari Packagist dan lebih dari 13.6 ribu bintang pada GitHub. Yii, diiklankan dengan "Yes it is!", adalah framework PHP yang cepat, aman, dan fleksibel, terutama untuk membuat website dengan arsitektur MVC. Yii memiliki peringkat 4 pada daftar PHP Benchmarks. Yii merupakan framework PHP yang secara ketat menerapkan OOP, dan membutuhkan pengetahuan dari <i>inheritance</i>, <i>polymorphism</i>, dan lain lain.</p>
    <p><strong>Apa saja fitur dari Yii?</strong></p>
    <ul>
        <li>
            <h3 class='h5'>Dokumentasi Lengkap</h3>
            <p>Dimulai dari instalasi hingga menjelaskan konsep web untuk deploy aplikasi dan semua di antara kedua poin tersebut didokumentasikan secara lengkap oleh Yii.</p>
        </li>
        <li>
            <h3 class='h5'>Komponen Cache yang Kuat</h3>
            <p>Dari <i>caching</i> pada server hingga <i>caching</i> pada browser klien, Yii memiliki panduan mudah untuk mengimplementasikan metode - metode <i>caching</i> yang berbeda beda seperti <i>data caching</i>, <i>fragment caching</i>, <i>page caching</i>, <i>query caching</i>, <i>HTTP caching</i>, dan lain lain contohnya.
        </li>
        <li>
            <h3 class='h5'>Fitur Keamanan</h3>
            <p>Yii menyediakan framework dan panduan untuk melakukan implementasi autentikasi, autorisasi, fitur cyptografis, menangani kata sandi, <i>trusted proxies</i>, dan <i>header</i>.
        </li>
    </ul>

    <p><strong>Siapa yang menggunakan Yii untuk pengembangan aplikasi web mereka?</strong></p>
    <ul>
        <li>Deloitte</li>
        <li>Fujitsu</li>
        <li>Lenovo</li>
        <li>Discovery</li>
        <li>Lulo</li>
        <li>Utrip</li>
    </ul>

    <h2 class='mt-5'>4. CakePHP</h2>
    <figure>
        <img src="<?= base_url('assets/blogContent/CakePHP.png') ?>" class='w-100' alt='CakePHP Banner'>
        <figcaption>CakePHP logo</figcaption>
    </figure>
    <p>CakePHP adalah sebuah framework PHP yang bersifat open-source. CakePHP memiliki peringkat 6 pada PHP Benchmarks, di atas framework Laravel. Versi 4.0 yang baru saja dirilis dengan desain rangka yang telah direnovasi menyediakan beragam API untuk memungkinkan para developer untuk mengembangkan aplikasi PHP dengan cepat. Di GitHub, 8.3 ribu bintang telah diperoleh dan telah dikolaborasikan oleh 555 kontributor. Anda dapat membangun aplikasi web dengan tingkat keamanan dan skalabilitas tinggi, termasuk jaringan sosial, ataupun e-commerce.</p>
    <p><strong>Apa saja fitur dari CakePHP?</strong></p>
    <ul>
        <li>Menerapkan aristektur MVC</li>
        <li>Mendukung penerapan pola desain seperti Associative Data Mapping, Front Controller, dan lain lain</li>
        <li>Anda dapat memanfaatkan fitur generator kode dan <i>scaffolding</i> untuk pengembangan prototype yang lebih cepat.</li>
        <li>Konfigurasi yang minimal, tanpa membutuhkan file YAML ataupun XML.</li>
        <li>Seperti framework lain yang disebutkan sebelumnya, CakePHP pun memiliki caching, autentikasi, validasi, <i>internationalization</i>, dan fitur API untuk database.</li>

        Like many other web development frameworks in this list, the CakePHP web development framework also gets shipped with all batteries included. You have ready-to-use Caching, authentication, validation, internationalization, database APIs features.
    </ul>
    <p><strong>Siapa yang menggunakan CakePHP untuk pengembangan aplikasi web mereka?</strong></p>
    <ul>
        <li>Hyundai</li>
        <li>BMW</li>
        <li>Billabong</li>
        <li>InSync Solutions</li>
        <li>Citizens Inc</li>
    </ul>

    <h2 class='mt-5'>5. Slim</h2>
    <figure>
        <img src="<?= base_url('assets/blogContent/SlimPHP.png') ?>" class='w-100' alt='Slim Banner'>
        <figcaption>Slim logo</figcaption>
    </figure>
    <p>Tidak seperti framework lain yang disebutkan sebelumnya, Slim, seperti namanya, merupakan micro-framework PHP yang digunakan untuk web development. Apakah anda familiar dengan micro-framework? Seluruh framework yang disebutkan di atas merupakan framework full-stack. Slim, dengan lebih dari 10 ribu bintang pada GitHub, adalah framework aplikasi web yang minimalis dan pengembangan API. Secara sederhana, hal ini berarti anda hanya akan memperoleh resep dan tidak akan memperoleh fungsi yang siap untuk digunakan. Dalam framework full-satck, anda akan memperoleh komponen, interface, kelas untuk autorisasi, autentikasi, <i>routing</i> dan lain lain, namun pada micro-framework, anda akan memperoleh dukungan yang minimal untuk <i>HTTP request</i> dan <i>routing request</i> hingga <i>controller</i> yang sesuai. Lalu mengapa anda perlu bahkan untuk konsiderasi penggunakan micro-framework? Karena hal tersebut memberikan fleksibilitas dan ekstensibilitas tinggi.</p>
    <p><strong>Apa saja fitur dari Slim?</strong></p>
    <ul>
        <li>
            <h3 class='h5'>Router yang efisien dan cepat</h3>
            <p>Slim dibuat dengan router yang sangat kuat. Slim memetakan rute ke metode <i>hadler</i> request HTTP dan Url. Rute secara dasar mendukung perbedaan tipe URL, termasuk dengan parameter dan pola tertentu. URL dengan dasar pola umumnya diemplementasikan pada aplikasi e-commerce.</p>
        </li>
        <li>
            <h3 class='h5'>PSR-7 Support</h3>
            <p>Sangat penting untuk mengimplementasikan PSR-7 pada proyek Slim anda</p>
        </li>
    </ul>

    <p><strong>Siapa yang menggunakan Slim untuk pengembangan aplikasi web mereka?</strong></p>
    <ul>
        <li>AgriTask</li>
        <li>GreenBot</li>
        <li>Bootiq</li>
        <li>Gamned</li>
    </ul>

    <p class='mt-5'>Masih ada banyak framework PHP yang populer seperti PHPixie, Ubiquity. Apabila anda mencoba untuk mengeksplor dunia web development, konsiderasikan beberapa pilihan kami yang kami sebutkan di atas. Apabila anda sudah merupakan seorang programmer PHP, pilihlah framework PHP apapun yang cocok dengan kebutuhan anda. Selamat mencoba framework PHP rekomendasi kami.</p>

<?= $this->endSection() ?>

<?= $this->section('share') ?>
    <ul class='socialMediaUl'>
    <li><button  class='facebookButton' data-layout="button_count" data-size="large"><a target="_blank" class="fb-xfbml-parse-ignore"><img src='<?= base_url() ?>/assets/img/facebook.png' width='50' height='50' alt='Share Facebook icon'></a></button></li>
        <li><button class='twitterButton'><a target='_blank'><img src='<?= base_url() ?>/assets/img/twitter.png' width='50' height='50' alt='Share Twitter icon'></a></button></li>
        <li><button class='clipboard'><img src='<?= base_url() ?>/assets/img/copyLink.png' width='50' height='50' alt='Copy to clipboard icon'></button></li>
    </ul>
<?= $this->endSection() ?>

<?= $this->section('bottomShare') ?>
<ul class='socialMediaUl'>
    <li><button  class='facebookButton' data-layout="button_count" data-size="large"><a target="_blank" class="fb-xfbml-parse-ignore"><img src='<?= base_url() ?>/assets/img/facebook.png' width='50' height='50' alt='Share Facebook icon'></a></button></li>
        <li><button class='twitterButton'><a target='_blank'><img src='<?= base_url() ?>/assets/img/twitter.png' width='50' height='50' alt='Share Twitter icon'></a></button></li>
        <li><button class='clipboard'><img src='<?= base_url() ?>/assets/img/copyLink.png' width='50' height='50' alt='Copy to clipboard icon'></button></li>
    </ul>
    <script>
        $(".facebookButton").attr('data-href', `<?= base_url() ?>/Blogs/${"<?= $header['title'] ?>".toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'')}`);
        $('.facebookButton > a').attr('href', `https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fxunny.id%2FBlogs%2F${"<?= $header['title'] ?>".toLocaleLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'')}&amp;src=sdkpreparse`)
        $('.twitterButton > a').attr('href', `https://twitter.com/share?url="${encodeURIComponent(document.URL)}`);
        $('.linkedInButton > a').attr('href', `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(document.URL)}`);
        var $temp = $("<input>");
        var $url = $(location).attr('href');
            $('.clipboard').on('click', function() {
            $("body").append($temp);
            $temp.val($url).select();
            document.execCommand("copy");
            $temp.remove();
        })
    </script>
<?= $this->endSection() ?>