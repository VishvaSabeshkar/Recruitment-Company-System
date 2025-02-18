<?php
include 'Connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform SQL delete operation using the provided id
    $sql = "DELETE FROM Questions WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        //echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    header("Location: DisplayQuestions.php");
    exit();
}
?>
