<?php 

namespace Idy\Idea\Infrastructure\Persistence;

use Idy\Idea\Domain\Model\Posts;
use Idy\Idea\Domain\Repository\PostRepository;
use PDO;
use Phalcon\Db\Adapter\Pdo\Mysql;

class SqlPostRepository implements PostRepository
{
    private $db;

    public function __construct(Mysql $db)
    {
        $this->db = $db;
    }

    public function showAllPost()
    {
        $statement = sprintf("SELECT * FROM posts");

        return $this->db->query($statement)
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save(Posts $post)
    {
        $statement = sprintf("INSERT INTO posts(id_user, judul, isi) VALUES(:id_user, :judul, :isi)" );
        $params = ['id_user' => $post->id_user() , 'judul' => $post->judul(), 'isi' => $post->Isi()];

        return $this->db->execute($statement, $params);
    }

    public function showPostById(int $id)
    {
        $statement = sprintf("SELECT * FROM posts WHERE id=:id");
        $params=['id'=> $id];

        return $this->db->query($statement, $params)
            ->fetchAll(PDO::FETCH_ASSOC);
    }
}