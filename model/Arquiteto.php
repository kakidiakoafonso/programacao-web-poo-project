<?php 
require_once('Pessoa.php');
class Arquiteto extends Pessoa
{   
    protected $anoExperiencia;
    function __construct(string $nome, string $sexo, int $anoExperiencia)
    {
        parent::__construct($nome,$sexo);
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