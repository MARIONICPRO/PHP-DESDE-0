<?php
 // $_GET     -> recibe datos enviados con method="GET" (van en la URL)
 // $_POST    -> recibe datos enviados con method="POST"
 // $_REQUEST -> recibe datos de GET y de POST
 // $_FILES   -> recibe los ARCHIVOS subidos con <input type="file">
 //
 // El operador ?? (fusión de null) pone un valor por defecto
 // si el campo no llegó, así PHP no muestra un "Warning".

 // Campos de texto
 $nombre     = $_POST['name'] ?? '';
 $password   = $_POST['password'] ?? '';
 $email      = $_POST['email'] ?? '';
 $telefono   = $_POST['telefono'] ?? '';
 $web        = $_POST['web'] ?? '';
 $buscar     = $_POST['buscar'] ?? '';
 $comentario = $_POST['comentario'] ?? '';

 // Números
 $edad  = $_REQUEST['edad'] ?? '';
 $nivel = $_POST['nivel'] ?? '';

 // Fechas y horas
 $nacimiento = $_POST['nacimiento'] ?? '';
 $hora       = $_POST['hora'] ?? '';
 $cita       = $_POST['cita'] ?? '';
 $mes        = $_POST['mes'] ?? '';
 $semana     = $_POST['semana'] ?? '';

 // Opciones
 $sexo      = $_REQUEST['sexo'] ?? 'No seleccionado';
 $roles     = $_REQUEST['ROLES'] ?? [];   // checkbox -> llega como array
 $pais      = $_POST['pais'] ?? '';
 $lenguajes = $_POST['lenguajes'] ?? [];  // select multiple -> llega como array

 // Otros
 $color  = $_POST['color'] ?? '';
 $origen = $_POST['origen'] ?? '';        // campo hidden

 echo "<p>El nombre del usuario es: $nombre</p>";
 // Nunca se debe mostrar una contraseña real, aquí solo contamos sus caracteres
 echo "<p>La contraseña tiene " . strlen($password) . " caracteres</p>";
 echo "<p>Correo: $email</p>";
 echo "<p>Teléfono: $telefono</p>";
 echo "<p>Sitio web: $web</p>";
 echo "<p>Búsqueda: $buscar</p>";
 echo "<p>Comentario: $comentario</p>";

 echo "<p>La edad del usuario es: $edad</p>";
 echo "<p>Nivel de PHP: $nivel / 10</p>";

 echo "<p>Fecha de nacimiento: $nacimiento</p>";
 echo "<p>Hora de contacto: $hora</p>";
 echo "<p>Cita: $cita</p>";
 echo "<p>Mes: $mes</p>";
 echo "<p>Semana: $semana</p>";

 echo "<p>El sexo del usuario es: $sexo</p>";

 echo "<p>Roles:</p>";
 echo "<ul>";
 foreach ($roles as $rol) {
    echo "<li>$rol</li>";
 }
 echo "</ul>";

 echo "<p>País: $pais</p>";

 echo "<p>Lenguajes:</p>";
 echo "<ul>";
 foreach ($lenguajes as $lenguaje) {
    echo "<li>$lenguaje</li>";
 }
 echo "</ul>";

 // Mostramos el color como texto y como un cuadrito pintado de ese color
 echo "<p>Color favorito: $color <span style='background:$color'>&nbsp;&nbsp;&nbsp;&nbsp;</span></p>";
 echo "<p>Origen (campo oculto): $origen</p>";

 // ===================== ARCHIVO ($_FILES) =====================
 // $_FILES['foto'] es un array con la información del archivo:
 //   ['name']     -> nombre original del archivo (ej: "yo.jpg")
 //   ['type']     -> tipo de archivo (ej: "image/jpeg")
 //   ['size']     -> tamaño en bytes
 //   ['tmp_name'] -> ruta temporal donde PHP lo guardó al recibirlo
 //   ['error']    -> 0 (UPLOAD_ERR_OK) si se subió bien
 if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto = $_FILES['foto'];

    echo "<p>Archivo recibido:</p>";
    echo "<ul>";
    echo "<li>Nombre: {$foto['name']}</li>";
    echo "<li>Tipo: {$foto['type']}</li>";
    echo "<li>Tamaño: {$foto['size']} bytes</li>";
    echo "</ul>";

    // Para guardarlo de verdad se mueve del lugar temporal a una carpeta nuestra.
    // basename() quita rutas raras del nombre por seguridad.
    $carpeta = "uploads/";
    if (!is_dir($carpeta)) {
        mkdir($carpeta);  // crea la carpeta si no existe
    }
    $destino = $carpeta . basename($foto['name']);

    if (move_uploaded_file($foto['tmp_name'], $destino)) {
        echo "<p>Archivo guardado en: $destino</p>";
        echo "<img src='$destino' width='150'>";
    } else {
        echo "<p>No se pudo guardar el archivo</p>";
    }
 } else {
    echo "<p>No se subió ningún archivo</p>";
 }
?>
