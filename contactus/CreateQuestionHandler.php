<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $question = $_POST['question'];

    
    $sql = "INSERT INTO questions (fullName, email, telephone, question) VALUES ('$fullName', '$email', '$telephone', '$question')";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
        
        
        header("Location: DisplayQuestions.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
