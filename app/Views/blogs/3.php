<?= $this->extend('/blog') ?>

<?= $this->section('content') ?>
<h1 class='text-center'><?= $header['title'] ?></h1>
    <img src='<?= base_url('assets/blog') . '/' . $header['id'] . '.webp' ?>' class='w-100' />
    <h2 class='text-center h5'><?= $header['subtitle'] ?></h2>
    <p class='text-center h5'><?= date_format(date_create($blog["created_date"]), "d M Y") ?></p>
    <hr>
    <br>
    <p><i>Programming</i> merupakan suatu seni yang membutuhkan waktu untuk menguasainya. Apabila anda baru mulai masuk ke bidang ini, anda akan memerlukan waktu untuk sepenuhnya memahami dan bahkan saat anda cukup percaya diri atas kemampuan anda, pembelajaran tidak pernah behenti. Maka sebagai seorang <i>Programmer</i>, anda perlu siap untuk belajar setiap harinya.</p>
    <p>Secara natural, menjaga segalanya adalah tugas yang sulit, terutama untuk pemula dan beberapa kesalahan terjadi dikarenakan kurang cukupnya pengalaman seseorang. Walaupun beberapa sifatnya minor, namun adapun beberapa yang dapat mengakibatkan isu yang sifatnya serius. Salah satu area yang dapat terdampak akibat kesalahan ini adalah keamanan data dan cyber secara umum.
    Untungya, anda dapat mencegah isu – isu ini dengan mengurangi beberapa kesalahan yang umumnya pemula lakukan. Berikut adalah 11 kesalahan paling umum dan solusi untuk mengatasinya</p>
    
    <h2 class='h3'>1. Kurangnya <i>Escaping</i>, Format yang Salah, dan Penggunaan yang Tidak Tepat dan Parameter pada fungsi Printf.</h2>
    <p><strong>Kesalahan</strong>: Para pemula di pemrograman dapat dengan mudah membuat kesalahan dalam menggunakan fungsi format string. Kapan masalah ini akah terjadi? Apabila seorang <i>developer</i> menggunakan format fungsi string, melupakan bahwa input tersebut <strong>harus</strong> diperlakukan sebagai sebuah string. Dalam kasus itu, memungkinkan para peretas untuk menimpa data dan mengambil alih dari eksekusi sebuah program.</p>
    <p><strong>Solusi</strong>: Solusi pada isu ini cukup sederhana, daripada menggunakan format <code>printf(inputString)</code>, anda dapat menggunakan <code>printf(“%s”, inputString)</code>.</p>

    <h2 class='h3'>2. Ketidaktepatan Pekerjaan Untuk Data yang Bersifat Pribadi</h2>
    <p><strong>Kesalahan</strong>: Isu utama dalam bekerja dengan data yang sifatnya konfidensial (pribadi), adalah anda dapat tidak cukup berhati – hati dalam menanganinya. Satu kesalahan, dapat berujung pada kebocoran data dan dapat menghabiskan kerugian besar pada klien anda.</p>
    <p><strong>Solusi</strong>: Para <i>programmer</i> umumnya membuat kelalaian ini, dan meninggalkan data pada format mentahnya. Hal ini namun dapat dengan sederhana dihindari, yakni dengan menggunakan enkripsi pada data baik pada transit ataupun pada ujung.</p>

    <h2 class='h3'>3. Menyimpan Data Autentikasi di <i>Source Code</i></h2>
    <p><strong>Kesalahan</strong>: Data autentikasi merupakan data yang bersifat rahasia, dan perlu dijaga dengan baik. Walaupun sangat mempermudah anda anda menyimpan data username, password, dan kunci pada <i>source code</i>, anda diharapkan untuk jangan pernah melakukannya.</p>

    <p><strong>Solusi</strong>: Cara memperlakukan data – data ini dengan baik, melingkupi enkripsi kredensial dan password dengan menggunakan TLS, atau SSL, dan memilih system autentikasi yang hanya menyimpan <i>hash</i></p>

    <h2 class='h3'>4. Menggunakan Library atau Software yang sudah Kadarluasa</h2>
    <p><strong>Kesalahan</strong>: <i>Library</i> dan peralatan <i>software</i> pasti hadir dengan bugs dan kerentanan sendiri. Perusahaan yang membuatnya akan menyelesaikan isu – isu tersebut melalui <i>patch</i> dan update. Apabila anda tidak melakukan update untuk peralatan dan <i>library</i> anda, maka anda secara tidak langsung mengekspos aplikasi anda ke resiko untuk mengalami isu – isu tersebut. </p>
    <p><strong>Solusi</strong>: Menggunakan <i>library</i>, peralatan, dan sistem operasi yang sudah diupdate.</p>
    
    <h2 class='h3'>5. Menyepelekan Dokumentasi Resmi</h2>
    <p><strong>Kesalahan</strong>: Dokumentasi resmi menggambarkan seluruh detail tentang cara menggunakannya dengan cara terbaik. Menyepelekan dokumen resmi dapat menyebabkan anda untuk lalai dalam menggunakannya dan membuat aplikasi anda rentan terhadap penyerangan.</p>

    <p><strong>Solusi</strong>: Dokumentasi resmi tidak menyenangkan, dan umumnya membutuhkan waktu berjam – jam untuk membacanya. Namun semua itu <i>worth it</i> apabila anda hendak mencegah penyerangan cyber. Pastikan anda membaca sebelum menulis kode.</p>
    
    <h2 class='h3'>Menjadi Pemula bukan merupakan alasan untuk melalaikan keamanan data</h2>
    <p>Hasil dari ketidak adaan pengalaman, pemula dapat membuat banyak kesalahan. Namun itu merupakan proses belajar. Beberapa kesalahan dapat menyebabkan isu dalam keamanan data degan konsekuensi yang tinggi.</p>
    <p>Contohnya, anda mungkin bingung  bagaimana untuk menggunakan suatu fungsi tertentu. Dalam kasus lain, anda tidak yakin cara yang tepat untuk suatu skenario. Isu lain melingkupi menggunakan <i>software</i> yang sudah kadarluasa atau <i>copy – paste</i> kode dari sumber lain tanpa melakukan pengujian yang layak.</p>
    <p>Isu – isu tersebut dapat dihindari apabila anda mengambil waktu untuk belajar tentang <i>cybersecurity</i>, baik itu dari Udemy atau pengalaman rekan kerja anda, semua dapat membantu untuk menghindari kesalahan – kesalahan pada masa depan. Terkadang anda perlu menghabiskan waktu untuk membaca trend saat ini atau metode yang telah digunakan oleh industri – industri lain.</p>
    <p>Cara paling dini untuk mengatasi isu – isu tersebut adalah mengetahui keberadaan isu – isu tersebut. Namun dengan saat ini anda mengetahui beberapa kesalahan umum dan solusinya, anda dapat menjamin bahwa anda di jalur yang benar untuk meminimalisir resiko <i>cybersecurity</i> dan bahkan beberapa serangan yang umum.</p>

<?= $this->endSection() ?>