<?php
    include 'connection.php';

    session_start();

    $rid=$_SESSION['rid'];

    if(isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST["email"];
        $nic = $_POST["nic"];
        $dob = $_POST["date"];
        $phone_num = $_POST['mobile'];
        $company_name = $_POST['company_name'];

      
        $query = "UPDATE recruiter
                SET firstname = '$firstname', 
                    lastname = '$lastname', 
                    email = '$email', 
                    nic = '$nic',
                    dob = '$dob',
                    phone_num = '$phone_num',
                    company_name = '$company_name'
                    WHERE rid = $rid";

        
        $result = mysqli_query($con, $query);

        if ($result) {
           
            header("Location: editprofile.php");
            exit(); 
        } else {
            
            echo "Error updating interview: " . mysqli_error($con);
        }
    }
?>
