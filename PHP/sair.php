<?php
    session_start();

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['nome']);
    header("Location:../root/indexSGDS.html");
?>