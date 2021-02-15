<?php 
if(isset($_POST['submit'])){
    $to = "ahmedelsayad480@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $from . " send a subject:" . $subject . "\n\n" " and wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message to Ahmed Mohamed" . $name . "wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Message Sent. Thank you " . $name . ", Ahmed will see it shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
