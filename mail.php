<html>
    <head>
        <meta http-equiv="refresh" content="3;url=index.html">
        <title>Thank You! — Jhonata Rios</title>
    </head>
    <style>
        body{
            background-color: #292929;
            color: #fff;
            font-size: 42px;
            font-align: center;
            padding:72px
        }
    </style>
<body>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $interested = $_POST['interested'];
        $message = $_POST['message'];
        $formcontent=" From: $name \n Email: $email \n Company: $company \n Message: $message";
        $recipient = "jhowrk@gmail.com";
        $subject = "Contact Form";
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        echo "Thank You! You will be redirected back to the website in 3 seconds.";
    ?>
</body>
</html>
