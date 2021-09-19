<?= $this->extend('/blog') ?>

<?= $this->section('content') ?>
    <h1 class='text-center'><?= $header['title'] ?></h1>
    <img src='<?= base_url('assets/blog') . '/' . $header['id'] . '.webp' ?>' class='w-100' />
    <h2 class='text-center h5'><?= $header['subtitle'] ?></h2>
    <p class='text-center h5'><?= date_format(date_create($blog["created_date"]), "d M Y") ?></p>
    <hr>
    <br>
    <h2 class='h3'>1. Bootstrap</h2>
    <img src='<?= base_url('assets/blogContent/BootstrapLogo.png') ?>' class='w-100' alt='Bootstrap banner' />
    <p><strong>Bootstrap</strong> merupakan framework CSS yang paling populer hingga hari ini dengan alasan yang baik. Bagi para <i>front-end developer</i>, Bootstrap merupakan pilihan pertama dalam framework CSS, menimbang beberapa keunggulan dibandingkan beberapa framework lain.</p>
    <h3 class='h4'>Keunggulan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>
            <p>
                Framework ini memiliki isu yang relatif sedikit dengan beberapa browser lain. Anda dapat menggunakan framework ini di beberapa jenis browser sekaligus, termasuk browser Android, dan memiliki perbedaan yang relatif minor dibandingkan dengan yang anda buat.
            </p>
        </li>
        <li>
            <p>
                Bootstrap mendokumentasikan pekerjaan anda, sehingga apabila anda lupa dan hendak mengganti sesuatu, pekerjaan anda masih ada di tempat yang logis, menghemat waktu anda untuk menelusuri ribuan atau bahkan jutaan baris kode.
            </p>
        </li>
        <li>
            <p>
                Metode yang digunakan Bootstrap untuk mendesain, telah membuatnya sangat populer untuk menjadi pilihan utama para web desainer di pasar.
            </p>
        </li>
    </ul>
    <h3 class='h4'>Kekurangan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>
            <p>
                Pilihan untuk melakukan kustomisasi sangat terbatas, sehingga satu site dengan site lain akan tampak serupa. Membutuhkan usaha lebih untuk memasukan gaya desain anda ke dalamnya agar tidak mirip dengan layout default Bootstrap.
            </p>
        </li>
    </ul>

    <h2 class='h3'>2. Foundation</h2>
    <img src='<?= base_url('assets/blogContent/FoundationLogo.png') ?>' class='w-100' alt='Foundation banner' />
    <p>Framework ini sangat elegan, lebih rumit dan canggih dibandingkan dengan hampir seluruh framework tersedia lainnya. Desain yang canggih tersebut kompatibel dengan beragam browser dan perangkat. Dan menunya sangat responsif.</p>

    <h3 class='h4'>Keunggulan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>
            <p>
                Kemampuan untuk melakukan kustomisasi pada menu, mengijinkan para developer untuk menjadi lebih kreatif.
            </p>
        </li>
        <li>
            <p>
                Sangat user friendly, sehingga klien dan developer dapat mendesain website dengan mudah, tanpa perlu mengalah dengan pada pilihan yang terbatas, sehinggan memiliki lebih banyak kontrol pada pembangunan yang ada.
            </p>
        </li>
    </ul>
    <h3 class='h4'>Kekurangan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>
            <p>
                Kurva belajar yang cukup curam, sehinggan sangat menantang bagi web developer junior.
            </p>
        </li>
        <li>
            <p>
                Dikarenakan tidak banyak yang menggunakan framework ini, akan lebih sulit apabila anda memiliki pertanyaan seputar framework ini.
            </p>
        </li>
    </ul>

    <h2 class='h3'>3. Materialize</h2>
    <img src='<?= base_url('assets/blogContent/MaterializeLogo.png') ?>' class='w-100' alt='Materialize banner' />
    <p>Materialize merupakan salah satu produk dari Google, dilahirkan dari fitur - fitur terbaik Java, HTML, dan CSS, ditempa dengan menggunakan desain yang estetik menjadikan salah satu framework CSS terbaik yang ada.</p>

    <h3 class='h4'>Keunggulan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>
            <p>
                Kemampuan untuk melakukan kustomisasi sesuai dengan idealisme desain anda dilengkapi dengan platform dengan banyak pilihan CSS.
            </p>
        </li>
        <li>
            <p>
                Memiliki roda warna yang sangat banyak, membuat website anda sangat spesifik dan unik untuk anda. 
            </p>
        </li>
        <li>
            <p>
                Dengan seluruh fitur yang disediakan, membuat waktu yang dibutuhkan untuk coding berkurang banyak.
            </p>
        </li>
    </ul>
    <h3 class='h4'>Kekurangan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>
            <p>
                Tidak berjalan baik untuk browser yang relatif tua.
            </p>
        </li>
        <li>
            <p>
                Memiliki ukuran file yang cukup besar, membuatnya tidak efisien dalam aspek loading page.
            </p>
        </li>
    </ul>

    <h2 class='h3'>4. Semantic UI</h2>
    <img src='<?= base_url('assets/blogContent/SemanticUI.png') ?>' class='w-100' alt='Semantic UI banner' />
    <p>Dengan gaya yang lebih kontemporer, Semantic UI menawarkan framework yang paling ringan bagi para pengguna. Dikembangkan oleh seorang <em>bintang</em> di bidang web development, Jack Lukic, Semantic UI menjadi salah satu framework CSS terbaik tahunan.</p>

    <h3 class='h4'>Keunggulan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>
            <p>
                Banyak pilihan warna dan desain.
            </p>
        </li>
        <li>
            <p>
                Menu yang responsif.
            </p>
        </li>
    </ul>
    <h3 class='h4'>Kekurangan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>
            <p>
                Tidak bekerja pada semua browser.
            </p>
        </li>
        <li>
            <p>
                Lebih banyak pengujian pada browser dibandingkan framework lain karena isu kompatibilitas ini, sehingga dapat menunda peluncuran website anda.
            </p>
        </li>
    </ul>

    <h2 class='h3'>5. Bulma</h2>
    <img src='<?= base_url('assets/blogContent/BulmaLogo.png') ?>' class='w-100' alt='Bulma banner' />
    <p>Satu hal yang membuat orang - orang menyukai Bulma, adalah framework ini open-source, sehingga tersedia bagi semua orang. Itu pun berarti framework ini sangat populer, mendorong lebih dari 200.000 developer di seluruh dunia untuk menggunakannya. Bulma pun memiliki interface yang bagik untuk komponen visual.</p>

    <h3 class='h4'>Keunggulan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>
            <p>
                Desainnya menggabungkan inovasi dengan kemudahan penggunaan.
            </p>
        </li>
        <li>
            <p>
                Bulma memiliki support system yang sangat baik, siap untuk membantu developer yang merasa kesulitan.
            </p>
        </li>
    </ul>
    <h3 class='h4'>Kekurangan:</h3>
    <ul style='padding-inline-start:20px'>
        <li>
            <p>
                Komunitasnya relatif berukuran kecil.
            </p>
        </li>
        <li>
            <p>
                Hanya sekitar 10% developer menggunakan framework ini.
            </p>
        </li>
    </ul>


<?= $this->endSection() ?>