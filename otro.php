<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Aca empieza el resto de links  --> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-theme.css">
    <!-- <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles-sd.css">
    <link rel="stylesheet" href="css/styles-md.css">
    <link rel="stylesheet" href="css/styles-desktop.css"> -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <title>Fútbol Fans</title>
    <link rel="SHORTCUT ICON" href="images/logoPng.ico" type="image/x-icon" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>










    <div id="navbar">
      <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Fútbol Fans</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav">


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fechas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="fecha20.php">Fecha 20</a></li>
                <li><a href="fecha19.php">Fecha 19</a></li>
                <li><a href="fecha18.php">Fecha 18</a></li>
                <li><a href="fecha17.php">Fecha 17</a></li>
                <li><a href="fecha16.php">Fecha 16</a></li>

              </ul>

            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Equipos <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="RiverPlate.php">River Plate</a></li>
                <li><a href="Boca.php">Boca</a></li>
                <li><a href="Racing.php">Racing</a></li>
                <li><a href="Independiente.php">Independiente</a></li>
                <li><a href="San Lorenzo.php">San Lorenzo</a></li>

              </ul>
            </li>
            <form role="search" class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" placeholder="Buscar" class="form-control">
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">

              <li><a href="Proyecto_Int_FAQ.html">FAQ</a></li>
              <li><a href="Proyecto_Int_Registro.php">Registro</a></li>
              <li><a href="login.php">Log in</a></li>
            </ul>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </div>



    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">




        <div class="bs-example">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="images/slide1.jpg" alt="First Slide">
              </div>
              <div class="item">
                <img src="images/slide2.jpg" alt="Second Slide">
              </div>
              <div class="item">
                <img src="images/slide3.jpg" alt="Third Slide">
              </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>

      </div>
    </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
        console.log( "ready!" );
        $('.carousel').carousel();
      });
    </script>

<!-- Aca empieza index:  -->

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script>
$(function(){
  $('#test').popover();​
});
</script>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Bootstrap/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
  console.log( "ready!" );
  $('.carousel').carousel();
});
</script>
<script async src="http://platform.twitter.com/widgets.js" charset="utf-8">
</script>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover()
});
</script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


  </body>
</html>
