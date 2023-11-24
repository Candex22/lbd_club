<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Mazi fc</title>
</head>
<?php
session_start();
?>
<body class="body">
    <main>
        <nav class="navegador">
            <img class="logo" src="logo.png">
            <ul>
            <?php
              if ($_SESSION["infosesion"] =="exito"){
                  echo "<li><a href=\"eventos.html\">Eventos</a></li>";
                  echo "<li><a href=\"logout.php\" class=\"logout\">Log out</a></li>";
                }else{
                  echo "<li><a href=\"signin.php\">Iniciar sesion</a></li>";
                }

                ?>
            </ul>
          </nav>

          <div class="container">
            <div class="box" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/2/24/WRJCH_2018-08-11_JM2x_Semi_CD_%28Martin_Rulsch%29_68.jpg');">
                <a href="#remo">
                    <div class="sport-name"><h2>remo</h2></div>
                </a>
            </div>
        
            <div class="box" style="background-image: url('https://feduargentina.com.ar/wp-content/uploads/2017/07/waterpoolo-750x400.jpg');">
                <a href="#waterpolo">
                    <div class="sport-name"><h2>Waterpolo</h2></div>
                </a>
            </div>
        
            <div class="box" style="background-image: url('https://cflvdg.avoz.es/sc/480x/default/2022/03/09/00121646840451211852136/Foto/natacion.jpg');">
                <a href="#natacion">
                    <div class="sport-name"><h2>Natación</h2></div>
                </a>
            </div>
        
            <div class="box" style="background-image: url('https://desdematanza.com.ar/wp-content/uploads/2022/07/rugby-subacuatico.png');">
                <a href="#rugby-subacuatico">
                    <div class="sport-name"><h2>Rugby</h2></div>
                </a>
            </div>
        
            <div class="box" style="background-image: url('https://www.escolacatalanadesurf.com/assets/arxius/3bb71beea047a4050d99f557464bb691.jpg');">
                <a href="#surf">
                    <div class="sport-name"><h2>Surf</h2></div>
                </a>
            </div>
        </div>

          
          <div class="centrar">
          <div class="img-info-deportes">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/WRJCH_2018-08-11_JM2x_Semi_CD_%28Martin_Rulsch%29_68.jpg" class="foto-info-deportes" alt="">
            <div class="info-deportes" id="remo">
              <h1>Remo</h1>
              <h3>El remo es un deporte acuático en el que los competidores utilizan remos para mover una embarcación a través del agua. Se practica en ríos, lagos y mares, y requiere fuerza, resistencia y técnica. Nuestro equipo de remo se enorgullece de su dedicación y éxito en competencias nacionales e internacionales.</h3>
              <a href="equipo-remo.php" class="btn btn-primary">ver equipo</a>
            </div>
            
          </div>
        </div>

        <div class="centrar">
          <div class="img-info-deportes">
            <img src="https://feduargentina.com.ar/wp-content/uploads/2017/07/waterpoolo-750x400.jpg" class="foto-info-deportes" alt="">
            <div class="info-deportes" id="waterpolo">
              <h1>Waterpolo</h1>
              <h3>El waterpolo es un deporte de equipo que se juega en una piscina. Dos equipos compiten por anotar goles en la portería del oponente mientras nadan y defienden su propia portería. Nuestro equipo de waterpolo es conocido por su habilidad en el agua y su espíritu competitivo. ¡Aprende más sobre nuestro equipo de waterpolo!</h3>
              <a href="equipo-de-waterpolo.php" class="btn btn-primary">ver equipo</a>
            </div>
          </div>
        </div>

        <div class="centrar">
          <div class="img-info-deportes">
            <img src="https://cflvdg.avoz.es/sc/480x/default/2022/03/09/00121646840451211852136/Foto/natacion.jpg" class="foto-info-deportes" alt="">
            <div class="info-deportes" id="natacion">
              <h1>Natacion</h1>
              <h3>La natación es un deporte acuático individual en el que los nadadores compiten en diversos estilos y distancias en piscinas o aguas abiertas. Nuestro equipo de natación se enorgullece de su técnica y velocidad en el agua, y ha logrado numerosos récords y medallas. Descubre más sobre nuestro equipo de natación y sus logros.</h3>
              <a href="natacion.php" class="btn btn-primary">ver equipo</a>
            </div>
          </div>
        </div>

        <div class="centrar">
          <div class="img-info-deportes">
            <img src="https://desdematanza.com.ar/wp-content/uploads/2022/07/rugby-subacuatico.png" class="foto-info-deportes" alt="">
            <div class="info-deportes" id="rugby-subacuatico">
              <h1>Rugby subacuatico</h1>
              <h3>El rugby subacuático es un deporte de equipo que se juega bajo el agua en una piscina. Los jugadores usan snorkels y aletas para mover un balón y anotar goles en las porterías del equipo contrario. Nuestro equipo de rugby subacuático destaca por su habilidad y estrategia en el juego subacuático.</h3>
              <a href="rugby_subacuatico.php" class="btn btn-primary">ver equipo</a>
            </div>
          </div>
        </div>

        <div class="centrar">
          <div class="img-info-deportes">
            <img src="https://www.escolacatalanadesurf.com/assets/arxius/3bb71beea047a4050d99f557464bb691.jpg" class="foto-info-deportes" alt="">
            <div class="info-deportes" id="surf">
              <h1>surf</h1>
              <h3>El surf es un deporte acuático en el que los surfistas cabalgan sobre las olas del océano en tablas especiales. Requiere equilibrio, habilidad y conocimiento de las olas. Nuestro equipo de surf es apasionado por las olas y ha participado en competencias locales e internacionales.</h3>
              <a href="surf.php" class="btn btn-primary">ver equipo</a>
            </div>
          </div>
        </div>
     

        <div class="centrar">
          <div class="info_club">
            <div class="grid">

            <div class="club">
              <h1>info del club</h1>
              <h3>Nuestro club deportivo es un lugar donde los amantes del deporte se reúnen para practicar y competir en diversas disciplinas acuáticas. Nuestro club promueve la excelencia en el deporte y la formación de atletas comprometidos. Valoramos la comunidad y la pasión por el deporte en todas sus formas. Conoce más sobre nuestro club deportivo y nuestra historia.</h3>
            </div>

            <div class="redes">
              <h1>Contactanos</h1>
              <div class="redes-icon">
              <img class="" src="https://cdn-icons-png.flaticon.com/256/3621/3621435.png" alt=""><a href=""><h3>@maxi_mayorga</h3></a>
              </div>
              <div class="redes-icon">
              <img src="https://cdn-icons-png.flaticon.com/256/124/124010.png" alt=""><a href=""><h3>@xxxxxx</h3></a>
            </div>
              <div class="redes-icon">
             <img src="https://cdn.iconscout.com/icon/free/png-256/free-google-mail-new-4762011-3955524.png?f=webp" alt=""> <a href=""><h3>aeaea@gmail.com</h3></a>
            </div>
            </div>

          </div>
          </div>
        </div>
    </main>

  
</body>


<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>