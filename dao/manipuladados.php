<?php

    include("conexao.php");
        class ManipulaDados extends Conexao{
        private $table, $fields, $dados, $fieldPK, $valuePK;
        public function getTable(){
            return $this->table;
        }
        public function setTable($t){
            $this->table = $t;
        }
 
        public function getFields(){
            return $this->fields;
        }
        public function setFields($f){
            $this->fields = $f;
        }
        public function getDados(){
            return $this->dados;
        }
        public function setDados($d){
            $this->dados = $d;
        }
        public function getFieldPK(){
            return $this->fieldPK;
        }
        public function setFieldPK($FP){
            $this->fieldPK = $FP;
        }
        public function getValuePK(){
            return $this->valuePK;
        }
        public function setValuePK($VK){
            $this->valuePK = $VK;
        }

        public function getIdByName($nome)
    {
        $this->sql = "SELECT * FROM $this->table WHERE nome='$nome'";
        $this->qr = self::execSQL($this->sql);

        $row = self::listQr($this->qr);
          
        return $row['id'];
    }
    public function getAllDataTable()
    {
        $this->sql = "SELECT * FROM $this->table";
        $this->qr = self::execSQL($this->sql);

        $dados = array();

        while ($row = self::listQr($this->qr)) {
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

        public function insert()
            {
                $this->sql = "INSERT INTO $this->table ($this->fields) VALUES ($this->dados)";
                if(self::execSQL($this->sql))
                {
                    $this->status = "Cadastrado com Sucesso";
                }
                else
                {
                    $this->status = "Erro ao Cadastrar".mysqli_error($this->connect());
                }
                
            }
            public function getStatus(){
                return $this->status;
            }

        public function update()
        {
            $this->sql = "UPDATE $this->table SET $this->fields WHERE $this->fieldPK = '$this->valuePK'";
            echo $this->sql;
            if (self::execSQL($this->sql)){
                $this->status = "Cadastrado com sucesso";
            } else{
                $this->status = "Erro ao cadastrar" . mysqli_error($this->connect());
            }
        }

        public function delete()
        {
            $this->sql = "DELETE FROM $this->table WHERE $this->fieldPK = '$this->valuePK'";
            if (self::execSQL($this->sql)){
                $this->status = "DELETADO com sucesso";
            } else{
                $this->status = "Erro ao deletar" . mysqli_error($this->connect());
            }
        }
    }
?>