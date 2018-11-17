<?php
require_once '../db_connect.php';

if (isset($_POST['submit'])) {
  if (isset($_POST['examId'])&& $_POST['examId'] != '' && isset($_POST['mark'])&& $_POST['mark'] != ''&& isset($_POST['studentId'])&& $_POST['studentId'] != '') {
    $studentId = intval($_POST['studentId']);
    $examId = intval($_POST['examId']);
    $mark = floatval($_POST['mark']);


    $query = $pdo->prepare('INSERT INTO mark (studentId, examId, mark) VALUES(:studentId, :examId, :mark)');
    $query->bindParam(':studentId', $studentId);
    $query->bindParam(':examId', $examId);
    $query->bindParam(':mark', $mark);
    $query->execute();

  }
}

  ?>
