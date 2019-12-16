<?php
function verify_deal_id($dealId) {
    include("database.php");
    $connection = mysqli_connect($host, $username, $password, $database, $port);
    if (mysqli_connect_errno()) echo("Error!");
    else {
        if ($result = mysqli_query($connection, "SELECT COUNT(deal_id) AS total FROM freshsales_deals WHERE deal_id = '".$dealId."'")) {
            $row = mysqli_fetch_assoc($result);
            return $row["total"];
        }
        mysqli_free_result($result);
    }
    mysqli_close($connection);
}

function input_first_name($dealId) {
    include("database.php");
    $connection = mysqli_connect($host, $username, $password, $database, $port);
    if (mysqli_connect_errno()) echo("Error!");
    else {
        if ($result = mysqli_query($connection, "SELECT name FROM freshsales_deals WHERE deal_id = '".$dealId."'")) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo(utf8_encode(explode(" ", $row["name"])[0]));
            }
        }
        mysqli_free_result($result);
    }
    mysqli_close($connection);
}
?>