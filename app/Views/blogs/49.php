<?php $this->extend('/blog'); ?>
<?php $this->section('content'); ?>
    <p>Belajar mengenai teknologi, berarti banyak hal juga yang harus kita ketahui termasuk unsur sistem rumit bagaimana suatu website dapat terbentuk, seperti misalnya membuat web dengan PHP. Kita tahu bahwa website merupakan sekumpulan halaman di penjarian dunia maya atau browser yang berisi informasi dalam bentuk teks, gambar dan suara sekalipun. Laman website sebelumnya harus dibuat dengan suatu formula sendiri.</p>
    <p>Dimana website ini memerlukan proses programmer. Salah satu bahasa yang berfungsi sebagai pemrograman yaitu misalnya PHP. PHP atau yang memiliki kepanjangan <em>Personal Home Page</em> berkembang dan berubah akronim menjadi <em>Hypertext Pre Processor</em>. PHP ini sendiri memiliki fokus untuk scripting server membuat website yang dinamis atau aplikasi web.</p>
    <figure>
        <img src='<?= base_url() ?>/PHPBanner.png' class='w-100' alt='PHP Banner' title="PHP Banner">
    </figure>
    <p>PHP ini sendiri banyak digunakan karena beberapa alasan seperti karena cukup mudah dipelajari, banyak tersedia video tutorial, bersifat open source dan dapat dikembangkan tanpa biaya, memiliki banyak pilihan database, serta multi platform untuk berbagai sistem operasi. Untuk membuat website dengan PHP ini sendiri, anda harus melakukan beberapa langkah, diantaranya adalah:</p>
    <ol>
        <li>
            <h2 class='h5 mt-5'>Menyiapkan software yang akan digunakan</h2>
            <p>Hal ini benting karena menyiapkan software berarti kita akan mempersiapkan tool yang akan digunakan, tools tersebut misalnya,</p>
            <ul>
                <li class="normal"><strong>PHP editor</strong>, yang berfungsi sebagai pembuat file website dan menulis kodenya, contohnya Sublime Text</li>
                <li class="normal"><strong>Web Browser</strong> yang berfungsi untuk mengecek tampilan pada website misalnya Google Chrome</li>
                <li class="normal"><strong>Web Server</strong> berfungsi sebagai tempat untuk menyimpan folder website, misalnya pada XAMPP</li>
            </ul>
        </li>
        <li>
            <h2 class='h5 mt-5'>Buat file index.php</h2>
            <p>Buka Sublime Text, kemudian pilih File, kemudian pilih New File dan setelahnya anda bisa memasukkan source code sesuai dengan keinginan. Jika sudah, maka anda bisa menyimpan file tersebut dengan <strong>index.php</strong> pada folder <strong>websitephp</strong>.</p>
        </li>
        <li>
            <h2 class='h5 mt-5'>Buat file style.css</h2>
            <p>Langkah pembuatan file style.css memiliki tujuan untuk membuat tampilan website yang dihasilkan lebih menarik. Anda bisa melakukan langkah yang sama sebelumnya yaitu dengan membuka file dan membuat file baru untuk source code. Biasanya anda akan memasukkan kode koding dengan variasi &ldquo;color&rdquo; seperti &ldquo;gray&rdquo; kemudian style margin, padding dan lain sebagainya. Sebelum membuat website seperti ini pastikan juga anda telah mempelajari dahulu tantang bahasa dan dunia koding, yang saat ini juga dapat belajar coding di hp. Jika selesai, anda dapat menyimpan file ini dengan nama <strong>style.css.</strong></p>
        </li>
        <li>
            <h2 class='h5 mt-5'>Buat file home.php</h2>
            <p>Langkah yang sama, dengan membuka file dan membuat coding. Home sendiri berfungsi sebagai halaman pertama dari tampilan website nantinya.</p>
        </li>
        <li>
            <h2 class='h5 mt-5'>Buat file about.php</h2>
            <p>Langkah berikut ini kurang lebih sama dengan tiga langkah sebelumnya, fungsinya adalah untuk memberikan halaman deskripsi tentang apa website yang akan anda tampilan.</p>
        </li>
        <li>
            <h2 class='h5 mt-5'>Buat file contact.php</h2>
            <p>Masih sama dengan langkah yang sebelumnya, halaman ini akan berfungsi sebagai informasi pemilik website.</p>
        </li>
        <li>
            <h2 class='h5 mt-5'>Mencoba website pada browser</h2>
            <p>Mencoba website pada browser maka anda dapat membuka web server, misalnya menggunakan XAMPP, anda bisa mengklik Start pada modul Apache dan juga MySOL, kemudian buka browser localhost/websitephp. Jika tampilannya sesuai dengan komposisi koding yang anda buat maka anda telah berhasil&nbsp; membuat web dengan php.</p></p>
        </li>
    </ol>
<?php $this->endSection() ?>