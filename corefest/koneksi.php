<?php
$connect = new mysqli("localhost", "root", "", "corefest");
if ($connect->connect_errno) {
    echo "Failed to connect to MySQL: (" . $connect->connect_errno . ") " . $connect->connect_error;
}
?>
