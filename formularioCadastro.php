<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCadastro.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <title>Cadastre-se</title>
</head>

<body>
    <main class="pontainer">
        <div class="cabecalho">
            <h2>Cadastre-se
                <a href="index.html"><span class="material-symbols-outlined">
                        home
                    </span></a>
            </h2>
        </div>
        <div class="formulario">
            <form id="formCadastro" action="" method="post">

                <div class="input-top">
                    <p>Nome
                        <abbr onmouseover="aparecerObrigatorio(event);" onmouseout="desaparecer(event);"
                            id="obrigatorio-nome">*</abbr>
                    </p>

                    <input required type="text" name="nome" id="nome" placeholder="Primeiro nome">
                    <span class="erro-input"></span>
                </div>

                <div class="input-top">
                    <p>Sobrenome
                        <abbr onmouseover="aparecerObrigatorio(event);" onmouseout="desaparecer(event);"
                            id="obrigatorio-sobrenome">*</abbr>
                    </p>

                    <input required type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
                    <span class="erro-input"></span>
                </div>

                <div class="input-top">
                    <p>Nome de usuário
                        <abbr onmouseover="aparecerObrigatorio(event);" onmouseout="desaparecer(event);"
                            id="obrigatorio-usuario">*</abbr>
                    </p>

                    <input required type="text" name="usuario" id="usuario" placeholder="@usuario123">
                    <span class="erro-input"></span>
                </div>

                <div class="input-top">
                    <p>E-mail
                        <abbr onmouseover="aparecerObrigatorio(event);" onmouseout="desaparecer(event);"
                            id="obrigatorio-email">*</abbr>
                    </p>

                    <input required type="email" name="email" id="email" placeholder=" Digite seu E-mail">
                    <span class="erro-input"></span>
                </div>

                <div class="input-top">
                    <p>Senha
                        <abbr onmouseover="aparecerObrigatorio(event);" onmouseout="desaparecer(event);"
                            id="obrigatorio-senha">*</abbr>
                    </p>

                    <input required type="password" name="pass" id="pass" placeholder="Crie sua senha">
                    <span class="erro-input"></span>
                </div>

                <div class="input-top">
                    <p> Confirmação de senha
                        <abbr onmouseover="aparecerObrigatorio(event);" onmouseout="desaparecer(event);"
                            id="obrigatorio-senhaConfirme">*</abbr>
                    </p>

                    <input required type="password" name="pass-confirm" id="pass-confirm"
                        placeholder="Confirme a sua senha">
                    <span class="erro-input"></span>
                </div>

                <div class="input-top telefone" id="telefone-input-1">
                    <p>Telefone
                        <abbr onmouseover="aparecerObrigatorio(event);" onmouseout="desaparecer(event);"
                            id="obrigatorio-telefone">*</abbr>
                    </p>
                    <button type="button" onclick="addTelefone(event)" id="mais">+</button>
                    <button type="button" onclick="removerTelefone(event)" id="menos">-</button>

                    <input required type="tel" maxlength="15" onkeyup="editarTelefone(event)" name="telefone-1"
                        id="telefone" placeholder="(xx) xxxxx-xxxx">
                    <span class="erro-input"></span>
                </div>

                <input  type="submit" name="submit" id="submit">
            </form>
        </div>

    </main>

</body>
<script src="scripts/script.js"></script>

</html>