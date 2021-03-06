<?php 

namespace Orecipes\Infrastructure\Persistence;

use Orecipes\Domain\Model\Users;
use Orecipes\Domain\Model\UserLikes;
use Orecipes\Domain\Repository\UserRepository;
use PDO;
use Phalcon\Db\Adapter\Pdo\Mysql;

class SqlUserRepository implements UserRepository
{
    private $db;

    public function __construct(Mysql $db)
    {
        $this->db = $db;
    }

    public function save(Users $user)
    {
        $statement = sprintf("INSERT INTO users(nama, email, password) VALUES(:nama, :email, :password)" );
        $params = ['nama' => $user->nama() , 'email' => $user->email(), 'password' => $user->password()];

        $this->db->execute($statement, $params);

        return $this->db->lastInsertId();

    }

    public function find(string $email, string $password){
        $statement = sprintf("SELECT id FROM users WHERE email=:email AND password=:password");
        $params = ['email' => $email, 'password' => $password];

        return $this->db->query($statement, $params)
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function byId(int $id){
        $statement = sprintf("SELECT * FROM users WHERE id=:id");
        $params = ['id' => $id];

        return $this->db->query($statement, $params)
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateLike(UserLikes $userlike){
        $statement = sprintf("UPDATE users SET count_likes=:count_likes WHERE id=:id" );
        $params = ['count_likes' => $userlike->count_likes(), 'id' => $userlike->id_user()];

        return $this->db->execute($statement, $params);
    }

    public function checkCount(int $id){
        $statement = sprintf("SELECT count_likes FROM users WHERE id=:id");
        $params = ['id' => $id];

        return $this->db->query($statement, $params)
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById(int $id){
        $statement = sprintf("SELECT * FROM users WHERE id=:id");
        $params = ['id' => $id];

        return $this->db->query($statement, $params)
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(int $id, string $nama, string $email){
        $statement = sprintf("UPDATE users SET nama=:nama, email=:email WHERE id=:id");
        $params = ['nama' => $nama, 'email' => $email, 'id' => $id];

        return $this->db->execute($statement, $params);
    }
}