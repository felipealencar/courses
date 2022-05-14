<?php
class Produto{
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $caminho_imagem;
    private $categorias;
    private $quantidade;
    private $ncm;

    /**
     * Get the value of quantidade
     */ 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     *
     * @return  self
     */ 
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of ncm
     */ 
    public function getNcm()
    {
        return $this->ncm;
    }

    /**
     * Set the value of ncm
     *
     * @return  self
     */ 
    public function setNcm($ncm)
    {
        $this->ncm = $ncm;

        return $this;
    }


    /**
     * Get the value of caminho_imagem
     */ 
    public function getCaminho_imagem()
    {
        return $this->caminho_imagem;
    }

    /**
     * Set the value of caminho_imagem
     *
     * @return  self
     */ 
    public function setCaminho_imagem($caminho_imagem)
    {
        $this->caminho_imagem = $caminho_imagem;

        return $this;
    }

    /**
     * Get the value of categorias
     */ 
    public function getCategorias()
    {
        return $this->categorias;
    }

    /**
     * Set the value of categorias
     *
     * @return  self
     */ 
    public function setCategorias($categorias)
    {
        $this->categorias = $categorias;

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
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */ 
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }
}