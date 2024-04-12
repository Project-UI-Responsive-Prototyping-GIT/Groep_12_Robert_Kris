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
    $mail->Subject = "Sollicitatie";
    $mail->Body = "
  <p>We willen je graag informeren dat je sollicitatie bij Golden Dragon succesvol is ontvangen en in behandeling is genomen. We zijn verheugd met je interesse in ons bedrijf en waarderen de tijd die je hebt genomen om bij ons te solliciteren.</p>
  <p>Ons wervingsproces kan enige tijd in beslag nemen omdat we alle sollicitaties zorgvuldig beoordelen. We streven ernaar om zo spoedig mogelijk contact met je op te nemen om de volgende stappen te bespreken.</p>
  <p>Nogmaals bedankt voor je interesse in Golden Dragon. We kijken ernaar uit om meer over jou te leren en mogelijk samen te werken in de toekomst.</p>
  <br>
  <p>Met vriendelijke groet,</p>
  <p>Golden Dragon</p>";

    $mail->send();
    echo
    " 
    <script> 
     alert('Uw sollicitatie is afgerond');
    </script>
    ";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Dragon het beste Chinese restaurant van Nederland Reserveren Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/Favicon.png">
    <script src="lib/script.js" defer></script>
    <meta name="description" content="Golden Dragon het beste Chinese restaurant van Nederland">
    <meta name="keywords" content="Chinees, Restaurant, China">
    <meta name="author" content="Kris Van Der Krogt">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <main id="vacaturemain">
        <section id="vacature">
            <article>
                <h1>Functie hulpje:</h1>
                <p>Beste sollicitant,</p>

                <p>We zijn verheugd om aan te kondigen dat Golden Dragon op zoek is naar een toegewijde en enthousiaste persoon om ons team te versterken in de functie van Hulpje. Als Hulpje speel je een essentiële rol bij het ondersteunen van onze dagelijkse activiteiten en het waarborgen van een soepele werking van ons bedrijf.</p>

                <h2>Functieomschrijving:</h2>
                <ul>
                    <li>Assisteren van collega's bij verschillende taken en projecten.</li>
                    <li>Uitvoeren van administratieve taken zoals archiveren, documentatie bijhouden en gegevens invoeren.</li>
                    <li>Organiseren van materialen en het bijhouden van voorraden.</li>
                    <li>Ondersteuning bieden bij logistieke processen zoals verzending en ontvangst van goederen.</li>
                    <li>Flexibel zijn en bereid om te helpen bij ad-hoc taken.</li>
                </ul>

                <h2>Gewenste vaardigheden en eigenschappen:</h2>
                <ul>
                    <li>Sterke motivatie en een positieve houding.</li>
                    <li>Goede communicatieve vaardigheden en teamgerichtheid.</li>
                    <li>Bereidheid om nieuwe vaardigheden te leren en snel taken eigen te maken.</li>
                    <li>Nauwkeurigheid en oog voor detail.</li>
                    <li>Flexibiliteit en aanpassingsvermogen.</li>
                </ul>

                <h2>Wat wij bieden:</h2>
                <ul>
                    <li>Een dynamische en stimulerende werkomgeving.</li>
                    <li>Mogelijkheden voor persoonlijke en professionele groei.</li>
                    <li>Competitieve vergoedingen en voordelen.</li>
                </ul>



            </article>
            <article id="formvaca">
                <form id="vacatureform" action="vacature.php" method="post">
                    <h2>Solliciteren</h2>
                    <label>Voornaam</label><br>
                    <input type="text" id="voornaam" name="name"><br>
                    <label>Achternaam</label><br>
                    <input type="text" id="achternaam" name="achternaam">
                    <label>Tussenvoegsel</label><br>
                    <input type="text" id="tussenvoegsel" name="tussenvoegsel">
                    <label>Email</label><br>
                    <input type="text" id="email" name="email">
                    <label>Motivatie</label><br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <button type="submit" name="send" id="stagebutton">SOLLICITEER DIRECT</button>
            </article>
            </form>
            </article>
        </section>
        <section id="vacainfo">
            <h2>Onze locatie:</h2>
            <iframe width="300vw" height="300vw" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCLNLXcszmV-L6lamqKNiaPY8mxzS_iDMA
    &q=Golden+Dragon,Capelle+WA">
            </iframe>
        </section>
    </main>
</body>