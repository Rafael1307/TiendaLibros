<?php
    session_start();
    $_SESSION['catalogo'] = "SELECT * FROM libros WHERE disponible = 1";
    header('Location: catalogo.php');
    ?>