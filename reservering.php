<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {

  $mail = new PHPMailer(true);

  //Server settings
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'goldendragonandinfo@gmail.com';
  $mail->Password   = 'fajlyoriavkdzeea';
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;

  //Recipients
  $mail->setFrom('goldendragonandinfo@gmail.com');
  $mail->addAddress($_POST["email"]);
  $mail->addReplyTo($_POST["email"], $_POST["name"]);

  //Content
  $mail->isHTML(true);
  $mail->Subject = "Reservering";
  $mail->Body = "<p>Uw reservering bij Golden Dragon Restaurant is bevestigd. We kijken ernaar uit om u binnenkort te verwelkomen.</p>";

  $mail->send();
  echo
  " 
    <script> 
     alert('Uw reservering is gelukt');
    </script>
    ";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Golden Dragon het beste Chinese restaurant van Nederland Reserveren</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="image/Favicon.png">
  <meta name="description" content="Golden Dragon het beste Chinese restaurant van Nederland">
  <meta name="keywords" content="Chinees, Restaurant, Golden Dragon, reserveren, info, naam, achternaam, tussenvoegsel, email, telefoonnummer, personen, tijd, gelegenheid, datum">
  <meta name="author" content="Kris Van Der Krogt, R. Marek">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <?php include 'header.php'; ?>

  <main id="reserveringinfo">
    <h2>Uw reservering is gelukt, dit zijn uw gegevens</h2>
    <h2>Voornaam:</h2>
    <?php echo $_POST["name"]; ?><br>
    <h2>Tussenvoegsel:</h2>
    <?php echo $_POST["tussenvoegsel"]; ?><br>
    <h2>Achternaam:</h2>
    <?php echo $_POST["achternaam"]; ?><br>
    <h2>Email:</h2>
    <?php echo $_POST["email"]; ?><br>
    <h2>Telefoonnummer:</h2>
    <?php echo $_POST["telefoonnummer"]; ?><br>
    <h2>Personen:</h2>
    <?php echo $_POST["personen"]; ?><br>
    <h2>Tijd:</h2>
    <?php echo $_POST["tijd"]; ?><br>
    <h2>Datum:</h2>
    <?php echo $_POST["datum"]; ?><br>
  </main>

  <?php include 'footer.php'; ?>
</body>

</html>