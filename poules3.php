<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dankuwel</title>
    <link rel="stylesheet" href="poules3.css">
</head>

<body>
    <header id="header-div">
        <?php require_once("includes/hamburg.inc.php"); ?>
    </header>
    <div class="container">
        <h3>Finale<h3>
    </div>
    <button onclick="gotomypage('poules2');" class="button2">Vorige</button>
    <div>
        <div class="poules-container">
            <!-- Poules worden hier weergegeven -->
        </div>



</body>
<script src="poules3.js"></script>
<script src="functions.js"></script>
<script>
function gotomypage(page) {
    window.location.href = page + ".php";
}
</script>
</body>

</html>