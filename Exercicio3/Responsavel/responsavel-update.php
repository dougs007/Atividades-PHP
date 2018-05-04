<?php
/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 28/03/18
 * Time: 07:30
 */
include_once('Bootstrap.php');
?>
<title>Responsável update</title>

<div class="container">
    <form method="post" action="update-resp.php">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" placeholder="Insira seu nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Telefone</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="tel" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Endereço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="end" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Data de Nascimento</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="date" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Sexo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="sex" placeholder="">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
</div>
