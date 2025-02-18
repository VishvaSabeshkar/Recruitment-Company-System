<?php

    session_start();
    include 'connection.php';

    



    $jobid=$_GET['jobid'];
    


     $select="SELECT  * FROM job WHERE jobid='$jobid'";
     $data=mysqli_query($con,$select);
     $row=mysqli_fetch_array($data);

     $_SESSION['jobid'] = $jobid;


?>







<!doctype html>
<html>
    <head>
        <title>Applicant Form</title>
        <link rel="stylesheet" href="css/application.css">
        <link rel="stylesheet" href="css/header-footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <style>
            .error {
                color: red;
            }
        </style>
    </head>

    <body>
    


        <section class="container">
            <header>Job Information</header>

            
                
            </div>
            
            <form class="form" id="myForm" action="application-php.php" method="POST" onsubmit="return validateForm()">
                
                <div class="column">
                    <div class="input-box">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company" value="<?php echo $row["company"]?>" >
                        <span id="companyError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="jobtitle">Job Title</label>
                        <input type="text" id="jobtitle" name="jobtitle" value="<?php echo $row["jobtitle"]?>">
                        <span id="jobtitleError" class="error"></span>
                    </div>
                    
                </div>


                

                <div class="column">
                    <div class="input-box">
                        <label for="salary">salary</label>
                        <input type="text" id="salary" name="salary"value="<?php echo $row["salary"]?>">
                        <span id="salaryError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="deadline">Deadline</label>
                        <input type="text" id="deadline" name="deadline" value="<?php echo $row["deadline"]?>">
                        <span id="deadlineError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for=" experience">Experience</label>
                        <input type="text" id=" experience" name=" experience" value="<?php echo $row["experience"]?>">
                        <span id="experienceError" class="error"></span>
                    </div>

                </div>


                <div class="column"> 

                    <div class="input-box">

                        <label for="description">Description</label><br>
                        <textarea id="description" name="description"> <?php echo $row["description"]?> </textarea>
                        <span id="descriptionError" class="error"></span>

                    </div>

                </div>

                    <div class="input-box">

                        <label for="education_qual">Education Qualification</label><br>
                        <textarea id="education_qual" name="education_qual"> <?php echo $row["edu_qul"]?> </textarea>
                        <span id="education_qualError" class="error"></span>

                    </div>

                    <div class="input-box">

                        <label for="skill">Skill</label><br>
                        <textarea id="skill" name="skill"> <?php echo $row["skill"]?> </textarea>
                        <span id="skillError" class="error"></span>

                    </div>
                

                

                    
                


                
                

                




                

                <a href="#">
                    <button type="submit" name="save_btn" id="save_btn">Post Job</button>
                  
                </a>

                
                   
                    
                
                
                 
            </form>

        </section>

        <script>
            function isValidNumber(value) {
                return /^\d+$/.test(value);
            }

            function hasSpecialCharacters(value) {
                return /[!@#$%^&*(),.?":{}|<>]/.test(value);
            }

            function validateNotEmpty(value, errorElement, fieldName) {
                if (value.trim() === '') {
                    errorElement.textContent = `${fieldName} is required`;
                    return false;
                } else {
                    errorElement.textContent = '';
                    return true;
                }
            }

            function setupRealTimeValidation(inputId, errorId, fieldName, validationFunction) {
                const input = document.getElementById(inputId);
                const error = document.getElementById(errorId);

                input.addEventListener('input', function () {
                    validateNotEmpty(input.value, error, fieldName);
                    if (validationFunction) {
                        validationFunction();
                    }
                    validateForm(); // Call validateForm on input change to enable/disable the submit button
                });
            }

            setupRealTimeValidation('company', 'companyError', 'Company Name');
            setupRealTimeValidation('jobtitle', 'jobtitleError', 'Job Title', function () {
                if (hasSpecialCharacters(document.getElementById('jobtitle').value)) {
                    document.getElementById('jobtitleError').textContent = 'Job Title cannot contain special characters';
                } else {
                    document.getElementById('jobtitleError').textContent = '';
                }
            });
            setupRealTimeValidation('salary', 'salaryError', 'Salary', function () {
                if (!isValidNumber(document.getElementById('salary').value)) {
                    document.getElementById('salaryError').textContent = 'Salary must be a valid number';
                } else {
                    document.getElementById('salaryError').textContent = '';
                }
            });
            setupRealTimeValidation('deadline', 'deadlineError', 'Deadline');
            setupRealTimeValidation('experience', 'experienceError', 'Experience');
            setupRealTimeValidation('description', 'descriptionError', 'Description');
            setupRealTimeValidation('education_qual', 'education_qualError', 'Education Qualification');
            setupRealTimeValidation('skill', 'skillError', 'Skill', function () {
                if (hasSpecialCharacters(document.getElementById('skill').value)) {
                    document.getElementById('skillError').textContent = 'Skill cannot contain special characters';
                } else {
                    document.getElementById('skillError').textContent = '';
                }
            });

            function validateForm() {
                const isValidCompany = validateNotEmpty(document.getElementById('company').value, document.getElementById('companyError'), 'Company Name');
                const isValidJobTitle = !hasSpecialCharacters(document.getElementById('jobtitle').value) && validateNotEmpty(document.getElementById('jobtitle').value, document.getElementById('jobtitleError'), 'Job Title');
                const isValidSalary = isValidNumber(document.getElementById('salary').value) && validateNotEmpty(document.getElementById('salary').value, document.getElementById('salaryError'), 'Salary');
                const isValidDeadline = validateNotEmpty(document.getElementById('deadline').value, document.getElementById('deadlineError'), 'Deadline');
                const isValidExperience = validateNotEmpty(document.getElementById('experience').value, document.getElementById('experienceError'), 'Experience');
                const isValidDescription = validateNotEmpty(document.getElementById('description').value, document.getElementById('descriptionError'), 'Description');
                const isValidEducationQual = validateNotEmpty(document.getElementById('education_qual').value, document.getElementById('education_qualError'), 'Education Qualification');
                const isValidSkill = !hasSpecialCharacters(document.getElementById('skill').value) && validateNotEmpty(document.getElementById('skill').value, document.getElementById('skillError'), 'Skill');

                const isFormValid = isValidCompany && isValidJobTitle && isValidSalary && isValidDeadline && isValidExperience && isValidDescription && isValidEducationQual && isValidSkill;

                document.getElementById('save_btn').disabled = !isFormValid; // Enable/disable the submit button based on form validity

                return isFormValid;
            }
        </script>

        

    </body>
</html>