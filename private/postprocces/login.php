<?php
session_start();

$naam = $_POST['usr123'];
$_SESSION['usrname'] = $_POST['usr123'];

$_SESSION['ingelogd'] = false;

$wachtwoord = $_POST['pass123'];
$salted = "54258u439gjfn2n".$wachtwoord;
$hashed = password_hash("{$salted}", PASSWORD_DEFAULT);

if (!empty($_POST))
    {
    $server = "localhost";
    $db = "id8862200_lessenphp";
    $user = "id8862200_root";
    $password = "Snooker-2002";

    $conn = new mysqli($server, $user, $password, $db);

    if ($conn->connect_error) {
        die("<script type='text/javascript'>alert('Connection to database failed: {$conn->connect_error}')</script>");
    }

    $result = $conn->query("SELECT * FROM gebruikers");

    if ($result->num_rows > 0) {
        /*if (password_verify("{$salted}", "{$result->current_field}"))*/
        if (password_verify("{$salted}", "$hashed")) {
            echo "<strong>Password verified!</strong>";
            echo "<script type='text/javascript'>location.href = '../main/mainpage.php'</script>";
            $_SESSION['ingelogd'] = true;
        } else {
            echo "<script type='text/javascript'>alert('No user found in database')</script>";
            echo "<script type='text/javascript'>location.href = '../index.php'</script>";
        }
    }
}
    ?>
<title>Processing data...</title>