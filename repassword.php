<?php

$dbname = "formulier.db";
$email = $_POST['email'];
$password = $_POST['password'];
$newPassword = $_POST['newPassword'];

try {
    $conn = new PDO("sqlite:$dbname");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $updateQuery = "UPDATE users SET password = :newPassword WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bindParam(':newPassword', $newPassword);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $rowCount = $stmt->rowCount();
    if ($rowCount > 0) {
        echo "Update was successful!";
    } else {
        echo "No matching user found or the provided password is incorrect.";
    }
} catch (PDOException $e) {
    die("Error, cannot connect to the database: " . $e->getMessage());
}
?>

