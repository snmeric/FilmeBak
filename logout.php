<?php

@include 'db.php';
include '../admin/header.php';
session_start();
session_unset();
session_destroy();

header('location:index.php');

?>