<?php
session_start();
$conn = mysqli_connect("localhost", "cse","cse2021", cseWeb);
$conn->set_charset("utf8");

function mq($sql) {
    global $conn;
    return $conn->query($sql);
}?>