<?php
require_once '../db_connect.php';

$query = $pdo->prepare('SELECT * FROM student');
$query->execute();

$students = $query->fetchAll(PDO::FETCH_OBJ);

echo json_encode($students);
