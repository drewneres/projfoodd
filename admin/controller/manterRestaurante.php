<?php 

    include_once("../../dao/manipuladados.php");

    $manter = new ManipulaDados();
    $manter->setTable("tb_restaurante");
    $manter->setFieldPK("id");


    $id = $_POST['txtId'];
    $nome= $_POST['txtNome'];
    $descricao= $_POST['txtDescricao'];
    $categoria= $_POST['txtCategoria'];
    $url= $_POST['txtUrl'];
    $botao = $_POST ['botao'];

    switch ($botao){
        case "excluir";
            $manter->setValuePK($id);
            $manter->delete();
            echo '<script>alert("O arquivo foi removido com sucesso do BD")</script>';
            echo "<script> location = '../principal.php' </script>";
            break;
        case "editar";
        echo '<form method="post" action="controller/alterarRestaurante.php" enctype="multipart/form-data">
        <input type="hidden" name="txtId" value="'.$id.'"/>

        <p>
            <label>Digite o nome do restaurante: </label>
            <input type="text" name="txtRestaurante" value="'.$nome.'"/>
        </p>
        
        <p>
            <label>Descrição: </label>
            <input type="text" name="txtDescricao" value="'.$descricao.'"/>
        </p>
        
        <p>
            <label>Categoria: </label>
            <input type="text" name="txtCategoria" value="'.$categoria.'"/>
        </p>
        
        <p>
            <label>Imagem: </label>
            <input type="file" name="arquivo"/>
        </p>
        <p>
            <input type="submit" value="Enviar"/>
            <input type="reset" value="Limpar"/>
        </p>
        
    
    </form>';
            break;
        default;
            break;
    }
