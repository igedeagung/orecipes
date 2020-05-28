<?php 

namespace Orecipes\Infrastructure\Persistence;

use Orecipes\Domain\Model\Likes;
use Orecipes\Domain\Repository\LikeRepository;
use PDO;
use Phalcon\Db\Adapter\Pdo\Mysql;

class SqlRecipeRepository implements LikeRepository
{
    private $db;

    public function __construct(Mysql $db)
    {
        $this->db = $db;
    }

    public function countLikeByIdUser(int $id_user)
    {
        $statement = sprintf("SELECT COUNT(id_recipes) FROM likes WHERE id_user:id_user");
        $params=['id_user'=> $id_user];

        return $this->db->query($statement, $params)
            ->fetchAll(PDO::FETCH_ASSOC);
    }
}