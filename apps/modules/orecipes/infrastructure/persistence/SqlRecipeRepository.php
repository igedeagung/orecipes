<?php 

namespace Orecipes\Infrastructure\Persistence;

use Orecipes\Domain\Model\Recipes;
use Orecipes\Domain\Repository\RecipeRepository;
use PDO;
use Phalcon\Db\Adapter\Pdo\Mysql;

class SqlRecipeRepository implements RecipeRepository
{
    private $db;

    public function __construct(Mysql $db)
    {
        $this->db = $db;
    }

    public function showAllRecipe()
    {
        $statement = sprintf("SELECT * FROM recipes");

        return $this->db->query($statement)
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save(Recipes $recipe)
    {
        $statement = sprintf("INSERT INTO recipes(id_user, judul, isi) VALUES(:id_user, :judul, :isi)" );
        $params = ['id_user' => $recipe->id_user() , 'judul' => $recipe->judul(), 'isi' => $recipe->Isi()];

        return $this->db->execute($statement, $params);
    }

    public function showRecipeById(int $id)
    {
        $statement = sprintf("SELECT * FROM recipes WHERE id=:id");
        $params=['id'=> $id];

        return $this->db->query($statement, $params)
            ->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function update(int $id, string $judul, string $isi)
    {
        $statement = sprintf("UPDATE recipes SET judul=:judul, isi=:isi WHERE id=:id" );
        $params = ['judul' => $judul, 'isi' => $isi, 'id' => $id];

        return $this->db->execute($statement, $params);
    }

    public function delete(int $id)
    {
        $statement = sprintf("DELETE FROM recipes WHERE id=:id" );
        $params = ['id' => $id];

        return $this->db->execute($statement, $params);
    }
}