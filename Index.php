


<!DOCTYPE html>
<html>

<head>

<?php

include "head.php";

?>

</head>

<body>
  <div class="container">

    <?php
    include "header.php";
    ?>












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


    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="page-header">
          <h1>Fecha 19 <small>Campeonato Argentino 2016-17</small></h1>
        </div>
        <!-- aca van los videos -->
        <h3>River Plate VS Quilmes (2-0) </h3>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oGFw7wYjdjw?autoplay=1" controls=2 allowfullscreen>
          </iframe>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 hidden-sm hidden-xs" style="max-height:500px" class="twitter" style="max-height: 10;overflow-y: scroll;">
        <a class="twitter-timeline" href="https://twitter.com/afa"  data-height="1500">Tweets by afa
        </a>

      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <h3>Velez VS Boca (1-3) </h3>

        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fGWx3UVmnQk" controls=2 allowfullscreen>
          </iframe>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <h3>Patronato VS Independiente (0-5)    </h3>
        <div class="embed-responsive embed-responsive-16by9">

          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9AQHgqE3Z20" controls=2 allowfullscreen>
          </iframe>

        </div>
      </div>
    </div>




<div class="row">
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

    <div class="fb-comments" data-href="http://sarasaco.blogspot.com.ar/" data-numposts="10" data-colorscheme="light"></div>
  </div>
</div>

  </div>

<?php

include "footer.php"

?>

</body>
</html>
