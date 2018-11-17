<?php
require_once '../db_connect.php';


if (isset($_POST['submit'])) {
  if (isset($_POST['firstname']) && $_POST['firstname']!='' && isset($_POST['lastname']) && $_POST['lastname']!='') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];


    $query = $pdo->prepare('INSERT INTO student (firstname, lastname) VALUES(:firstname, :lastname)');
    $query->execute([
      ':firstname' => $firstname,
      ':lastname' => $lastname
    ]);
  }
}
?>
