<?php 

namespace Idy\Idea\Infrastructure\Persistence;

use Idy\Idea\Domain\Model\Users;
use Idy\Idea\Domain\Repository\UserRepository;
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
}