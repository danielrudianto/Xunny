<?php
    namespace App\Models;

    use  CodeIgniter\Model;
    
    class BlogModel extends Model{
        protected $table = 'blog';
        protected $useTimestamps = false;

        public function getPaginatedBlogs($offset = 0, $limit = 12){
            $query      = $this->db->query("
                SELECT blog.*, blogTag.*, commentTable.count
                FROM blog
                JOIN (
                    SELECT blog_tag.blog_id, GROUP_CONCAT(tags.name) AS tags
                    FROM blog_tag
                    JOIN tags ON blog_tag.tags_id = tags.id
                    GROUP BY blog_id
                ) AS blogTag
                ON blog.id = blogTag.blog_id
                LEFT JOIN (
                    SELECT COUNT(comment.id) AS count, comment.blog_id
                    FROM comment
                    GROUP BY comment.blog_id
                ) AS commentTable
                ON blog.id = commentTable.blog_id
                ORDER BY blog.created_date DESC
                LIMIT $limit OFFSET $offset
            ");

            $result         = $query->getResultArray();
            return $result;
        }

        public function getByTitle($title)
        {
            $query      = $this->db->query("
                SELECT blog.*, blogTag.*
                FROM blog
                JOIN (
                    SELECT blog_tag.blog_id, GROUP_CONCAT(tags.name) AS tags
                    FROM blog_tag
                    JOIN tags ON blog_tag.tags_id = tags.id
                    GROUP BY blog_id
                ) AS blogTag
                ON blog.id = blogTag.blog_id
                LEFT JOIN (
                    SELECT COUNT(comment.id) AS count, comment.blog_id
                    FROM comment
                    GROUP BY comment.blog_id
                ) AS commentTable
                ON blog.id = commentTable.blog_id
                WHERE blog.title = '$title'
            ");

            $result         = $query->getResultArray();
            return $result;   
        }
    }
?>