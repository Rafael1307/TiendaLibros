<?php
    $enlace = mysqli_connect("localhost", "root", "", "casoestudio");
    session_start();
    $libro = $_POST['libroe'];
    $clienteA = $_SESSION['clienteA'];
    $consulta2 = "DELETE FROM carrito WHERE clientecarro = '$clienteA' AND librocarro = $libro";
    mysqli_query($enlace, $consulta2);

    header('Location: carrito.php');