<?php 
require_once('Projetos.php');
class Predio extends Projeto 
{
    protected $alturaMaxima; 
    protected $endereco; 
    protected $tipo;
    public function __construct(int $id,string $nome,string $descricao, Cliente $cliente, string $orcamento, string $codigoIdentificacao, string $dataInicio, 
    string $duracao, Arquiteto $arquiteto, string $percentualConformidade,string $alturaMaxima, Endereco $endereco, string $tipo)
    {
        parent::__construct($id,$nome,$descricao,$cliente,$orcamento, $codigoIdentificacao, $dataInicio, 
        $duracao,$arquiteto, $percentualConformidade);
        $this->alturaMaxima = $alturaMaxima;
        $this->endereco = $endereco;
        $this->tipo = $tipo;
    }

    /**
     * Get the value of alturaMaxima
     */ 
    public function getAlturaMaxima()
    {
        return $this->alturaMaxima;
    }

    /**
     * Set the value of alturaMaxima
     *
     * @return  self
     */ 
    public function setAlturaMaxima($alturaMaxima)
    {
        $this->alturaMaxima = $alturaMaxima;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}
?>