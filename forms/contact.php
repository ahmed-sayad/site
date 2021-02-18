<?php 
if(isset($_POST['submit'])){
    $to = "ahmedelsayad480@gmail.com";
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject1 = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . "emailed you by:" $from .", wrote the suject:" . $subject . " and message the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject1,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Message Sent. Thank you " . $name . ", Ahmed will contact you shortly.";
    }
?>
