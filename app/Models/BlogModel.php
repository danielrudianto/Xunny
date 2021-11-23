<?php
    namespace App\Models;

    use  CodeIgniter\Model;
    
    class BlogModel extends Model{
        protected $table = 'blog';
        protected $useTimestamps = false;

        public function getPaginatedBlogs($offset = 0){
            $query      = $this->db->query("
                SELECT * 
                FROM blog
                JOIN (
                    SELECT blog_tag.blog_id, GROUP_CONCAT(tags.name) AS tags
                    FROM blog_tag
                    JOIN tags ON blog_tag.tags_id = tags.id
                    GROUP BY blog_id
                ) AS blogTag
                ON blog.id = blogTag.blog_id
                ORDER BY blog.created_date DESC
                LIMIT 12 OFFSET $offset
            ");

            $result         = $query->getResultArray();
            return $result;
        }
    }
?>