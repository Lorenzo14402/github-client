<?php
include "../header.php";
?>
<html>
<head>
    <title>Inloggen</title>
    <link href="inloggen.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <form action="../postprocces/login.php" method="post">
        <fieldset>
            <table>
                <tr>
                    <td><input type="text" name="usr123" placeholder="name.."></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass123" placeholder="password.."></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Log in"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>