<?php
include 'conexion.php'; 

$sql = "SELECT ID, nombre FROM ninos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay resultados.";
}

$conn->close();
?>
