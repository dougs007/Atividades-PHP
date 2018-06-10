<?php

include_once '../Conexao.php';

class Aluno
{
    protected $id_aluno;
    protected $matricula;
    protected $nome;
    protected $telefone;
    protected $endereco;
    protected $data_nascimento;
    protected $sexo;
    protected $id_responsavel;
    protected $id_curso;
    protected $nota;

    /**
     * @return mixed
     */
    public function getIdAluno()
    {
        return $this->id_aluno;
    }

    /**
     * @param mixed $id_aluno
     */
    public function setIdAluno($id_aluno)
    {
        $this->id_aluno = $id_aluno;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
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
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * @param mixed $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    }


    /**
     * Função para listagem de todos os dados existentes.
     * Read
     */
    public function recuperarDados()
    {
        $conexao = new Conexao();
        $sql = "SELECT * FROM aluno";
        return $conexao->recuperarDados($sql);
    }

    /**
     * @param $id_aluno
     * Função para carregar todos os dados por ID para ser feito a alteração.
     * Update
     */
    public function carregarPorId($id_aluno)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM aluno WHERE id_aluno = '$id_aluno'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_aluno = $dados[0]['id_aluno'];
        $this->matricula = $dados[0]['matricula'];
        $this->nome = $dados[0]['nome'];
        $this->telefone = $dados[0]['telefone'];
        $this->endereco = $dados[0]['endereco'];
        $this->data_nascimento = $dados[0]['data_nascimento'];
        $this->sexo = $dados[0]['sexo'];
        $this->id_responsavel = $dados[0]['id_responsavel'];
        $this->id_curso = $dados[0]['id_curso'];
        $this->nota = $dados[0]['nota'];

    }

    /**
     * @param $dados
     * @return mixed
     * Função para inserir dados novos.
     * Insert
     */
    public function inserir($dados)
    {

        $matricula = $dados['matricula'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        $id_responsavel = $dados['id_responsavel'];
        $id_curso = $dados['id_curso'];
        $nota = $dados['nota'];

        $conexao = new Conexao();

        $sql = "INSERT INTO aluno (matricula, nome, telefone, 
                                   endereco, data_nascimento, sexo, 
                                   id_responsavel, id_curso, nota) 
                       VALUES  ('$matricula', '$nome', '$telefone', 
                                '$endereco', '$data_nascimento', '$sexo', 
                                '$id_responsavel', '$id_curso', '$nota')
        ";

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

        $id_aluno = $dados['id_aluno'];
        $matricula = $dados['matricula'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $endereco = $dados['endereco'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        $id_responsavel = $dados['id_responsavel'];
        $id_curso = $dados['id_curso'];
        $nota = $dados['nota'];

        $conexao = new Conexao();

        $sql = "update aluno set
                  nome = '$nome',
                  matricula = '$matricula',
                  telefone = '$telefone',
                  endereco = '$endereco',
                  data_nascimento = '$data_nascimento',
                  sexo = '$sexo',
                  id_responsavel = '$id_responsavel',
                  id_curso = '$id_curso',
                  nota = '$nota'
                where id_aluno = $id_aluno";

        return $conexao->executar($sql);
    }

    /**
     * @param $id_aluno
     * @return mixed
     * Função para excluir algum registro existente.
     * Delete
     */
    public function excluir($id_aluno)
    {

        $conexao = new Conexao();

        $sql = "DELETE FROM aluno WHERE id_aluno = $id_aluno;";

        return $conexao->executar($sql);
    }


}