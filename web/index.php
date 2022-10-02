<?php

if (isset($_POST['submit'])) {

    // Email will sent to this Email
    $mailto = "adilanga@gmail.com";

    //getting customer data
    $name = $_POST['name']; //getting customer name
    $fromEmail = $_POST['email']; //getting customer email
    $phone = $_POST['tel']; //getting customer Phome number
    $subject = $_POST['subject']; //getting subject line from client
    $subject2 = "Confirmation: Message was submitted successfully"; // For customer confirmation

    //Email body I will receive
    $message = "Cleint Name: " . $name . "\n" . "Phone Number: " . $phone . "\n\n" . "Client Message: " . "\n" . $_POST['message'];

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: ' . $fromEmail . "\r\n";
    $headers .= 'Cc: ' . $fromEmail . "\r\n";

    //PHP mailer function
    $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address

    // Result 1
    print("Result 1 => " . $result1);
    echo "Result 1 => " . $result1;

    //Checking if Mails sent successfully
    if ($result1) {
        $success = "Your Message was sent Successfully!";
    } else {
        $failed = "Sorry! Message was not sent, Try again Later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Quick Contact</h3>
            <h4>Contact us today, and get reply with in 24 hours!</h4>

            <fieldset>
                <input placeholder="Your name" name="name" type="text" tabindex="1" autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" name="email" type="email" tabindex="2">
            </fieldset>
            <fieldset>
                <input placeholder="Your Phone Number" name="tel" type="tel" tabindex="3">
            </fieldset>
            <fieldset>
                <input placeholder="Type your subject line" type="text" name="subject" tabindex="4">
            </fieldset>
            <fieldset>
                <textarea name="message" placeholder="Type your Message Details Here..." tabindex="5"></textarea>
            </fieldset>
            <div>
                <p class="success"> <?php echo $success;  ?></p>
                <p class="failed"> <?php echo $failed;  ?></p>
            </div>
            <fieldset>
                <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">Submit Now</button>
            </fieldset>
        </form>
    </div>
</body>

</html>