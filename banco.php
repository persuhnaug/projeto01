<?php
$mysqli_connection = new MySQLi('localhost:8889', 'admin', 'poiuytrewq', 'loja');


$nome = $_REQUEST['nome'];
$preco = $_REQUEST['preco'];
$tipo = $_REQUEST['tipo'];
$quantidade = $_REQUEST['quantidade'];


$enviar = "INSERT INTO produtos(nome, tipo, preco, quantidade) VALUES ('$nome', '$preco', '$tipo', $quantidade)";

mysqli_query($mysqli_connection, $enviar);

header( 'Location: index.html');

die();


?>