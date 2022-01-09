<?= $this->extend('/blog') ?>

<?= $this->section('content') ?>
    <h2 class='h3 mt-5'>1. Bootstrap</h2>
    <figure>
        <img src='<?= base_url('assets/blogContent/BootstrapLogo.png') ?>' class='w-100' alt='Bootstrap banner' />
        <figcaption>Bootstrap banner</figcaption>
    </figure>
    <p><strong>Bootstrap</strong> merupakan framework CSS yang paling populer hingga hari ini dengan alasan yang baik. Bagi para <i>front-end developer</i>, Bootstrap merupakan pilihan pertama dalam framework CSS, menimbang beberapa keunggulan dibandingkan beberapa framework lain.</p>
    <h3 class='h5 mt-5'>Keunggulan:</h3>
    <ul style='padding-inline-start:20px'>
        <li class='normal'>Framework ini memiliki isu yang relatif sedikit dengan beberapa browser lain. Anda dapat menggunakan framework ini di beberapa jenis browser sekaligus, termasuk browser Android, dan memiliki perbedaan yang relatif minor dibandingkan dengan yang anda buat.</li>
        <li class='normal'>Bootstrap mendokumentasikan pekerjaan anda, sehingga apabila anda lupa dan hendak mengganti sesuatu, pekerjaan anda masih ada di tempat yang logis, menghemat waktu anda untuk menelusuri ribuan atau bahkan jutaan baris kode.</li>
        <li class='normal'>Metode yang digunakan Bootstrap untuk mendesain, telah membuatnya sangat populer untuk menjadi pilihan utama para web desainer di pasar.</li>
    </ul>
    <h3 class='h5 mt-5'>Kekurangan:</h3>
    <ul style='padding-inline-start:20px'>
        <li class='normal'>Pilihan untuk melakukan kustomisasi sangat terbatas, sehingga satu site dengan site lain akan tampak serupa. Membutuhkan usaha lebih untuk memasukan gaya desain anda ke dalamnya agar tidak mirip dengan layout default Bootstrap.</li>
    </ul>

    <h2 class='h3 mt-5'>2. Foundation</h2>
    <figure>
        <img src='<?= base_url('assets/blogContent/FoundationLogo.png') ?>' class='w-100' alt='Foundation banner' />
        <figcaption>Foundation banner</figcaption>
    </figure>
    <p>Framework ini sangat elegan, lebih rumit dan canggih dibandingkan dengan hampir seluruh framework tersedia lainnya. Desain yang canggih tersebut kompatibel dengan beragam browser dan perangkat. Dan menunya sangat responsif.</p>

    <h3 class='h5 mt-5'>Keunggulan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>Kemampuan untuk melakukan kustomisasi pada menu, mengijinkan para developer untuk menjadi lebih kreatif.</li>
        <li>Sangat user friendly, sehingga klien dan developer dapat mendesain website dengan mudah, tanpa perlu mengalah dengan pada pilihan yang terbatas, sehinggan memiliki lebih banyak kontrol pada pembangunan yang ada.</li>
    </ul>
    <h3 class='h5 mt-5'>Kekurangan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>Kurva belajar yang cukup curam, sehinggan sangat menantang bagi web developer junior.</li>
        <li>Dikarenakan tidak banyak yang menggunakan framework ini, akan lebih sulit apabila anda memiliki pertanyaan seputar framework ini.</li>
    </ul>

    <h2 class='h3'>3. Materialize</h2>
    <figure>
        <img src='<?= base_url('assets/blogContent/MaterializeLogo.png') ?>' class='w-100' alt='Materialize banner' />
        <figcaption>Materialize banner</figcaption>
    </figure>
    <p>Materialize merupakan salah satu produk dari Google, dilahirkan dari fitur - fitur terbaik Java, HTML, dan CSS, ditempa dengan menggunakan desain yang estetik menjadikan salah satu framework CSS terbaik yang ada.</p>

    <h3 class='h5 mt-5'>Keunggulan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>Kemampuan untuk melakukan kustomisasi sesuai dengan idealisme desain anda dilengkapi dengan platform dengan banyak pilihan CSS.</li>
        <li>Memiliki roda warna yang sangat banyak, membuat website anda sangat spesifik dan unik untuk anda. </li>
        <li>Dengan seluruh fitur yang disediakan, membuat waktu yang dibutuhkan untuk coding berkurang banyak.</li>
    </ul>
    <h3 class='h5 mt-5'>Kekurangan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>Tidak berjalan baik untuk browser yang relatif tua.</li>
        <li>Memiliki ukuran file yang cukup besar, membuatnya tidak efisien dalam aspek loading page.</li>
    </ul>

    <h2 class='h3 mt-5'>4. Semantic UI</h2>
    <figure>
        <img src='<?= base_url('assets/blogContent/SemanticUI.png') ?>' class='w-100' alt='Semantic UI banner' />
        <figcaption>Semantic UI banner</figcaption>
    </figure>
    <p>Dengan gaya yang lebih kontemporer, Semantic UI menawarkan framework yang paling ringan bagi para pengguna. Dikembangkan oleh seorang <em>bintang</em> di bidang web development, Jack Lukic, Semantic UI menjadi salah satu framework CSS terbaik tahunan.</p>

    <h3 class='h5 mt-5'>Keunggulan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>Banyak pilihan warna dan desain.</li>
        <li>Menu yang responsif.</li>
    </ul>
    <h3 class='h5 mt-5'>Kekurangan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>Tidak bekerja pada semua browser.</li>
        <li>Lebih banyak pengujian pada browser dibandingkan framework lain karena isu kompatibilitas ini, sehingga dapat menunda peluncuran website anda.</li>
    </ul>

    <h2 class='h3 mt-5'>5. Bulma</h2>
    <figure>
        <img src='<?= base_url('assets/blogContent/BulmaLogo.png') ?>' class='w-100' alt='Bulma banner' />
        <figcaption>Bulma banner</figcaption>
    </figure>
    <p>Satu hal yang membuat orang - orang menyukai Bulma, adalah framework ini open-source, sehingga tersedia bagi semua orang. Itu pun berarti framework ini sangat populer, mendorong lebih dari 200.000 developer di seluruh dunia untuk menggunakannya. Bulma pun memiliki interface yang bagik untuk komponen visual.</p>

    <h3 class='h5 mt-5'>Keunggulan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>Desainnya menggabungkan inovasi dengan kemudahan penggunaan.</li>
        <li>Bulma memiliki support system yang sangat baik, siap untuk membantu developer yang merasa kesulitan.</li>
    </ul>
    <h3 class='h5 mt-5'>Kekurangan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>Komunitasnya relatif berukuran kecil.</li>
        <li>Hanya sekitar 10% developer menggunakan framework ini.</li>
    </ul>
    <p>Itulah kelima framework CSS yang populer saat ini, anda dapat memilih salah satu dari kelima framework tersebut, atau bahkan tanpa menggunakan framework sama sekali. Framework hanya kita gunakan untuk mempermudah pekerjaan kita, namun tidak berarti kita harus bergantung pada salah satu framework yang ada.</p>


<?= $this->endSection() ?>
