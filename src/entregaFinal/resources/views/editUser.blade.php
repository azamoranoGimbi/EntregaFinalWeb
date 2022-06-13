<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edita usuari</title>
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
    <h5 class="card-title">Edita Dades personals</h5>
    <p class="text-center small">Canvia les teves dades i torna a logejarte per a veure els canvis</p>
    <form class="row g-3 needs-validation" method="post" action="/api/updateUser" novalidate>
        <div class="col-12">
            <label for="yourEmail" class="form-label">Introdueix el teu mail per a canviar les teves dades</label>
            <div class="input-group has-validation">
                <input type="text" name="email" class="form-control" id="yourEmail" required>
                <div class="invalid-feedback">Has d'introduir un email</div>
            </div>
            <label for="yourEmail" class="form-label">Nom</label>
            <div class="input-group has-validation">
                <input type="text" name="name" class="form-control" id="yourEmail">
            </div>
            <label for="yourEmail" class="form-label">Cognom</label>
            <div class="input-group has-validation">
                <input type="text" name="lastname" class="form-control" id="yourEmail">
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Canvia!</button>
            </div>
        </div>
    </form>

</body>
</html>
