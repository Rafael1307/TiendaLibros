<?php
    session_start();
    $gene = $_POST['buscar'];
    $_SESSION['catalogo'] = "SELECT * FROM libros WHERE Titulo LIKE '%$gene%' OR Autor LIKE '%$gene%' AND disponible = 1";
    header('Location: catalogo.php');
    ?>