<?php

// This page handles register form submission

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

// Detects when SIGN UP button is pressed
if(isset($_POST['registerButton'])) {
	$username  = sanitizeFormUsername($_POST['username']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName  = sanitizeFormString($_POST['lastName']);
	$email     = sanitizeFormString($_POST['email']);
	$email2    = sanitizeFormString($_POST['email2']);
	$password  = sanitizeFormPassword($_POST['password']);
	$passwor2  = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

	if($wasSuccessful == true) {
		header("Location: index.php");
	}
}

?>
