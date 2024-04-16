<?php

include_once("../../dao/manipuladados.php");
include_once("../../model/comida.php");
function converte($String) {
    return iconv("UTF-8","ISO8859-1", $String);
}

$comida = new Comida();
$inserir = new ManipulaDados();
$restaurante = new ManipulaDados();
$restaurante->setTable("tb_restaurante");

$comida->setNome($_POST['txtPrato']);
$comida->setIngredientes($_POST['txtDescricao']);
$comida-> setPreco($_POST['txtPreco']);
$comida->setIdRestaurante($_POST['cbxRest']);
$nome_restaurante = $restaurante->getNameById($comida->getIdRestaurante());



$inserir->setTable("tb_comida");
$inserir->setFields("nome,ingredientes,preco,id_restaurante");
$inserir->setDados("'{$comida->getNome()}', '{$comida->getIngredientes()}', '{$comida->getPreco()}','{$comida->getIdRestaurante()}'");
$inserir->insert();

echo "<script> alert ('Comida cadastrada com sucesso') </script>";
echo "<script>location='../../admin/principal.php?secao=cadcomida'</script>";
?>
