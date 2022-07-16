<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Sitemap extends BaseController
{
    public function index()
    {
        // libxml_use_internal_errors(true);

        $blogModel = new BlogModel();
        $blogs = $blogModel->getAll();

        $this->response->setContentType('text/xml');

        $xmlString = '
            <xml>
            <urlset
                xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
            <url>
            <loc>'. base_url() . '/</loc>
            <lastmod>' . date('Y-m-d H:i:s') . '</lastmod>
            <image:image>
                <image:loc>'. base_url() . '/assets/img/attachment-01.webp</image:loc>
                <image:caption>Xunny hero image</image:caption>
                <image:title>Custom mobile application</image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <image:image>
                <image:loc>'. base_url() . '/assets/img/experience-01.webp</image:loc>
                <image:caption>Ilustrasi Konsultasi dan Riset</image:caption>
                <image:title>Ilustrasi Konsultasi dan Riset</image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <image:image>
                <image:loc>'. base_url() . '/assets/img/experience-02.webp</image:loc>
                <image:caption>Ilustrasi Problem solving</image:caption>
                <image:title>Ilustrasi Konsultasi dan Riset</image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <image:image>
                <image:loc>'. base_url() . '/assets/img/experience-03.webp</image:loc>
                <image:caption>Ilustrasi implementasi</image:caption>
                <image:title>Ilustrasi implementasi</image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <image:image>
                <image:loc>'. base_url() . '/assets/img/attachment-07.webp</image:loc>
                <image:caption>PT Alpha Konstruksi Nusantara Application banner</image:caption>
                <image:title>PT Alpha Konstruksi Nusantara Application banner</image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <image:image>
                <image:loc>'. base_url() . '/assets/img/attachment-08.webp</image:loc>
                <image:caption>PT Alpha Konstruksi Nusantara Application portfolio</image:caption>
                <image:title>PT Alpha Konstruksi Nusantara Application portfolio</image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <image:image>
                <image:loc>'. base_url() . '/assets/img/attachment-09.webp</image:loc>
                <image:caption>Toko Utama Lighting Application portfolio</image:caption>
                <image:title>Toko Utama Lighting Application portfolio</image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <image:image>
                <image:loc>'. base_url() . '/assets/img/attachment-10.webp</image:loc>
                <image:caption>PT Duta Sapta Energi portfolio</image:caption>
                <image:title>PT Duta Sapta Energi portfolio</image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <image:image>
                <image:loc>'. base_url() . '/assets/img/attachment-11.webp</image:loc>
                <image:caption>Universal Clove website portfolio</image:caption>
                <image:title>Universal Clove website portfolio</image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <image:image>
                <image:loc>'. base_url() . '/assets/img/attachment-12.webp</image:loc>
                <image:caption>Sigap Application portfolio</image:caption>
                <image:title>Sigap Application portfolio</image:title>
                <image:geo_location>Bandung, Indonesia</image:geo_location>
            </image:image>
            <priority>1.00</priority>
            </url>';
            $xmlString .= PHP_EOL;
        for($i = 0; $i < count($blogs); $i++){
            $xmlString .= '<url>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<loc>'. base_url() . '/Blogs/' . str_replace([" "], "-", $blogs[$i]["displayTitle"]) . '</loc>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<lastmod>' . date('Y-m-d H:i:s') . '</lastmod>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<priority>1.0</priority>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<image:image>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<image:loc>'. base_url() . '/assets/blog/' . $blogs[$i]["id"] . '.webp</image:loc>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<image:caption>' . $blogs[$i]["title"] . '</image:caption>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<image:title>' . $blogs[$i]["title"] . '</image:title>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<image:geo_location>Bandung, Indonesia</image:geo_location>';
            $xmlString .= PHP_EOL;
            $xmlString .= '</image:image>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<image:image>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<image:loc>'. base_url() . '/assets/blog/' . $blogs[$i]["id"] . '.png</image:loc>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<image:caption>' . $blogs[$i]["title"] . '</image:caption>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<image:title>' . $blogs[$i]["title"] . '</image:title>';
            $xmlString .= PHP_EOL;
            $xmlString .= '<image:geo_location>Bandung, Indonesia</image:geo_location>';
            $xmlString .= PHP_EOL;
            $xmlString .= '</image:image>';
            $xmlString .= PHP_EOL;
            $xmlString .= '</url>';
            $xmlString .= PHP_EOL;
        }

        $xmlString .= '</urlset>';
        $xmlString .= PHP_EOL;
        $xmlString .= '</xml>';
        $xmlString .= PHP_EOL;

        echo $xmlString;

        $siteMapFile = fopen(FCPATH  . 'sitemap.xml', 'w');
        fwrite($siteMapFile, $xmlString);
        fclose($siteMapFile);
    }
}
