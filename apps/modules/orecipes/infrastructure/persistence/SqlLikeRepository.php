<?php 

namespace Orecipes\Infrastructure\Persistence;

use Orecipes\Domain\Model\Likes;
use Orecipes\Domain\Repository\LikeRepository;
use PDO;
use Phalcon\Db\Adapter\Pdo\Mysql;

class SqlLikeRepository implements LikeRepository
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

    public function save(Likes $like){
        $statement = sprintf("INSERT INTO likes(id_user,id_recipes) VALUES(:id_user, :id_recipes)" );
        $params = ['id_user' => $like->id_user() , 'id_recipes' => $like->id_recipes()];

        return $this->db->execute($statement, $params);
    }

    public function delete(Likes $like){
        $statement = sprintf("DELETE FROM likes WHERE id_user=:id_user AND id_recipes=:id_recipes" );
        $params = ['id_user' => $like->id_user() , 'id_recipes' => $like->id_recipes()];

        return $this->db->execute($statement, $params);
    }
}