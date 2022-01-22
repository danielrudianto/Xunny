<?php $this->extend('/blog'); ?>
<?php $this->section('content'); ?>
    <p>Python merupakan salah satu dari bahasa pemrograman dengan fungsi yang cukup banyak. Di antaranya untuk mengelola website, membuat software, dan lain sebagainya.</p>
    <p>Saat ini, sudah banyak library modul yang bisa kamu gunakan untuk membuat aplikasi dengan Python. Bahkan, kamu bisa mendapatkannya secara gratis. Oleh karena itu, berikut ini kami paparkan beberapa contoh library modul yang bisa kamu pakai:</p>
    <ol>
        <li>
            <h2 class='h5 mt-5'>1.	PyGTK</h2>
            <p>PyGTK merupakan salah satu library modul untuk yang bisa kamu gunakan untuk membuat aplikasi dengan Python dengan GTK+ (Gimp Toolkits). GTK+ ialah library yang pada umumnya digunakan untuk membuat suatu aplikasi GUI di Linux. Selain itu, PyGTK bersifat cross platform. Artinya, PyGTL bisa kamu install di berbagai platform, baik dari Windows, MacOS, hingga <a href='<?= base_url() ?>/Blogs/kelebihan-dan-kekurangan-linux-yang-anda-perlu-ketahui'>Linux</a>.</p>
            <p>Untuk menggunakan PyGTK, kamu perlu mengimpor modulnya terlebih dahulu dengan cara mengetikkan perintah <code>import gtk</code> di Python.</p>
        </li>
        <li>
            <h2 class='h5 mt-5'>PySciter</h2>
            <p>PySciter merupakan salah satu library modul bisa kamu gunakan untuk membuat aplikasi dengan Python dengan Sciter. Bagi kamu yang belum tahu, Sciter merupakan engine yang memungkinkan kita untuk membuat aplikasi dengan bahasa pemrograman CSS, HTML, dan Java.</p>
            <p>Untuk menggunakan PySciter, kamu perlu mengimpor modulnya terlebih dahulu dengan cara mengetikkan perintah <code>import sciter</code> di Python.</p>
        </li>
        <li>
            <h2 class='h5 mt-5'>Tkinter</h2>
            <p>Tkinter merupakan salah satu library modul paling standar yang bisa kamu gunakan untuk membuat aplikasi dengan Python. Sebenarnya, kamu tidak perlu menginstall software tambahan. Karena begitu kamu meng-install Phyton, Tkinter secara otomatis telah ter-install.</p>
            <p>Untuk memeriksanya, kamu bisa mengetikkan perintah “import _tkinter” di Python. Jika ternyata ada error “No module named _tkinter”, tandanya tidak ada Tkinter di Python kamu. Untuk meng-install-nya, kamu cukup mengetikkan perintah <code>sudo apt install python-tk</code> atau <code>sudo apt install python3-tk</code>.</p>
        </li>
        <li>
            <h2 class='h5 mt-5'>Toga</h2>
            <p>Toga salah satu library modul yang bisa kamu gunakan untuk membuat aplikasi dengan Python secara native. Dengan Toga, kamu bisa menggunakannya untuk membuat aplikasi untuk berbagai platform. Mulai dari Windows, MacOS, Linux, hingga aplikasi mobile seperti Android dan iOS.</p>
            <p>Untuk menggunakan Toga, kamu perlu mengimpor modulnya terlebih dahulu dengan cara mengetikkan perintah <code>import toga</code> di Python.</p>
        </li>
        <li>
            <h2 class='h5 mt-5'>wxPython</h2>
            <p>wxPython merupakan salah satu library modul yang dapat kamu gunakan di berbagai platform. Keunikan dari wxPython sendiri adalah menggunakan library dari wxWidget yang dibuat dengan bahasa pemrograman C++. Sehingga, kamu akan sangat disarankan menggunakan wxPython ini jika ingin membuat aplikasi dengan Python yang bisa digunakan secara cross-platform.</p>
            <p>Untuk menggunakan wxPython, kamu perlu mengimpor modulnya terlebih dahulu dengan cara mengetikkan perintah “import wx” di Python.</p>
        </li>
    </ol>
    <p>Itulah tadi beberapa contoh library modul yang bisa kamu pakai untuk membuat aplikasi dengan Python. Dengan beberapa library modul tersebut, kamu bisa menggunakannya untuk membuat berbagai macam aplikasi. Salah satunya adalah contoh <a href='<?= base_url() ?>/Blogs/simak-definisi-dan-contoh-program-python-di-bidang-penjualan'>program Python penjualan</a>.</p>
<?php $this->endSection() ?>