<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['_replyto'];
    $message = $_POST['message'];

    $mailTo = "elisfbailey@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved a message from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");

}


?>