<?php
class VerUrl{
    function trocarUrl($url){
        if(empty($url)){
            $url = "secoes/cadcomid.php";
        }else{
            $url = "secoes/$url.php";
        }
        include_once($url);
    }
}
?>