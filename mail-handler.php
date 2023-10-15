<?php 
if(isset($_POST['submit'])){
    echo("Here I am");
    $to = "neenu.mariajohnson@gmail.com"; // this is your Email address
    $from = "neenu.mariajohnson@gmail.com"; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo("Here I am");
    $subject = "Form submission";
    $message = "Name : " . $name . "\n" . "Email : " . $email . "\n" . "Message : " . $_POST['message'];
    echo("Here I am");

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    echo("Here I am");
    mail($to,$subject,$message,$headers);
    echo("Here I am");
    header('Location: contact.html');
    exit;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
