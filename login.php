<?php

$dbpassword = "msEiOEdzzA";
$host = "remotemysql.com";
$user = "2CdFL1j9jH";
$dbname = "2CdFL1j9jH";

$classId = 8;
$userId = 8;
$user_pass = "g";
$first_name = "g";
$last_name = "g";

$conn = mysqli_connect($host, $user, $dbpassword, $dbname);

if (!$conn){
    echo "Connection Failed";
};

if (isset($_POST["firstName"])) {
    $sql = "INSERT INTO users (user_pass, first_name, last_name) VALUES ('" . $_POST["password"] . "','" . $_POST["firstName"] . "','" . $_POST["lastName"] . "');";
    $conn->query($sql);
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Santa</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <h1 class="center"; id="maintext">Secret Santa</h1>

    <div style="text-align:center">
        <button type="button" style="position:relative" id="newAccountButton" class="logonButton"; onclick="newAcc()">SIGN UP</button>
    </div>

    <div id="formElement"; style="position:relative; text-align: center;">
        <form id="formPiece" action="login.php" method="post" enctype="application/x-www-form-urlencoded">

            <div class="entryDivs">
                <label class="textField">Class ID</label><br>
                <input type="text" id="classId" name="classID"><br>
            </div>
            <div class="entryDivs">
                <label class="textField">User ID</label><br>
                <input type="text" id="userId" r><br>
            </div>
            <div class="entryDivs">
                <label class="textField">Password</label><br>
                <input type="password" id="password" required><br>
            </div>
            <div class="entryDiv">
                <button id="loginButton" type="submit">LOGIN</button>
            </div>
        </form>
    </div>
    
</body>
</html>