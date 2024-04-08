<?php

include_once("../../dao/manipuladados.php");
include_once("../../model/comida.php");
function converte($String) {
    return iconv("UTF-8","ISO8859-1", $String);
}

$comida = new Comida();
$inserir = new ManipulaDados();

$comida->setNome($_POST['txtPrato']);
$comida->setIngredientes($_POST['txtIng']);
$comida-> setPreco($_POST['txtPreco']);
$comida->setNomeRestaurante($_POST['cbxRest']);
$id_restaurante = $inserir->getIdByName($comida->getNomeRestaurante());


$inserir->setTable("tb_comida");
$inserir->setFields("nome,ingredientes,preco");
$inserir->setDados("'{$comida->getNome()}', '{$comida->getIngredientes()}', '{$comida->getPreco()}','{$comida->getNomeRestaurante()}'");
$inserir->insert();

echo "<script> alert ('Comida cadastrada com sucesso') </script>";
echo "<script>location='../../admin/principal.php?secao=cadcomida'</script>";
?>
