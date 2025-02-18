<?php
    include 'connection.php';

    session_start();

    $interview_id = $_SESSION['interview_id'];

    if(isset($_POST['schedule-button'])) {
        $date = $_POST['date'];
        $time = $_POST['time'];
        $location = $_POST["Location"];
        $req_doc = $_POST['req-docs'];

      
        $query = "UPDATE Interview 
                SET interview_date = '$date', 
                    interview_time = '$time', 
                    place = '$location', 
                    interview_panel = '$req_doc'
                WHERE interview_id = $interview_id";

        
        $result = mysqli_query($con, $query);

        if ($result) {
           
            header("Location: interview.php");
            exit(); 
        } else {
            
            echo "Error updating interview: " . mysqli_error($con);
        }
    }
?>
