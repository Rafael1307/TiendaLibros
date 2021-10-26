<?php
    $enlace = mysqli_connect("localhost", "root", "", "casoestudio");
    session_start();
    $clienteA = $_SESSION['clienteA'];
    if($clienteA == "nulo"){
        echo'<script type="text/javascript">
    alert("Inicie sesion para ir al carrito");
    history.go(-1);
    </script>';
    }else{
      $precio = $_POST['pricea'];
      $libro = $_POST['booka'];
      $cantidad  = $_POST['cant'];

        $sql = "INSERT INTO carrito (clientecarro, librocarro, unidadescarro, preciocarro) VALUES ('$clienteA', '$libro', $cantidad, $precio)";
        mysqli_query($enlace, $sql);
    echo'<script type="text/javascript">
    alert("Agregado al carrito");
    history.go(-1);
    </script>';
    }
    ?>