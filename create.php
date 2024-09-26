<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $dob = date('Ymd', strtotime($_POST['dob']));
    

    $sql = "INSERT INTO employee (name, email, address, salary, dob) VALUES ('$name', '$email', '$address', $salary, '$dob')";

    if ($conn->query($sql) === TRUE) {
        header("Location:main.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}