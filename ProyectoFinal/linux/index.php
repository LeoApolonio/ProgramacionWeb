<?php
    include "styles/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Titulacion por combate</title>
</head>
<body>
    
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
        <div class = "center">
        <h1>Ingresa al sistema.</h1>
        <form method="POST" action="logica/loguear.php">
            <input type="text" name="no_cuenta" placeholder="Ingresa tu numero de cuenta" />
            <br />
            <input type="password" name="clave" placeholder="Ingresa tu contraseña" />
            <br />
            <button type="submit">Iniciar sesion</button>
        </form>
        </div>
      <br><br>
    </div>
</div>

<div class="container">
    <div class="section">
        
        <!-- Icon Section -->
        <div class="row">
            
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text">
                        <img src="styles/Media/espadas.png" alt="Combate" style="width: 60px; height: 60px;">
                    </h2>
                    <h5 class="center">Combate contra otros.</h5>
                    <p class="light">Serás sorteado a lo largo del evento para definir a cada uno de tus rivales, los cuales vendrán de diferentes carreras pero un mismo objetivo.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text">
                        <img src="styles/Media/person.png" alt="Combate" style="width: 55px; height: 60px;">
                    </h2>
                    <h5 class="center">Pelea por tu título.</h5>
                    <p class="light">Una vez logres llegar a un grupo selecto de participantes, cada uno tendrá que enfrentar a su respectivo jefe de carrera en un combate final.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text">
                        <img src="styles/Media/trofeo.png" alt="Combate" style="width: 60px; height: 60px;">
                    </h2>
                    <h5 class="center">Da lo mejor de ti y titúlate.</h5>
                    <p class="light">Ya sea que derrotes a tu jefe de carrera o simplemente obtengas una puntuación aprobatoria, podrás recibir finalmente tu título.</p>
                </div>
            </div>

        </div>
        
    </div>
    <br><br>
</div>

<?php
    include "styles/footer.php";
?>
</body>
</html>
