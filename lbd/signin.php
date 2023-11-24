<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Document</title>
</head>
<body class="body">

    <div class="radial-gradient">
    <section class="forms-section">

        <h1 class="section-title">Atlantic Club</h1>


        

        <div class="forms">
          <div class="form-wrapper is-active">

            <button type="button" class="switcher switcher-login">
              Iniciar sesion
              <span class="underline"></span>
            </button>

            <form class="form form-login" action="log_in.php" method="POST">

              <fieldset>
                <?php
                session_start();
                if($_SESSION["infosesion"] =="error"){
                  echo "<li>contraseña incorrecta</li>";
                }
                ?>
                <div class="input-block">
                  <label for="login-email">Email</label>
                  <input name="mail" id="login-email" type="email" required>
                </div>
                <div class="input-block">
                  <label for="login-password">Contraseña</label>
                  <input name="contrasena" id="login-password" type="password" required>
                </div>
              </fieldset>
              <button type="submit" class="btn-login login">Ingresar</button>

            </form>

          </div>




          <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup"> 
              Registrarse
              <span class="underline"></span>
            </button>

            <form class="form form-signup" action="registro.php" method="POST">
              <fieldset>
                <div class="input-block" >
                  <label for="signup-email">nombre</label>
                  <input name="nombre" id="signup-email" type="text" required>

                  <label for="signup-email">apellido</label>
                  <input name="apellido" id="signup-email" type="text" required>

                  <label for="signup-email">dni</label>
                  <input name="dni" id="signup-email" type="number" required>

                  <label for="signup-email">Email</label>
                  <input name="mail" id="signup-email" type="email" required>
                </div>

                <div class="input-block">
                  <label for="signup-password">Contraseña</label>
                  <input name="contrasena" id="signup-password" type="password" required>
                </div>
              </fieldset>
              <button type="submit" class="btn-login signup">Ingresar</button>
            </form>

          </div>
        </div>
      </section>
      <button type="button" class="switcher switcher-signup"> 
              <a href="indexx.php">volver</a>
              <span class="underline"></span>
            </button>
    </div>
      <script src="signin.js"></script>
</body>
</html>