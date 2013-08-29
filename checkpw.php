<?php
    $u = $_GET['u'];
    $p = $_GET['p'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'Login';

    $con = mysql_connect($host, $user, $pass, $db);
    if(!$con) die("Could not connect: " . mysql_error());

    mysql_select_db($db, $con);
    //echo "User is $user";
    $query = "select username from members where username = '" . $u . "' and password = '" . $p . "'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    echo $row['username'];
    mysql_close($con);
?>
