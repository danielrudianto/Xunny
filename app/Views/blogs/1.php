<?= $this->extend('/blog') ?>

<?= $this->section('content') ?>
    <p>Pernahkah anda terbesit pertanyaan, mengapa banyak perusahaan atau industri di luar sana yang menggunakan website? Website digunakan sebagai wadah informasi dari sebuah perusahaan atau industri yang dapat diakses oleh orang luar. Website umumnya digunakan oleh calon pelanggan atau pelanggan untuk mencari informasi mengenai sebuah perusahaan. Dengan memiliki sebuah website, perusahaan dapat terlihat lebih professional dan berkredibilitas.</p>
    <p>Namun seiring perkembangan teknologi, perangkat perangkat lain seperti <i>Handphone</i>, tablet, bahkan televisi saat ini dapat mengakses website website tersebut, website yang semula tampak bagus, menjadi tidak enak dipandang karena semisal gambar menjadi tidak proposional dengan ukuran perangkat yang digunakan.</p>
    <p><i>Responsive website</i> / <i>web app</i> merupakan suatu konsep bagi para developer, khususnya front-end developer untuk melakukan desain yang dapat menyesuaikan dengan ukuran layar perangkat yang digunakan oleh pengguna.  Konsep ini pertama kali diciptakan oleh desainer dan pengembang web, Ethan Marcotte dalam bukunya Responsive Web Design. Desain responsif dapat kita analogikan seperti cairan / air. Cairan atau air bersifat fleksibel dan mengikuti bentuk dari wadah saat mereka diletakkan.  Mengapa hal ini diperlukan dan relatif penting bagi seorang web developer untuk menerapkan ini? Hal ini berkaitan dengan SEO ( <i>Search Engine Optimizer</i> ), website dengan tingkat responsifitas lebih tinggi, dapat meningkatkan peringkat SEO. </p>

    <h2 class='h5 mt-5'>Langkah yang dapat digunakan</h2>
    <ol>
        <li>
            <h5>Media Query</h5>
            <p class='mt-0'>Yakni menspesifikasikan kode CSS berbeda untuk perangkat berbeda.</p>
        </li>
        <li>
            <h5>Fluid Grid</h5>
            <p class='mt-0'>Menggunakan nilai persentase dibandingkan dengan suatu nilai pasti.</p>
        </li>
        <li>
            <h5>Fluid Image / Media</h5>
            <p class='mt-0'>Serupa dengan poin sebelumnya, poin ini pun menyarankan anda untuk memasang media tanpa ukuran yang pasti, namun menggunakan persentase layar pengguna.</p>
        </li>
    </ol>
    <h2 class='h5 mt-5'>Kelebihan Desain Responsif</h2>
    <p>Seperti yang sebelumnya telah disebutkan, desain web responsive memiliki kelebihan untuk meningkatkan SEO. Namun di luar hal tersebut, ada beberapa kelebihan lain yang bisa kita peroleh, seperti:</p>
    <ul>
        <li>
            <p><strong>User Experience Friendly</strong></p>
            <p>Desain web yang responsif dapat menyediakan pengguna dengan tampilan antar muka yang bersahabat, karena dapat menyesuaikan dengan perangkat perangkat lain yang digunakan oleh pengguna.</p>
        </li>
        <li>
            <p><strong>Mengurangi Biaya Pembuatan Website</strong></p>
            <p>Dibandingkan anda menyewa beberap <i>web developer</i> untuk membuatkan website diperuntukan untuk desktop, tablet, iPhone, android, dan TV; dengan konsep desain responsif, anda tidak memerlukan orang sebanyak itu sehingga dapat mengurangi biaya pembuatan website anda.</p>
        </li>
        <li>
            <p><strong>SEO Friendly</strong></p>
            <p>Seperti yang telah disebutkan sebelumnya, dengan menggunakan konsepdesain web responsif, anda dapat meningkatkan SEO anda. Google menyarankan untuk memprioritaskan website dengan desain responsif, karena apapun versi yang anda pilih untuk ditampilkan, mudah bagi Google untuk mengurus konten dan struktur HTML yang sama.</p>
        </li>
    </ul>
    <h2 class='h5 mt-5'>Kekurangan Desain Responsif</h2>
    <p>Namun, di luar kelebihannya, desain web responsif pun memiliki beberapa kekurangan yang perlu dikonsiderasi bagi para <i>web developer</i>.</p>
    <ul>
        <li>
            <p><strong>Memperlambat <i>Loading</i></strong></p>
            <figure>
                <img src='<?= base_url('assets/blogContent/5SecondsTest.png') ?>' class='w-100' alt='5 Second Test Icon' />
            </figure>
            <p>Dengan menggunakan konsep ini, maka anda perlu memasukan beberapa baris kode tambahan yang akan menjadi tidak berguna di beberapa perangkat. Dengan baris baris kode yang terpaksa harus dimuat tersebut, proses <i>loading page</i> menjadi lebih lambat.</p>
        </li>
        <li>
            <p><strong>Kompatibilitas</strong></p>
            <p>Desain web responsif umumnya memiliki kompatibilitas yang kurang baik untuk browser yang relatif sudah lama seperti IE (<i>Internet Explorer</i>).</p>
        </li>
        <li>
            <p><strong>Memperlambat Proses Development</strong></p>
            <p>Dengan menggunakan desain responsif, web developer perlu bekerja lebih agar sebuah website terlihat proposional di beragam perangkat. Proses ini memakan waktu dibandingkan apabila seorang web developer tidak diminta untuk melakukan proses ini, namun proses ini akan lebih memakan waktu apabila web developer diminta untuk merubah website yang sudah ada menjadi responsif.</p>
        </li>
    </ul>
    <p>Sekian pembahasan kita kali ini untuk desain responsif. Walaupun memiliki kekurangan , namun sangat disarankan untuk menerapkan konsep ini saat pembuatan website / web apps. Semoga artikel ini dapat membantu, ikuti artikel menarik lainnya dari kami.</p>
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