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

        $sql = "SELECT * FROM Curso";
        return $conexao->recuperarDados($sql);

    }

    public function inserir($dados)
    {
        # Recebe os valores via $_POST e armazena nas variáveis.
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "INSERT INTO CURSO (nome) VALUES ('$nome')";

        //DEBUG
        #echo $sql;

        return $conexao->recuperarDados($sql);

    }

}