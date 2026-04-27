<?php
session_start();
include("traitement.php");

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

Display();
?>