<?= $this->extend('/blog') ?>

<?= $this->section('content') ?>
    <style>
        #notFoundText{
            font-family:sans-serif;
            font-size:70px;
            font-weight: bold;
            color:#FFB423;
        }
    </style>
    <h1 id='notFoundText'>404</h1>
    <h1 class='text-center'>Oops!</h1>
    <h4>Mohon maaf, konten yang anda cari tidak kami temukan.</h4>
<?= $this->endSection() ?>