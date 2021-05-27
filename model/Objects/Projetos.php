<?php 
require_once('Arquiteto.php');
require_once('Cliente.php');
class Projeto
{
    protected $id;
    protected $nome;
    protected $descricao;
    protected $cliente;
    protected $orcamento; 
    protected $codigoIdentificacao; 
    protected $dataInicio;
    protected $duracao;
    protected $arquiteto; 
    protected $percentualConformidade;

    public function __construct(int $id,string $nome,string $descricao, Cliente $cliente, string $orcamento, string $codigoIdentificacao, string $dataInicio, 
    string $duracao, Arquiteto $arquiteto, string $percentualConformidade)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->cliente = $cliente;
        $this->orcamento = $orcamento;
        $this->codigoIdentificacao = $codigoIdentificacao;
        $this->dataInicio = $dataInicio;
        $this->duracao = $duracao;
        $this->arquiteto = $arquiteto;
        $this-> percentualConformidade= $percentualConformidade;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of cliente
     */ 
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     *
     * @return  self
     */ 
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get the value of orcamento
     */ 
    public function getOrcamento()
    {
        return $this->orcamento;
    }

    /**
     * Set the value of orcamento
     *
     * @return  self
     */ 
    public function setOrcamento($orcamento)
    {
        $this->orcamento = $orcamento;

        return $this;
    }

    /**
     * Get the value of codigoIdentificacao
     */ 
    public function getCodigoIdentificacao()
    {
        return $this->codigoIdentificacao;
    }

    /**
     * Set the value of codigoIdentificacao
     *
     * @return  self
     */ 
    public function setCodigoIdentificacao($codigoIdentificacao)
    {
        $this->codigoIdentificacao = $codigoIdentificacao;

        return $this;
    }

    /**
     * Get the value of dataInicio
     */ 
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set the value of dataInicio
     *
     * @return  self
     */ 
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Get the value of duracao
     */ 
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * Set the value of duracao
     *
     * @return  self
     */ 
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;

        return $this;
    }

    /**
     * Get the value of arquiteto
     */ 
    public function getArquiteto()
    {
        return $this->arquiteto;
    }

    /**
     * Set the value of arquiteto
     *
     * @return  self
     */ 
    public function setArquiteto($arquiteto)
    {
        $this->arquiteto = $arquiteto;

        return $this;
    }

    /**
     * Get the value of percentualConformidade
     */ 
    public function getPercentualConformidade()
    {
        return $this->percentualConformidade;
    }

    /**
     * Set the value of percentualConformidade
     *
     * @return  self
     */ 
    public function setPercentualConformidade($percentualConformidade)
    {
        $this->percentualConformidade = $percentualConformidade;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
?>