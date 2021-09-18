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

</html> 

<!DOCTYPE html>
<html>
<head>
    <title>Lindsey Olson - Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="media/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div class="header">
        <div class="name"> 
            Lindsey Olson
        </div>
        <ul>
            <li><a href="contact.php">contact</a></li>
            <li><a href="resume.html">resume</a></li> <!-- TO BE DOWNLOAD -->
            <li><a href="projects.html">projects</a></li>
            <li><a href="index.html">home</a></li>
        </ul>
    </div>

    <div class="title-box">
        <div class="text"> 
            Talk to me! <br/>
        </div>
    </div>

    <form action="" method="post">
        <p>
            <label for="fname" type="text">First Name: </label>
            <input id="fname" type="text" name="first_name" placeholder="First Name">
        </p>
        <p>
            <label for="lname" type="text">Last Name: </label>
            <input id="lname" type="text" name="last_name" placeholder="Last Name">
        </p>
        <p>
            <label for="email" type="text">Email: </label>
            <input id="email" type="text" name="email" placeholder="Email">
        </p>
        <p>
            <label for="message" type="text"></label> 
            <textarea id="message" rows="5" name="message" cols="30" 
            placeholder="Your message here..."></textarea><br>
        </p>
        <input type="submit" name="submit" value="Send Email">
    </form>
           


    <div class="footer">
        C 2021 <br/>
        <a href="www.github.com/lo6169"> Github </a> <br/>
        <a href="www.linkedin.com/in/l-olson"> LinkedIn </a>
    </div>

</body>
</html>
