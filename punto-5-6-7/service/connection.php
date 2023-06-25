<?php 
    const CONNECTION = new mysqli("localhost", "root", "", "mi_proyecto");
    echo "paso aquí";
    $query = mysqli_query(CONNECTION, "SELECT * FROM usuarios");

    print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>
