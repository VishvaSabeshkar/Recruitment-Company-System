<?php
    include 'connection.php';

    session_start();

    $applicant_id=$_SESSION['applicant_id'];

    if(isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone_num = $_POST['mobile'];
        $email = $_POST["email"];
        $dob = $_POST["date"];
        $password = $_POST["password"];
        $nic = $_POST["nic"];
        $city= $_POST["city"];
        $couty= $_POST["country"];
        $job_name = $_POST['job'];

      
        $query = "UPDATE applicant
                SET firstname = '$firstname', 
                    Lastname = '$lastname',
                    phone_num = '$phone_num', 
                    email = '$email', 
                    password = '$password',
                    dob = '$dob',
                    nic = '$nic',
                    city = '$city',
                    county = '$couty',
                    job_name = '$job_name'
                    WHERE applicant_id = '$applicant_id';";

        
        $result = mysqli_query($con, $query);

        if ($result) {
           
            header("Location: editprofile.php");
            exit(); 
        } else {
            
            echo "Error updating interview: " . mysqli_error($con);
        }
    }
?>
