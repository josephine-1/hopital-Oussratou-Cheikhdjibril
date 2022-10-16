<!-- connection bd -->
<?php

try{
  
    $newBD=new PDO("mysql:host=localhost;dbname=hop_ousratou","sosso","abc");

    echo "connexion-etablie";
}catch(PDOException $e){
    echo $e->getMessage();
}
?>