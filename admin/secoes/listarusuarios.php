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
        <tr>
            <td>
                <?= $usuario["nome"] ?>
            </td>
            <td>
                <?= $usuario["email"] ?>    
            </td>
        
        </tr>
        <?php
    }
    ?>
</section>