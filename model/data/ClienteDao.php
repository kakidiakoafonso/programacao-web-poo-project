<?php 
require_once("./config/Conection.php");

class ClienteDao
{
    public function create(Cliente $cliente)
    {
        $sql = "INSERT INTO `cliente`(`nome`, `sexo`, `privado`, `provincia`, `municipio`, `rua`, `numero`) 
        VALUES(?,?,?,?,?,?,?)";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$cliente->getNome());
        $smtp->bindValue(2,$cliente->getSexo());
        $smtp->bindValue(3,$cliente->getPrivado());
        $smtp->bindValue(4,$cliente->getEndereco()->getProvincia());
        $smtp->bindValue(5,$cliente->getEndereco()->getMunicipio());
        $smtp->bindValue(6,$cliente->getEndereco()->getRua());
        $smtp->bindValue(7,$cliente->getEndereco()->getNumero());
        $smtp->execute();
    }
    public function read()
    {
        $query = "SELECT * FROM `cliente`";
        $smtp = Conexao::getConexao()->prepare($query);
        $smtp->execute();
        if($smtp->rowCount()>0)
            {
                $resultado = $smtp->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }
        else
            {
                return [];
            }
    }
    public function update(Cliente $cliente)
    {
        $sql = "UPDATE `cliente` SET `nome`=?,`sexo`=?,`privado`=?,`provincia`=?,`municipio`=?,`rua`=?,`numero`=? WHERE `idCliente` = ?";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$cliente->getNome());
        $smtp->bindValue(2,$cliente->getSexo());
        $smtp->bindValue(3,$cliente->getPrivado());
        $smtp->bindValue(4,$cliente->getEndereco()->getProvincia());
        $smtp->bindValue(5,$cliente->getEndereco()->getMunicipio());
        $smtp->bindValue(6,$cliente->getEndereco()->getRua());
        $smtp->bindValue(7,$cliente->getEndereco()->getNumero());
        $smtp->bindValue(8,$cliente->getId());
        $smtp->execute();
    }
    public function delete(Cliente $cliente)
    {
        $sql = "DELETE FROM `cliente` WHERE `idCliente` = ?";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$cliente->getId());
        $smtp->execute();
    }
    
}
?>