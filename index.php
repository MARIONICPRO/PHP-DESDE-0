<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con todos los tipos de input</title>
</head>
<body>
    <!--
        <form> agrupa todos los campos que se van a enviar.
        - action:  archivo PHP que recibe los datos.
        - method:  POST envía los datos "ocultos" (no se ven en la URL).
                   GET los envía visibles en la URL (?name=Ivan&edad=20).
        - enctype: "multipart/form-data" es OBLIGATORIO cuando el formulario
                   tiene un <input type="file">, si no, el archivo no se envía.
    -->
    <form action="Formularios.php" method="POST" enctype="multipart/form-data">

        <!-- ===================== CAMPOS DE TEXTO ===================== -->

        <!--
            <label for="..."> se conecta con el input que tenga el mismo id.
            Al hacer clic en el texto del label se activa el input.
            El atributo "name" es la clave con la que PHP recibe el dato: $_POST['name']
        -->

        <!-- text: texto de una sola línea -->
        <label for="name">Nombre:</label>
        <input id="name" type="text" name="name" placeholder="Escribe tu nombre">
        <br>

        <!-- password: igual que text, pero oculta lo que se escribe con puntos -->
        <label for="password">Contraseña:</label>
        <input id="password" type="password" name="password">
        <br>

        <!-- email: texto que el navegador valida que tenga formato de correo (algo@algo.com) -->
        <label for="email">Correo:</label>
        <input id="email" type="email" name="email">
        <br>

        <!-- tel: para números de teléfono (en el celular abre el teclado numérico) -->
        <label for="telefono">Teléfono:</label>
        <input id="telefono" type="tel" name="telefono">
        <br>

        <!-- url: el navegador valida que sea una dirección web (https://...) -->
        <label for="web">Sitio web:</label>
        <input id="web" type="url" name="web">
        <br>

        <!-- search: caja de búsqueda (funciona como text, algunos navegadores muestran una X para borrar) -->
        <label for="buscar">Buscar:</label>
        <input id="buscar" type="search" name="buscar">
        <br>

        <!-- textarea: texto de VARIAS líneas (no es un input, es su propia etiqueta) -->
        <label for="comentario">Comentario:</label>
        <br>
        <textarea id="comentario" name="comentario" rows="4" cols="30"></textarea>
        <br>

        <!-- ===================== NÚMEROS ===================== -->

        <!-- number: solo permite números. min y max limitan el rango -->
        <label for="edad">Edad:</label>
        <input id="edad" type="number" name="edad" min="0" max="120">
        <br>

        <!-- range: barra deslizante para elegir un número entre min y max -->
        <label for="nivel">Nivel de PHP (0 a 10):</label>
        <input id="nivel" type="range" name="nivel" min="0" max="10" value="5">
        <br>

        <!-- ===================== FECHAS Y HORAS ===================== -->

        <!-- date: selector de fecha (llega a PHP como "AAAA-MM-DD") -->
        <label for="nacimiento">Fecha de nacimiento:</label>
        <input id="nacimiento" type="date" name="nacimiento">
        <br>

        <!-- time: selector de hora (llega como "HH:MM") -->
        <label for="hora">Hora de contacto:</label>
        <input id="hora" type="time" name="hora">
        <br>

        <!-- datetime-local: fecha y hora juntas (llega como "AAAA-MM-DDTHH:MM") -->
        <label for="cita">Cita:</label>
        <input id="cita" type="datetime-local" name="cita">
        <br>

        <!-- month: selecciona mes y año (llega como "AAAA-MM") -->
        <label for="mes">Mes:</label>
        <input id="mes" type="month" name="mes">
        <br>

        <!-- week: selecciona una semana del año (llega como "AAAA-W05") -->
        <label for="semana">Semana:</label>
        <input id="semana" type="week" name="semana">
        <br>

        <!-- ===================== OPCIONES ===================== -->

        <!--
            radio: solo se puede elegir UNA opción del grupo.
            Todos los radios del mismo grupo deben tener el MISMO name.
            Lo que llega a PHP es el "value" del que se marcó.
        -->
        <p>Sexo:</p>
        <label for="masculino">Masculino:</label>
        <input id="masculino" type="radio" name="sexo" value="Masculino">
        <label for="femenino">Femenino:</label>
        <input id="femenino" type="radio" name="sexo" value="Femenino">
        <br>

        <!--
            checkbox: se pueden marcar VARIAS opciones.
            El name termina en [] para que PHP lo reciba como un ARRAY.
        -->
        <p>Roles:</p>
        <label for="admin">Administrador:</label>
        <input id="admin" type="checkbox" name="ROLES[]" value="Administrador">
        <label for="editor">Editor:</label>
        <input id="editor" type="checkbox" name="ROLES[]" value="Editor">
        <label for="moderador">Moderador:</label>
        <input id="moderador" type="checkbox" name="ROLES[]" value="Moderador">
        <br>

        <!-- select: lista desplegable, se elige UNA opción. Llega el value de la <option> -->
        <label for="pais">País:</label>
        <select id="pais" name="pais">
            <option value="">-- Selecciona --</option>
            <option value="Colombia">Colombia</option>
            <option value="México">México</option>
            <option value="España">España</option>
        </select>
        <br>

        <!-- select multiple: lista donde se eligen VARIAS opciones (Ctrl + clic). También usa [] -->
        <label for="lenguajes">Lenguajes que conoces:</label>
        <br>
        <select id="lenguajes" name="lenguajes[]" multiple>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
        </select>
        <br>

        <!-- ===================== OTROS ===================== -->

        <!-- color: selector de color (llega como código hexadecimal, ej: "#ff0000") -->
        <label for="color">Color favorito:</label>
        <input id="color" type="color" name="color">
        <br>

        <!--
            file: permite subir un archivo desde la computadora.
            - accept: limita qué tipos de archivo se pueden elegir.
            - En PHP NO llega por $_POST, llega por $_FILES['foto'].
            - Requiere enctype="multipart/form-data" en el <form>.
        -->
        <label for="foto">Foto de perfil:</label>
        <input id="foto" type="file" name="foto" accept="image/*">
        <br>

        <!--
            hidden: campo oculto, el usuario no lo ve pero SÍ se envía.
            Sirve para mandar datos extra (por ejemplo un id o el origen del formulario).
        -->
        <input type="hidden" name="origen" value="formulario_registro">

        <br>

        <!-- ===================== BOTONES ===================== -->

        <!-- submit: envía el formulario al archivo indicado en action -->
        <button type="submit">Enviar</button>

        <!-- reset: borra todo lo escrito y deja el formulario como al inicio -->
        <button type="reset">Limpiar</button>

        <!-- button: botón que no hace nada por sí solo, se usa con JavaScript -->
        <input type="button" value="Botón normal">
    </form>
</body>
</html>
