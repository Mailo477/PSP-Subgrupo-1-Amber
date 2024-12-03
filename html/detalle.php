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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/PSP-Subgrupo-1-Amber/css/styles.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Detalle del Reporte</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label">Nombre del menor:</label>
                    <p><?php echo $row['nombre']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de Nacimiento:</label>
                    <p><?php echo $row['fechaNacimiento']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ciudad de Nacimiento:</label>
                    <p><?php echo $row['ciudadNacimiento']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción del Niño:</label>
                    <p><?php echo $row['descripcionNino']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre de la Madre:</label>
                    <p><?php echo $row['nombreMadre']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de Nacimiento de la Madre:</label>
                    <p><?php echo $row['fechaNacimientoMadre']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ocupación de la Madre:</label>
                    <p><?php echo $row['ocupacionMadre']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ciudad de Nacimiento de la Madre:</label>
                    <p><?php echo $row['ciudadNacimientoMadre']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Teléfono de Contacto de la Madre:</label>
                    <p><?php echo $row['telContactoMadre']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Dirección de Residencia de la Madre:</label>
                    <p><?php echo $row['direccionResidenciaMadre']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de Última Vista:</label>
                    <p><?php echo $row['fechaUltimaVista']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Lugar de Última Vista:</label>
                    <p><?php echo $row['lugarUltimaVista']; ?></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Detalles de la Desaparición:</label>
                    <p><?php echo $row['detallesDesaparicion']; ?></p>
                </div>
                <div class="mb-3">
                    <a href="editar.php?id=<?php echo $row['ID']; ?>" class="btn btn-primary">Editar</a>
                    <a href="index.php" class="btn btn-secondary">Volver a la página de inicio</a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/PSP-Subgrupo-1-Amber/fotos/principal/<?php echo $row['fotoPrincipal']; ?>" alt="Foto Principal" class="img-fluid">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>