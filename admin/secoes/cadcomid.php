<?php
include_once("../dao/manipuladados.php");

    $dados = new ManipulaDados();
    $dados->setTable("tb_restaurante");
    $lista = $dados->getAllDataTable();
?>

<form method="post" action="controller/inserirComida.php" enctype="multipart/form-data">
    <p>
        <label>Nome: </label>
        <input type="text" name="txtPrato" required>
    </p>
    <p>
        <label>Descrição: </label>
        <input type="text" name="txtDescricao" required>
    </p>
    <p>
        <label>Preço: </label>
        <input type="number" name="txtPreco" required>
    </p>
    <p>
        <label>Restaurante: </label>
        <select name="cbxRest">
        <?php
            foreach ($lista as $restaurante){
        ?>
        <option value="<?= $restaurante["id"] ?>">  <?= $restaurante["nome"] ?>   </option>
        <?php } ?>
        </select>
        
    </p>
    <p>
        <input type="submit" value="Enviar">
    </p>

</form>