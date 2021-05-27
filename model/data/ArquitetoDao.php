<?php 
require_once("./config/Conection.php");

class ArquitetoDao
{
    public function create(Arquiteto $arquiteto)
    {
        $sql = "INSERT INTO `arquiteto`(`nome`, `sexo`, `anoExperiencia`, `provincia`, `municipio`, `rua`, `numero`) 
        VALUES(?,?,?,?,?,?,?)";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$arquiteto->getNome());
        $smtp->bindValue(2,$arquiteto->getSexo());
        $smtp->bindValue(3,$arquiteto->getAnoExperiencia());
        $smtp->bindValue(4,$arquiteto->getEndereco()->getProvincia());
        $smtp->bindValue(5,$arquiteto->getEndereco()->getMunicipio());
        $smtp->bindValue(6,$arquiteto->getEndereco()->getRua());
        $smtp->bindValue(7,$arquiteto->getEndereco()->getNumero());
        $smtp->execute();
    }
    public function read()
    {
        $query = "SELECT * FROM `arquiteto`";
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
    public function update(Arquiteto  $arquiteto)
    {
        $sql = "UPDATE `arquiteto` SET `nome`=?,`sexo`=?,`anoExperiencia`=?,`provincia`=?,`municipio`=?,`rua`=?,`numero`=? 
            WHERE `idArquiteto` = ?";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$arquiteto->getNome());
        $smtp->bindValue(2,$arquiteto->getSexo());
        $smtp->bindValue(3,$arquiteto->getAnoExperiencia());
        $smtp->bindValue(4,$arquiteto->getEndereco()->getProvincia());
        $smtp->bindValue(5,$arquiteto->getEndereco()->getMunicipio());
        $smtp->bindValue(6,$arquiteto->getEndereco()->getRua());
        $smtp->bindValue(7,$arquiteto->getEndereco()->getNumero());
        $smtp->bindValue(8,$arquiteto->getId());
        $smtp->execute();
    }
    public function delete(Arquiteto $arquiteto)
    {
        $sql = "DELETE FROM `arquiteto` WHERE `idArquiteto` = ?";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$arquiteto->getId());
        $smtp->execute();
    }
    
}
?>