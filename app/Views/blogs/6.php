<?= $this->extend('/blog') ?>

<?= $this->section('content') ?>
    <h1 class='text-center'><?= $header['title'] ?></h1>
    <img src='<?= base_url('assets/blog') . '/' . $header['id'] . '.webp' ?>' class='w-100' />
    <h2 class='text-center h5'><?= $header['subtitle'] ?></h2>
    <p class='text-center h5'><?= date_format(date_create($blog["created_date"]), "d M Y") ?></p>
    <hr>
    <br>
    <h2 class='h3 mt-5'>1. Keterpercayaan ( <i>Trustworthy</i> )</h2> 
    <p>Kepercayaan adalah kualitas yang <strong>wajib</strong> dimiliki oleh seorang arsitek yang hebat.</p>
    <p>Kecuali para manager dan parter bisnis percaya pada arsitek tersebut, mereka tidak akan memeberikan proyek yang sifatnya kritis bagi perusahaan mereka. Tanpa rasa percaya kepada arsitek, maka tim pun tidak akan melakukan desain yang telah dirancang secara akurat.</p>
    <p>Salah satu cara yang dapat dilakukan untuk menginkatkan keterpercayaan adalah dengan menunjukan hasil yang sebelumnya telah dikerjakan. Apabila anda telah membuat sebuah proyek yang berhasil, maka anda dapat menggunakan itu untuk menopang claim anda.</p>
    <p>Apabila anda adalah seorang arsitek IT yang masih relatif baru dan tidak memiliki banyak pekerjaan sebelumnya untuk ditunjukan, maka anda perlu mendapatkan proyek - proyek seiring dengan waktu. Selama itu, anda dapat menggunakan sertifikas yang relefan untuk membuktikan bahwa anda dapat menyelesaikan proyek tersebut. Secara bersamaan, anda pun dapat bekerja pada proyek dengan skala lebih kecil dan memberikan desain yang brilian. Seiring anda sukses untuk menyelesaikan proyek - proyek tersebut, anda dapat membangun kredibilitas anda secara bertahap.</p>

    <h2 class='h3 mt-5'>2. Ketabahan ( <i>Steadfast</i> )</h2>
    <p>Umumnya, sebuah proyek yang relatif besar, tidak pernah berjalan semulus dengan perencanaan yang dilakukan sebelumnya. Sepanjang perjalanan, akan banyak tantangan dan rintangan yang perlu diselesaikan. Perubahan <i>requirement</i>, perubahan timeline, dan pengurangan budget merupakan hal yang dapat dihindari pada pengembangan software.</p>
    <p>Dengan segala perubahan keadaan tersebut, tidak ada yang dapat memprediksi bagaimana efeknya terhadap pekerjaan yang anda lakukan. Ketika proyek tidak berjalan sesuai dengan rencana, orang umumnya menjadi gugup. Ketika produk tidak jadi sesuai yang dibayangkan, ekskalasi mulai bertebangan. Perusahaan kehilangan perasaan tenang dan menjadi tidak sabar.</p>
    <p>Semakin tinggi tekanan tersebut, tim pun mulai panik, namun seorang arsitek <i>software</i> tidak memiliki kesempatan untuk ikut panik di tengah situasi tersebut. Para arsitek <i>software</i> yang hebat harus berpegang teguh pada visi mereka selama itu. Mereka perlu beradaptasi dengan relatias yang berubah, tetap ulet, memahami rintangan yagn ada, dan kembali dengan rencana yang telah diimprovisasi secara terus menerus untuk mencapai visi hasil dari produk tersebut.</p>
    <p>Dengan itu, ketabahan merupakan salah satu kepribadian yang perlu dimiliki oleh seorang arsitek <i>software</i> yang hebat. Mereka perlu determinasi dan komitmen untuk menyelesaikan rintangan - rintangan tersebut dan membuat proyeknya berhasil.</p>

    <h2 class='h3 mt-5'>3. Kepercayaan Diri</h2>
    <p>Peran seorang arsitek <i>software</i> adalah posisi yang memelurkan kepemimpinan. Mereka perlu memimpin tim mereka dengan segala keahlian teknis dan pengetahuan fungsional personel - personelnya, sehinggan mereka perlu menjadi percaya diri dalam kelebihan dan teknis mereka. Para arsitek perlu memiliki perancangan dan solusi mereka masing masing sebelum mereka dapat membuat timnya setuju dengan proposal tersebut. Tidak akan ada yang bekerja dengan seorang arsitek yang tidak tahu apa yang mereka lakukan.</p>
    <p>Apabila seorang arsitek tidak memiliki kepercayaan diri, tim dapat melihat hal tersebut secara langsung. Mereka tidak akan percaya dengan keputusan perancangannya dan merasa bahwa mereka perlu memilih teknologi sendiri untuk bisa menyelesaikan tugasnya. Hal itu dapat menjadi bencana ketika seluruh personel tim mencoba mengejar arsitektur mereka masing - masing.</p>
    <p>Untuk membentuk rasa percaya diri, seorang arsitek perlu menaruh usaha yang besar dalam belajar sistem yang ada. Mereka perlu memahami perilaku dan kesakitan atau kesulitan yang dirasakan oleh para penggunanya. Mereka juga perlu menemukan tantangan baik secara teknis ataupun operasional yang dialami oleh timnya. Seluruh pengetahuan ini akan menjadi sangat membantu pada saat hendak memutuskan solusi yang tepat untuk sebuah permasalahn Seluruh informasi ini pun dapat membantu seorang arsitek untuk membentuk keputusan yang dapat dipertanggung jawabkan pada saat diaudit.</p>
    <p>Pada akhirnya, para pemegang keputusan akan merasa nyaman dan siap untuk berkolaborasi dengan seorang arsitek yang memiliki kepercayaan diri.</p>
<?= $this->endSection() ?>