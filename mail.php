<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $problem = $_POST['problem'];
    $message = $_POST['message'];
    $to = "4797@laurenslyceum.nl";	

    mail($to, $problem, $message, "From: $name <$email>");
    echo "Uw bericht is vestuurd!";
}
?>