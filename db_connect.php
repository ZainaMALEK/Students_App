<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=students_app', 'root', 'root');
}
catch( PDOException $e ) {
    echo "Erreur SQL :", $e->getMessage();
}
 ?>
