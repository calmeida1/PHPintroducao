<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao
{
    private string $_titulo;
    private string $_autor;
    private int $_totPaginas;
    private int $_pagAtual;
    private bool $_aberto;
    private Pessoa $_leitor;

    public function __construct(string $titulo, string $autor, int $totPaginas, Pessoa $leitor)
    {
        $this->_titulo = $titulo;
        $this->_autor = $autor;
        $this->_totPaginas = $totPaginas;
        $this->_pagAtual = 0;
        $this->_aberto = false;
        $this->_leitor = $leitor;

    }

    /**
     * Get the value of _titulo
     */ 
    public function get_titulo()
    {
        return $this->_titulo;
    }

    /**
     * Set the value of _titulo
     *
     * @return  self
     */ 
    public function set_titulo($_titulo)
    {
        $this->_titulo = $_titulo;

        return $this;
    }

    /**
     * Get the value of _autor
     */ 
    public function get_autor()
    {
        return $this->_autor;
    }

    /**
     * Set the value of _autor
     *
     * @return  self
     */ 
    public function set_autor($_autor)
    {
        $this->_autor = $_autor;

        return $this;
    }

    /**
     * Get the value of _totPaginas
     */ 
    public function get_totPaginas()
    {
        return $this->_totPaginas;
    }

    /**
     * Set the value of _totPaginas
     *
     * @return  self
     */ 
    public function set_totPaginas($_totPaginas)
    {
        $this->_totPaginas = $_totPaginas;

        return $this;
    }

    /**
     * Get the value of _pagAtual
     */ 
    public function get_pagAtual()
    {
        return $this->_pagAtual;
    }

    /**
     * Set the value of _pagAtual
     *
     * @return  self
     */ 
    public function set_pagAtual($_pagAtual)
    {
        $this->_pagAtual = $_pagAtual;

        return $this;
    }

    /**
     * Get the value of _aberto
     */ 
    public function get_aberto()
    {
        return $this->_aberto;
    }

    /**
     * Set the value of _aberto
     *
     * @return  self
     */ 
    public function set_aberto($_aberto)
    {
        $this->_aberto = $_aberto;

        return $this;
    }

    /**
     * Get the value of _leitor
     */ 
    public function get_leitor()
    {
        return $this->_leitor;
    }

    /**
     * Set the value of _leitor
     *
     * @return  self
     */ 
    public function set_leitor($_leitor)
    {
        $this->_leitor = $_leitor;

        return $this;
    }

    public function detalhes():void
    {
        echo "O autor do livro é " .$this->_autor .'</br>';
        echo "A pagina atual do livro é " .$this->_pagAtual .'</br>';
        echo "O leitor do livro é " .$this->_leitor->get_nome() .'</br>';
        echo "O idade do leitor é " .$this->_leitor->get_idade() .'</br>';
        echo "O status do livro é " .$this->_aberto .'</br>';
    }

    public function abrir():void
    {
        $this->_aberto = true;
    }
    public function fechar():void
    {
        $this->_aberto = false;
    }
    public function folhear($pagina):void
    {
        $this->_pagAtual = $pagina;
    }
    public function avancarPag():void
    {
        $this->_pagAtual += 1;
    }
    public function voltarPag():void
    {
        $this->_pagAtual -= 1;
    }
}
