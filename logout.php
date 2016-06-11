<?php
include("header.php");
include("menu.php");
session_start();
unset($_SESSION['name']);
unset($_SESSION['gender']);
?>

<script>
window.location.href="index.php";
</script>
