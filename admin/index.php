<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login Administrativo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='css/estilo.css'>
 
</head>
<body>
    <main>
    <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>
            <form method="post" action="login.php">
            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="txtNome" />
              <label class="form-label" for="typeEmailX-2">Nome</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>

            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </main>

<script src='../js/bootstrap.bundle.js'></script>
</body>
</html>