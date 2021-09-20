<?php 
    if(isset($_POST['submit'])){
        $to = "lolsonwebsite@gmail.com"; // this is your Email address
        $from = RemoveSpecialChar($_POST['email']); // this is the sender's Email address
        $first_name = RemoveSpecialChar($_POST['first_name']);
        $last_name = RemoveSpecialChar($_POST['last_name']);
        $message1 = RemoveSpecialChar($_POST['message']);
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $message1;
        $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $message1;

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to, $subject, $message, $headers);
        mail($from, $subject2, $message2, $headers2); 
        echo "Mail Sent. Thank you " . $first_name . ", for reaching out! I'll get back to you soon!";
    }

    function RemoveSpecialChar($str) {
        $res = str_replace( array( '\'', '"',
        ',' , ';', '<', '>' ), ' ', $str);
          
        return $res;
    }
?>

