<?php
  header('Content-type: application/xml; charset="ISO-8859-1"',true); 
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>https://xunny.id/</loc>
        <lastmod>2022-01-28T09:25:04+00:00</lastmod>
        <image:image>
            <image:loc>http://xunny.id/assets/img/attachment-01.webp</image:loc>
            <image:caption>Xunny hero image</image:caption>
            <image:title>Custom mobile application</image:title>
            <image:geo_location>Bandung, Indonesia</image:geo_location>
        </image:image>
        <image:image>
            <image:loc>http://xunny.id/assets/img/experience-01.webp</image:loc>
            <image:caption>Ilustrasi Konsultasi dan Riset</image:caption>
            <image:title>Ilustrasi Konsultasi dan Riset</image:title>
            <image:geo_location>Bandung, Indonesia</image:geo_location>
        </image:image>
        <image:image>
            <image:loc>http://xunny.id/assets/img/experience-02.webp</image:loc>
            <image:caption>Ilustrasi Problem solving</image:caption>
            <image:title>Ilustrasi Konsultasi dan Riset</image:title>
            <image:geo_location>Bandung, Indonesia</image:geo_location>
        </image:image>
        <image:image>
            <image:loc>http://xunny.id/assets/img/experience-03.webp</image:loc>
            <image:caption>Ilustrasi implementasi</image:caption>
            <image:title>Ilustrasi implementasi</image:title>
            <image:geo_location>Bandung, Indonesia</image:geo_location>
        </image:image>
        <image:image>
            <image:loc>http://xunny.id/assets/img/attachment-07.webp</image:loc>
            <image:caption>PT Alpha Konstruksi Nusantara Application banner</image:caption>
            <image:title>PT Alpha Konstruksi Nusantara Application banner</image:title>
            <image:geo_location>Bandung, Indonesia</image:geo_location>
        </image:image>


        <image:image>
            <image:loc>http://xunny.id/assets/img/attachment-08.webp</image:loc>
            <image:caption>PT Alpha Konstruksi Nusantara Application portfolio</image:caption>
            <image:title>PT Alpha Konstruksi Nusantara Application portfolio</image:title>
            <image:geo_location>Bandung, Indonesia</image:geo_location>
        </image:image>
        <image:image>
            <image:loc>http://xunny.id/assets/img/attachment-09.webp</image:loc>
            <image:caption>Toko Utama Lighting Application portfolio</image:caption>
            <image:title>Toko Utama Lighting Application portfolio</image:title>
            <image:geo_location>Bandung, Indonesia</image:geo_location>
        </image:image>
        <image:image>
            <image:loc>http://xunny.id/assets/img/attachment-10.webp</image:loc>
            <image:caption>PT Duta Sapta Energi portfolio</image:caption>
            <image:title>PT Duta Sapta Energi portfolio</image:title>
            <image:geo_location>Bandung, Indonesia</image:geo_location>
        </image:image>
        <image:image>
            <image:loc>http://xunny.id/assets/img/attachment-11.webp</image:loc>
            <image:caption>Universal Clove website portfolio</image:caption>
            <image:title>Universal Clove website portfolio</image:title>
            <image:geo_location>Bandung, Indonesia</image:geo_location>
        </image:image>
        <image:image>
            <image:loc>http://xunny.id/assets/img/attachment-12.webp</image:loc>
            <image:caption>Sigap Application portfolio</image:caption>
            <image:title>Sigap Application portfolio</image:title>
            <image:geo_location>Bandung, Indonesia</image:geo_location>
        </image:image>
        <priority>1.00</priority>
    </url>
    <!-- <url>
        <loc>https://xunny.id/Blogs</loc>
        <lastmod><?= date('Y-m-d H:m:s') ?></lastmod>
        <priority>0.80</priority>
    </url>
    <?php foreach ($blogs as $blog) { ?>
        <url>
            <loc>https://xunny.id/Blogs/<?= str_replace([" "], "-", $blog["displayTitle"]) ?></loc>
            <lastmod><?= date('Y-m-d H:i:s') ?></lastmod>
            <priority>0.60</priority>
            <image:image>
                <image:loc>http://xunny.id/assets/blog/<?= $blog["id"] ?>.webp</image:loc>
                <image:caption><?= $blog["title"] ?></image:caption>
                <image:title><?= $blog["title"] ?></image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <image:image>
                <image:loc>http://xunny.id/assets/blog/<?= $blog["id"] ?>.png</image:loc>
                <image:caption><?= $blog["title"] ?></image:caption>
                <image:title><?= $blog["title"] ?></image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
        </url>
    <?php } ?> -->
</urlset>