<?php
/**
 * Created by PhpStorm.
 * User: loren
 * Date: 3/1/2019
 * Time: 10:30 PM
 */

include "header.php";
?>
<head>
    <link rel="stylesheet" href="maincss.css">
    <title>Main pagina</title>
</head>
<div id="container">
    <span class="maintext">
        <h1>Welkom!</h1>
        <p>Dit is de hoofdpagina hier kun je op de knop klikken om je gegevens in te vullen voor vandaag en als je ze terug wilt zien kun je op de andere knop drukken</p>
    </span>
    <div id="newgegevens">
        <a href="../main/gegevensinvullen.php"><h3>Nieuwe gegevens invullen!</h3></a>
    </div>
    <div id="kijkgegevens">
        <a href="../main/gegevensbekijken.php"><h3>Gegevens bekijken!</h3></a>
    </div>
</div>

