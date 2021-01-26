<?php 
	include '../layouts/header.php'; 
	include '../controller/Auth.php';
session_destroy();
header('location:login.php');
?>
