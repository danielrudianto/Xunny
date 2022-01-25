<?php $this->extend('/blog'); ?>
<?php $this->section('content'); ?>
    <p>Umumnya, pemrograman terbagi menjadi 2 metode. Yaitu pemrograman terstruktur dan pemrograman berorientasi objek. Saat ini, kebanyakan developer menggunakan pemrograman berorientasi objek untuk mengembangkan software.</p>
    <p>Namun, apakah yang dimaksud dengan pemrograman berorientasi objek?</p>
    <h2 class='h4 mt-5'>Pengertian Pemrograman Berorientasi Objek</h2>
    <p>Pemrograman berorientasi objek (Object-Oriented Programming atau yang biasa disingkat OOP) merupakan metode pemrograman yang berorientasi pada objek, di mana pemrograman yang dilakukan merupakan gabungan dari berbagai komponen yang telah ada.</p>
    <p>Objek-objek yang terdapat di dalam pemrograman berorientasi objek umumnya disebut dengan “class”. Dan pada saat eksekusi aplikasi, seluruh class yang terdapat di dalam aplikasi tersebut menjadi saling berkaitan satu sama lain dan dapat menyelesaikan berbagai permasalahan pemrograman yang cukup rumit.</p>

    <h2 class='h4 mt-5'>Kelebihan Pemrograman Berorientasi Objek</h2>
    <p>Berbagai kelebihan menggunakan pemrograman berorientasi objek di antaranya adalah sebagai berikut:</p>
    <ul>
        <li>Pemrograman berorientasi objek membuat proses maintenance program menjadi lebih mudah. Pasalnya, penggunaan class pada pemrograman berorientasi objek lebih mudah dibaca oleh developer. Sehingga, proses maintenance hanya berfokus pada satu permasalahan pada pemrograman yang terjadi.</li>
        <li>Selain perbaikan, proses perubahan program juga menjadi lebih mudah untuk dilakukan. Mulai dari penambahan hingga penghapusan objek tertentu dapat dilakukan dengan mudah. Misalnya pada saat penambahan konten atau fitur, hingga penghapusan konten pada saat masa habis event tertentu.</li>
    </ul>

    <h2 class='h4 mt-5'>Bahasa Pemrograman Untuk Menulis Contoh Pemrograman Berorientasi Objek</h2>
    <p>Pemrograman berorientasi objek umumnya digunakan pada saat kita melakukan pemrograman dengan bahasa pemrograman tingkat kerumitan yang cukup tinggi. Beberapa bahasa pemrograman tersebut antara lain sebagai berikut:</p>

    <ul>
        <li>C++</li>
        <li>C#</li>
        <li>Java</li>
        <li>Pascal</li>
        <li>PHP</li>
        <li>Pyhton</li>
        <li>Ruby</li>
        <li>Visual Basic</li>
    </ul>
    <p>Meski ada berbagai macam bahasa pemrograman yang bisa digunakan dalam melakukan pemrograman berorientasi objek, beberapa bahasa pemrograman yang paling sering digunakan dalam pengaplikasiannya antara lain C++, Python, dan Visual Basic.</p>

    <h2 class='h4 mt-5'>Contoh Pemrograman Berorientasi Objek</h2>
    <p>Saat ini, pemrograman berorientasi objek digunakan dalam berbagai hal. Salah satunya adalah contoh program python penjualan. Sebagai contoh, kali ini kami paparkan contoh pemrograman berorientasi objek menghitung luas persegi panjang dan segitiga menggunakan bahasa pemrograman C++:</p>

    <code>
        <p>#include &lt;iostream&gt;</p>
        <p>using namespace std</p>
        <p>class PersegiPanjang {</p>
        <p>&emsp;int panjang,lebar;</p>
        <p>&emsp;public:</p>
        <p>&emsp;&emsp;int luas() {</p>
        <p>&emsp;&emsp;&emsp;return (panjang*lebar);</p>
        <p>&emsp;&emsp;}</p>
        <p>&emsp;&emsp;void set_values(int x,int y) {</p>
        <p>&emsp;&emsp;&emsp;panjang = x;</p>
        <p>&emsp;&emsp;&emsp;lebar = y;</p>
        <p>&emsp;&emsp;}</p>
        <p>}</p>
    </code>

    <code>
        <p>class Segitiga {</p>
        <p>&emsp;int alas,tinggi;</p>
        <p>&emsp;public:</p>
        <p>&emsp;&emsp;int luas() {</p>
        <p>&emsp;&emsp;&emsp;return (alas*tinggi*0.5);</p>
        <p>&emsp;&emsp;}</p>
        <p>&emsp;&emsp;void set_values(int a,int t) {</p>
        <p>&emsp;&emsp;&emsp;alas = a;</p>
        <p>&emsp;&emsp;&emsp;tinggi = t;</p>
        <p>&emsp;&emsp;}</p>
        <p>}</p>
    </code>

    <code>
    <p>int main() {</p>
    <p>&emsp;PersegiPanjang Kotak1;</p>
    <p>&emsp;PersegiPanjang Kotak2;</p>
    <p>&emsp;Segitiga Segitiga1;</p>
    <p>&emsp;Segitiga Segitiga2;</p>
    <p>&emsp;Kotak1.set_values(10,10);</p>
    <p>&emsp;Kotak2.set_values(5,5);</p>
    <p>&emsp;Segitiga2.set_values(3,7);</p>
    <p>&emsp;cout << “Luas Kotak 1 adalah ” << Kotak1.luas() << endl;</p>
    <p>&emsp;cout << “Luas Kotak 2 adalah ” << Kotak2.luas() << endl;</p>
    <p>&emsp;cout << “Luas Segitiga 1 adalah ” << Segitiga1.luas() << endl;</p>
    <p>&emsp;cout << “Luas Segitiga 2 adalah ” << Segitiga2.luas() << endl;</p>
    <p>}</p>

    </code>
<?php $this->endSection() ?>