<body>
<!DOCTYPE html>
<html lang="es">
<?php require('head.php')?>
<body class="bg-dark">
      <?php require("nav.php")?>

      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 col-md-3">
            <a class="card bg-dark text-light p-3 mt-3" href="files.php?type=imagenes"><h5><i class="fa fa-folder"></i> Imágenes</h5></a>
          </div>

          <div class="col-sm-12 col-md-3">
            <a class="card bg-dark text-light p-3 mt-3" href="files.php?type=videos">
              <h5><i class="fa fa-folder"></i> Vídeos</h5>
            </a>
          </div>

          <!-- <div class="col-sm-12 col-md-3">
            <a class="card bg-dark text-light p-3 mt-3" href="files.php?type=audios"><h5><i class="fa fa-folder"></i> Audios</h5></a>
          </div> -->

          <div class="col-sm-12 col-md-3">
            <a class="card bg-dark text-light p-3 mt-3" href="files.php?type=archivos"><h5><i class="fa fa-folder"></i> Archivos</h5></a>
          </div>
          <div class="col-sm-12 mt-3">
          <?php include("post_method.php")?>
          </div>
        </div>
      </div>
</body>
<footer>
<?php require('footer.php')?>
</footer>
</html>
