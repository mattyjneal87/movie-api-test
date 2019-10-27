<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A little test to play with the OMDB API">
  <meta name="author" content="Matthew Neal">

  <title>Movie search!</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles by Matt -->
  <link href="css/custom.css" rel="stylesheet">
  
  <!-- jQuery Modal -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

  <!-- Google Font --> 
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700|Staatliches&display=swap" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Movie Finder</a>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Coloured Movie Finder</h1>
      <p class="lead">Thanks for taking the time to look at my movie finder. This website only finds movies containing the words "red", "green", "blue" or "yellow".</p>
      <div class="row">
      <div class="col">
        <?php require_once('inc/query_form.php'); ?>
      </div>
    </div>
    </header>



    <!-- Page Features -->
    <div class="row text-center">

    <?php require_once('inc/api_query.php'); ?>



    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Klyp Demo of OMDB API by Matthew Neal</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

</body>

</html>

