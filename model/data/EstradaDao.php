<?php 
require_once("./config/Conection.php");

class EstradaDao
{
    public function create(Estrada $estrada)
    {
        $sql = "INSERT INTO `estrada`(`nome`, `descricao`, `orcamento`, `codigoIdentificacao`, 
        `dataInicio`, `duracao`, `percentualConformidade`, `ferroviasEstradas`, `comprimento`, `dentroProvincia`)
        VALUES(?,?,?,?,?,?,?,?,?,?)";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$estrada->getNome());
        $smtp->bindValue(2,$estrada->getDescricao());
        $smtp->bindValue(3,$estrada->getOrcamento());
        $smtp->bindValue(4,$estrada->getCodigoIdentificacao());
        $smtp->bindValue(5,$estrada->getDataInicio());
        $smtp->bindValue(6,$estrada->getDuracao());
        $smtp->bindValue(7,$estrada->getPercentualConformidade());
        $smtp->bindValue(8,$estrada->getFerroviasEstradas());
        $smtp->bindValue(9,$estrada->getComprimento());
        $smtp->bindValue(10,$estrada->getDentroProvincia());
        $smtp->execute();
    }
    public function read()
    {
        $query = "SELECT * FROM `estrada`";
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
    public function update(Estrada  $estrada)
    {
        $sql = "UPDATE `estrada` SET `nome`=?,`descricao`=?,`orcamento`=?,`codigoIdentificacao`=?,`dataInicio`=?,
        `duracao`=?,`percentualConformidade`=?,`ferroviasEstradas`=?,`comprimento`=?,`dentroProvincia`=? 
        WHERE `idEstrada` = ?";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$estrada->getNome());
        $smtp->bindValue(2,$estrada->getDescricao());
        $smtp->bindValue(3,$estrada->getOrcamento());
        $smtp->bindValue(4,$estrada->getCodigoIdentificacao());
        $smtp->bindValue(5,$estrada->getDataInicio());
        $smtp->bindValue(6,$estrada->getDuracao());
        $smtp->bindValue(7,$estrada->getPercentualConformidade());
        $smtp->bindValue(8,$estrada->getFerroviasEstradas());
        $smtp->bindValue(9,$estrada->getComprimento());
        $smtp->bindValue(10,$estrada->getDentroProvincia());
        $smtp->bindValue(11,$estrada->getId());
        $smtp->execute();
    }
    public function delete(Estrada $estrada)
    {
        $sql = "DELETE FROM `estrada` WHERE `idEstrada` = ?";
        $smtp = Conexao::getConexao()->prepare($sql);
        $smtp->bindValue(1,$estrada->getId());
        $smtp->execute();
    }
    
}
?>