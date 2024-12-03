<?php
include 'conexion.php';

// Verificar si el formulario ha sido enviado
$searchResults = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchTerm = $_POST['searchTerm'];
    $searchType = $_POST['searchType'];

    // Consulta para buscar por ID o nombre, ignorando mayúsculas, minúsculas y acentos
    if ($searchType == 'id') {
        $sql = "SELECT * FROM ninos WHERE ID = '$searchTerm'";
    } else {
        $sql = "SELECT * FROM ninos WHERE nombre COLLATE utf8mb4_general_ci LIKE '%$searchTerm%'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $searchResults[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Caso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/PSP-Subgrupo-1-Amber/css/styles.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Consultar Caso</h1>
        <form method="post" action="">
            <div class="mb-3">
                <label for="searchTerm" class="form-label">Buscar por ID o Nombre</label>
                <input type="text" class="form-control" id="searchTerm" name="searchTerm" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo de Búsqueda</label>
                <div>
                    <input type="radio" id="searchById" name="searchType" value="id" required>
                    <label for="searchById">ID</label>
                </div>
                <div>
                    <input type="radio" id="searchByName" name="searchType" value="nombre" required>
                    <label for="searchByName">Nombre</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>

        <?php if (!empty($searchResults)): ?>
            <h2 class="mt-4">Resultados de la Búsqueda</h2>
            <ul class="list-group">
                <?php foreach ($searchResults as $result): ?>
                    <li class="list-group-item d-flex align-items-center">
                        <img src="/PSP-Subgrupo-1-Amber/fotos/principal/<?php echo $result['fotoPrincipal']; ?>" alt="Imagen" class="img-tamano me-3" style="width: 50px; height: auto;">
                        <div>
                            <a href="detalle.php?id=<?php echo $result['ID']; ?>">
                                <?php echo $result['nombre']; ?> (ID: <?php echo $result['ID']; ?>)
                            </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <p class="mt-4">No se encontraron resultados.</p>
        <?php endif; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>