<?= $this->extend('/blog') ?>

<?= $this->section('content') ?>
    <h1 class='text-center'><?= $header['title'] ?></h1>
    <img src='<?= base_url('assets/blog') . '/' . $header['id'] . '.webp' ?>' alt='<?= $header['title'] ?>' class='w-100' />
    <h2 class='text-center h5'><?= $header['subtitle'] ?></h2>
    <p class='text-center h5'><?= date("d M Y", strtotime($header['created_date'])) ?></p>
    <hr>
    <br>
    <p>Setiap <i>programmer</i> pasti mengetahui keahlian yang diperlukan untuk menjadi sepenuhnya kompeten. Apabila anda mengetahui sejumlah bahasa pemrograman dengan baik dan cara untuk membuat <i>software</i> dengan kualitas yang tinggi dari lembaran kosong, maka anda dapat menyebut diri anda seorang <i>professional programmer</i>.</p>
    <p>Namun keahlian – keahlian ini tidak cukup untuk menjadi seorang <i>programmer</i> yang hebat. Apabila anda tahu cara untuk <i>coding</i>, maka anda akan menjadi seorang <i>programmer</i> pada umumnya. Anda harus berkompetisi dengan ribuan atau bahkan jutaan <i>programmer</i> lain dan gaji anda, walaupun kemungkinan gaji anda lebih tinggi dari rata – rata, namun nilai tersebut dapat lebih tinggi dari seharusnya.</p>
    <p>Apakah anda pernah terbesit, apa yang membuat <i>programmer</i> – <i>programmer</i> hebat seperti Kent Beck, Scott Hanselman dan Robert C. Martin menjadi sangat sukses dan berbeda dari <i>programmer</i> lainnya? Kemungkinan pertama, sesederhana, mereka mungkin jenius dan hal tersebut merupakan bawaan lahir. Namun bukan hanya hal tersebut yang mempengaruhi.</p>
    <p>Apabila anda melihat apa yang orang – orang tersebut lakukan dan bagaimana mereka melakukannya, menjadi jelas bahwa keahlian mereka bukanlah keahlian yang bersifat teknikal, ataupun yang disebut ‘<i>soft skills</i>’, namun hal yang lebih fundamental yang membuat mereka, mereka.</p>
    <p>Jumlah bahasa <i>programming</i> dan <i>best practive</i> yang anda ketahui, tidak berpengaruh. <i>programmer</i> yang handal mengetahui cara untuk mengembangkan <i>meta-skills</i>lebih dibandingkan Bahasa – Bahasa program tersebut. Meta-skill merupakan komponen dari sifat yang dapat secara sadar dikembangkan, seperti kebiasan, rutinitas, kesadaran diri dan pola pikir secara umum.</p>
    <p>Belajar <i><i>programming</i></i> membutuhkan kerja keras. Namun sebagai seorang <i>programmer</i> anda perlu untuk terus mempelajari teknologi baru, karena teknologi secara berkala berkembang dan hal terakhir yang anda inginkan adalah ketinggalan jaman. Bahasa pemrogramman yang anda kenal hari ini, dapat hilang besok. Akan tetapi, apabila anda pelajari seluruh teknologi baru sesuai dengan kebutuhan pekerjaan yang anda incar, anda akan mengalami burn-out. Disini kebiasaan yang telah dikembangkan untuk belajar secara efektif dapat membantu anda untuk berevolusi seiring dengan perkembangan jaman.</p>
    
    <h2 class="h5 mt-5"><strong>Mengapa kebiasaan menjadi kunci untuk menjadikan kerja keras <i>programmer</i> mudah?</strong></h2>
    <p>Walaupun apabila kita seringkali berpikir bahwa kita adalah mahluk yang sadar, sebagian besar hal yang kita lakukan sudah kita lakukan secara tidak sadar. Sebagian besar dari perilaku atau tindakan yang kecil sepanjang hari merupakan <i>autopilot</i>, dan itulah maksud dari kebiasaan itu sendiri.</p>
    <p>Anda mungkin pernah berada di sebuah situasi dimana anda telah menyetir ke sebuah tempat dan tidak ingat seluruh detail dari perjalanan tersebut. Atau mungkin anda perlu kembali ke rumah untuk memeriksa kembali apakah anda telah mengunci pintu rumah anda, yang kemudian anda temukan sudah terkunci. Situasi seperti ini merupakan contoh yang baik bagaimana rutinitas bekerja dalam hidup kita sehari – hari dan menjadi hal yang di luar control dari kesadaran kita sendiri.</p>
    <p>Alasan dari tindakan kebiasaan tersebut menjadi bawah sadar adalah karena pemikiran sadar membutuhkan banyak energi. Menurut ilmu neuroscience dan evolutionary bilogy, otak telah berevolusi untuk menggunakan energi seefektif sebagai bentuk dari insting beratahan hidup kita. Setiap keputusan sadar yang dibuat, secara relatif memerlukan energi yang tinggi. Oleh sebab itu, otak kita berusaha untuk mengotomasi tindakan sebanyak – banyaknya.</p>
    <p>Otak manusia menggunakan kira – kira seperempat energi yang teserdia dalam tubuh kita, walaupun hanya bermassa <strong>2%</strong> dari total massa tubuh kita dan angka – angka tersebut merupakan angka untuk orang rata – rata. Orang yang berpikir lebih keras dari rata – rata, membutuhkan energi lebih besar lagi.</p>
    <p>Pertandingan catur pada tahun 1984 diberhentikan secara paksa, dikarenakan salah seorang kontestannya, Antoly Karpov dari Rusia, telah kehilangan berat badan hingga 10 kilogram dan para panitia khawatir dengan kesehatannya. Hal ini secara murni disebabkan karena Antoly Karpov berrmain puluhan kali pertandingan catur dalam jangka waktu yang relatif singkat. Ini merupakan bukti bahwa berpikir keras menggunakan energi yang sangat besar, hingga dapat membakar kalori dan memaksa kita untuk menggunakan cadangan energi kita.</p>
    <p><i>Programmer</i> sedikit banyak memiliki kesamaan dengan pemain catur. Dikarenakan kebiasaan kita untuk bekerja dengan berpikir, pekerjaan kita pun sangat menguras energi.</p>
    <figure>
        <img src='<?= base_url('assets/blogContent') . '/ChangeHabit.png' ?>' class='w-100' alt='Change Habit Illustration' />
        <figcaption>Ilustrasi merubah kebiasaan</figcaption>
    </figure>
    

    <h2 class="h5 mt-5"><strong>Bagaimana cara membuat <i>coding</i> semudah menggosok gigi?</strong></h2>
    <p>Apabila anda memiliki kebiasaan merawat gigi dengan baik, maka menggosok gigi menjadi sebuah kebiasaan. Namun untuk menjadi seorang <i>programmer</i> yang handal, anda perlu membuat keahlian teknikal menjadi suatu kebiasaan juga. Kabar buruk dari saran ini adalah, sesaat anda memutuskan untuk menjadi ahli <i>software</i>, anda perlu menyelesaikan tantangan yang sangat serius. Anda tidak memiliki pilihan lain dan perlu menggunakan tekad yang kuat.</p>
    <p>Namun kabar baiknya adalah, anda hanya perlu melakukan ini di awal untuk membentuk kebiasaan yang baik. Setelah kebiasaan ini terbentuk, pekejraan anda akan terasa mudah. Pikiran bawah sadar anda akan mengetahui tingkat kesulitan setiap pekerjaan apabila pekerjaan tersebut serupa dengan yang anda sudah lakukan ratusan atau bahkan ribuan kali sebelumnya dan anda tidak akan memiliki kebiasaan untuk menunda pekerjaan ini.</p>
    <p>Scott Hanselman, salah seorang <i>senior software</i> developer di <i>Microsoft</i> kelihatannya adalah seorang yang jenius dalam produktifitas. Dalam kesehariannya, beliau membuat blog, mewawancarai orang, keliling dunia dan memberikan seminar, menerbitkan pelajaran <i>programming</i>, dan dia memiliki keluarga.</p>
    <p>Namun dia bukan orang yang sespesial itu. Salah satu tema populer yang diangkat adalah cara mengakali produktifitas. Dan apabila anda mendengarkan seminarnya, beliau hanya sangat pintar mengatur rutinitas, dan rutinitas beliau menjadi kebiasaan.</p>
    <p>Scott Hanselman menunjukan bahwa salah satu teknik terbaik untuk membentuk kebiasaan, yakni untuk memisahkan pekerjaan anda dengan seluruh aspek hidup anda yang lain, membuat asosiatif yang kuat untuk meningkatkan produktifitas dan fokus. Anda dapat melakukan hal tersebut, dengan sebagai contoh melakukan hal – hal ini:</p>
    <ul>
        <li><p>Memiliki <i>ringtone</i> berbeda yang mengindikasikan waktunya anda bekerja.</p></li>
        <li><p>Memulai waktu kerja anda pada waktu yang sama setiap harinya.</p></li>
        <li><p>Kerjakan pekerjaan anda di sebuah ruangan yang peruntukannya hanya untuk bekerja.</p></li>
        <li><p>Menjaga komputer kerja anda hanya untuk bekerja dan tidak ada yang lain.</p></li>
    </ul>
    <figure>
        <img src='<?= base_url('assets/blogContent') . '/Garden.png' ?>' class='w-100' alt='English garden' />
        <figcaption>Ilustrasi kebun</figcaption>
    </figure>
    <h2 class="h5 mt-5"> Analogi yang akan membantu anda mengingat cara kebiasaan bekerja</h2>
    <p>Bayangkan pikiran anda adalah sebuah perkebunan . Apa yang akna terjadi apabila anda tidak mengurus kebun tersebut? Kebun tersebut akan dipenuhi dengan tanaman – tanaman liar.</p>
    <p>Tanaman liar tidak membutuhkan bantuan apapun dari anda, dan akan tumbuh di tempat yang anda tidak akan sangka. Apabila tanaman liar yang ada di kebun anda masih sedikit, kebun anda tidak akan rusak dan dapat dihilangkan dengan mudah, namun apabila tanaman liar yang ada semakin banyak, hal tersebut dapat merusak kebun anda. Tanaman liar dapat merusak tanah, sehingga tanaman tanaman tidak lagi dapat tumbuh di area tersebut, dan apabila anda coba untuk mencabut tanaman liar tersebut, anda mungkin akan merusak kebun anda.</p>
    <p>Tanaman hias, tidak seperti tanaman liar, membutuhkan usaha besar untuk menumbuhkannya. Apabila anda tidak dapat membuat tanah yang ditempati oleh tanaman hias tersebut sesuai, maka mereka dapat rusak atau bahkan mati. Namun tanaman liar merupakan salah satu alasan anda membuat kebun itu sendiri.</p>
    <p>Tanaman liar dalam analogi ini merepresentasikan kebiasaan yang buruk, kebiasaan yang tidak perlu dipupuk namun dapat tumbuh dengan sendirinya dengan cara yang anda sebetulnya tidak inginkan. Apabila kebiasaan tersebut belum menjadi rutinitas, anda dapat “mencabut” nya dengan mudah, namun apabila anda biarkan dia tumbuh, maka semakin sulit bahkan pada suatu titik menjadi tidak mungkin untuk “mencabut” tanaman liar tersebut.</p>
    <p>Tanaman hias merepresentasikan kebiasaan yang positif. Anda perlu secara aktif menjaga kebiasaan itu, atau mereka akan mati, atau lebih buruk, menjadi kebiasaan yang buruk. Misalkan, gigih adalah sebuah kebiasaan yang sangat baik, namun menjadi kebiasaan yang buruk apabila kita gigih melakukan hal yang tidak produktif.</p>
<?= $this->endSection() ?>