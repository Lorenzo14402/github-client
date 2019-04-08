<?php
$host = "localhost";
$db = "lessenphp";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
    die("<script type='text/javascript'>alert('Connection to database failed: {$conn->connect_error}')</script>");
}

$querySel = "SELECT * FROM test";
$result = $conn->query($querySel);
?>
<html>
<body>
<table border="1">
    <tr>
        <th>Usr ID</th>
        <th>Usrname</th>
        <th>Pssword</th>
    </tr>
    <tr>
        <?php
       if ($result->num_rows > 0)
        {
        while ($test = $result->fetch_assoc())
        {
        echo "<td>{$test['ID']}</td><td>{$test['Username']}</td><td>{$test['Password']}</td>";
        ?>
    </tr>
    <?php
        }
    }
?>
</table>
</body>
