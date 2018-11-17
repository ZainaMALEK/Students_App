<?php
require_once '../db_connect.php';


if (isset($_POST['submit'])) {
  if (isset($_POST['topic']) && $_POST['topic']!='' && isset($_POST['dateExam']) && $_POST['dateExam']!='') {
    $topic = $_POST['topic'];
    $dateExam = $_POST['dateExam'];


    $query = $pdo->prepare('INSERT INTO exam (topic, dateExam) VALUES(:topic, :dateExam)');
    $query->execute([
      ':topic' => $topic,
      ':dateExam' => $dateExam
    ]);
  }
}
?>
