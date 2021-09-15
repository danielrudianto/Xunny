<?php
namespace App\Controllers;

use App\Models\BlogModel;

    class Blogs extends BaseController
    {
        public function index($name = NULL)
        {
            if($name == NULL){
                echo view("blogs");
            } else {
                echo view('blog');
            }
        }

        public function getBlogs($page = 1){
            $blogModel = new BlogModel();
            $data = array();
            $blogsCount = $blogModel->countAllResults();
            $blogs      = $blogModel->orderBy('created_date', "ASC")->findAll();
            
            $data['blogs']  = $blogs;
            $data['count']  = $blogsCount;
            echo json_encode($data);
        }
    }
?>