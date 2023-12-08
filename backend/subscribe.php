<?php
include "./database.php";

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];

    $sql = "INSERT INTO subscribe (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for subscribing!";
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Please provide an email address.";
}

$conn->close();

