<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Question</title>
    <link rel="stylesheet" type="text/css" href="css/createQuestion.css">
    <link rel="stylesheet" type="text/css" href="../homepage/css/font.css">
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form action="CreateQuestionHandler.php" method="post" onsubmit="return validateForm()">
            <label for="fullName">Full Name:</label><br>
            <input type="text" id="fullName" name="fullName" pattern="[A-Za-z ]+" title="Full name can only contain letters and spaces" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="telephone">Telephone Number:</label><br>
            <input type="tel" id="telephone" name="telephone" pattern="[0-9]+" title="Telephone number can only contain numbers"><br>
            <label for="question">Question:</label><br>
            <textarea id="question" name="question" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <script>
        function validateForm() {
            var fullName = document.getElementById("fullName").value;
            var telephone = document.getElementById("telephone").value;

            var fullNamePattern = /^[A-Za-z ]+$/;
            var telephonePattern = /^[0-9]+$/;

            var fullNameIsValid = fullNamePattern.test(fullName);
            var telephoneIsValid = telephonePattern.test(telephone);

            if (!fullNameIsValid) {
                alert("Full name can only contain letters and spaces.");
                return false;
            }

            if (!telephoneIsValid) {
                alert("Telephone number can only contain numbers.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
