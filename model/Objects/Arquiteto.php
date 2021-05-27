<?php 
require_once('Pessoa.php');
class Arquiteto extends Pessoa
{   
    protected $anoExperiencia;
    function __construct(int $id,string $nome, string $sexo,Endereco $endereco, int $anoExperiencia)
    {
        parent::__construct($id,$nome,$sexo,$endereco);
        $this->anoExperiencia= $anoExperiencia;
       
    }

    /**
     * Get the value of anoExperiencia
     */ 
    public function getAnoExperiencia(): int
    {
        return $this->anoExperiencia;
    }

    /**
     * Set the value of anoExperiencia
     *
     * @return  self
     */ 
    public function setAnoExperiencia(int $anoExperiencia)
    {
        $this->anoExperiencia = $anoExperiencia;

        return $this;
    }
}
?>