var fnameError = document.getElementById('fname-error');
var lnameError = document.getElementById('lname-error');
var emailError = document.getElementById('email-error');
var contactError = document.getElementById('mobile-error');
var nicError = document.getElementById('nic-error');
var usernameError = document.getElementById('username-error');
var password1Error = document.getElementById('pw1-error');
var password2Error = document.getElementById('pw2-error');
var genderError = document.getElementById('gender-error');
var submitError = document.getElementById('submit-error');

function validateFname() {
    var firstName = document.getElementById('firstname').value;
    if (firstName.length == 0) {
        fnameError.innerHTML = 'First name is required';
        return false;
    }
    if (!firstName.match(/^[A-Za-z]+$/)) {
        fnameError.innerHTML = 'Name invalid';
        return false;
    }
    fnameError.innerHTML = '&#x2705';
    return true;
}
function validateLname() {
    var lastName = document.getElementById('lastname').value;
    if (lastName.length == 0) {
        lnameError.innerHTML = 'Last name is required';
        return false;
    }
    if (!lastName.match(/^[A-Za-z]+$/)) {
        lnameError.innerHTML = 'Name invalid';
        return false;
    }
    lnameError.innerHTML = '&#x2705';
    return true;
}
function validateEmail() {
    var emailAddress = document.getElementById('email').value;
    if (emailAddress.length == 0) {
        emailError.innerHTML='Email is required';
        return false;
    }
    if (!emailAddress.match(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/)) {
        emailError.innerHTML='Invalid email';
        return false;
    }
    emailError.innerHTML='&#x2705';
    return true;
}

function validatePhone() {
    var phoneNumber = document.getElementById('mobile').value;
    if (phoneNumber.length == 0) {
        contactError.innerHTML='Contact no is required';
        return false;
    }
    if (phoneNumber.length !== 10) {
        contactError.innerHTML='Contact no should be 10 digits';
        return false;
    }
    if (!phoneNumber.match(/^[0-9]{10}$/)) {
        contactError.innerHTML='Invalid number';
        return false;
    }
    contactError.innerHTML='&#x2705';
    return true;
}
function validateNIC() {
    var nic=document.getElementById('nic').value;
    if (nic.length == 0) {
        nicError.innerHTML='NIC is required';
        return false;
    }
    if (nic.length > 12) {
        nicError.innerHTML='Invalid NIC';
    }
    // Remove spaces and convert to uppercase
    nic = nic.replace(/\s/g, '').toUpperCase();
    
    // Check if NIC contains 9 digits followed by 'V' or contains 12 digits
    if (!nic.match(/^\d{9}[Vv]$|^\d{12}$/)) {
        nicError.innerHTML='Invalid NIC';
        return false;
    }
    nicError.innerHTML='&#x2705';
    return true;  
}
function validateUserName() {
    var username=document.getElementById('uname').value;
    if (username.length == 0) {
        usernameError.innerHTML='User Name is required'
        return false;
    }
    if (username.length > 20) {
        usernameError.innerHTML='User name must less than 20 characters'
        return false;
    }
    // Check if the username contains only letters, numbers, and underscores
    if (!username.match(/^(?=.*[0-9])[\w@]+$/)) {
        usernameError.innerHTML='Invalid User name';
        return false;
    }
    
    usernameError.innerHTML='&#x2705';
    return true;
}

var pw1Input = document.getElementById('pw1');
var pw2Input = document.getElementById('pw2');

function validatepassword() {
    var pw1 = pw1Input.value;
    var pw2 = pw2Input.value;

    if (pw1.length == 0) {
        password1Error.innerHTML = 'Enter a password';
        pw2Input.disabled = true;
        return false;
    }

    if (pw1.length < 8) {
        password1Error.innerHTML = 'Password must be at least 8 characters long';
        pw2Input.disabled = true;
        return false;
    }

    password1Error.innerHTML = '&#x2705';
    pw2Input.disabled = false;

    if (pw2.length < 8) {
        password2Error.innerHTML = 'Password must be at least 8 characters long';
        return false;
    }

    if (pw1 != pw2) {
        password2Error.innerHTML = 'Passwords do not match';
        return false;
    }

    password2Error.innerHTML = 'Passwords match &#x2705';
    return true;
}

function validateGender() {
    var male = document.getElementById('male');
    var female = document.getElementById('female');
    var other = document.getElementById('other');
    var genderError = document.getElementById('gender-error');

    if (!male.checked && !female.checked && !other.checked) {
        genderError.innerHTML = 'Please select a gender';
        return false;
    } else {
        genderError.innerHTML = '&#x2705'; // Clear error message if a gender is selected
        return true;
    }
}
function validateForm() {
    if (!validateFname() || !validateLname() || !validateEmail() || !validatePhone() || !validateNIC() || !validateUserName() || !validatepassword() || !validateGender()) {
        alert('Registration Failed! Please check again');
        return false;
    }
    alert('Data Recorded Successfully');
    return true;
}