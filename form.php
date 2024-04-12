<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Golden Dragon het beste Chinese restaurant van Nederland">
    <meta name="author" content="Kris Van Der Krogt, R. Marek">
    <meta name="keywords" content="Chinees, Restaurant, Golden Dragon, reserveren, info, naam, achternaam, tussenvoegsel, email, telefoonnummer, personen, tijd, gelegenheid, datum, formulier">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Golden Dragon het beste Chinese restaurant van Nederland Reserveren</title>
    <link rel="icon" type="image/x-icon" href="images/Favicon.png">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

    <?php include 'header.php'; ?>

    <main id="formmain">
        <form action="reservering.php" method="post">
            <section>
                <article>
                    <label>Voornaam</label><br>
                    <input type="text" id="voornaam" name="name"><br>
                </article>
                <article>
                    <label>Achternaam</label><br>
                    <input type="text" id="achternaam" name="achternaam">
                </article>
            </section>
            <section>
                <article>
                    <label>Tussenvoegsel</label><br>
                    <input type="text" id="tussenvoegsel" name="tussenvoegsel">
                </article>
                <article>
                    <label>Email</label><br>
                    <input type="text" id="email" name="email">
                </article>
            </section>
            <section>
                <article>
                    <label>Telefoonnummer</label><br>
                    <input type="text" id="telefoonnummer" name="telefoonnummer">
                </article>
            </section>
            <section>
                <article>
                    <label>Personen</label><br>
                    <input type="text" id="personen" name="personen">
                </article>
                <article>
                    <label>Tijd</label><br>
                    <select id="tijd" name="tijd">
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>
                        <option value="1700">17:00</option>
                        <option value="1800">18:00</option>
                        <option value="1900">19:00</option>
                        <option value="2000">20:00</option>
                        <option value="2100">21:00</option>
                        <option value="2200">22:00</option>
                    </select>
                </article>
            </section>
            <section>
                <article>
                    <label>Datum</label><br>
                    <input type="date" value="datum" id="datum" name="datum">
                </article>
            </section>
            <section>
                <article>
                    <label>Gelegenheid</label><br>
                    <input type="text" id="gelegenheid" name="gelegenheid">
                </article>
            </section>
            <section>
                <article>
                    <button type="submit" name="send" id="send">Reserveer nu</button>
                </article>
            </section>
        </form>
    </main>
        <article class="gridcontainer">
            <img id="fotoEigenaar" src="images/owners.png" alt="">
        </article>

    <?php include 'footer.php'; ?>

</body>

</html>
