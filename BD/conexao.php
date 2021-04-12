<?php
//COSNTANTES 

define("host", "localhost");
define("nome", "root ");
define("senha", "masterkey");
define("bd", "MegaOS");

try {
    $dsn="postgres:host=".host.";dbname=".bd;
    $conexao = new PDO($dsn, nome,senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo("erro ao conectar ao banco".$e->getMessage());
}


?>