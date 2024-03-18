<?php
include_once("../../dao/manipuladados.php");
include_once("../../model/restaurante.php");

function converte($String){
    return iconv("UTF-8", "ISO8859-1",$String);
}

$restaurante = new Restaurante();
$inserir = new ManipulaDados();

$restaurante->setNome($_POST['txtRestaurante']);
$restaurante->setDescricao($_POST['txtDescricao']);
$restaurante->setCategoria($_POST['txtCategoria']);

$nomearquivo = $_FILES['arquivo']['name'];
$restaurante->setUrl("img/restaurantes/".$nomearquivo);

$nomearquivosalvo = converte ($_FILES['arquivo']['name']);
$urllocalsalvo = "../../img/restaurantes/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);


$inserir->setTable('tb_restaurante');
$inserir->setFields("nome, descricao, categoria, url");
$inserir->setDados("'{$restaurante->getNome()}', '{$restaurante->getDescricao()}' ,'{$restaurante->getCategoria()}', '{$restaurante->getUrl()}'");
$inserir->insert();

echo "<script>alert('Restaurante cadastrado com sucesso!')</script>";
echo "<script>location='../../admin/principal.php'</script>";
?>
