<?php
include 'conexion.php';

// Consulta para obtener los 5 registros más recientes
$sql = "SELECT * FROM ninos ORDER BY id DESC LIMIT 5";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerta Ámber Colombia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/PSP-Subgrupo-1-Amber/css/styles.css">
</head>
<body>

    <div class="container mt-4">
        <h1>¿Qué es Alerta Ámber?</h1>
        <p>La alerta AMBER es un sistema de notificación de menores de edad desaparecidos, implementado en varios países desde 1996. AMBER es un retroacrónimo en inglés de America's Missing: Broadcast Emergency Response (que significaría «Personas perdidas de América: retransmisión de respuesta de emergencia», en español) pero que originalmente hace referencia a Amber Hagerman, niña que fue secuestrada y días después localizada sin vida. </p>

        <div class="d-flex justify-content-end mb-3">
            <a href="agregar.php" class="btn btn-primary me-2">Agregar nuevo reporte</a>
            <a href="consultar.php" class="btn btn-secondary">Consultar un caso</a>
        </div>

        <h2>Reportes más recientes</h2>
        <p>Click en cada foto para ver más información</p>

        <!-- Prueba desde la BBDD -->
        <?php
            if ($result->num_rows > 0) {
                // Salida de datos de cada fila
                while($row = $result->fetch_assoc()) {
                    echo '<div class="report-card d-flex align-items-center">';
                    echo '<div class="profile-placeholder">';
                    echo '<a href="detalle.php?id=' . $row["ID"] . '">';
                    echo '<img src="/PSP-Subgrupo-1-Amber/fotos/principal/'. $row['fotoPrincipal'].'" alt="Foto Principal"  class="img-tamano">';
                    //echo $row["fotoPrincipal"];
                    echo '</a></div>';
                    echo '<div>';
                    echo '<p><strong>Caso #: </strong>'.$row["ID"].'</p>';
                    echo '<p><strong>Nombre del menor: </strong>'.$row["nombre"].'</p>';
                    echo '<p><strong>Lugar última vista: </strong>'.$row["lugarUltimaVista"].'</p>';
                    echo '<p><strong>Fecha de desaparición: </strong>'.$row["fechaUltimaVista"].'</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<tr><td colspan='3'>No hay registros</td></tr>";
            }
            $conn->close();
        ?>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>