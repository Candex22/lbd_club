<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equipo de remo</title>
    <link rel="stylesheet" href="waterpolo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="body">
    <header>
        <a href="indexx.php" > <img src="logo.png" class="log0"  alt=""></a>
        <h1>equipo de surf</h1>

    </header>
    <main>
    
    <div class="centrar"> 
        <div class="grid-container">
        <div class="grid-container">
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "deportivo";
          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) {
              $conn->connect_error;
          }
          $sql = "SELECT * FROM surf WHERE entrenador = 1";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<div class="centro">  ';
              echo '  <div class="centrar-texto">';
              echo '    <h3>Entrenador</h3>';  
              echo '    <div class="card" style="width: 18rem;">';
              echo '        <img src='.$row["url"].' class="card-img-top" alt="...">';
              echo '            <h5 class="card-title">' . $row["Nombre"] . '</h5>';
              echo '            <p class="card-text">' . $row["descripcion"] . '</p>';
              echo '    </div>';
              echo '  </div>';
              echo '</div>';
            }
          } else {
              echo "No se encontraron eventos de waterpolo.";
          }
        ?>
        </div>
          
        <div class="invisible">
            <h3></h3>
          <div class="card" style="width: 18rem;">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="centrar"> 
        <div class="grid-container">
        <div class="grid-container">
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "deportivo";
          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) {
              $conn->connect_error;
          }
          $sql = "SELECT * FROM surf WHERE entrenador IS NULL";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<div class="centro">  ';
              echo '  <div class="centrar-texto">';
              echo '    <h3>'.$row["estilo"].'</h3>';  
              echo '    <div class="card" style="width: 18rem;">';
              echo '        <img src='.$row["url"].' class="card-img-top" alt="...">';
              echo '            <h5 class="card-title">' . $row["Nombre"] . '</h5>';
              echo '            <p class="card-text">' . $row["descripcion"] . '</p>';
              echo '    </div>';
              echo '  </div>';
              echo '</div>';
            }
          } else {
              echo "No se encontraron eventos de waterpolo.";
          }
        ?>
    </div>
    </main>
    <div class="centrar-texto">
                <h3>Eventos:</h3>
                <div class="row mx-auto">
                    <?php include("eventos_surf.php"); ?>
                </div>
            </div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>