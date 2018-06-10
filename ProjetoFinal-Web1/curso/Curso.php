<?php

include_once '../Conexao.php';

class Curso
{

    protected $id_curso;
    protected $nome;

    /**
     * @return mixed
     */
    public function getIdCurso()
    {
        return $this->id_curso;
    }

    /**
     * @param mixed $id_curso
     */
    public function setIdCurso($id_curso)
    {
        $this->id_curso = $id_curso;
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

    public function recuperarDados()
    {
        $conexao = new Conexao();
        $sql = "SELECT * FROM curso";

        return $conexao->recuperarDados($sql);
    }

    /**
     * @param $id_curso
     * Função para carregar todos os dados por ID para ser feito a alteração.
     * Update
     */
    public function carregarPorId($id_curso)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM curso WHERE id_curso = '$id_curso'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_curso = $dados[0]['id_curso'];
        $this->nome = $dados[0]['nome'];
    }

    /**
     * @param $dados
     * @return mixed
     * Função para criar dados novos.
     */
    public function inserir($dados)
    {
        $nome = $dados['nome'];
        $conexao = new Conexao();
        $sql = "INSERT INTO curso (nome) VALUES ('$nome')";

        return $conexao->executar($sql);
    }

    /**
     * @param $dados
     * @return mixed
     * Função para alterar dados já existentes
     */
    public function alterar($dados)
    {
        $id_curso = $dados['id_curso'];
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "UPDATE curso SET nome = '$nome' WHERE id_curso = '$id_curso' ";

        return $conexao->executar($sql);
    }

    /**
     * @param $id_curso
     * @return mixed
     * Função para excluir dados.
     */
    public function excluir($id_curso)
    {
        $conexao = new Conexao();
        $sql = "DELETE FROM curso WHERE id_curso = $id_curso;";

        return $conexao->executar($sql);
    }

}