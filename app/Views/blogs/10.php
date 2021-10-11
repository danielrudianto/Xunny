<?= $this->extend('/blog') ?>

<?= $this->section('content') ?>
    <h1 class='text-center'><?= $header['title'] ?></h1>
    <img src='<?= base_url('assets/blog') . '/' . $header['id'] . '.webp' ?>' alt='<?= $header['title'] ?>' class='w-100' />
    <h2 class='text-center h5'><?= $header['subtitle'] ?></h2>
    <p class='text-center h5'><?= date_format(date_create($blog["created_date"]), "d M Y") ?></p>
    <hr>
    <br>
    <p>Berdasarkan Wikipedia, <q cite="https://id.wikipedia.org/wiki/WebSocket">Websocket merupakan protokol komunikasi komputer, yang menyediakan saluran komunikasi dupleks secara penuh melalui koneksi TCP tunggal</q>. Apa yang dimaksud dengan itu? Websocket menyediakan sebuah <em>perangkat</em> baik untuk client dan server untuk melakukan komunikasi, memungkinkan mereka untuk menerima dan mengirimkan suatu data dalam waktu yang relatif instan. Pada aplikasi yang tradisional, aplikasi client akan secara kontinu memeriksa apakah ada data baru di server, menimbulkan <i>latency</i> yang tinggi pada jaringan. Dengan keberadaan dan aplikasi websocket, maka aplikasi client <strong>hanya</strong> menerima data pada saat server "memberitahu".</p>

    <p>Sebagai ilustrasi, bayangkan ada sebuah kontainer berisi bola, terdapat orang lain berjarak beberapa meter dari kontainer di bagian muka kontainer ( disebut A ), dan kita berada beberapa meter dari kontainer tersebut. Tugas kita adalah untuk secara kontinu mengosongkan kontainer tersebut dari bola bola yang akan dimasukan oleh A ke dalam kontainer. Tanpa media komunikasi yang memadai, mungkin yang perlu kita lakukan adalah memeriksa kontainer tersebut dengan interval beberapa detik atau menit atau jam ke kontainer tersebut, baik ada perubahan ataupun tidak. Hal ini akan menimbulkan kita untuk selalu bergerak dan "membuat macet" lalu lintas dari titik kita ke kontainer tersebut.</p>

    <p>Apa yang terjadi apabila pada skenario yang serupa, kita tingkatkan kemampuan kontainer dan kita sendiri.</p>

    <ol>
        <li>Kontainer dapat melemparkan bola yang masuk ke orang yang dituju secara otomatis.</li>
        <li>Kita diberikan kemampuan untuk menerima lemparan bola dari kontainer.</li>
    </ol>

    <p>Maka hal pertama yang kita akan rasakan adalah, peningkatan efektifitas, karena kita tidak lagi perlu bolak - balik ke kontainer, namun kita hanya perlu menangkap bola yang akan dilemparkan kontainer pada saat ada bola baru masuk. Secara garis besar, begitulah bagaimana <strong>websocket</strong> akan membantu kita.</p>

    <p>Terdapat sangat banyak fitur yang dapat diaplikasikan dengan pola pikir tersebut, websocket, seperti notifikasi, permainan <i>multiplayer</i> yang membutuhkan data realtime tentang tindakan pemain lain, dan sebagainya.</p>

    <h2 class='mt-5'>Sedikit tentang sejarah Websocket</h2>
    <p>Websocket yang banyak kita gunakan hari ini, diciptakan oleh Michael Carter dan Ian Hickson pada Juni 2008. Pada Desember 2009, Google Chrome, merupakan satu satunya browser yang memumpuni standar websocket dan diguankan sebagai fitur bawaan. Sejak saat itu, browser lain seperti Firefox ( 2010 ), Safari ( 2010 ), Opera ( 2010 ) mulai mengembangkan browser mereka untuk dapat support fitur websocket.</p>
    
    <h2 class='mt-5'><i>Library</i> Websocket</h2>
    <p>Sejak "proyek" websocket ini diselesaikan, beberapa developer memutuskan untuk membuat <i>library</i> untuk mempermudah implementasi penggunaan websocket ke dalam aplikasi. <i>Library</i> yang umum digunakan antara lain adalah:</p>
    <ol>
        <li>
            <h3 class='h5 mt-3'>Socket.io</h3>
            <figure>
                <img src="<?= base_url('assets/blogContent/SocketIO.png') ?>" class='w-100' alt='Socket.io logo' />
                <figcaption>Socket.io logo</figcaption>
            </figure>
            <p><a href="https://socket.io" rel="dofollow">Socket.Io</a> merupakan salah satu <i>library</i> webSocket paling populer yang digunakan pada Javascript untuk membuat aplikasi real-time. Socket.io menyediakan anda dengan komunikasi antara browser dengan server anda. Library ini memiliki 2 bagian utama, yakni library pada server dan <i>library</i> pada client / browser. <i>Library</i> ini dapat dengan mudah diinstall dengan menggunakan npm.</p>
            <p>Fitur dari socket.io antara lain adalah:</p>
            <ul>
                <li>Menyediakan anda dengan keandalan maksimum, seperti dapat membuat koneksi bahkan pada prxy dan load balancer, firewall, dan antivirus.</li>
                <li>Ukuran yang relatif kecil, serta menerapkan sistem lazy loading.</li>
            </ul>
        </li>
        <li>
            <h3 class='h5 mt-5'>WS</h3>
            <p>WS merupakan <i>library</i> webSocket yang cukup populer dengan memiliki lebih dari 9 ribu bintang di GitHub. WS adalah <i>library</i> untuk server / user pada bahasa Node.Js. <i>Library</i> ini support hampir seluruh browser. Hal ini telah membuat orang untuk memiliki WS dibandingkan dengan socket.io. WS, secara umum, adalah tipe webSocket yang sangat cepat, mudah untuk digunakan, dan telah diuji sepenuhnya. Bersama dengan modul WS, terdapat 2 modul tambahan yang dapat digunakan untuk meningkatkan performa operasi tertentu, yakni:</p>
            <ul>
                <li>
                    <h4 class='h6'>Buffer</h4>
                    <code>npm install — save-optional buffer</code>
                </li>
                <li>
                    <h4 class='h6'>Buffer</h4>
                    <code>npm install –save-optional utf-8-validate</code>
                </li>
            </ul>
        </li>
        <li>
            <h3 class='h5 mt-5'>Sockette</h3>
            <figure>
                <img src="<?= base_url('assets/blogContent/Sockette.png') ?>" class='w-100' alt='Sockette logo' />
                <figcaption>Socket.io logo</figcaption>
            </figure>
            <p>
                Sockette adalah wrapper sangat kecil ( 367 bytes ) dari webSocket yang akan secara otomatis melakukan koneksi kembali apabila koneksi hilang. Sockette memungkinkan hal untuk digunakan kembali, menghindari kebutuhan untuk menatakan kembali seluruh <i>listener</i> pada event. Di dalam setiap fungsi <i>callback</i> <i>EventListener</i>, anda memiliki akses langsung ke websocket.
            </p>
        </li>
    </ol>

    <h2 class='mt-5'>Penutup</h2>
    <p>Sekian pembahasan kita kali ini tentang webSocket. WebSocket memberikan manfaat dan aplikasi yang hampir tidak terbatas bagi kita. <a href='<?= base_url() ?>'>Xunny.Id</a> dapat membantu anda untuk membuat aplikasi anda menjadi realtime baik dengan ataupun tanpa aplikasi dari webSocket. Kontak kami untk informasi lebih lanjut <a href='<?= base_url() ?>/#Contact'>disini</a> . Terima kasih dan jangan lewatkan artikel artikel kami yang lain.</p>
<?= $this->endSection() ?>