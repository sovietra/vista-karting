    <!DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>dankuwel</title>
        <link rel="stylesheet" href="dankuwel.css">
    </head>

    <body>
        <header id="header-div">
            <?php require_once("includes/hamburg.inc.php"); ?>
        </header>
        <div>
            <div class="container">
                <br>
                <div>
                    <br>
                    <form>
                        <div class="container2">
                            <h1>Het inschrijven is gelukt!</h1>
                            <hr>
                            <p>Bekijk hier beneden de poules!
                                <br>
                                <br>
                                <br>
                                <button onclick="gotomypage('poules');" class="registerbtn">Bekijk Poules</button>
                        </div>
                    </form>

                </div>




                <script src="functions.js"></script>
                <script>
                function gotomypage(page) {
                    window.location.href = page + ".php";
                }
                </script>
    </body>

    </html>