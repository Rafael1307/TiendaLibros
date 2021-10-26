<?php
    session_start();
    $gene = $_POST['gene'];
    $_SESSION['catalogo'] = "SELECT * FROM libros WHERE Genero = '$gene' AND disponible = 1";
    header('Location: catalogo.php');
    ?>