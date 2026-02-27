<?php
include 'zitate.php';

// Wähle ein zufälliges Zitat
$zufallIndex = array_rand($zitate);
$zufallsZitat = $zitate[$zufallIndex];
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Zufallszitategenerator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Zufallszitategenerator</h1>
        <p class="zitat"><?php echo $zufallsZitat; ?></p>
        <form method="get">
            <button type="submit">Noch ein Zitat</button>
        </form>
    </div>
</body>
</html>