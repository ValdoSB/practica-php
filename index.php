<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Contacto</title>
</head>
<body>
    <div class="nav">
        <a class="navAnchor" href="index.php">Sobre mí</a>
        <a class="navAnchor" href="formulario.html">Formulario</a>
    </div>
    <main>
        <h1>Formulario</h1>
        <h2>Ingrese los datos necesarios:</h2>
        <form action="storage.php" method="post">
            <fieldset>
                <legend>Nombre</legend>
                <label for="nombre">Ingrese su nombre: </label>
                <input id="nombre" type="text" name="nombreForm" placeholder="Ejemplo: Juan Pérez López" required>
            </fieldset>
            <fieldset>
                <legend>Correo</legend>
                <label for="correo">Ingrese su correo: </label>
                <input id="correo" type="email" name="correoForm" placeholder="Ejemplo: juanpl@gmail.com" required>
            <!-- <fieldset>
                <legend>Género</legend>
                <label for="generoM">Masculino</label>
                <input id="generoM" type="radio" name="generoForm" value ="masculino" checked>
                <br>
                <label for="generoF">Femenino</label>
                <input id="generoF" type="radio" name="generoForm" value ="femenino">
                <br>
                <label for="generoO">Otro</label>
                <input id="generoO" type="radio" name="generoForm" value ="otro">
            </fieldset>
            <fieldset>
                <legend>Contraseña</legend>
                <label for="contraseña">Ingrese su contraseña: </label>
                <input id="contraseña" type="password" name="contraseñaForm" required>
            </fieldset>
            <fieldset>
                <legend>Comentarios</legend>
                <label for="comentarios">Agregue comentarios extra: </label>
                <textarea id="comentarios" name="comentariosForm" placeholder="Agregue aquí sus comentarios"></textarea>
            </fieldset>
            <fieldset>
                <legend>Ciudad</legend>
                <label for="ciudad">Ingrese su ciudad: </label>
                <select id="ciudad" name="ciudadForm" form="formulario">
                    <option value="guadalajara">Guadalajara</option>
                    <option value="zapopan">Zapopan</option>
                    <option value="tonala">Tonalá</option>
                    <option value="otra">Otra</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Me interesa contratarte!</legend>
                <label for="contratar">Estoy interesado en contratarte! </label>
                <input id="contratar" type="checkbox" name="contratarForm" form="formulario">
            </fieldset> -->
            <button type="submit">Enviar</button>
            </fieldset>
        </form>
        <?php
            include('conexion.php');

            echo "<h1>HOLA MUNDO PHP</h1>";
            echo "<h2>Datos hasta el momento en la base de datos:</h2>";

            $sql = "SELECT * FROM tprueba";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            echo"<ul>";
            foreach($stmt->fetchAll() as $row){
                echo "<li>" . "id: " .$row["id"] . " - Nombre: " . $row["nombre"] . " - Correo: " . $row["correo"] . "<br>";
            }
        ?>
    </main>
</body>
</html>