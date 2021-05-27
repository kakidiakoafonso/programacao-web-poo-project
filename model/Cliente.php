<?php 
require_once('Pessoa.php');
require_once('Endereco.php');
class Cliente extends Pessoa
{
    protected $endereco;
    protected $privado;
    function __construct(string $nome ,string $sexo,Endereco $endereco, bool $privado)
    {
        parent::__construct($nome ,$sexo);
        $this->endereco = $endereco;
        $this->privado= $privado;
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