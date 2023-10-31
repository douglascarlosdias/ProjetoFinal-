<?php
require_once __DIR__ . '/../databases/conexao.php';

class CategoriaDAO
{

    private $dbh;

    public function __construct()
    {
        $this->dbh =  Conexao::getConexao();
    }

    public function getAll()
    {
        $query = "SELECT * FROM tiogogadelivery.categorias;";

        $stmt = $this->dbh->query($query);
        $rows = $stmt->fetchAll();
        $this->dbh = null;

        return $rows;
    }

    public function getById(int $id)
    {
        $query = "SELECT * FROM tiogogadelivery.categorias WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_BOTH);
        $this->dbh = null;

        return $row;
    }

    public function delete(int $id): int
    {
        $query = "DELETE FROM tiogogadelivery.categorias WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = (int) $stmt->rowCount();
        $this->dbh = null;

        return $result;
    }

    public function save(string $nome, $descricao): int
    {
        $query = "INSERT INTO tiogogadelivery.categorias (nome, descricao) 
            VALUES (:nome, :descricao);";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);

        $result = (int) $stmt->execute();
        $this->dbh = null;

        return $result;
    }

    public function update(int $id, string $nome): int
    {
        $query = "UPDATE tiogogadelivery.categorias SET nome = :nome 
            WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();
        $this->dbh = null;

        return $result;
    }
}