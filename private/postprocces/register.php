<?php
$naam = $_POST['usr123'];
$wachtwoord = $_POST['pass123'];
$email = $_POST['email'];
$salted = "54258u439gjfn2n".$wachtwoord;
$hashed = password_hash("{$salted}", PASSWORD_DEFAULT);

if (!empty($_POST))
{
    session_start();
    $server = "localhost";
    $db = "id8862200_lessenphp";
    $user = "id8862200_root";
    $password = "Snooker-2002";

    $conn = new mysqli($server, $user, $password, $db);

    if ($conn->connect_error)
    {
        die("<script type='text/javascript'>alert('Connection to database failed: {$conn->connect_error}')</script>");
    }

    $conn->query("INSERT INTO gebruikers (ID, Gebruikersnaam, Wachtwoord, Email, Rol) VALUES ('', '$naam', '$hashed', '$email', 'Gebruiker')");

    echo "<script type='text/javascript'>location.href = '/../index.php'</script>";
    $_SESSION['ingelogd'] = true;
}
    ?>
<title>Processing data...</title>