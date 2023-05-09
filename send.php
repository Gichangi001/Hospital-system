
<head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
 </head>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\sendmail\phpmailer\src\Exception.php';
require 'C:\xampp\sendmail\phpmailer\src\PHPMailer.php';
require 'C:\xampp\sendmail\phpmailer\src\SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ddmailer48@gmail.com';
    $mail->Password = 'pkmxrssenteylwbc';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;


$mail->addAddress($_POST["email"]);
    $mail->setFrom($_POST["email"], $_POST["name"]);
    $mail->addAddress('ddmailer48@gmail.com');

    $mail->isHTML(true);
	
	

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo "
        <script>
        alert('sent successfully')
        document.location.href = 'sent.html'
        </script>
    ";
}
?>

