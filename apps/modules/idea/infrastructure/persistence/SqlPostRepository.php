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
}