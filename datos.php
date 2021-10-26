<?php
    session_start();
    $booka = $_POST['booka'];
    $_SESSION['booka'] = $booka;
    header('Location: producto.php');
    ?>