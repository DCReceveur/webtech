<!-- Daan Receveur 642199 -->
<!-- 14-01-2020 -->
<?php

require_once 'database.php';
$conn = getConnection();

$statement = "insert into berichten (naam, telefoon, project, email, bericht) VALUES (:naam, :telefoon, :project, :email, :bericht)";

$naam = $_POST['firstname'] . ' ' . $_POST['lastname'];

$stmt = $conn->prepare($statement);
$stmt->execute([':naam' => $naam, ':telefoon' => $_POST['telefoon'], ':project' => $_POST['project'], ':email' => $_POST['email'], ':bericht' => $_POST['message']]);
header("Location: ../contact.php");
?>
