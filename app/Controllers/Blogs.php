<?php
namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CommentModel;

class Blogs extends BaseController
    {
        public function __construct()
        {
            $this->pager = \Config\Services::pager();
        }

        public function index($name = NULL)
        {
            if($name == NULL){
                $blogModel = new BlogModel();
                $data = array();
                $blogs      = $blogModel->getPaginatedBlogs(0);
                
                $data['blogs']  = $blogs;
                echo view("blogs", $data);
            } else {
                $formattedName = str_replace(["-"], " ", $name);

                $blogModel = new BlogModel();
                $commentModel = new CommentModel();
                // $blogHeader         = $blogModel->getByTitle($formattedName);
                $blogHeader       = $blogModel->where(['title' => $formattedName])->first();
                $data['header'] = array(
                    "title" => "Not found"
                );
                
                if($blogHeader == NULL){
                    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                } else {
                    $data['header']     = $blogHeader;
                    $data['featured']   = $blogModel->orderBy('RAND()')->whereNotIn('id', array($blogHeader['id']))->paginate(2);
                    $data['comments']   = $commentModel->where("blog_id", $blogHeader['id'])->orderBy('created_on', 'desc')->paginate(10);
                    $data['commentsCount']  = $commentModel->where('blog_id', $blogHeader['id'])->countAllResults();
                    echo view("blogs/" . $blogHeader['id'], $data);
                }
                
            }
        }

        public function getBlogs($page = 1){
            $blogModel = new BlogModel();
            $data = array();
            $blogsCount = $blogModel->countAllResults();
            $blogs      = $blogModel->getPaginatedBlogs(($page - 1) * 12);
            
            $data['blogs']  = $blogs;
            $data['count']  = $blogsCount;
            echo json_encode($data);
        }

        public function Comment($id, $page){
            $commentModel = new CommentModel();
            $offset         = ($page - 1) * 10;
            $comments       = $commentModel->getPaginatedResult($id, $offset);
            echo json_encode($comments);
        }

        public function PostComment(){
            $id         = (int) $this->request->getPost('blog');
            if($id != 0 && $id != NULL){
                $commentModel       = new CommentModel();
                $name               = $this->request->getPost('name');
                $website            = $this->request->getPost('website');
                $comment            = $this->request->getPost('comment');

                $result             = $commentModel->insert([
                    "id" => "",
                    "name" => $this->db->escape($name),
                    "website" => $this->db->escape($website),
                    "comment" => $this->db->escape($comment),
                    "blog_id" => $id
                ]);

                echo 1;
            } else {
                echo 0;
            }
        }
    }
?>