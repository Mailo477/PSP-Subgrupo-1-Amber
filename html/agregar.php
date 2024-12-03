<?php 
include 'conexion.php'; 

// Verificar si el formulario ha sido enviado 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $nombre = $_POST['nombre']; 
    $fechaNacimiento = $_POST['fechaNacimiento']; 
    $ciudadNacimiento = $_POST['ciudadNacimiento']; 
    $descripcionNino = $_POST['descripcionNino']; 
    $nombreMadre = $_POST['nombreMadre']; 
    $fechaNacimientoMadre = $_POST['fechaNacimientoMadre']; 
    $ocupacionMadre = $_POST['ocupacionMadre']; 
    $ciudadNacimientoMadre = $_POST['ciudadNacimientoMadre']; 
    $telContactoMadre = $_POST['telContactoMadre']; 
    $direccionResidenciaMadre = $_POST['direccionResidenciaMadre']; 
    $fechaUltimaVista = $_POST['fechaUltimaVista']; 
    $lugarUltimaVista = $_POST['lugarUltimaVista']; 
    $detallesDesaparicion = $_POST['detallesDesaparicion']; 

    // Manejar la subida de la foto principal 
    $fotoPrincipal = $_FILES['fotoPrincipal']['name']; 
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/PSP-Subgrupo-1-Amber/fotos/principal/"; 
    $target_file = $target_dir . basename($_FILES['fotoPrincipal']['name']); 

    // Verificar si el directorio existe, si no, crearlo 
    if (!is_dir($target_dir)) { 
        mkdir($target_dir, 0777, true); 
    } 

    // Subir el archivo 
    if (move_uploaded_file($_FILES['fotoPrincipal']['tmp_name'], $target_file)) { 
        echo "El archivo ". htmlspecialchars(basename($_FILES['fotoPrincipal']['name'])). " ha sido subido."; 
    } else { 
        echo "Lo siento, hubo un error al subir tu archivo."; 
    } 

    // Insertar el nuevo registro en la base de datos 
    $sql = "INSERT INTO ninos (nombre, fechaNacimiento, ciudadNacimiento, descripcionNino, fotoPrincipal, nombreMadre, fechaNacimientoMadre, ocupacionMadre, ciudadNacimientoMadre, telContactoMadre, direccionResidenciaMadre, fechaUltimaVista, lugarUltimaVista, detallesDesaparicion) VALUES ('$nombre', '$fechaNacimiento', '$ciudadNacimiento', '$descripcionNino', '$fotoPrincipal', '$nombreMadre', '$fechaNacimientoMadre', '$ocupacionMadre', '$ciudadNacimientoMadre', '$telContactoMadre', '$direccionResidenciaMadre', '$fechaUltimaVista', '$lugarUltimaVista', '$detallesDesaparicion')"; 

    if ($conn->query($sql) === TRUE) { 
        header("Location: index.php");
        exit; 
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
    } 
} 
?> 

<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Agregar Nuevo Reporte</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="/PSP-Subgrupo-1-Amber/css/styles.css"> 
</head> 
<body> 
    <div class="container mt-4"> 
        <h1>Agregar Nuevo Reporte</h1> 
        <form method="post" action="" enctype="multipart/form-data"> 
            <div class="mb-3"> 
                <label for="nombre" class="form-label">Nombre del menor</label> 
                <input type="text" class="form-control" id="nombre" name="nombre" required> 
            </div> 
            <div class="mb-3"> 
                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label> 
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required> 
            </div> 
            <div class="mb-3"> 
                <label for="ciudadNacimiento" class="form-label">Ciudad de Nacimiento</label> 
                <input type="text" class="form-control" id="ciudadNacimiento" name="ciudadNacimiento" required> 
            </div> 
            <div class="mb-3"> 
                <label for="descripcionNino" class="form-label">Descripción del Niño</label> 
                <textarea class="form-control" id="descripcionNino" name="descripcionNino" required></textarea> 
            </div> 
            <div class="mb-3"> 
                <label for="fotoPrincipal" class="form-label">Foto Principal</label> 
                <input type="file" class="form-control" id="fotoPrincipal" name="fotoPrincipal" required onchange="previewImage(event)"> 
                <img id="preview" src="#" alt="Vista previa de la imagen" style="display: none; margin-top: 10px; max-width: 200px;"> 
            </div> 
            <div class="mb-3"> 
                <label for="nombreMadre" class="form-label">Nombre de la Madre</label> 
                <input type="text" class="form-control" id="nombreMadre" name="nombreMadre" required> 
            </div> 
            <div class="mb-3"> 
                <label for="fechaNacimientoMadre" class="form-label">Fecha de Nacimiento de la Madre</label> 
                <input type="date" class="form-control" id="fechaNacimientoMadre" name="fechaNacimientoMadre" required> 
            </div> 
            <div class="mb-3"> 
                <label for="ocupacionMadre" class="form-label">Ocupación de la Madre</label> 
                <input type="text" class="form-control" id="ocupacionMadre" name="ocupacionMadre" required> 
            </div> 
            <div class="mb-3"> 
                <label for="ciudadNacimientoMadre" class="form-label">Ciudad de Nacimiento de la Madre</label> 
                <input type="text" class="form-control" id="ciudadNacimientoMadre" name="ciudadNacimientoMadre" required> 
            </div> 
            <div class="mb-3"> 
                <label for="telContactoMadre" class="form-label">Teléfono de Contacto de la Madre</label> 
                <input type="text" class="form-control" id="telContactoMadre" name="telContactoMadre" required> 
            </div> 
            <div class="mb-3"> 
                <label for="direccionResidenciaMadre" class="form-label">Dirección de Residencia de la Madre</label> 
                <input type="text" class="form-control" id="direccionResidenciaMadre" name="direccionResidenciaMadre" required> 
            </div> 
            <div class="mb-3"> 
                <label for="fechaUltimaVista" class="form-label">Fecha de Última Vista</label> 
                <input type="date" class="form-control" id="fechaUltimaVista" name="fechaUltimaVista" required> 
            </div> 
            <div class="mb-3"> 
                <label for="lugarUltimaVista" class="form-label">Lugar de Última Vista</label> 
                <input type="text" class="form-control" id="lugarUltimaVista" name="lugarUltimaVista" required> 
            </div> 
            <div class="mb-3"> 
                <label for="detallesDesaparicion" class="form-label">Detalles de la Desaparición</label> 
                <textarea class="form-control" id="detallesDesaparicion" name="detallesDesaparicion" required></textarea> 
            </div> 
            <button type="submit" class="btn btn-primary">Guardar</button> 
            <a href="index.php" class="btn btn-secondary">Cancelar</a> 
        </form> 
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
    <script> 
        function previewImage(event) { 
            var reader = new FileReader(); 
            reader.onload = function(){ 
                var output = document.getElementById('preview'); 
                output.src = reader.result; 
                output.style.display = 'block'; 
            }; 
            reader.readAsDataURL(event.target.files[0]); 
        } 
    </script> 
</body> 
</html>