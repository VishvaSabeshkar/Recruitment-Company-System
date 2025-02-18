<?php
include 'Connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the question based on the provided id and pre-fill the form for updating
    $sql = "SELECT * FROM Questions WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fullName = $row['fullName'];
        $email = $row['email'];
        $telephone = $row['telephone'];
        $question = $row['question'];
    } else {
        echo "Question not found.";
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Update the question in the database using the provided data
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $question = $_POST['question'];

        $sql = "UPDATE Questions SET fullName='$fullName', email='$email', telephone='$telephone', question='$question' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            //echo "Record updated successfully";
        } else {
            //echo "Error updating record: " . $conn->error;
        }

        header("Location: DisplayQuestions.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Question</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    h2 {
        text-align: center;
        margin-top: 20px;
    }
    form {
        width: 50%;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
        width: calc(100% - 22px); /* Adjusted width to accommodate border */
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: calc(100% - 22px); /* Adjusted width to accommodate border */
        display: block;
        margin-top: 10px;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    <h2>Update Contact Us</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$id"); ?>" method="post">
        <label for="fullName">Full Name:</label><br>
        <input type="text" id="fullName" name="fullName" value="<?php echo $fullName; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>
        <label for="telephone">Telephone Number:</label><br>
        <input type="tel" id="telephone" name="telephone" value="<?php echo $telephone; ?>"><br>
        <label for="question">Question:</label><br>
        <textarea id="question" name="question"><?php echo $question; ?></textarea><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
