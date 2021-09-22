<?= $this->extend('/blog') ?>

<?= $this->section('content') ?>
    <h1 class='text-center'><?= $header['title'] ?></h1>
    <img src='<?= base_url('assets/blog') . '/' . $header['id'] . '.webp' ?>' class='w-100' />
    <h2 class='text-center h5'><?= $header['subtitle'] ?></h2>
    <p class='text-center h5'><?= date_format(date_create($blog["created_date"]), "d M Y") ?></p>
    <hr>
    <br>
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
    <div class='row justify-content-center'>
        <div class='col-lg-4 col-md-8 col-sm-10 col-12 d-flex align-items-stretch mb-3'>
            <div class='card w-100'>
                <div class='card-body'>
                    <figure>
                        <img src='<?= base_url('assets/blogContent/UX.png') ?>' class='w-100' alt='User Experiencce Friendly Icon' />
                    </figure>
                    <h6 class='h5 mt-3'>User Experience Friendly</h6>
                    <p>Desain web yang responsif dapat menyediakan pengguna dengan tampilan antar muka yang bersahabat, karena dapat menyesuaikan dengan perangkat perangkat lain yang digunakan oleh pengguna.</p>
                </div>
            </div>
        </div>
        <div class='col-lg-4 col-md-8 col-sm-10 col-12 d-flex align-items-stretch mb-3'>
            <div class='card w-100'>
                <div class='card-body'>
                    <figure>
                        <img src='<?= base_url('assets/blogContent/Iteration.png') ?>' class='w-100' alt='Cost Efficient Icon' />
                    </figure>
                    <h6 class='h5 mt-3'>Mengurangi Biaya Pembuatan Website</h6>
                    <p>Dibandingkan anda menyewa beberap <i>web developer</i> untuk membuatkan website diperuntukan untuk desktop, tablet, iPhone, android, dan TV; dengan konsep desain responsif, anda tidak memerlukan orang sebanyak itu sehingga dapat mengurangi biaya pembuatan website anda.</p>
                </div>
            </div>
        </div>
        <div class='col-lg-4 col-md-8 col-sm-10 col-12 d-flex align-items-stretch mb-3'>
            <div class='card w-100'>
                <div class='card-body'>
                    <figure>
                        <img src='<?= base_url('assets/blogContent/SEO.png') ?>' class='w-100' alt='Search Engine Optimizer Friendly Icon' />
                    </figure>
                    <h6 class='h5 mt-3'>SEO Friendly</h6>
                    <p>Seperti yang telah disebutkan sebelumnya, dengan menggunakan konsepdesain web responsif, anda dapat meningkatkan SEO anda. Google menyarankan untuk memprioritaskan website dengan desain responsif, karena apapun versi yang anda pilih untuk ditampilkan, mudah bagi Google untuk mengurus konten dan struktur HTML yang sama.</p>
                </div>
            </div>
        </div>
    </div>
    <h2 class='h5 mt-5'>Kekurangan Desain Responsif</h2>
    <p>Namun, di luar kelebihannya, desain web responsif pun memiliki beberapa kekurangan yang perlu dikonsiderasi bagi para <i>web developer</i>.</p>
    <div class='row justify-content-center'>
        <div class='col-lg-4 col-md-8 col-sm-10 col-12 d-flex align-items-stretch mb-3'>
            <div class='card w-100'>
                <div class='card-body'>
                    <figure>
                        <img src='<?= base_url('assets/blogContent/5SecondsTest.png') ?>' class='w-100' alt='5 Second Test Icon' />
                    </figure>
                    <h6 class='h5 mt-3'>Memperlambat Loading</h6>
                    <p>Dengan menggunakan konsep ini, maka anda perlu memasukan beberapa baris kode tambahan yang akan menjadi tidak berguna di beberapa perangkat. Dengan baris baris kode yang terpaksa harus dimuat tersebut, proses <i>loading page</i> menjadi lebih lambat.</p>
                </div>
            </div>
        </div>
        <div class='col-lg-4 col-md-8 col-sm-10 col-12 d-flex align-items-stretch mb-3'>
            <div class='card w-100'>
                <div class='card-body'>
                    <figure>
                        <img src='<?= base_url('assets/blogContent/Accessibility.png') ?>' class='w-100' alt='Accessibility Icon' />
                    </figure>
                    <h6 class='h5 mt-3'>Kompatibilitas</h6>
                    <p>Desain web responsif umumnya memiliki kompatibilitas yang kurang baik untuk browser yang relatif sudah lama seperti IE (<i>Internet Explorer</i>).</p>
                </div>
            </div>
        </div>
        <div class='col-lg-4 col-md-8 col-sm-10 col-12 d-flex align-items-stretch mb-3'>
            <div class='card w-100'>
                <div class='card-body'>
                    <figure>
                        <img src='<?= base_url('assets/blogContent/FullStackDeveloper.png') ?>' class='w-100' alt='Full Stack Developer Icon' />
                    </figure>
                    <h6 class='h5 mt-3'>Memperlambat Proses Development</h6>
                    <p>Dengan menggunakan desain responsif, web developer perlu bekerja lebih agar sebuah website terlihat proposional di beragam perangkat. Proses ini memakan waktu dibandingkan apabila seorang web developer tidak diminta untuk melakukan proses ini, namun proses ini akan lebih memakan waktu apabila web developer diminta untuk merubah website yang sudah ada menjadi responsif.</p>
                </div>
            </div>
        </div>
    </div>
    <p>Sekian pembahasan kita kali ini untuk desain responsif. Walaupun memiliki kekurangan , namun sangat disarankan untuk menerapkan konsep ini saat pembuatan website / web apps. Semoga artikel ini dapat membantu, ikuti artikel menarik lainnya dari kami.</p>
<?= $this->endSection() ?>