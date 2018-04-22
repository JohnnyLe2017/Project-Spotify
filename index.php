<?php

    include("includes/config.php");

    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    }
    else {
        header("Location: register.php");
    }


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Project Spotify!</title>
   <link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="nowPlayingBarContainer">

        <div id="nowPlayingBar">

        </div>

    </div>

    <script src="js/script.js"></script>
</body>

</html>
