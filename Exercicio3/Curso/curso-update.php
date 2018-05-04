<?php
/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 28/03/18
 * Time: 07:30
 */
include_once('Bootstrap.php');
?>
<title>Curso</title>

<div class="container">
    <form method="post" action="update-curso.php">
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Curso</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="curso" placeholder="Insira seu curso">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
</div>
