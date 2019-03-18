<head>
    <link href="headercss.css" rel="stylesheet">
</head>
<?php
session_start();
?>
<div id="header">
    <div id="compname">
        <h2><a href="mainpage.php">LTH Trainingen</a></h2>
        <strong style="color: white;"><?php if (isset($_SESSION['ingelogd'])) echo "Gebruiker: ". $_SESSION['usrname']; ?></strong>
    </div>
    <div id="nav">
        <ul>
            <li><a href="#">Zelf</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="/index.php" onclick="
              <?php unset($_SESSION['ingelogd']); session_destroy(); ?>
            ">Uitloggen</a></li>
        </ul>
    </div>
</div>