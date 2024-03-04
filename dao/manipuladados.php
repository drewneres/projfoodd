<?php

    include("conexao.php");
        class ManipulaDados extends Conexao{
        private $table;
        public function getTable(){
            return $this->table;
        }
        public function setTable($t){
            $this->table = $t;
        }
        public function getAllDataTable(){
            $this->sql = "select * from $this->table";
            $this->qr = self::execSQL($this->sql);

            $dados = array();

            while($row = self::listQr($this->qr)){
                array_push($dados, $row);
            }
            return $dados;
        }
        public function validarLogin($login, $password){
            $this->sql = "SELECT * FROM $this->table WHERE nome ='$login'  and senha = '$password'";
            $this->qr = self::execSQL($this->sql);
            $linhas = self::countData($this->qr);
            return $linhas;
        }
    }
?>