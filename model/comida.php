<?php

class Comida{
    private $id;
    private $nome;
    private $ingredientes;
    private $preco;
    private $id_restaurante;
    private $nome_restaurante;

public function getId(){
    return $this->id;
}
public function getNome(){
    return $this->nome;
}
public function getIngredientes(){
    return $this->ingredientes;
}

public function getPreco(){
    return $this->preco;        
}

public function getIdRestaurante(){
    return $this->id_restaurante;
}
public function getNomeRestaurante(){
    return $this->nome_restaurante;
}

public function setId ($id){
    $this->id = $id;
}
public function setNome ($nome){
    $this->nome = $nome;
}
public function setIngredientes ($ingredientes){
    $this->ingredientes = $ingredientes;
}
public function setPreco ($preco){
    $this->preco = $preco;
}
public function setIdRestaurante ($idRest){
    $this->id_restaurante = $idRest;
}
public function setNomeRestaurante ($nomeRest){
    $this->nome_restaurante = $nomeRest;
}
}
?>

