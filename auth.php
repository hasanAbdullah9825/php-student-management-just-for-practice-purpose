<?php
session_name('au_session');
session_start();
$_SESSION['loggedin']=false;

session_destroy();


header("Location:index.php");

