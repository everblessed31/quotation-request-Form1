<?php 
include_once 'functions.php';
session_destroy();
header("Location: ./login");
?>