<?php
session_start();
include_once 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perguntas e respostas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['valResposta'])){

        //Pesquisar resposta
        $query_val_resposta = "SELECT id AS id_resposta, resposta, pergunta_id, valor_resposta FROM alternativas WHERE id=:id_resposta LIMIT 1";
        $result_val_resposta = $conn->prepare($query_val_resposta);
        $result_val_resposta->bindParam(':id_resposta', $dados['id_resposta'], PDO::PARAM_INT);
        
        $result_val_resposta->execute();
        $row_val_resposta = $result_val_resposta->fetch(PDO::FETCH_ASSOC);
        if($row_val_resposta['valor_resposta'] == 1){
            $_SESSION['msg'] = "<p style='color:green'>Resposta Correta</p>";
        }else{
            $_SESSION['msg'] = "<p style='color:#ff0000'>Resposta Incorreta</p>";
        }

        //Pesquisar pergunta
        $query_pergunta = "SELECT id, questao FROM perguntas WHERE id=:id LIMIT 1";
        $result_pergunta = $conn->prepare($query_pergunta);
        $result_pergunta->bindParam(':id', $dados['id_pergunta'], PDO::PARAM_INT);
        $result_pergunta->execute();
    }else{
        //Pesquisar pergunta randomica
        $query_pergunta = "SELECT id, questao FROM perguntas ORDER BY RAND() LIMIT 1";
        $result_pergunta = $conn->prepare($query_pergunta);
        $result_pergunta->execute();
    }    

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>
<form method="POST" action="index.php">
    <?php
        if(($result_pergunta) AND $result_pergunta->rowCount() != 0){
            $row_pergunta = $result_pergunta->fetch(PDO::FETCH_ASSOC);
            extract($row_pergunta);
            echo $questao . "<br><br>";
            echo "<label>Alterantivas:</label><br><br>";
            echo "<input type='hidden' name='id_pergunta' value='$id'>";

            $query_resposta = "SELECT id AS id_resposta, resposta FROM alternativas WHERE pergunta_id = $id ORDER BY id ASC";
            $result_resposta = $conn->prepare($query_resposta);
            $result_resposta->execute();
            while($row_resposta = $result_resposta->fetch(PDO::FETCH_ASSOC)){
                extract($row_resposta);
                

                if(isset($dados['id_resposta']) AND (!empty($dados['id_resposta'])) AND $id_resposta == $dados['id_resposta']){
                    $selecionado = "checked";
                }else{
                    $selecionado = "";
                }
                echo "<input type='radio' name='id_resposta' value='$id_resposta' $selecionado>$resposta<br>";
            }
        }else{
            echo "Pergunta não encontrada!";
        }
    ?>
    <br>
    <input type="submit" name="valResposta" value="Enviar">
</form>

<hr>
<a href="index.php">Próxima</a>

</body>
</html>
