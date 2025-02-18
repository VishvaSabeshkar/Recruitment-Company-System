<?php

    session_start();
    include 'connection.php';

    



    $application_id=$_GET['application_id'];
    


     $select="SELECT  * FROM application WHERE application_id='$application_id'";
     $data=mysqli_query($con,$select);
     $row=mysqli_fetch_array($data);

     $_SESSION['application_id'] = $application_id;

    


?>






<!doctype html>
<html>
    <head>
        <title>Update Form</title>
        <link rel="stylesheet" href="css/update.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        
    </head>

    <body>
        <section class="container">
            <header>Update Job Application Information</header>

            
                
            </div>
            
            <form class="form"  action="update-php.php"  method="POST">
                
                <div class="column">
                    <div class="input-box">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" value="<?php echo $row["firstname"]?>" >
                        <span id="firstnameError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname"value="<?php echo $row["lastname"]?>">
                        <span id="lastnameError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="nic">NIC</label>
                        <input type="text" id="nic" name="nic" value="<?php echo $row["nic"]?>">
                        <span id="nicError" class="error"></span>
                    </div>
                    
                </div>


                

                <div class="column">
                    <div class="input-box">
                        <label for="dateofbirth">date of birth</label>
                        <input type="text" id="dateofbirth" name="dateofbirth" value="<?php echo $row["dob"]?>">
                        <span id="dateofbirthError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $row["phone_num"]?>">
                        <span id="phoneError" class="error"></span>

                    </div>

                </div>
                <div class="column">

                    <div class="input-box">
                        <label for="LinkedIn Profile">LinkedIn Profile</label>
                        <input type="text" id="linkedinrpofile" name="linkedinrpofile" value="<?php echo $row["linkedin"]?>">
                    </div>
                
                    
                </div>


                <div class="column">

                    <div class="input-box">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city"  value="<?php echo $row["city"]?>">
                        <span id="cityError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="Address">Address</label>
                        <input type="text" id="address" name="address"  value="<?php echo $row["address"]?>">
                        <span id="addressError" class="error"></span>
                    </div>

                    
                </div>



                
                <div class="eduheader">
                    <header>Education Information</header>
                </div>

                <div class="input-box">
                    <label for="education_level">Highest Level of Education</label>
                        <select id="educationlevel" name="educationlevel">
                            <option value="">Select Education Level</option>
                            <option value="associate-degree"<?php if ($row["edu_level"] == "associate-degree") echo " selected"; ?>>Associate Degree</option>
                            <option value="bachelors-degree"<?php if ($row["edu_level"] == "bachelors-degree") echo " selected"; ?>>Bachelor's Degree</option>
                            <option value="masters-degree"<?php if ($row["edu_level"] == "masters-degree") echo " selected"; ?>>Master's Degree</option>
                            <option value="phd"<?php if ($row["edu_level"] == "phd") echo " selected"; ?>>PhD</option>
                        </select>
                    <span id="educationlevelError" class="error"></span>

                </div>
                

                <div class="column">
                    <div class="input-box">
                        <label for="institutionname">Institution Name</label>
                        <input type="text" id="institutionname" name="institutionname" value="<?php echo $row["inst_name"]?>">
                        <span id="institutionNameError" class="error"></span>
                        
                </div>
    
    
                    <div class="input-box">
                        <label for="DegreeObtained">Degree Obtained</label>
                        <input type="text" id="DegreeObtained" name="DegreeObtained"value="<?php echo $row["degree_obt"]?>">
                        <span id="DegreeObtainedError" class="error"></span>
                    </div>
                    <div class="input-box">
                        <label for="major">Major or Field of Study</label>
                        <input type="text" id="major" name="major" value="<?php echo $row["field_of_study"]?>">
                        <span id="majorError" class="error"></span>
                    </div>
                </div>





                


                

                <div class="column">
                    <div class="input-box">
                        <label for="degreestartyear">Degree Start Year</label>
                        <input type="text" id="degreestartyear" name="degreestartyear" value="<?php echo $row["degree_start_year"]?>">
                        <span id="degreeStartYearError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="degreeendyear">Degree End Year</label>
                        <input type="text" id="degreeendyear" name="degreeendyear" value="<?php echo $row["degree_end_year"]?>">
                    </div>
                    
                </div>

        

                <div class="eduheader">
                    <header>Work Experience/Skills</header>
                </div>



                <div class="input-box">
                <label for="skillCategory">Select Skill Category</label>
                <select id="skillCategory" name="skill_cat">
                    <option value="">Select Skill Category</option>
                    <option value="Programming"<?php if ($row["skill_cat"] == "Programming") echo " selected"; ?>>Programming</option>
                    <option value="Web Development"<?php if ($row["skill_cat"] == "Web Development") echo " selected"; ?>>Web Development</option>
                    <option value="Mobile Development"<?php if ($row["skill_cat"] == "Mobile Development") echo " selected"; ?>>Mobile Development</option>
                    <option value="Data Science"<?php if ($row["skill_cat"] == "Data Science") echo " selected"; ?>>Data Science</option>
                    <option value="Machine Learning"<?php if ($row["skill_cat"] == "Machine Learning") echo " selected"; ?>>Machine Learning</option>
                    <option value="Artificial Intelligence"<?php if ($row["skill_cat"] == "Artificial Intelligence") echo " selected"; ?>>Artificial Intelligence</option>
                    <option value="UI/UX Design"<?php if ($row["skill_cat"] == "UI/UX Design") echo " selected"; ?>>UI/UX Design</option>
                    <option value="Graphic Design"<?php if ($row["skill_cat"] == "Graphic Design") echo " selected"; ?>>Graphic Design</option>
                    <option value="Digital Marketing"<?php if ($row["skill_cat"] == "Digital Marketing") echo " selected"; ?>>Digital Marketing</option>
                    <option value="Content Writing"<?php if ($row["skill_cat"] == "Content Writing") echo " selected"; ?>>Content Writing</option>
                </select>
                </div>


                <div class="column">
                    <div class="input-box">
                        <label for="jobtitle">Job Tile  </label>
                        <input type="text" id="jobtitle" name="jobtitle" value="<?php echo $row["job_title"]?>">
                        
                    </div>
    
    
                    <div class="input-box">
                        <label for="companyname">Company Name</label>
                        <input type="text" id="companyname" name="companyname" value="<?php echo $row["company_name"]?>">
                    </div>
    
                </div>


                <div class="input-box">
                    <label for="RelevantSkillsandAchievements">Relevant Skills and Achievements</label>
                    <input type="text" id="Achievements" name="Achievements" value="<?php echo $row["skill_achievement"]?>">
                </div>

                <div class="column">
                    <div class="input-box">
                        <div class="input-box">
                            <label for="technical-skill-category">Technical Skills Category</label>
                            <select id="technical-skill-category" name="technical-skill-category">
                                <option value="Programming" <?php if($row["tech_skill_cat"] == "Programming") echo "selected"; ?>>Programming</option>
                                <option value="Database Management" <?php if($row["tech_skill_cat"] == "Database Management") echo "selected"; ?>>Database Management</option>
                                <option value="Network Administration" <?php if($row["tech_skill_cat"] == "Network Administration") echo "selected"; ?>>Network Administration</option>
                                <option value="Web Development" <?php if($row["tech_skill_cat"] == "Web Development") echo "selected"; ?>>Web Development</option>
                                <option value="Cloud Computing" <?php if($row["tech_skill_cat"] == "Cloud Computing") echo "selected"; ?>>Cloud Computing</option>
                                <option value="Data Analysis" <?php if($row["tech_skill_cat"] == "Data Analysis") echo "selected"; ?>>Data Analysis</option>
                                <option value="Cybersecurity" <?php if($row["tech_skill_cat"] == "Cybersecurity") echo "selected"; ?>>Cybersecurity</option>

                            </select>
                        </div>
                    </div>
                    
    
                    <div class="input-box">
                        <div class="input-box">
                            <label for="domain-specific-skill-category">Domain-specific Skills Category</label>
                            <select id="domain-specific-skill-category" name="domain-specific-skill-category">
                                <option value="Marketing" <?php if($row["domain_skill_cat"] == "Marketing") echo "selected"; ?>>Marketing</option>
                                <option value="Finance" <?php if($row["domain_skill_cat"] == "Finance") echo "selected"; ?>>Finance</option>
                                <option value="Human Resources" <?php if($row["domain_skill_cat"] == "Human Resources") echo "selected"; ?>>Human Resources</option>
                                <option value="Sales" <?php if($row["domain_skill_cat"] == "Sales") echo "selected"; ?>>Sales</option>
                                <option value="Customer Service" <?php if($row["domain_skill_cat"] == "Customer Service") echo "selected"; ?>>Customer Service</option>
                                <option value="Operations" <?php if($row["domain_skill_cat"] == "Operations") echo "selected"; ?>>Operations</option>
                                <option value="Project Management" <?php if($row["domain_skill_cat"] == "Project Management") echo "selected"; ?>>Project Management</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>
                    
                </div>


                

                    
                


                
                

                




                

                <a href="#">
                    <button type="submit" name="update_btn" id="update_btn">Update Details</button>
                  
                </a>

                
                   
                    
                
                
                 
            </form>

        </section>

        

    </body>
</html>