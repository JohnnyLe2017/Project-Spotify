<?php

// Helper functions
function sanitizeFormUsername($inputText){
	$inputText = strip_tags($username); // disables HTML elements from being inputted
	$inputText = str_replace(" ", "", $username); // Sanitizes username
	return $inputText;
}

function sanitizeFormString($inputText){
	$inputText = strip_tags($inputText); 
	$inputText = str_replace(" ", "", $inputText); 
	$inputText = ucfirst(strtolower($inputText)); // Uppercases first name
	return $inputText;
}

function sanitizeFormPassword($inputText){
	$inputText = strip_tags($inputText); // disables HTML elements from being inputted
	return $inputText;
}

// Detects when Login button is pressed
if(isset($_POST['loginButton'])) {

}

// Detects when SIGN UP button is pressed
if(isset($_POST['registerButton'])) {
	$username  = sanitizeFormUsername($_POST['username']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName  = sanitizeFormString($_POST['lastName']);
	$email     = sanitizeFormString($_POST['email']);
	$email2    = sanitizeFormString($_POST['email2']);
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Welcome to Project Spotify!</title>
    <link href="main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" placeholder="User Name" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" placeholder="Enter password" required>
            </p>
            <button type="submit" name="loginButton">Log In</button>
        </form>
		
		<form action="register.php" id="registerForm" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="User Name" required>
            </p>
            <p>
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            </p>
            <p>
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </p>
            <p>
                <label for="email2">Confirm email</label>
                <input type="email" id="email2" name="email2" placeholder="Confirm email" required>
            </p>

            <p>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </p>
             <p>
                <label for="password2">Confirm password</label>
                <input type="password" id="password2" name="password2" placeholder="Enter password" required>
            </p>
            <button type="submit" name="registerButton">SIGN UP</button>
        </form>

    </div>
    <script src="script.js"></script>
</body>

</html>