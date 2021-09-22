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
                $data['header'] = array(
                    "title" => "Not found"
                );
                
                if($blogHeader == NULL){
                    echo view("blogs/notFound", $data);
                    $data['featured']   = array();
                } else {
                    $data['header']   = $blogHeader;
                    $data['featured']   = $blogModel->orderBy('RAND()')->whereNotIn('id', array($blogHeader['id']))->paginate(2);
                    echo view("blogs/" . $blogHeader['id'], $data);
                }
                
            }
        }

        public function getBlogs($page = 1){
            $blogModel = new BlogModel();
            $data = array();
            $blogsCount = $blogModel->countAllResults();
            $blogs      = $blogModel->orderBy('created_date', "ASC")->paginate(10);
            
            $data['blogs']  = $blogs;
            $data['count']  = $blogsCount;
            echo json_encode($data);
        }
    }
?>