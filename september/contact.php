<?php 
    if(isset($_POST['submit'])){
        $to = "lolsonwebsite@gmail.com"; 

        $oldfrom = $_POST['email']; 
        $from = htmlspecialchars($oldfrom);

        $oldfirst_name = $_POST['first_name'];
        $first_name = htmlspecialchars($oldfirst_name);

        $oldlast_name = $_POST['last_name'];
        $last_name = htmlspecialchars($oldlast_name);

        $oldmessage = $_POST['message'];
        $newmessage = htmlspecialchars($oldmessage);

        $subject = "Form submission";
        $message = $first_name . " " . $last_name . "\n\nEmail: " . $from . " wrote the following:" . "\n\n" . $newmessage;
    
        $headers = "From:" . $from;
        if(mail($to,$subject,$message,$headers)) {
            echo("Wonderful! I've recieved your email and will be getting back to you shortly!");
        }
        else {
            echo("I'm sorry, there has been an error. Please try emailing me another way!");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Me - Lindsey Olson - Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="media/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<header>
        <div class="name" aria-role="title"> 
            Lindsey Olson
        </div>
        <ul aria-role="navigation">
            <li><a href="contact.php">contact</a></li>
            <li><a href="projects.html">projects</a></li>
            <li><a href="index.html">home</a></li>
        </ul>
    </header>

    <div class="title-box">
        <h1> 
            Talk to me! <br/>
        </h1>
    </div>

    <div class="intro">
        <div class="text" aria-role="contentinfo">
            Questions about who I am, what I do, or just want someone to talk to? Feel free to
             send me an email below, connect with me on <a href="www.linkedin.com/in/l-olson" 
             class="plainURL"> LinkedIn, </a>or send a carrier pigeon to Rochester, NY and 
             I'll find it. <br/>
             Care to see some of my resumes? Sure! I have a few stylized ones on LinkedIn,
             or you could download my most current one <a href="media/resume.pdf" 
             class="plainURL" download> here.</a>
        </div>
    </div>

    <div class="form" aria-label="Contact Form">
        <form action="" method="POST" action="contact.php">
            <p>
                <label for="fname" type="text">First Name: </label>
                <input id="fname" type="text" name="first_name" placeholder="First Name" aria-role="textbox">
            </p>
            <p>
                <label for="lname" type="text">Last Name: </label>
                <input id="lname" type="text" name="last_name" placeholder="Last Name" aria-role="textbox">
            </p>
            <p>
                <label for="email" type="text">Email: </label>
                <input id="email" type="text" name="email" placeholder="Email" aria-role="textbox">
            </p>
            <p>
                <label for="message" type="text"></label> 
                <textarea id="message" rows="5" name="message" cols="30" 
                    placeholder="Your message here..." aria-role="textbox"></textarea><br>
            </p>
            <p>
                <label for="submit" type="text"></label>
                <input aria-label="Submit form" aria-role="button" type="submit" 
                    name="submit" value="Send Email">
            </p>
        </form>
    </div>

    <div class="title-box" style="margin-top: 1rem;">

    </div>

    <footer>
        Ⓒ 2021 <br/>
        <a href="www.github.com/lo6169"> Github </a> |
        <a href="www.linkedin.com/in/l-olson"> LinkedIn </a>
    </footer>

</body>
</html>
