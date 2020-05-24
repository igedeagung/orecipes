<?php 

namespace Orecipes\Infrastructure\Persistence;

use Orecipes\Domain\Model\Users;
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

        return $this->db->execute($statement, $params);
    }

    public function find(string $email, string $password){
        $statement = sprintf("SELECT id FROM users WHERE email=:email AND password=:password");
        $params = ['email' => $email, 'password' => $password];

        return $this->db->query($statement, $params)
            ->fetchAll(PDO::FETCH_ASSOC);
    }
}