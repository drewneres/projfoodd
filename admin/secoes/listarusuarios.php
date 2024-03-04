<?php
include_once("../dao/manipuladados.php");

    $dados = new ManipulaDados();
    $dados->setTable("tb_usuario");
    $lista = $dados->getAllDataTable();
?>
<section>
    <?php 
    foreach ($lista as $usuario) {
        ?>
        <h1> <?= $usuario["nome"] ?> </h1>
        <?php
    }
    ?>
</section>