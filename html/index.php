<?php $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
 require_once 'template/header.php'
  ?>
    <div class="container mt-12">
        <div class="row jutify-content-center">
            <div class="col-md">
                <div id="contenido"></div>
            <?php require_once $pagina.'.php' ?>
            </div>
        </div>
    </div>

 <?php require_once 'template/footer.php' ?>