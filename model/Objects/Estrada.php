<?php 
require_once('Projetos.php');
class Estrada extends Projeto 
{
    protected $ferroviasEstradas; 
    protected $comprimento; 
    protected $dentroProvincia;
    public function __construct($id,string $nome,string $descricao, Cliente $cliente, string $orcamento, string $codigoIdentificacao, string $dataInicio, 
    string $duracao, Arquiteto $arquiteto, string $percentualConformidade,string $ferroviasEstradas, string $comprimento,bool $dentroProvincia)
    {
        parent::__construct($id,$nome,$descricao,$cliente,$orcamento, $codigoIdentificacao, $dataInicio, 
        $duracao,$arquiteto, $percentualConformidade);
        $this->ferroviasEstradas = $ferroviasEstradas;
        $this->comprimento = $comprimento;
        $this->dentroProvincia = $dentroProvincia;
    }

    /**
     * Get the value of ferroviasEstradas
     */ 
    public function getFerroviasEstradas()
    {
        return $this->ferroviasEstradas;
    }

    /**
     * Set the value of ferroviasEstradas
     *
     * @return  self
     */ 
    public function setFerroviasEstradas($ferroviasEstradas)
    {
        $this->ferroviasEstradas = $ferroviasEstradas;

        return $this;
    }

    /**
     * Get the value of comprimento
     */ 
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set the value of comprimento
     *
     * @return  self
     */ 
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get the value of dentroProvincia
     */ 
    public function getDentroProvincia()
    {
        return $this->dentroProvincia;
    }

    /**
     * Set the value of dentroProvincia
     *
     * @return  self
     */ 
    public function setDentroProvincia($dentroProvincia)
    {
        $this->dentroProvincia = $dentroProvincia;

        return $this;
    }
}
?>