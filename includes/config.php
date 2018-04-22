<?php
ob_start();

$timezone = date_default_timezone_set("America/New_York");
$con      = mysqli_connect("localhost", "root", "root", project_spotify);
if(mysqli_connect_error()) {
  echo "Failed to connect: " . mysqli_connect_error();
}
?>
