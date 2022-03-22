<?php
    $db = new mysqli("localhost", "root", "", "Stories");

    if ($db->connect_error) {
        echo $db->connect_error;
        echo "داداچ اشتباه";
    }
    else {
        $db-> query("SET CHARACTER SET utf8");
    }
?>