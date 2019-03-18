<?php
/**
 * Created by PhpStorm.
 * User: loren
 * Date: 3/2/2019
 * Time: 9:53 AM
 */

include "header.php";
?>
<link rel="stylesheet" href="gegevensinvullen.css">
<title>Nieuwe gegevens!</title>
<body>
<div id="container">
    <div id="form">
<form method="post" action="#">
        <table>
            <tr>
                <td><input class="center" type="text" name="gewicht" placeholder="gewicht..."></td>
            </tr>
            <tr>
                <td><input class="center" type="text" name="calorien" placeholder="calorie inname..."></td>
            </tr>
            <tr>
                <td><textarea class="omschrijving" name="omschrijving" placeholder="Dag/Training omschrijving..."></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Sla op!"></td>
            </tr>
        </table>
</form>
    </div>
</div>
</body>
<?php

if (!empty($_POST))
{
    $host = "localhost";
    $db = "id8862200_lessenphp";
    $usr = "id8862200_root";
    $pass = "Snooker-2002";

    $conn = new mysqli($host, $usr, $pass, $db);

    if ($conn->connect_error)
    {
        echo "<script type='text/javascript'>alert('Connection failed... contact Administrator.')</script>";
    }

    $username = "";
    $gewicht = $_POST['gewicht'];
    $calorien = $_POST['calorien'];
    $omschrijving = $_POST['omschrijving'];

    $sql = "INSERT INTO gegevensgebruikers (Gebruiker, Gewicht, Calorien, Omschrijving) VALUES ('$username', '$gewicht', '$calorien', '$omschrijving')";
    $conn->query($sql);
}

?>