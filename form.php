<?php

if (isset($_POST['submit'])){
    $mailto = "moforemmanuel01@gmail.com";
    $from = $_POST['email'];

    $subject = "User to website";
    $subject2 = "website to user";

    $name = $_POST['name'];
    
    $message = "User name : ".$name." wrote : "."\n\n".$_POST['comment'];
    $message2 = "Dear ".$name."\n\n"."Thank you for working with us!";

    $headers = "From: ".$from;
    $headers2 .= "From: ".$mailto;

    $result = mail($mailto,$subject,$message,$headers);
    $result2 = mail($from,$subject2,$message2,$headers2);

    if ($result){
        echo '<script type = "text/javascript">alert("E-mail has been sent! Thank you $name")</script>';
    }
    else {
        echo '<script type = "text/javascript">alert("Mail not sent")</script>';
    }
    
}
else{
    echo 'Submit values correctly';
}


?>