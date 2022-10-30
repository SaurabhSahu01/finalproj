<?php
    session_start();
    session_destroy();
    $_SESSION['loggedin'] = FALSE;
    unset($_SESSION['loggedin']);
    unset($_SESSION['loggedinas']);
    header("location: ./index.php");
?>