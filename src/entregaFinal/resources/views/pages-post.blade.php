<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Socialia</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo("".Session::get('name')." ".Session::get('lastname')."");?></span>
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/go-to-logout">
          <i class="bi bi-grid"></i>
          <span>Log out</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/go-to-editUser">
          <i class="bi bi-grid"></i>
          <span>Editar dades personals</span>
        </a>
      </li>
    </ul>
      

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
  
    <div class="pagetitle">
      <h1>Form Editors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Editors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">
       
            <form class="row g-3 needs-validation" method="get" action="/api/getPosts" novalidate>
                <button class="btn btn-primary"  type="submit">Actualitza la pagina</button>
            </form>
          <div class="card">
            <div class="card-body">
            
            <a href="./pages-post-texto.html"> <h5 class="card-title">Post tipo texto</h5></a> <!-- QUITAR ENLACE SI AL FINAL NO REDIRECCIONO, CREO QUE ES MEJOR NO REDIRECCIONAR -->

              <!-- Quill Editor Bubble -->
             
              <div class="quill-editor-bubble">
                <p>
                  Bacon ipsum dolor amet short loin boudin venison cupim, biltong turducken turkey short ribs drumstick rump 
                  leberkas beef ground round bresaola. Andouille shankle shoulder doner brisket boudin pancetta tongue chuck, 
                  pig fatback ribeye short loin jerky. Kevin tenderloin ground round andouille venison sausage. 
                  Andouille boudin filet mignon, pork chop bacon t-bone short loin doner pastrami cow. 
                  Rump short loin pancetta cow pork tongue. Cow burgdoggen frankfurter pork belly andouille short loin. 
                  Andouille tri-tip tenderloin strip steak drumstick bresaola picanha beef ribs, sirloin prosciutto capicola
                  corned beef pig turkey.
                </p>
              </div>
              <!-- End Quill Editor Bubble -->

            </div>
          </div>


        </div>

        <div class="col-lg-6">

          <div class="card">
            <form class="row g-3 needs-validation" method="post" action="/api/addPost" novalidate>
              <div class="card-body">
                <h5 class="card-title">Escriu quelcom!</h5>
                <textarea class="tinymce-editor" type="text" name="content" class="form-control" id="content">            
                </textarea>
                <button class="btn btn-primary"  type="submit">Afegir</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>