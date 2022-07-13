<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Sitemap extends BaseController
{
    public function index()
    {
        $blogModel = new BlogModel();
        $blogs = $blogModel->getAll();
        $data['blogs'] = $blogs;
        echo view('sitemap', $data);
    }
}
