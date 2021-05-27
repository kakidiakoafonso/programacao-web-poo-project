<?php 
require_once("./config/Conection.php");

class PredioDao
{
    public function create(Predio $predio)
    {
        $sql = "INSERT INTO `predios`( `nome`, `descricao`, `orcamento`, 
        `codigoIdentificacao`, `dataInicio`, `duracao`, `percentualConformidade`, 
        `tipo`, `alturaMaxima`, `provincia`, `municipio`, `rua`, `numero`) 
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$predio->getNome());
        $smtp->bindValue(2,$predio->getDescricao());
        $smtp->bindValue(3,$predio->getOrcamento());
        $smtp->bindValue(4,$predio->getCodigoIdentificacao());
        $smtp->bindValue(5,$predio->getDataInicio());
        $smtp->bindValue(6,$predio->getDuracao());
        $smtp->bindValue(7,$predio->getPercentualConformidade());
        $smtp->bindValue(8,$predio->getTipo());
        $smtp->bindValue(9,$predio->getAlturaMaxima());
        $smtp->bindValue(10,$predio->getEndereco()->getProvincia());
        $smtp->bindValue(11,$predio->getEndereco()->getMunicipio());
        $smtp->bindValue(12,$predio->getEndereco()->getRua());
        $smtp->bindValue(13,$predio->getEndereco()->getNumero());
        $smtp->execute();
    }
    public function read()
    {
        $query = "SELECT * FROM `predios`";
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
    public function update(Predio  $predio)
    {
        $sql = "UPDATE `predios` SET `nome`= ?,`descricao`= ?,`orcamento`= ?,
        `codigoIdentificacao`= ?,`dataInicio`= ?,`duracao`= ?,`percentualConformidade`= ? ,
        `tipo`= ?,`alturaMaxima`= ?,`provincia`= ?,`municipio`= ?,`rua`= ?,
        `numero`= ? WHERE `idPredio`= ?";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$predio->getNome());
        $smtp->bindValue(2,$predio->getDescricao());
        $smtp->bindValue(3,$predio->getOrcamento());
        $smtp->bindValue(4,$predio->getCodigoIdentificacao());
        $smtp->bindValue(5,$predio->getDataInicio());
        $smtp->bindValue(6,$predio->getDuracao());
        $smtp->bindValue(7,$predio->getPercentualConformidade());
        $smtp->bindValue(8,$predio->getTipo());
        $smtp->bindValue(9,$predio->getAlturaMaxima());
        $smtp->bindValue(10,$predio->getEndereco()->getProvincia());
        $smtp->bindValue(11,$predio->getEndereco()->getMunicipio());
        $smtp->bindValue(12,$predio->getEndereco()->getRua());
        $smtp->bindValue(13,$predio->getEndereco()->getNumero());
        $smtp->bindValue(14,$predio->getId());
        $smtp->execute();
    }
    public function delete(Predio $predio)
    {
        $sql = "DELETE FROM `predios` WHERE `idPredio` = ?";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$predio->getId());
        $smtp->execute();
    }
    
}
?>