<?php
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../../home_page/index.php');
?>