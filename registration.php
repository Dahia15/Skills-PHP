<?php
$dbname = "formulier.db";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

try {
    $conn = new PDO("sqlite:$dbname");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $insertQuery = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    echo "Registration was succesful!";
} catch (PDOException $e) {
    die("Error, can not connect to the database: " . $e->getMessage());
}
?>
