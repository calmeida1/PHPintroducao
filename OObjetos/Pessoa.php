<?php

class Pessoa
{
    private string $_nome;
    private string $_sexo;
    private int $_idade;

    public function __construct(string $nome, string $sexo, int $idade)
    {
        $this->_nome = $nome;
        $this->_sexo = $sexo;
        $this->_idade = $idade;

    }

    /**
     * Get the value of _nome
     */ 
    public function get_nome()
    {
        return $this->_nome;
    }

    /**
     * Set the value of _nome
     *
     * @return  self
     */ 
    public function set_nome($_nome)
    {
        $this->_nome = $_nome;

        return $this;
    }

    /**
     * Get the value of _sexo
     */ 
    public function get_sexo()
    {
        return $this->_sexo;
    }

    /**
     * Set the value of _sexo
     *
     * @return  self
     */ 
    public function set_sexo($_sexo)
    {
        $this->_sexo = $_sexo;

        return $this;
    }
    

    /**
     * Get the value of _idade
     */ 
    public function get_idade()
    {
        return $this->_idade;
    }

    /**
     * Set the value of _idade
     *
     * @return  self
     */ 
    public function set_idade($_idade)
    {
        $this->_idade = $_idade;

        return $this;
    }

    /**
     * Acrescenta +1 no valor da idade
     *
     * @return  self
     */ 
    public function fazerAniversario(): void 
    {
        $this->_idade ++;

    }
}