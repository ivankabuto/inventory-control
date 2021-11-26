<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/login.css">
    <meta charset="UTF-8">    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>VM NF Login</title>
</head>
<body>
    <header>
        <img src="aeclogo.jpg" alt="logo-aec"/>       
    </header>
    <div>
        <form method="POST" action="validalogin.php" class="login">
            <label class="campo">
                <input type="text" name="matricula" placeholder="Digite sua matrícula" class="texto">
            </label>
            <label class="campo">
                <input type="password" name="senha" placeholder="Digite sua senha" class="texto">
            </label>
            <label class="campo">

            </label class="campo">
                <input type="submit" value="Entrar" id="botao" class="select">
                <a href=cadastro.php id="cadastro">Cadastre-se</a>
        </form>
    </div>
</body>
</html>