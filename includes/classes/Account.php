<?php
class Account
{

    private $con;
    private $errorArray;

    public function __construct($con)
    {
        $this->con = $con;
        $this->errorArray = array();
    }

    public function login($username, $password)
    {

        $password = password_hash($password, PASSWORD_BCRYPT, array(
            'cost' => 12
        ));

        $query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$username' AND password='$password'");

        if (mysqli_num_rows($query) == 1)
        {
            return true;
        }
        else
        {
            array_push($this->errorArray, Constants::$loginFailed);
            return false;
        }

    }

    public function register($username, $firstName, $lastName, $email1, $email2, $password, $password2)
    {
        $this->validateUsername($username);
        $this->validateFirstName($firstName);
        $this->validateLastName($lastName);
        $this->validateEmails($email1, $email2);
        $this->validatePasswords($password, $password2);

        if (empty($this->errorArray) == true)
        {
            //Insert into db
            return $this->insertUserDetails($username, $firstName, $lastName, $email1, $password);
        }
        else
        {
            return false;
        }

    }

    public function getError($error)
    {
        if (!in_array($error, $this->errorArray))
        {
            $error = "";
        }
        return "<span class='errorMessage'>$error</span>";
    }

    private function insertUserDetails($username, $firstName, $lastName, $email1, $password)
    {
        $$encryptedPassword = password_hash($password, PASSWORD_BCRYPT, array(
            'cost' => 12
        ));
        $profilePic = "assets/images/profilepics/image1.png";
        $date = date("Y-m-d");

        $result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$username', '$firstName', '$lastName', '$email1', '$$encryptedPassword', '$date', '$profilePic')");

        return $result;
    }

    private function validateUsername($username)
    {

        if (strlen($username) > 25 || strlen($username) < 5)
        {
            array_push($this->errorArray, Constants::$usernameCharacters);
            return;
        }

        $checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$username'");
        if (mysqli_num_rows($checkUsernameQuery) != 0)
        {
            array_push($this->errorArray, Constants::$usernameTaken);
            return;
        }

    }

    private function validateFirstName($firstName)
    {
        if (strlen($firstName) > 25 || strlen($firstName) < 2)
        {
            array_push($this->errorArray, Constants::$firstNameCharacters);
            return;
        }

        $checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$username'");
        if (mysqli_num_rows($checkUsernameQuery) != 0)
        {
            array_push($this->errorArray, Constants::$usernameTaken);
            return;
        }

    }

    private function validateLastName($lastName)
    {
        if (strlen($lastName) > 25 || strlen($lastName) < 2)
        {
            array_push($this->errorArray, Constants::$lastNameCharacters);
            return;
        }
    }

    private function validateEmails($em, $email2)
    {
        if ($em != $email2)
        {
            array_push($this->errorArray, Constants::$emailsDoNotMatch);
            return;
        }

        if (!filter_var($em, FILTER_VALIDATE_EMAIL))
        {
            array_push($this->errorArray, Constants::$emailInvalid);
            return;
        }

        $checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
        if (mysqli_num_rows($checkEmailQuery) != 0)
        {
            array_push($this->errorArray, Constants::$emailTaken);
            return;
        }

    }

    private function validatePasswords($password, $password2)
    {

        if ($password != $password2)
        {
            array_push($this->errorArray, Constants::$passwordsDoNoMatch);
            return;
        }

        if (preg_match('/[^A-Za-z0-9]/', $password))
        {
            array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
            return;
        }

        if (strlen($password) > 30 || strlen($password) < 5)
        {
            array_push($this->errorArray, Constants::$passwordCharacters);
            return;
        }

    }

}
?>
