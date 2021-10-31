<?php $this->extend('/blog'); ?>
<?php $this->section('content'); ?>
    <p>Pada saat kita coba mengakses computer lewat sebuah jaringan, administrator system membutuhkan koneksi yang maan untuk menyembunyikan dari serangat cyber seperti <i>sniffing password</i>. Semakin besar ukuran sebuah jaringan, maka protokol enkripsi seperti TLS/SSL, IPsec, S/MIME, PGP, dan SSH merupakan proteksi fundamental yang perlu dilakukan.</p>

    <h2 class='d-none'>Lapisan Koneksi SSH</h2>
    <p>SSH, atau <i>Secure Shell</i> merupakan aplikasi pengganti remote login. Koneksi SSH terdiri dari 3 lapisan, yakni:</p>
    <figure>
        <img src='<?= base_url() ?>/assets/blogContent/SSHLayer.png' class='w-100' alt='Ilustrasi lapisan koneksi SSH'>
        <figcaption>Ilustrasi Lapisan Koneksi SSH</figcaption>
    </figure>
    <ol>
        <li>
            <h3 class='h5 mt-5'>Lapisan transport</h3>
            <p>Memastikan komunikasi yang aman antara server dengan client, melakukan monitor data enkripsi/dekripsi, dan mengamankan integritas koneksi.</p>
        </li>
        <li>
            <h3 class='h5 mt-5'>Lapisan autentikasi</h3>
            <p>Melakukan prosedur autentikasi client</p>
        </li>
        <li>
            <h3 class='h5 mt-5'>Lapisan koneksi</h3>
            <p>Mengatur channel komunikasi setelah proses autentikasi dilakukan</p>
        </li>
    </ol>

    <h2 class='h4 mt-5'>Keuntungan menggunakan SSH</h2>
    <p>SSH dapat mengijinkan mengenskripsi data sehingga kemungkinan malicious tidak dapat mengakses informasi user dan password. SSH juga mengizinkan untuk menembus protokol lain seperti FTP. Berikut beberapa hal spesifik mengenai perlindungan yang diberikan SSH:</p>
    <ol>
        <li>
            <h3 class='h5 mt-5'>DNS Spoofing</h3>
            <figure>
                <img src='<?= base_url() ?>/assets/blogContent/HackerSteal.png' class='w-100' alt='Ilustrasi peretas mencuri password'>
            </figure>
            <p>Penyerangan hacking dalam jenis ini dilakukan dengan cara memasukkan data dalam Sistem Domain yang dimana Name Server cache database. Tentu saja hal ini akan menyebabkan Name Server akan kembali ke IP yang salah sehingga dapat mengalihkan lalu lintas pada komputer lain.</p>
        </li>
        <li>
            <h3 class='h5 mt-5'>IP Address Spoofing</h3>
            <p>IP Spoofing bekerja dengan cara menyembunyikan alamat IP dengan membuat paket IP yang berisi alamat IP palsu dalam upaya untuk meniru koneksi lain dan menyembunyikan identitas ketika kita mengirim sebuah informasi.</p>
            <p>Untuk mendapatkan akun dan penggunaan dari SSH ini, maka kita bisa mendapatkan akun SSH gratis dari penyedia provider dengan syaratnya server base on linux.</p>
        </li>
        <li>
            <h3 class='h5 mt-5'>Manipulasi Data seperti halnya router di sepanjang jaringan</h3>
            <figure>
                <img src='<?= base_url() ?>/assets/blogContent/ManipulateData.png' class='w-100' alt='Ilustrasi manipulasi data'>
            </figure>
            <p>Penyerang dapat memperoleh atau merubah data pada perantara sepanjang rute jaringan. Hal ini sering dilakukan pada router dimana data yang masuk dari gateway atau pos pemeriksaan di jalan menuju ke tujuan.</p>
        </li>
    </ol>
    <h2 class='h4 mt-5'>Mengenal Perbedaan Teknik Enkripsi</h2>
    <p>Keuntungan signifikan yang ditawarkan oleh SSH dibandingkan aplikasi – aplikasi sebelumnya adalah penggunaan enkripsi untuk memastikan transfer informasi yang aman antara server dan client. Terdapat tiga teknologi enkripsi yang digunakan oleh SSH, yakni:</p>
    <ol>
        <li>
            <h3 class='h5 mt-5'>Enkripsi simetris ( <i>Symmetrical encryption</i> )</h3>
            <p>Enkripsi simetris adalah bentuk enkripsi dimana sebuah <strong>kunci rahasia</strong> digunakan dalam enkripsi dan dekripsi dari sebuah informasi baik untuk client ataupun server. Secara efektif, seluruh hasil enkripsi yang dilakukan dapat didekripsi.</p>
            <p>Enkripsi ini seringkali disebut sebagai enkripsi <em>shared key</em>. Umumnya digunakan satu kunci atau terkadang sepasang kunci dimana salah satu kuncinya dapat diperoleh dengan melakukan kalkulasi dari kunci yang lain.</p>
            <p><strong>Kunci simetris</strong> dapat digunakan untuk melakukan enkripsi untukk seluruh komunikasi pada sesi SSH.</p>
        </li>
        <li>
            <h3 class='h5 mt-5'>Asymmetric Encryption</h3>
            <p>Tidak seperti enkripsi simetris, enkripsi asimetris menggunakan dua kunci yang terpisah, yang umumnya disebut sebagai private dan public key.  Seperti Namanya, “public”, kunci public atau <i>public key</i> didistribusikan kepada seluruh pihak. Walaupun terhubung secara kuat dengan private key dalam fungsionalitas, private key tidak dapat dikalkulasi melalui public key. Hubungan antara kedua key sangat kompleks.</p>
            <p>Sementara untuk private key <strong>harus selalu dirahasiakan</strong>, tidak boleh ada pihak lain ( <i>third party</i> ) yang dapat mengetahuinya. Kekuatan dari seluruh koneksi SSH bergantung pada fakta bahwa <i>private key</i> ini tidak dapat diakses oleh pihak luar, karena <i>private key</i> merupakan satu satunya komponen yang dapat digunakan untuk melakukan dekripsi informasi. </p>
        </li>
        <li>
            <h3 class='h5 mt-5'>Hashing</h3>
            <p><em>Hashing</em> satu arah merupakan salah satu bentuk kriptografi yang digunakan dalam SSH. Fungsi hash satu arah berbeda dengan kedua enkripsi yang telah disebutkan sebelumnya, dalam konteks bahwa kedua informasi yang dihasilkan dari enkripsi ini tidak dirancang untuk didekripsi.</p>
            <p>Melakukan hash kriptografis dari input yang ada merupakan pekerjaan yang relatif mudah namun <strong>tidak mungkin</strong> untuk membuat input dari hash. Ini berarti bahwa apabila client memiliki input yang benar, maka mereka dapat membuat hash kriptografik dan membandingkan nilainya dengan hash kriptografik lain dalam verifikasi apabila data tersebut sudah benar.</p>
            <p>SSH menggunakan hash untuk melakukan verifikasi autentikasi dari informasi yang lewat. Hal ini dilakukan dengan menggunakan HMAC ( Hash based Message Authentication Codes ). Hal ini memastikan bahwa command yang diterima tidak dirusak.</p>
        </li>
    </ol>
    <h2 class='h4 mt-5'>Cara Kerja SSH</h2>
    <p>Cara kerja SSH walaupun terlihat rumit, namun sebenarnya tidak serumit kelihatan atau kedengarannya. Berikut langkah sederhana cara kerja SSH:</p>
    <ol>
        <li>Klien bind pada port lokal nomor besar dapat melakukan koneksi ke port 22 ( port ini dapat diganti apabila diperlukan ) pada server yang sudah terhubung.</li>
        <li>Klien dan server setuju untuk menggunakan sesi SSH tertentu. Hal ini penting karena salah satu SSH saja tidak akan bisa berhasil.</li>
        <li>Klien meminta kunci publik dan kunci host server.</li>
        <li>Klien dan server menyetujui algoritma enkripsi yang akan digunakan.</li>
        <li>Klien membentuk suatu session key yang didapat dari klien dan mengenkripsinya menggunakan kunci publik milik server.</li>
        <li>Server melkukan dekripsi session key yang didapat dari klien untuk melakukan enkripsi ulang dengan kunci publik milik klien dan mengirimkannya kembali ke klien untuk diautentikasi.</li>
        <li>Pemakai mengautentikasi dirinya pada server di dalam aliran data terenkripsi dalam session key tersebut. Sampai disini koneksi sudah terbentuk, dan klien selanjutnya dapat bekerja secara interaktif pada server atau mentransfer file ke atau dari server.</li>
    </ol>
    <p>Mengenal cara kerja SSH dapat membantu user untuk memahami aspek keamanan dari teknologi ini. Kebanyak orang mempertimbangkan proses ini sulit dan tidak dapat dipahami, namun sebenarnya, hal ini lebih sederhana daripada yang orang umumnya pikirkan. Apabila anda membayangkan berapa lama waktu yang diperlukan computer untuk mengkalkulasi sebuah hash dan melakukan proses autentikasi, hal tersebut terjadi kurang dari satu detik. Untuk mencegah permasalahan keamanan pada server anda, baca juga <a href='<?= base_url() ?>/Blogs/kesalahan-programmer-berujung-pada-masalah-keamanan-data'>blog ini</a>. Kami harap penjelasan kami tentang SSH ini dapat membantu anda.</p>
<?php $this->endSection(); ?>