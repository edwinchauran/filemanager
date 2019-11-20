<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Servidor 1 - EDWIN-PC</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="icon.ico"
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
  <div class="d-flex" id="wrapper">
    <div id="page-content-wrapper">
      <nav class="navbar bg-light border-bottom">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="/thorium.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Thoriumedia Server
          </a>
        </div>
        </nav>
      <div class="container-fluid   col-sm-12 col-lg-6">
        <h1 class="mt-4 light text-white mb-5 ">Subir archivo</h1>

        <form method="POST" action="index.php" enctype="multipart/form-data">
            <div class="custom-file">
                <input type="file" onchange="this.form.submit()" required class="custom-file-input" name="archivo[]" multiple="">
                <label class="custom-file-label bg-primary text-light" for="customFile">Eligir archivo</label>
            </div>
        </form>



        </div>
    </div>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script> -->
<script>
// // Add the following code if you want the name of the file appear on select
// $(".custom-file-input").on("change", function() {
//   var fileName = $(this).val().split("\\").pop();
//   $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
// });
</script>
</body>
</html>
