<?php
$sitename = "CRYPTO MARKET ANALYSIS SYSTEM";
$conn = mysqli_connect("localhost", "root", "", "cryptoanalysis");
if (!$conn) {
    die(mysqli_error($conn) . "Error connecting Database!");
}
?>