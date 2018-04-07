<?php 
if(isset($_POST['submit'])){
    $to = "danemarkiel@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " rendelést adott le:" . "\n\n" . $_POST['szobak'] . "\n" . $_POST['rangok'] . "\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<h1>E-mail elküldve!Köszönjük " . $last_name . "., Hamarosan felvesszük veled a kapcsolatot.</h1>";
    //header('Location: index.php')
    }
?>