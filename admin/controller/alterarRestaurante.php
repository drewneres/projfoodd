<?php
include_once("../../dao/manipuladados.php");
include_once("../../model/restaurante.php");

function converte($String){
    return iconv("UTF-8", "ISO8859-1",$String);
}

$restaurante = new Restaurante();
$alterar = new ManipulaDados();

$restaurante->setId($_POST['txtId']);
$restaurante->setNome($_POST['txtRestaurante']);
$restaurante->setDescricao($_POST['txtDescricao']);
$restaurante->setCategoria($_POST['txtCategoria']);

$nomearquivo = $_FILES['arquivo']['name'];
$restaurante->setUrl("img/restaurantes/".$nomearquivo);

$nomearquivosalvo = converte ($_FILES['arquivo']['name']);
$urllocalsalvo = "../../img/restaurantes/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);


$alterar->setTable('tb_restaurante');
$alterar->setFields("nome='{$restaurante->getNome()}', descricao='{$restaurante->getDescricao()}',categoria='{$restaurante->getCategoria()},url='{$restaurante->getUrl()}'");


$alterar->setFieldPK("id");
$alterar->setValuePK("'{$restaurante->getId()}'");
$alterar->update();

echo "<script>alert('".$alterar->getStatus()."')</script>";
echo "<script>location='../../admin/principal.php'</script>";
?>
