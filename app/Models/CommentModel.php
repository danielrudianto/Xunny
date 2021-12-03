<?php
    namespace App\Models;

    use  CodeIgniter\Model;
    
    class CommentModel extends Model{
        protected $table = 'comment';
        protected $primaryKey   = 'id';
        protected $useTimestamps = false;
        protected $allowedFields = ['id', 'blog_id', 'name', 'website', 'comment'];

        public function getPaginatedResult($blogId, $offset = 0, $limit = 10){
            $query      = $this->db->query("
                SELECT * 
                FROM comment
                WHERE comment.blog_id = $blogId
                ORDER BY comment.created_on DESC
                LIMIT $limit OFFSET $offset
            ");
    
            $result         = $query->getResultArray();
            return $result;
        }
    }
?>