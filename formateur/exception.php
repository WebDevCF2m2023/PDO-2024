<?php

try{
    if(isset($_GET['yep'])){
        
    }else{
        throw new Exception("Pas de variable get 'yep'", 9901);
    }

}catch(Exception $e){
    try{
        $db = new PDO("");
    }catch(Exception $e2){
        echo "<p>Code erreur : ".$e2->getCode()."</p>";
        echo "<p>Message : ".$e2->getMessage()."</p>";
    }
    echo "<p>Code erreur : ".$e->getCode()."</p>";
    echo "<p>Message : ".$e->getMessage()."</p>";
}

var_dump($e,$e2);