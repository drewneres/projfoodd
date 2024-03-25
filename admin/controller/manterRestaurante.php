<?php 

    include_once("../../dao/manipuladados.php");

    $manter = new ManipulaDados();
    $manter->setTable("tb_restaurante");
    $manter->setFieldPK("id");


    $id = $_POST['txtId'];
    $botao = $_POST ['botao'];

    switch ($botao){
        case "excluir";
            $manter->setValuePK($id);
            $manter->delete();
            echo '<script>alert("O arquivo foi removido com sucesso do BD")</script>';
            echo "<script> location = '../principal.php' </script>";
            break;
        case "editar";
            
            break;
        default;
            break;
    }
