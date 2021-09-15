<?php

namespace App\Controllers;
use App\Models\BlogModel;

class Home extends BaseController
{
    public function index()
    {
        $blogModel = new BlogModel();
        $data = array();
        $blogs      = $blogModel->orderBy('created_date', "DESC")->limit(3)->findAll();
        $data['blogs'] = $blogs;
        return view('index', $data);
    }
}
