<body>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require('head.php')?>
</head>
<body class="bg-dark">
  <div class="d-flex" id="wrapper">
    <div id="page-content-wrapper">
        <?php include("nav.php")?>
        <div class="pt-5 pb-2"></div>
        <div class="container-fluid">
            <div class="row">
                <?php
                    if (isset($_GET['type']))
                    {
                        $tipo = $_GET['type'];
                        if($tipo == 'imagenes')
                        {
                            require('consultar_imagenes.php');
                        }
                        else if($tipo == 'videos')
                        {
                            require('consultar_videos.php');
                        }
                        else if($tipo == 'audios')
                        {
                            require('consultar_audios.php');
                        }
                        else if($tipo == 'archivos')
                        {
                            require('consultar_archivos.php');
                        }
                    }
                ?>
            </div>
            <div class="pt-5"></div>
        </div>
    </div>
</body>
<footer>
            <?php require('footer.php');?>
</footer>
</html>
