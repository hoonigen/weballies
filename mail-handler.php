<?php 

    echo("Here I am");
     echo "<script>console.log('Debug Objects' );</script>";
    echo("Here I am");
    header('Location: contact.html');
    exit;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    
?>
