<!DOCTYPE html>
<html>
<head>
    <title>Display Pre Contact Us Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .opt-links a {
            margin-right: 5px;
            text-decoration: none;
            padding: 4px 8px;
            border-radius: 4px;
        }
        .opt-links a:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Pre-added Questions</h2>
    <div style="text-align: right;margin-right: 20px;">
    <a href="../homepage/applicant-after-login.php" style="text-decoration: none;">
        <button type="button" style="background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
            Back to Home
        </button>
    </a>
</div>


    <table>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Telephone Number</th>
            <th>Question</th>
            <th>OPT</th>
        </tr>
        <?php
        include 'Connection.php';
        
        $sql = "SELECT id, fullName, email, telephone, question FROM Questions";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["fullName"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["telephone"] . "</td>";
                echo "<td>" . $row["question"] . "</td>";
                echo "<td class='opt-links'><a href='UpdateQuestion.php?id=" . $row["id"] . "'>Update</a><a href='DeleteQuestion.php?id=" . $row["id"] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No questions found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
