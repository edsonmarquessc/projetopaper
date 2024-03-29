<?php
    session_start();
    if((isset($_SESSION['email']) === true) && (isset($_SESSION['pass']) === true)) {
        unset($_SESSION['email']);
        unset($_SESSION['pass']);
        header('Location: formularioLogin.html');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper Uniasselvi 2023-2</title>
    <link rel="shortcut icon" href="imagens/favicon.paper" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header>
        <h1>A importância da pesquisa</h1>
        <p>Para um bom aprendizado na vida acadêmica</p>
        <br>
    </header>

    <main>
        <article>
            <h1>
                Tipos de pesquisas:
            </h1>

            <p>
                Você sabe quais os tipos de <strong>Pesquisa?</strong>, que pode ser <strong>Realizadas?</strong> São muitas, é uma enchurada de informações, e as dúvidas são inumeras, veja na imagem algumas das mais conhecidas, mais existem outras:
            </p>

            <picture>
                <source media="(max-width: 600px )" srcset="imagens/paper3.png">
                <img src="imagens/paper3.png" alt="Exemplo de pesquisa">
            </picture>

            <h2>Exemplo de pesquisa</h2><br><br>
            <h1>A pesquisa ajudando no aprendizado.</h1>
            <p>
                A primeira vista parece complicado, mais quando se aprende 
                a pesquisar tudo começa fazer sentido, acesse o link e veja um dos tipos exposto na imagem chamada <a href="https://pt.surveymonkey.com/mp/conducting-qualitative-research/" target="_blank" class="externo">quantitativa</a> é uma das mais simples de se realizar, embora exija um esforço.
                O ato de pesquisar traz um aprimoramento no conhecimento do objeto pesquisado, e isso também ajuda no entendimento de como funciona os tipos de pesquisa.
            </p>

            <h2>
                Onde surgiu a ideia de pesquisa?
            </h2>

            <p>
                Para entender mais sobre esse assunto acesse o site <a href="https://www.scielo.br/j/pob/a/Y7Zwy8rNNVf6TS6Sv78v6SN/#:~:text=As%20bases%20para%20a%20realiza%C3%A7%C3%A3o,15641642)%20introduziu%20o%20m%C3%A9todo%20cient%C3%ADfico." target="_blank" class="externo">Scielo-Brasil</a>, O site traz um artigo sobre assunto.
            </p>

            <p>
                A principal inspiração para buscar mais informações sobre esse assunto, é a satisfação em saber como pensamos e poder ampliar mais o conhecimento de quem somos.
            </p>
            
            <aside>
                <h3>
                    Para saber mais!
                </h3>
                <p>
                    Acesse o site <a href="https://pt.wikipedia.org/wiki/Pesquisa#:~:text=Existem%20v%C3%A1rias%20formas%20de%20pesquisa,pesquisa%20praticante%2C%20estat%C3%ADstica%2C%20etc." target="_blank" class="externo">Wikipédia</a> para conhecer mais sobre cada um dos tipos de pesquisas citados.
                </p>
                <ul>
                    <li>
                        1 - <abbr title="Pesquisar e mostrar, o que e como aprendeu">Pesquisa acadêmica</abbr>
                    </li>
                    <li>
                        2 - <abbr title="São focada na observação">Pesquisa de campo</abbr>
                    </li>
                    <li>
                        3 - <abbr title="Pesquisa em evidências concretas">Pesquisa empírica</abbr>
                    </li>
                    <li>
                        4 - <abbr title="São realisadas em locais fechados">Pesquisa laboratorial</abbr>
                    </li>
                    <li>
                        5 - <abbr title="descreve um evento, um intenção">Pesquisa descritiva</abbr>
                    </li>
                    <li>
                        6 - <abbr title="É quando se quer reunir informações de algo">Pesquisa bibliográfica</abbr>
                    </li>
                    
                </ul>
                
            </aside>

            <p>
                Então é isso! Espero que você tenha gostado do nosso artigo com essa curiosidade sobre tipos de pesquisas.
            </p>
        </article>
    </main>
    <footer>
        <p>Site criado por: <a href="Edson Marques">Edson Marques</a></p>
    </footer>
</body>
</html>