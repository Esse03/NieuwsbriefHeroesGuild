<?php   /** @var $db */

require_once "includes/dbLink.php";

$userId = $_GET["id"];

$query = "SELECT * FROM reservations WHERE id = " . $userId;
$result = mysqli_query($db, $query);

$user = mysqli_fetch_assoc($result);

mysqli_close($db);

?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav>

    <a href="./overvieuw.php">
        Overzicht
    </a>
    <div id="blank"></div>
    <a href="./index.php">
        Home
    </a>
</nav>
<main>

</main>
<footer>

</footer>
</body>
</html>
