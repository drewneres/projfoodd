<?php
include_once("dao/manipuladados.php");

$dados = new ManipulaDados();   
$dados->setTable('tb_restaurante'); 
$lista = $dados->getAllDataTable(); 

?>
<section>
    <?php 
    foreach ($lista as $restaurante){
        ?>
        <h1> <?= $restaurante["nome"] ?> </h1>
        <h2> <?= $restaurante["descricao"] ?> </h2>
        <h3> <?= $restaurante["categoria"] ?> </h3>
        <img src="<?= $restaurante["url"]?>" class="img-fluid rounded-start">
        <?php
    }
    ?>
</section>