<?php 
if(isset($_POST['submit'])){
    echo("Here I am");
    
    echo("Here I am");
    header('Location: contact.html');
    exit;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
