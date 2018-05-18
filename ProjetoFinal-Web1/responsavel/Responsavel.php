<?php

include_once '../Conexao.php';

class Responsavel
{

    protected $id_responvel;
    protected $nome;
    protected $telofone;
    protected $endereco;
    protected $data_nascimento;
    protected $sexo;

    /**
     * @return mixed
     */
    public function getIdResponvel()
    {
        return $this->id_responvel;
    }

    /**
     * @param mixed $id_responvel
     */
    public function setIdResponvel($id_responvel)
    {
        $this->id_responvel = $id_responvel;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getTelofone()
    {
        return $this->telofone;
    }

    /**
     * @param mixed $telofone
     */
    public function setTelofone($telofone)
    {
        $this->telofone = $telofone;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function recuperarDados()
    {
        $conexao = new Conexao();
        $sql = "select * from responsavel";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados)
    {

        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];

        $conexao = new Conexao();

        $sql = "insert into responsavel (nome, telefone, endereco, data_nascimento, sexo) values ('$nome', '$telefone', '$endereco', '$data_nascimento', '$sexo')";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function excluir($id_responsavel)
    {

        $conexao = new Conexao();

        $sql = "delete from responsavel where id_responsavel = $id_responsavel;";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

}