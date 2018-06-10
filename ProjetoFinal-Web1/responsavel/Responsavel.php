<?php

include_once '../Conexao.php';

class Responsavel
{

    protected $id_responsavel;
    protected $nome;
    protected $telefone;
    protected $endereco;
    protected $data_nascimento;
    protected $sexo;

    /**
     * @return mixed
     */
    public function getIdResponsavel()
    {
        return $this->id_responsavel;
    }

    /**
     * @param mixed $id_responsavel
     */
    public function setIdResponsavel($id_responsavel)
    {
        $this->id_responsavel = $id_responsavel;
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
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
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


    /**
     * Função para listagem de todos os dados existentes.
     * Read
     */
    public function recuperarDados()
    {
        $conexao = new Conexao();
        $sql = "SELECT * FROM responsavel";
        return $conexao->recuperarDados($sql);
    }

    /**
     * @param $id_responsavel
     * Função para carregar todos os dados por ID para ser feito a alteração.
     * Update
     */
    public function carregarPorId($id_responsavel)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM responsavel WHERE id_responsavel = '$id_responsavel'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_responsavel = $dados[0]['id_responsavel'];
        $this->nome = $dados[0]['nome'];
        $this->telefone = $dados[0]['telefone'];
        $this->endereco = $dados[0]['endereco'];
        $this->data_nascimento = $dados[0]['data_nascimento'];
        $this->sexo = $dados[0]['sexo'];

    }

    /**
     * @param $dados
     * @return mixed
     * Função para inserir dados novos.
     * Insert
     */
    public function inserir($dados)
    {

        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];

        $conexao = new Conexao();

        $sql = "INSERT INTO responsavel (nome, telefone, endereco, data_nascimento, sexo)
                VALUES ('$nome', '$telefone', '$endereco', '$data_nascimento', '$sexo')
        ";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    /**
     * @param $dados
     * @return mixed
     * Função para alterar dados já existentes.
     * Update
     */
    public function alterar($dados)
    {

        $id_responsavel = $dados['id_responsavel'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];

        $conexao = new Conexao();

        $sql = "UPDATE responsavel 
                      SET nome = '$nome', 
                          telefone = '$telefone', 
                          endereco = '$endereco',
                          data_nascimento = '$data_nascimento', 
                          sexo = '$sexo'
                WHERE id_responsavel = '$id_responsavel'";

        return $conexao->executar($sql);
    }

    /**
     * @param $id_responsavel
     * @return mixed
     * Função para excluir algum registro existente.
     * Delete
     */
    public function excluir($id_responsavel)
    {

        $conexao = new Conexao();

        $sql = "DELETE FROM responsavel WHERE id_responsavel = $id_responsavel;";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

}