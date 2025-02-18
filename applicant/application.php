<?php

    include 'connection.php';
    session_start();



    $jobid=$_GET['jobid'];
    $_SESSION['jobid'] = $jobid;
    $applicant_id = $_SESSION['applicant_id'];

    $select="SELECT  jobtitle FROM job WHERE jobid='$jobid'";
    $data=mysqli_query($con,$select);
    $row=mysqli_fetch_array($data);



   

?> 


<!doctype html>
<html>
    <head>
        <title>Applicant Form</title>
        <link rel="stylesheet" href="css/application.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <style>
            .error {
                color: red;
                display: inline-block;
                margin-left: 5px;
                font-size:13px;
                padding:5px;
            
                
            }
            .error-icon {
                color: red;
                margin-right: 5px;
            }
        </style>

    </head>

    <body>

        <section class="container">
        <pre>Applying for : <?php echo $row["jobtitle"]?></pre>

        <header>Job Application</header>
            
            

                
            </div>
            
            <form class="form" action="application-php.php" method="POST" id="application_form" onsubmit="return validateForm()">
                
                <div class="column">
                    <div class="input-box">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Enter First Name " >
                        <span id="firstnameError" class="error"></span>
                        
                        
                    </div>

                    <div class="input-box">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name">
                        <span id="lastnameError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="nic">NIC</label>
                        <input type="text" id="nic" name="nic" placeholder="Enter Nic Number">
                        <span id="nicError" class="error"></span>
                    </div>
                    
                </div>


                

                <div class="column">
                    <div class="input-box">
                        <label for="dateofbirth">date of birth</label>
                        <input type="text" id="dateofbirth" name="dateofbirth" placeholder="Enter date of birth">
                        <span id="dateofbirthError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="Phone Number">
                        <span id="phoneError" class="error"></span>
                    </div>

                </div>
                <div class="column"> 

                    <div class="input-box">
                        <label for="LinkedIn Profile">LinkedIn Profile</label>
                        <input type="text" id="linkedinrpofile" name="linkedinrpofile" placeholder="LinkedIn Profile">
                    </div>

                </div>
                

            

                <div class="column">
                    <div class="input-box">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="Enter City">
                        <span id="cityError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="Address">Address</label>
                        <input type="text" id="address" name="address" placeholder="address">
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
                        <option value="associate-degree">Associate Degree</option>
                        <option value="bachelors-degree">Bachelor's Degree</option>
                        <option value="masters-degree">Master's Degree</option>
                        <option value="phd">PhD</option>
                    </select>
                <span id="educationlevelError" class="error"></span>

                    
                </div>
                

                <div class="column">
                    <div class="input-box">
                        <label for="institutionname">Institution Name</label>
                        <input type="text" id="institutionname" name="institutionname" placeholder="Enter Institution Name">
                        <span id="institutionNameError" class="error"></span>
                        
                    </div>
    
    
                    <div class="input-box">
                        <label for="DegreeObtained">Degree Obtained</label>
                        <input type="text" id="DegreeObtained" name="DegreeObtained" placeholder="Enter Degree Obtained">
                        <span id="DegreeObtainedError" class="error"></span>
                    </div>
                    <div class="input-box">
                        <label for="major">Major or Field of Study</label>
                        <input type="text" id="major" name="major" placeholder="Major or Field of Study">
                        <span id="majorError" class="error"></span>
                    </div>
                </div>





                


                

                <div class="column">
                    <div class="input-box">
                        <label for="degreestartyear">Degree Start Year</label>
                        <input type="text" id="degreestartyear" name="degreestartyear" placeholder=" Enter Degree Start Year">
                        <span id="degreeStartYearError" class="error"></span>
                    </div>

                    <div class="input-box">
                        <label for="degreeendyear">Degree End Year</label>
                        <input type="text" id="degreeendyear" name="degreeendyear" placeholder="Enter Degree End Year">
                        <span id="degreeEndYearError" class="error"></span>
                    </div>
                    
                </div>

                

                <div class="eduheader">
                    <header>Work Experience/Skills</header>
                </div>


                <div class="input-box">
                    <div class="input-box">
                        <label for="skill-category">Skill Category</label>
                        <select id="skillCategory" name="skill_cat">
                            <option value="">Select Skill Category</option>
                            <option value="Programming">Programming</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Mobile Development">Mobile Development</option>
                            <option value="Data Science">Data Science</option>
                            <option value="Machine Learning">Machine Learning</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="UI/UX Design">UI/UX Design</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Content Writing">Content Writing</option>
                        </select>
                    </div>
                </div>


                <div class="column">
                    <div class="input-box">
                        <label for="jobtitle">Job Tile  </label>
                        <input type="text" id="jobtitle" name="jobtitle" placeholder="Enter job title">
                        
                    </div>
    
    
                    <div class="input-box">
                        <label for="companyname">Company Name</label>
                        <input type="text" id="companyname" name="companyname" placeholder="Enter Company Name">
                    </div>
    
                </div>


                <div class="input-box">
                    <label for="RelevantSkillsandAchievements">Relevant Skills and Achievements</label>
                    <input type="text" id="Achievements" name="Achievements" placeholder="Enter Relevant Skills and Achievements">
                </div>

                <div class="column">
                    <div class="input-box">
                        <div class="input-box">
                            <label for="technical-skill-category">Technical Skills Category</label>
                            <select id="technical-skill-category" name="technical-skill-category">
                                    <option value="">Select technical  Skill Category</option>
                                    <option value="Programming">Programming</option>
                                    <option value="Database Management">Database Management</option>
                                    <option value="Network Administration">Network Administration</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Cloud Computing">Cloud Computing</option>
                                    <option value="Data Analysis">Data Analysis</option>
                                    <option value="Cybersecurity">Cybersecurity</option>
                            </select>
                        </div>
                    </div>
                </div>
    
                    <div class="input-box">
                        <div class="input-box">
                        <label for="domain-specific-skill-category">Domain-specific Skills Category</label>
                            <select id="domain-specific-skill-category" name="domain-specific-skill-category">
                                <option value="">Select Specific Skill Category</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Finance">Finance</option>
                                <option value="Human Resources">Human Resources</option>
                                <option value="Sales">Sales</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Operations">Operations</option>
                                <option value="Project Management">Project Management</option>
                            </select>
                        </div>
                    </div>
                    
                    </div>
                </div>


                
                    
                    
                

                    
                


                
                

                




                

                <a href="#">
                    <button type="submit" name="save_btn" id="apply_btn">Apply</button>
                  
                </a>

           
                
                   
                    
                
                
                 
            </form>

        </section>

        <script>

            // Function to validate if the input contains only letters
            function isValidName(name) {
                return /^[A-Za-z]+$/.test(name);
            }

            // Function to validate numeric fields
            function validateNumericField(input, errorElement, errorMessage) {
                const value = input.value.trim();
                if (value === '') {
                    errorElement.innerHTML = `<i class="fas fa-exclamation-circle error-icon"></i>${errorMessage} is required`;
                    return false;
                } else {
                    errorElement.textContent = '';
                    return true;
                }
            }

            // Function to validate last name
            function validateLastName() {
                const lastname = document.getElementById('lastname');
                const lastnameError = document.getElementById('lastnameError');
                const lastnameValue = lastname.value.trim();
                if (lastnameValue === '') {
                    lastnameError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Last Name is required';
                    return false;
                } else if (!isValidName(lastnameValue)) {
                    lastnameError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Last Name must contain only letters';
                    return false;
                } else {
                    lastnameError.textContent = '';
                    return true;
                }
            }

            // Function to validate phone number
            function validatePhoneNumber() {
                const phone = document.getElementById('phone');
                const phoneError = document.getElementById('phoneError');
                const isValid = validateNumericField(phone, phoneError, 'Phone Number');
                if (isValid) {
                    const phoneValue = phone.value.trim();
                    if (!/^\d{10}$/.test(phoneValue)) {
                        phoneError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Invalid Phone Number';
                        return false;
                    } else {
                        phoneError.textContent = '';
                        return true;
                    }
                } else {
                    return false;
                }
            }

            // Function to validate NIC
            function validateNIC() {
                const nic = document.getElementById('nic');
                const nicError = document.getElementById('nicError');
                const isValid = validateNumericField(nic, nicError, 'NIC');
                if (isValid) {
                    const nicValue = nic.value.trim();
                    if (!/^\d{9}([Vv]?|\d)$/.test(nicValue) && !/^\d{12}([Vv]?|\d)$/.test(nicValue)) {
                        nicError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Invalid NIC';
                        return false;
                    } else {
                        nicError.textContent = '';
                        return true;
                    }
                } else {
                    return false;
                }
            }

            // Function to validate date of birth
            function validateDateOfBirth() {
                const dateOfBirthInput = document.getElementById('dateofbirth');
                const dateOfBirthError = document.getElementById('dateofbirthError');
                const dateOfBirthValue = dateOfBirthInput.value.trim();

                if (dateOfBirthValue === '') {
                    dateOfBirthError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Date of Birth is required';
                    return false;
                }

                // Regular expression for date format (YYYY-MM-DD)
                const dateRegex = /^\d{4}-\d{2}-\d{2}$/;

                if (!dateRegex.test(dateOfBirthValue)) {
                    dateOfBirthError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Invalid Date Format (Use YYYY-MM-DD)';
                    return false;
                }

                // Split date components
                const [year, month, day] = dateOfBirthValue.split('-');

                // Create a new Date object and check if it's valid
                const dob = new Date(year, month - 1, day);

                if (
                    dob.getFullYear() != year ||
                    dob.getMonth() + 1 != month ||
                    dob.getDate() != day
                ) {
                    dateOfBirthError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Invalid Date';
                    return false;
                }

                // Check if the date is not in the future
                const currentDate = new Date();
                if (dob > currentDate) {
                    dateOfBirthError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Date of Birth cannot be in the future';
                    return false;
                }

                // Add additional checks for minimum age requirement if needed

                dateOfBirthError.textContent = '';
                return true;
            }


            // Function to validate first name
            function validateFirstName() {
                const firstname = document.getElementById('firstname');
                const firstnameError = document.getElementById('firstnameError');
                const firstnameValue = firstname.value.trim();
                if (firstnameValue === '') {
                    firstnameError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>First Name is required';
                    return false;
                } else if (!isValidName(firstnameValue)) {
                    firstnameError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>First Name must contain only letters';
                    return false;
                } else {
                    firstnameError.textContent = '';
                return true;
                }
            }

            

            // Function to validate city
            function validateCity() {
                const city = document.getElementById('city');
                const cityError = document.getElementById('cityError');
                const cityValue = city.value.trim();
                if (cityValue === '') {
                    cityError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>City is required';
                    return false;
                } else {
                    cityError.textContent = '';
                    return true;
                }
            }       

            // Function to validate address
            function validateAddress() {
            const address = document.getElementById('address');
            const addressError = document.getElementById('addressError');
            const addressValue = address.value.trim();
                if (addressValue === '') {
                    addressError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Address is required';
                    return false;
                } else {
                    addressError.textContent = '';
                    return true;
                }
            }
            // Function to validate educationlevel
            function validateEducationLevel() {
                const educationLevel = document.getElementById('educationlevel');
                const educationLevelError = document.getElementById('educationlevelError');
                const selectedValue = educationLevel.value.trim();

                if (selectedValue === '') {
                    educationLevelError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Please select your education level';
                    return false;
                } else {
                    educationLevelError.textContent = '';
                    return true;
                }
            }

            function validateInstitutionName() {
                const institutionName = document.getElementById('institutionname');
                const institutionNameError = document.getElementById('institutionNameError');
                const institutionNameValue = institutionName.value.trim();

                if (institutionNameValue === '') {
                    institutionNameError.textContent = ''; // Clear error message if field is empty
                    return false;
                }

                // Check for invalid characters only if the field is not empty
                if (!/^[A-Za-z\s]+$/.test(institutionNameValue)) {
                    institutionNameError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Institution Name must contain only letters';
                    return false;
                } else {
                    institutionNameError.textContent = ''; // Clear error message if input is valid
                }

                return true;
            }


            // Function to validate the degree obtained
            function validateDegreeObtained() {
                const degreeObtained = document.getElementById('DegreeObtained');
                const degreeObtainedError = document.getElementById('DegreeObtainedError');
                const degreeObtainedValue = degreeObtained.value.trim();

                if (degreeObtainedValue === '') {
                    degreeObtainedError.textContent = ''; // Clear error message if field is empty
                    return false;
                }

                // Check for invalid characters only if the field is not empty
                if (!/^[A-Za-z\s]+$/.test(degreeObtainedValue)) {
                    degreeObtainedError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Degree Obtained must contain only letters';
                    return false;
                } else {
                    degreeObtainedError.textContent = ''; // Clear error message if input is valid
                }

                return true;
            }

            // Function to validate the major or field of study
            function validateMajor() {
                const major = document.getElementById('major');
                const majorError = document.getElementById('majorError');
                const majorValue = major.value.trim();

                if (majorValue === '') {
                    majorError.textContent = ''; // Clear error message if field is empty
                    return false;
                }

                // Check for invalid characters only if the field is not empty
                if (!/^[A-Za-z\s]+$/.test(majorValue)) {
                    majorError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Major or Field of Study must contain only letters';
                    return false;
                } else {
                    majorError.textContent = ''; // Clear error message if input is valid
                }

                return true;
            }


            // Function to validate the degree obtained
            function validateDegreeObtained() {
                const degreeObtained = document.getElementById('DegreeObtained');
                const degreeObtainedError = document.getElementById('DegreeObtainedError');
                const degreeObtainedValue = degreeObtained.value.trim();

                if (degreeObtainedValue === '') {
                    degreeObtainedError.textContent = ''; // Clear error message if field is empty
                    return false;
                }

                // Check for invalid characters only if the field is not empty
                if (!/^[A-Za-z\s]+$/.test(degreeObtainedValue)) {
                    degreeObtainedError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Degree Obtained must contain only letters';
                    return false;
                } else {
                    degreeObtainedError.textContent = ''; // Clear error message if input is valid
                }

                return true;
            }

            // Function to validate the major or field of study
            function validateMajor() {
                const major = document.getElementById('major');
                const majorError = document.getElementById('majorError');
                const majorValue = major.value.trim();

                if (majorValue === '') {
                    majorError.textContent = ''; // Clear error message if field is empty
                    return false;
                }

                // Check for invalid characters only if the field is not empty
                if (!/^[A-Za-z\s]+$/.test(majorValue)) {
                    majorError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Major or Field of Study must contain only letters';
                    return false;
                } else {
                    majorError.textContent = ''; // Clear error message if input is valid
                }

                return true;
            }


            // Function to validate the Degree Start Year
            function validateDegreeStartYear() {
                const degreeStartYear = document.getElementById('degreestartyear');
                const degreeStartYearError = document.getElementById('degreeStartYearError');
                const degreeStartYearValue = degreeStartYear.value.trim();

                if (degreeStartYearValue === '') {
                    degreeStartYearError.textContent = ''; // Clear error message if field is empty
                    return false;
                }

                // Check for invalid characters only if the field is not empty
                if (!/^\d{4}$/.test(degreeStartYearValue)) {
                    degreeStartYearError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Invalid Year Format (Use YYYY)';
                    return false;
                } else {
                    degreeStartYearError.textContent = ''; // Clear error message if input is valid
                }

                return true;
            }

            // Function to validate the Degree End Year
            function validateDegreeEndYear() {
                const degreeEndYear = document.getElementById('degreeendyear');
                const degreeEndYearError = document.getElementById('degreeEndYearError');
                const degreeEndYearValue = degreeEndYear.value.trim();

                if (degreeEndYearValue === '') {
                    degreeEndYearError.textContent = ''; // Clear error message if field is empty
                    return false;
                }

                // Check for invalid characters only if the field is not empty
                if (!/^\d{4}$/.test(degreeEndYearValue)) {
                    degreeEndYearError.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>Invalid Year Format (Use YYYY)';
                    return false;
                } else {
                    degreeEndYearError.textContent = ''; // Clear error message if input is valid
                }

                return true;
            }


            

            // Function to validate the entire form
            function validateForm() {
                const isFirstNameValid = validateFirstName();
                const isLastNameValid = validateLastName();
                const isPhoneNumberValid = validatePhoneNumber();
                const isNICValid = validateNIC();
                const isDateOfBirthValid = validateDateOfBirth();
                const isCityValid = validateCity();
                const isAddressValid = validateAddress();
                const isEducationLevelValid = validateEducationLevel();
               

                // Add similar validations for other fields

                return isFirstNameValid && isLastNameValid && isPhoneNumberValid && isNICValid && isDateOfBirthValid  && isCityValid && isAddressValid && isEducationLevelValid;
            }

            // Add real-time validation for gender
            const genderInputs = document.querySelectorAll('input[name="gender"]');
            genderInputs.forEach(input => {
            input.addEventListener('change', validateGender);
            });


            



            
            document.getElementById('city').addEventListener('blur', validateCity);

            
            document.getElementById('address').addEventListener('blur', validateAddress);

            
            document.getElementById('firstname').addEventListener('blur', validateFirstName);

            
            document.getElementById('lastname').addEventListener('blur', validateLastName);

            
            document.getElementById('phone').addEventListener('blur', validatePhoneNumber);

            
            document.getElementById('nic').addEventListener('blur', validateNIC);

            
            document.getElementById('dateofbirth').addEventListener('blur', validateDateOfBirth);

            document.getElementById('educationlevel').addEventListener('change', validateEducationLevel);

            
            document.getElementById('institutionname').addEventListener('input', function() {
                validateInstitutionName();
            });

            
            document.getElementById('DegreeObtained').addEventListener('input', function() {
                validateDegreeObtained();
            });


            
            document.getElementById('DegreeObtained').addEventListener('input', function() {
                validateDegreeObtained();
            });

            
            document.getElementById('major').addEventListener('input', function() {
                validateMajor();
            });
            
            
            document.getElementById('degreestartyear').addEventListener('input', function() {
                validateDegreeStartYear();
            });

            
            document.getElementById('degreeendyear').addEventListener('input', function() {
                validateDegreeEndYear();
            });

            




                
        </script>


        
        

    </body>
</html>