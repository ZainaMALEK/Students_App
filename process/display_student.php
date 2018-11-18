<?php

require_once '../db_connect.php';
$studentId = intval($_GET['id']);

//Afficher toutes les infos concernant l'étudiant
$requete= $pdo->prepare('SELECT * FROM student
LEFT JOIN mark
ON student.id = mark.studentId
LEFT JOIN exam
ON exam.id = mark.examId
WHERE student.id = :studentId');

$requete->bindParam(':studentId', $studentId);
$requete->execute();
$infos = $requete->fetchAll(PDO::FETCH_OBJ);

echo json_encode($infos);
