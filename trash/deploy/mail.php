<?php 
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");

    $to = "mike000027@yandex.ru"; // this is your Email address
    $name = $_POST['uname'];  
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = "Новая заявка с wpPlay";
    $message = "Имя:" . $name  . " , Телефон:" . $phone . "Почта:" . $email;

    $headers = "From:" . $email;
    mail($to,$subject,$message,$headers);
    //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.

?>