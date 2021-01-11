<?php
session_start();
?>

<?php
$link=mysqli_connect("localhost", "root","", "school_m_sys") or die(mysqli_error($link));
mysqli_select_db($link, "school_m_sys") or die(mysqli_error($link));
$db = new mysqli("localhost","root","", "school_m_sys");
?>

