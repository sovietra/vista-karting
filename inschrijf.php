<?php
    //print_r($_POST);

    if(isset($_POST['btnSubmit'])) {
        $nummer         = $_POST['nummer'];
        $voornaam       = $_POST['voornaam'];
        $tussenvoegsel  = $_POST['tussenvoegsel'];
        $achternaam     = $_POST['achternaam'];
        $email          = $_POST['email'];

        $sql = "INSERT INTO 
                    tb_studenten (nummer, voornaam, tussenvoegsel, achternaam, email) 
                    values('$nummer', '$voornaam', '$tussenvoegsel', '$achternaam', '$email')";
        require_once("connection.inc.php");
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute();
    }
    
?>



<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home pagina</title>
    <link rel="stylesheet" href="inschrijf.css">
</head>

<body>
    <header id="header-div">
    </header>
    <div>
        <div class="container">
            <h1>Inschrijven!</1h>
                <br>
                <div>

                    <form action="inschrijf.php" method="post" enctype="multipart/formdata">
                        <div class="container2">
                            <h1>Schrijf je in</h1>
                            <p>Schrijf je in en doe mee!</p>
                            <hr>

                            <label for="nummer"><b>Student Nummer</b></label>
                            <input type="text" placeholder="Je Studentnummer" name="nummer" id="nummer" required>

                            <label for="voornaam"><b>Naam</b></label>
                            <input type="text" placeholder="voornaam" name="voornaam" id="voornaam" required>

                            <label for="tussenvoegsel"><b>Tussenvoegsel</b></label>
                            <input type="text" placeholder="tussenvoegsel" name="tussenvoegsel" id="tussenvoegsel"
                                notrequired>

                            <label for="achternaam"><b>Achternaam</b></label>
                            <input type="text" placeholder="achternaam" name="achternaam" id="achternaam" required>

                            <label for="email"><b>E-mailadres</b></label>
                            <input type="text" placeholder="Je E-mailadres" name="email" id="email" required>
                            <hr>

                            <button name="btnSubmit" onclick="gotomypage('dankuwel');"
                                class="registerbtn">Registreer</button>
                        </div>
                    </form>

                </div>

                <script src="functions.js"></script>
                <script>
                function gotomypage(page) {
                    window.location.href = page + ".html";
                }
                </script>

</body>


</html>
