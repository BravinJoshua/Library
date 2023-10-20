<?php
$servername = "localhost"; //name of your sever 
$user = "root"; //the user created while on your server while installing xampp/wamp
$password = ""; // the password set while installing xampp/wamp. Leave it empty if you set no password at installation
$DATABASE_NAME = "Library"; //name of the database you created


//create connection 
$conn = new mysqli($servername, $user, $password, $DATABASE_NAME);
