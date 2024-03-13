<?php
include_once("../dao/manipuladados.php");

    $dados = new ManipulaDados();
    $dados->setTable("tb_restaurante");
    $lista = $dados->getAllDataTable();
?>
<section>
    <?php 

    foreach ($lista as $restaurante) {
        ?>
        <tr>
            <td>
                <?= $restaurante["nome"] ?>
            </td>
            <td>
                <?= $restaurante["descricao"] ?>    
            </td>
        
        </tr>
        <?php
    }
    ?>
</section>