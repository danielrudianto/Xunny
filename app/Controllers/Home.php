<?php

namespace App\Controllers;
use App\Models\BlogModel;

class Home extends BaseController
{
    public function index()
    {
        $blogModel = new BlogModel();
        $data = array();
        $blogs = $blogModel->getPaginatedBlogs(0, 3);

        $data['blogs'] = $blogs;
        return view('index', $data);
    }

    public function sendEmail(){
        $name       = $_POST['name'];
        $mail       = $_POST['email'];
        $text       = $_POST['message'];

        if($name == "" || $mail == "" || $text == ""){
            echo 0;
        } else {
            $email = \Config\Services::email();
            $email->setFrom('system@xunny.id', 'Xunny System');
            $email->setTo('hello@xunny.id');
            $email->setReplyTo($mail);

            $email->setSubject('New contact from ' . $name);
            $email->setMessage($text);

            if($email->send()){
                echo 1;
            } else {
                echo 0;
            }
        }
    }
}
