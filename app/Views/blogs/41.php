<?php $this->extend('/blog'); ?>
<?php $this->section('content'); ?>
    <h2 class='h4 mt-5'>Apa itu Regex?</h2>
    <p>Mari kita mulai artikel ini dengan definisi regular expression itu sendiri. Regular expression atau biasa disebut dengan regex merupakan <cite>serangkaian karakter yang mendefinisikan sebuah pola pencarian. Pola tersebut biasanya digunakan oleh algoritme pencarian string untuk melakukan operasi "cari" atau "cari dan ganti" pada string, atau untuk memeriksa string masukan. Ekspresi reguler merupakan teknik yang dikembangakan dalam bidang ilmu komputer teori dan teori bahasa formal.</cite></p>
    <p>Bentuk regular expression seperti string pada umumnya yang dapat menyocokan sebuah teks dengan pola tertentu. Bentuk regex dapat terlihat seperti ini:</p>
    <code>^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$ </code>

    <h2 class='h4 mt-5'>Sejarah Regex</h2>
    <p>Regular expression sendiri digagaskan oleh seorang matematikawan Amerika Serikat pada tahun 1951. Regex menjadi populer sejak tahun 1968 pada saat diaplikasikan secara langsung pada pencocokan pola dalam <i>edit</i> teks dan analisa leksikal dalam kompilator. Terdapat beragam variasi yang digunakan pada program - program Unix di Bell Labs pada sekitar tahun 1970, seperti Vi, Lex, Sed, AWK dan expr. Regex kemudian distandarisasikan pada 1992.</p>
    <p>Sejak dari penemuan tersebut, regex telah berkembang dan telah didukung oleh banyak bahasa pemrograman seperti PHP, Javascript, Java, dan Python sebagai fitur bawaan (<i>Built-in feature</i>) karena sangat esensial dalam pemrograman saat ini.</p>

    <h2 class='h4 mt-5'>Cara Membuat Regex</h2>
    <p>Terdapat beberapa operator regex yang perlu kita ketahui untuk akhirnya membuat sebuah regex yang berguna seperti mendeteksi validitas <i>email</i> atau surat elektronik, website, bahkan untuk penomoran dokumen perusahaan. Pada bagian ini, kami akan membagikan beberapa operator regex yang dapat anda gunakan.</p>

    <ol>
        <li>
            <h3 class='h5 mt-5'>Repeater</h3>
            <p>Terdapat 3 buah operator pengulang (repeater), yakni <strong>*</strong>, <strong>+</strong>, dan <strong>{}</strong>. Ketiga simbol ini berfungsi untuk memberitahukan komputer bahwa karakter sebelumnya dapat digunakan beberapa kali.</p>
            <h4 class='h6 mt-3'><strong>Simbol ( * )</strong></h4>
            <p>Simbol ini memberitahukan komputer untuk cocokkan karakter sebelumnya atau set karakter sebanyak 0 hingga tak hingga kali. Sebagai contoh:</p>
            <p>ekspresi <code>/ab*c/</code> dapat cocok dengan <strong>abbbbc</strong> atau <strong>ac</strong>.</p>

            <h4 class='h6 mt-3'><strong>Simbol ( + )</strong></h4>
            <p>Simbol ini memberitahukan komputer untuk ulangi karakter sebelumnya minimal 1 kali hingga tak hingga kali. Sebagai contoh</p>
            <p>ekspresi <code>/ab+c/</code> dapat cocok dengan <strong>abc</strong> atau <strong>abbc</strong>.</p>

            <h4 class='h6 mt-3'><strong>Simbol ( {...} )</strong></h4>
            <p>Simbol ini memberitahukan komputer untuk mengulangi sebanyak mungkin pola sebelumnya. Misalkan <code>{3}</code> berarti karakter sebelumnya perlu diulangi sebanyak 3 kali. <code>{min,}</code> menandakan bahwa karakter sebelumnya dapat dicocokkan sebanyak "min" kali hingga tak terhingga, dan <code>{min,max}</code> menandakan bahwa karakter sebelumnya dapat dicocokan sebanyak "min" kali hingga "max" kali.</p>
        </li>
        <li>
            <h3 class='h5 mt-5'>Wildcard</h3>
            <p>Ekspresi wildcard dituangkan dalam simbol titik ( . ) dapat cocok dengan karakter apapun, yang karena itu disebut sebagai <i>wildcard</i>.</p>
        </li>
        <li>
            <h3 class='h5 mt-5'>Optional Character</h3>
            <p>Karakter opsional atau yang disimbolkan dengan tanda tanya ( ? ) memberi tahu komputer bahwa kehadiran karakter sebelumnya pada pola bersifat opsional ( bisa ada dan tidak ada ). <code>/docx?/</code> akan cocok dengan kata "doc" ataupun "docx" karena karakter x merupakan karakter yang dianggap opsional.</p>
        </li>
        <li>
            <h3 class='h5 mt-5'>Simbol Caret</h3>
            <p>Simbol ini ( ^ ) bertugas untuk memposisikan pola ke awal sebuah teks. Tanpa operator ini, regex akan mencari persamaan pola secara acak, namun dengan operator ini, regex diwajibkan untuk mencocokan pola dari depan.</p>
        </li>
        <li>
            <h3 class='h5 mt-5'>Simbol Dolar</h3>
            <p>Simbol Dolar ( $ ) merupakan kebalikan dari simbol caret. Simbol ini bertugas untuk memposisikan pola pada ujung sebuah teks.</p>
        </li>
        <li>
            <h3 class='h5 mt-5'>Set Karakter</h3>
            <p>Operator terakhir yang akan kami bahas adalah tentang set karakter. Set karakter digunakan untuk mencocokan teks dengan apa yang terdapat dalam set ini ( [...] ). Sebagai contoh, <code>[abcd]</code> dapat cocok dengan <strong>d</strong>u<strong>a</strong>, namun tidak dapat mencocokan <a href="<?= base_url() ?>">xunny</a></p>
        </li>
    </ol>
    <p>Sekian pembahasan kami hari ini tentang regex. Kami harap artikel ini dapat membantu kalian untuk mengetahui pentingnya regular expression dalam pemrograman.</p>
<?php $this->endSection() ?>