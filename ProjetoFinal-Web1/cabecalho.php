<script>
    /**
     * Este arquivo é o cabeçalho do projeto, nele contém todos as ancoras da navbar.
     * author: Douglas Santana <douglasantana007@gmail.com>
     * date: 2018-05-17
     * This project is for my college !
     */
</script>

<html>
<head>
    <title>Escola</title>

    <link rel="stylesheet" href="../js/bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script>
        $(function () {
            $('#telefone').mask('(99) 9999-9999');
            $('#data_nascimento').mask('9999/99/99');
        })
    </script>
</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Web 1</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="../curso/index.php">Cursos</a></li>
                <li><a href="../aluno/index.php">Alunos</a></li>
                <li><a href="../responsavel/index.php">Responsáveis</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="margin-top: 60px;">