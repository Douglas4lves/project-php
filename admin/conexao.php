<?php
ini_set ('display_erros', 0);
error_reporting(0);

$db = new mysqli("127.0.0.1", "root", "84868486", "blog_phpiando", "3306");

if($db->connect_errno){
    exit("Erro na conexão: { $db->connect_error }");
}

$select = "SELECT * FROM users";
$result = $db->query($select);

if($result){
    while($obj = $result-> fetch_object()){
        echo "Nome: {$obj -> name } <br>";
    }
}else{
    echo "Erro no SELECT: {$db->error}";
}
$db->close();
?>