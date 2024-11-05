<?php

use LDAP\Result;

include_once 'conexion.php';

$sql = "SELECT id, nombre, fechaNacimiento,  descripcionNino, fotoPrincipal FROM ninos";
$result = $conn->query($sql);
$persona = $result->fetch_array();
?>

<!-- Button trigger modal -->


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card-header">
                Lista De Infantes
            </div>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Adicionar Infante
</button>
            <div class="p-4">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Foto Principal</th>
                            <th scope="col" colspan="2">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Editar</td>
                            <td>Eliminar</td>
                        </tr>
         
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Datos Infante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombre" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha nacimiento:</label> 
                        <input type="date" class="form-control" name="dateFechaNacimiento" max="<?php echo date("d/m/y");?>" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripcion:</label> 
                        <textarea  class="form-control" name="txtDescripcion"  autofocus> </textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripcion:</label> 
                        <input type="file" class="form-control" name="fileFoto"  accept="image/*" autofocus>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>