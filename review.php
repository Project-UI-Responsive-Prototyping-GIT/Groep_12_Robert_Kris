<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Dragon het beste Chinese restaurant van Nederland Review</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/Favicon.png">
    <meta name="description" content="Golden Dragon het beste Chinese restaurant van Nederland">
    <meta name="keywords" content="Chinees, Restaurant, China, review, sterren, naam, gegevens, ervaring, email, goed, gemiddeld, slecht, prima">
    <meta name="author" content="Robert Marek">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <section class="formReview">
            <article class="formForm">
            <form action="" method="post">
            <h2 id="reviewHoofd">Plaats Review:</h2>
            <label for="name">Naam:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="review">Review:</label><br>
            <textarea id="review" name="review" required></textarea><br><br>

            <label for="Sterren">Sterren:</label>
        <article class="radio-container">
            <input type="radio" id="ster" name="sterren" value="⭐"><label for="ster1">⭐</label>
            <input type="radio" id="ster" name="sterren" value="⭐⭐"><label for="ster2">⭐⭐</label>
            <input type="radio" id="ster" name="sterren" value="⭐⭐⭐"><label for="ster3">⭐⭐⭐</label>
            <input type="radio" id="ster" name="sterren" value="⭐⭐⭐⭐"><label for="ster4">⭐⭐⭐⭐</label>
            <input type="radio" id="ster" name="sterren" value="⭐⭐⭐⭐⭐"><label for="ster5">⭐⭐⭐⭐⭐</label>
        </article><br><br>

            <input type="submit" name="submit" id="sendReview" value="Verzend Review">
            </form>
            </article>
            <article class="formForm">
            </article>
        </section>
        <section id="reviewKlanten">
            <article>
            <?php
            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $review = $_POST['review'];
                $sterren = $_POST['sterren'];
                echo "<h1 id='reviewUw'>Uw Review:</h1>";
                echo "<p><strong>Naam:</strong> $name</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Review:</strong> $review</p>";
                echo "<p><strong>Sterren:</strong> $sterren</p></article>";
            }
            ?>
            </article>
            <article>
                <p><strong>Naam: </strong>Ron Jans</p>
                <p><strong>Email: </strong>ronjans@gmail.com</p>
                <p><strong>Review: </strong>Het restaurant bood een verfijnde smaakbeleving met authentieke gerechten en een gezellige sfeer, een ware culinaire reis door de traditionele keuken van China.</p>
                <p><strong>Sterren: </strong>⭐⭐⭐⭐⭐</p>
            </article>
            <article>
                <p><strong>Naam: </strong>Kok Chan</p>
                <p><strong>Email: </strong>chankok@hotmail.com</p>
                <p><strong>Review: </strong>Dit restaurant overtreft alle verwachtingen met sublieme gerechten en een onberispelijke service, waardoor het een must-visit is voor elke culinaire liefhebber.</p>
                <p><strong>Sterren: </strong>⭐⭐⭐⭐⭐</p>
            </article>
            <article>
                <p><strong>Naam: </strong>Lies Zhara</p>
                <p><strong>Email: </strong>lieszh@gmail.com</p>
                <p><strong>Review: </strong>Het eten was redelijk maar niet uitzonderlijk. De service liet wat te wensen over en de sfeer was vrij gewoontjes. Gemiddelde ervaring.</p>
                <p><strong>Sterren: </strong>⭐⭐⭐</p>
        </article>
        </section>    
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>