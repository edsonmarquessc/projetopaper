<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <title>Login</title>
</head>

<body>
    <main class="pontainer">
        <h2>Login
            <a href="index.html"><span class="material-symbols-outlined">
                    home
                </span></button></a>
        </h2><br>
        <form action="index.html">
            <div class="input-top">
                <input required type="email" name="email" id="email" placeholder=" Digite seu E-mail">
                <span class="erro-input"></span>
            </div>
            <div class="input-top">
                <input required type="password" name="pass" id="pass" placeholder="Digite sua Senha">
                <span class="erro-input"></span>
            </div>

            <input id="submit" type="submit" value="Continue">
        </form>

        <div class="etc">
            <span>Não tem uma conta?</span>
        </div>
        <div class="cadastro">
            <a href="formularioCadastro.php">
                <button id="submit-cadastro" value="Cadastre-se">Cadastre-se</button>
            </a>
        </div>
    </main>
</body>


</html>