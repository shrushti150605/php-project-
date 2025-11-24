<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $course = $_POST['course'];
    $phone  = $_POST['phone'];

    // Connect to database
    $conn = new mysqli("localhost", "root", "", "siws_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO admissions (name, email, course, phone) 
            VALUES ('$name', '$email', '$course', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Admission form submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
