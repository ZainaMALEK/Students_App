<?php
require_once '../db_connect.php';

$query= $pdo->prepare('SELECT * FROM exam');
$query->execute();
$exams = $query->fetchAll(PDO::FETCH_OBJ);

echo json_encode($exams);

 ?>
