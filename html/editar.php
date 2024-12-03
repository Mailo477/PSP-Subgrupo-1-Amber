<?php 
include 'conexion.php'; 

// Obtener el ID del niño desde la URL
$id = $_GET['id'];

// Consultar los datos del niño en la base de datos
$sql = "SELECT * FROM ninos WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Obtener los datos del niño
    $row = $result->fetch_assoc();
} else {
    echo "No se encontraron datos.";
    exit;
}

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

    // Actualizar el registro en la base de datos
    $sql = "UPDATE ninos SET 
            nombre='$nombre', 
            fechaNacimiento='$fechaNacimiento', 
            ciudadNacimiento='$ciudadNacimiento', 
            descripcionNino='$descripcionNino', 
            nombreMadre='$nombreMadre', 
            fechaNacimientoMadre='$fechaNacimientoMadre', 
            ocupacionMadre='$ocupacionMadre', 
            ciudadNacimientoMadre='$ciudadNacimientoMadre', 
            telContactoMadre='$telContactoMadre', 
            direccionResidenciaMadre='$direccionResidenciaMadre', 
            fechaUltimaVista='$fechaUltimaVista', 
            lugarUltimaVista='$lugarUltimaVista', 
            detallesDesaparicion='$detallesDesaparicion' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Redirigir a detalle.php con el ID del registro
        header("Location: detalle.php?id=$id");
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
    <title>Editar Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/PSP-Subgrupo-1-Amber/css/styles.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Reporte</h1>
        <form method="post" action="">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del menor</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $row['fechaNacimiento']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="ciudadNacimiento" class="form-label">Ciudad de Nacimiento</label>
                <input type="text" class="form-control" id="ciudadNacimiento" name="ciudadNacimiento" value="<?php echo $row['ciudadNacimiento']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="descripcionNino" class="form-label">Descripción del Niño</label>
                <textarea class="form-control" id="descripcionNino" name="descripcionNino" required><?php echo $row['descripcionNino']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="nombreMadre" class="form-label">Nombre de la Madre</label>
                <input type="text" class="form-control" id="nombreMadre" name="nombreMadre" value="<?php echo $row['nombreMadre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="fechaNacimientoMadre" class="form-label">Fecha de Nacimiento de la Madre</label>
                <input type="date" class="form-control" id="fechaNacimientoMadre" name="fechaNacimientoMadre" value="<?php echo $row['fechaNacimientoMadre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="ocupacionMadre" class="form-label">Ocupación de la Madre</label>
                <input type="text" class="form-control" id="ocupacionMadre" name="ocupacionMadre" value="<?php echo $row['ocupacionMadre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="ciudadNacimientoMadre" class="form-label">Ciudad de Nacimiento de la Madre</label>
                <input type="text" class="form-control" id="ciudadNacimientoMadre" name="ciudadNacimientoMadre" value="<?php echo $row['ciudadNacimientoMadre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="telContactoMadre" class="form-label">Teléfono de Contacto de la Madre</label>
                <input type="text" class="form-control" id="telContactoMadre" name="telContactoMadre" value="<?php echo $row['telContactoMadre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="direccionResidenciaMadre" class="form-label">Dirección de Residencia de la Madre</label>
                <input type="text" class="form-control" id="direccionResidenciaMadre" name="direccionResidenciaMadre" value="<?php echo $row['direccionResidenciaMadre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="fechaUltimaVista" class="form-label">Fecha de Última Vista</label>
                <input type="date" class="form-control" id="fechaUltimaVista" name="fechaUltimaVista" value="<?php echo $row['fechaUltimaVista']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="lugarUltimaVista" class="form-label">Lugar de Última Vista</label>
                <input type="text" class="form-control" id="lugarUltimaVista" name="lugarUltimaVista" value="<?php echo $row['lugarUltimaVista']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="detallesDesaparicion" class="form-label">Detalles de la Desaparición</label>
                <textarea class="form-control" id="detallesDesaparicion" name="detallesDesaparicion" required><?php echo $row['detallesDesaparicion']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="detalle.php?id=<?php echo $row['ID']; ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
