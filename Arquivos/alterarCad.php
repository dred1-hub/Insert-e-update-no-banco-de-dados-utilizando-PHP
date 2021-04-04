<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Alterar Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
</head>

<body>
<header>
<div id="menu">
        <a href="formulario.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastar um novo usuário</a>
        </div>
    </header>
    <div id="divPrincipal">
        <h1 id="cabecalhoForm">Alterar dados cadastrados</h1>
        <form action="update.php" method="POST">
            <div class="form-row">
            <div class="form-group col-7">
                    <label>Nome completo</label>
                    <input type="text" class="form-control" name="nomeForm" id="nomeForm" placeholder="Digite o seu nome completo">
                </div>
            <div class="form-group col">
                    <label>ID</label>
                    <input type="text" class="form-control" name="idUsuario" id="idUsuario" placeholder="Digite o id do usuário">
                </div>
                <div class="form-group col-7">
                    <label>Data de nascimento</label>
                    <input type="date" class="form-control" name="dataNasForm" id="dataNasForm" placeholder="Digite a sua data de nascimento">
                </div>
                <div class="form-group col">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="telefoneForm" id="telefoneForm" placeholder="Digite o seu telefone">
                </div>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="emailForm" id="emailForm" placeholder="Digite o seu e-mail para contato">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" name="senhaForm" id="senhaForm" placeholder="Digite a sua senha">
            </div>
            <div>
            <button type="submit" class="btn btn-primary" id="btAlterar">Alterar</button>
            </div> 
        </form>
        <br>
        <?php
        if (isset($_SESSION['status_update'])):
            ?>
        <div class="alert alert-success" role="alert" >
            Dados alterados com sucesso
        </div>
        <?php
        endif;
        unset($_SESSION['status_update']);
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Script pra mascara do telefone -->
    <script src="jquery.mask.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#telefoneForm").mask("(00) 00000-0000");
        })
    </script>
</body>
</html>