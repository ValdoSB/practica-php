<?php
    include('conexion.php');

    if(!empty($_POST['nombreForm']) && !empty($_POST['correoForm'])){
        $nombre = $_POST['nombreForm'];
        $correo = $_POST['correoForm'];

        $sql = "INSERT INTO tprueba (nombre, correo) VALUES (
            '$nombre', '$correo')";
        
        $conn->exec($sql);

        echo "<h2>Gracias por enviar su formulario " . $_POST['nombreForm'] . "</h2>";

        header('Location: index.php');
    }
?>