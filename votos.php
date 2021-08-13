<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Panel de Votaciones</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a class="navbar-brand headerFont text-lg"><strong>VEO - Votaciones Escolares Online</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!--
             <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li> 
          -->
          </ul>
          

          
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">Panel de Votación</h2>
          </div>
          
          <form action="saveVote.php" method="POST">
          <div class="form-group">
            
            <label>Ingresa tu ID de Votante:</label><br>
            <input id="id1" type="text" name="voterID" placeholder="El ID es tu Matrícula Escolar" class="form-control" required/><br>
            
            <h3 class="normalFont">Selecciona uno de los Siguientes Candidatos:</h3>
            <div class="radio">
        <table class="table table-bordered table-hover">
          <tr>
            <th><strong>°</strong></th>
            <th><strong>#</strong></th>
            <th><strong>Nombre</strong></th>
            <th><strong>Cuatrimestre</strong></th>
          </tr>

          <?php
            require('conexion.php');
                          
              $sql= "SELECT * FROM candidatos";
              $query= mysqli_query($conexion, $sql);

              if(mysqli_num_rows($query)>0)
              {
                while($row= mysqli_fetch_assoc($query))
                {
                  $nombre= $row['nombre'];
                  $Cuatrimestre= $row['cuatri'];
                  $numero=$row['id'];
                  echo "
                    <tr>
                      <td><input type='radio' name='id_Candidato' value='".$numero."'></td>
                      <td>$numero</td>
                      <td>$nombre</td>
                      <td>$Cuatrimestre</td>
                    </tr>   
                  ";
                }
              }
          ?>

        </table>
              <button type="submit" name="submit" class="btn btn-primary"><strong>Votar</strong></button>
            </div>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 text-center">
             <h2 class="specialHead">Universidad Tecnológica de la Selva<br>Unidad Académica Rayón</h2>
            </div>
            <div class="col-sm-6 text-center">
              <a href="https://www.facebook.com/utselvarayon" target="_blank"><img src="https://img.icons8.com/office/50/000000/facebook.png"/></a>
              <a href="https://www.youtube.com/c/UTselvaOficial1/featured" target="_blank"><img src="https://img.icons8.com/office/50/000000/youtube.png"/></a>
              
            </div>

          </div>
        </div>
      </footer>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
