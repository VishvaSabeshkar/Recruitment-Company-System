<?php


    
    include 'connection.php';
    

    session_start();


    $applicant_id = $_SESSION['applicant_id'];
    

    

                


    
    

        

    if(isset($_POST['schedule-button']))
    {
                
            $date=$_POST['date'];
            $time=$_POST['time'];
            $location=$_POST["location"];
            $req_doc=$_POST['req-docs']; 
           

        
            $query_application = "INSERT INTO interview (place,interview_date, interview_time,interview_panel)
            VALUES ('$location', '$date', '$time', '$req_doc')";
            $result_application = mysqli_query($con, $query_application);
        
            
        
            if (  $result_application) {
               
                $interview_id = mysqli_insert_id($con);
        
               
                $query_update_applicant = "UPDATE Applicant SET interview_id = $interview_id WHERE applicant_id = $applicant_id";
                $result_update_applicant = mysqli_query($con, $query_update_applicant);
        
                if ($result_update_applicant) {
                   
                    header("Location: scheduled-interviews.php");
                    exit();
                } else {
                    echo "Error updating Applicant table: " . mysqli_error($con);
                }
            } else {
                echo "Error scheduling interview: " . mysqli_error($con);
            }


            
    }
?>