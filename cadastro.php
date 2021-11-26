<?php
//layout cadastro de usuario
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/login.css">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>VM NF Cadastro</title>
</head>
<body>
    <header>
        <img src="aeclogo.jpg" alt="logo-aec"/>       
    </header>
    <div>
        <form method="post" action="processa.php" class="login">
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
            <label class="campo">
                <input type="text" name="matricula" placeholder="Digite sua matrícula" class="texto" required>
            </label>
            <label class="campo">
                <input type="text" name="nome" placeholder="Digite seu nome" class="texto" required>
            </label>
            <label class="campo">
                <input type="password" name="chave" placeholder="Digite sua senha" class="texto" required>
            </label>
            <label class="campo">
                <input type="password" name="chaveconf" placeholder="Confirme sua senha" class="texto" required>
            </label>
            <label class="campo">
                <input type="text" name="local" placeholder="Digite seu site" class="texto" required>
        </label>
                <input type="submit" value="Cadastrar" id="botao" class="texto">
            <a href=login.php id="cadastro"> Voltar </a>
        </form>
    </div>
</body>
</html>