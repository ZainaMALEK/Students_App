<?php

require_once '../db_connect.php';
$id = intval($_GET['id']);
//echo $id;

$query = $pdo->prepare('SELECT * FROM student WHERE id=:id ');
$query->bindParam(':id', $id);
$query->execute();
$row = $query->fetch(PDO::FETCH_OBJ);
//var_dump ($rows);
echo json_encode($row);
