<?php 
require_once('Pessoa.php');
require_once('Endereco.php');
class Cliente extends Pessoa
{
    protected $privado;
    function __construct(int $id,string $nome ,string $sexo,Endereco $endereco, bool $privado)
    {
        parent::__construct($id,$nome ,$sexo,$endereco);
        $this->privado= $privado;
    }

    

    /**
     * Get the value of privado
     */ 
    public function getPrivado()
    {
        return $this->privado;
    }

    /**
     * Set the value of privado
     *
     * @return  self
     */ 
    public function setPrivado($privado)
    {
        $this->privado = $privado;

        return $this;
    }
}
?>