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
                $formattedName = str_replace(["-"], " ", $name);
                $blogModel = new BlogModel();
                $blogHeader       = $blogModel->where(['title' => $formattedName])->first();
                if($blogHeader == NULL){
                    echo view("blogs/notFound");
                } else {
                    $data['header']   = $blogHeader;
                    echo view("blogs/" . $blogHeader['id'], $data);
                }
                
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