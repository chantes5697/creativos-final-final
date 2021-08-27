<?php
    $filepath = "images/productos/SUBLIMACION VIDRIO/";
    $array = preg_grep('~\.(jpg)$~', scandir($filepath));
    $num = count($array);
	$i = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title> publicidad creativos | Vidrio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./assets/js/bootstrap.js"></script>
  <style>
  body {
    font: 400 15px 'Roboto Condensed', sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #000;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: 'Roboto Condensed', sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e;
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: 'Roboto Condensed', sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  body {
        font: 400 15px 'Roboto Condensed', sans-serif;
        line-height: 1.8;
        color: #818181;
    }
    #creativos-jt {
      width: 100%;
      height: 100vh;
      background: url("./images/ejemplo.jpg");
      position: relative;
    }


    #footer{
      background: #595959;
      color: #fff;
      font-size: 10px;
    }
    .navbar {
        margin-bottom: 0;
        width: 100%;
        height: 10vh;
        background-color: #0080ff;
        z-index: 9999;
        border: 0;
        font-size: 18px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
        font-family: 'Roboto Condensed', sans-serif;
      }
    .navbar li a, .navbar .navbar-brand {
        color: #fff !important;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #000 !important;
        background-color: #fff !important;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
    }
    .dropdown-item{
      background-color: #0080ff;
      
      font-size: 15px;
    }
   .modal-dialog {
      max-width: 400px;
      margin: 30px auto;
    }



    .modal-body {
      position:relative;
      padding:0px;
      min-height:400px;
      background:#ccc;
    }




    .close {
      position:absolute;
      right:-30px;
      top:0;
      z-index:999;
      font-size:2rem;
      font-weight: normal;
      color:#fff;
      opacity:1;
    }
     .modal-backdrop {
    z-index: 100000 !important;
  }

  .modal {
    z-index: 100001 !important;
  }
    #image {
      min-height:200px;
    }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    
        
        <nav class="navbar navbar-expand-lg ">
          <div class='container'>
            <a href="index.html"><img src="images/LOGO CREATIVOS invert.png" style="width: 25% ; height: auto;" alt=""></a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars" style='background-color: #000'></i>
            </button>
          
            <div class='container'>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" style='background-color:#0080ff;'>
                  <li class="nav-item">
                    <a class="nav-link" style='color:#fff;' href="index.html">Inicio</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  style='color:#fff;' data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contacto</a>
                    <div class="dropdown-menu">
                <a class="dropdown-item" style='font-size:18px;' href="index.html#quien" target="_blank">¿Quiénes somos?</a>
                <a class="dropdown-item" style='font-size:18px;' href="index.html#sucursales" target="_blank">Sucursales</a>
                <a class="dropdown-item" style='font-size:18px;' href="index.html#redes" target="_blank">Redes Sociales</a>
                <a class="dropdown-item" style='font-size:18px;' href="index.html#whatsapp" target="_blank">Comunícate con nosotros</a>
              </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style='color:#fff;' data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" style='font-size:18px;' href="sublimacion.html">Sublimación</a>
                      <a class="dropdown-item" style='font-size:18px;' href="offset.php">Offset</a>
                      <a class="dropdown-item" style='font-size:18px;' href="gran-formato.php">Gran Formato y Foto</a>
                      <a class="dropdown-item" style='font-size:18px;' href="extras.php">Extras</a>    
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style='color:#fff;' href="index.html#whatsapp">Whatsapp</a>
                  </li>
                </ul>
                
              </div>
            </div>
          </div>
        </nav>         




<div class="container-fluid bg-grey text-center" >
    <br>
    <br>
    <h1 style="background-color:#ff00a6; color:#fff;">VIDRIO</h1>
    <!--AQUI VAN LAS IMAGENES-->

    <?php foreach ($array as $x ) : ?>
      <?php
        $i++;
        $mod = $i%2;
      ?>
      <?php if($mod == 1): ?>
        <div class="row">
          <div class="col gallery-col">
            <img src="<?php echo($filepath.$x) ?>"
            alt="" data-toggle="modal"
            data-bigimage="<?php echo($filepath.$x) ?>"
            data-target="#myModal" class="img-fluid" width="300px" height="auto">
          </div>
      <?php else: ?>
          <div class="col gallery-col">
            <img src="<?php echo($filepath.$x) ?>"
            alt="" data-toggle="modal"
            data-bigimage="<?php echo($filepath.$x) ?>"
            data-target="#myModal" class="img-fluid" width="300px" height="auto">
          </div>
        </div>
        <br>
      <?php endif; ?>

    <?php endforeach; ?>

    <?php
      $mod2 = $i%2;
      if($mod2 == 1):
    ?>
      <div class="col gallery-col">


      </div>
    </div>
    <br>
    <?php endif; ?>









</div>







<footer class="container-fluid text-center" id='footer'>
    <div class="row">

        <div class='col'>
          <div style="background-color: #0080ff;"><br></div>
            <a>
                SUCURSAL ZAVALETA <br>
                -Dirección: Camino Real a Cholula, #4405, Plaza Santa Fe Local 1G, Col. Ex Hacienda Concepción Buena Vista, C.P. 72170. <br> 
                -Teléfonos de Oficina: 222.503.52.69 / 70 <br> 
                WhatsApp: 222 128 6395 <br>  -Correo: publicidadcreativoszavaleta@outlook.com
            </a>
        </div>

        <div class="col">
          <div style="background-color: #ffcc00;"><br></div>
          <br>
        </div>

        <div class='col'>
            <a>
              <div style="background-color: #ff00a6;"><br></div>
                SUCURSAL FORJADORES <br>
                -Dirección: Blvd. Forjadores de Puebla #1715, Santiago Momoxpan, C.P. 72700, Cholula, Puebla. <br>
                 -Teléfono de Oficina: (222) 7.62.22.73 <br>
                  WhatsApp: 221 156 4111  <br> -Correo: publicidadcreativos@hotmail.com
            </a>
        </div>

    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">


      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

                <img src="//media.tenor.com/images/556e9ff845b7dd0c62dcdbbb00babb4b/tenor.gif" alt="" id="image" class="img-fluid">



      </div>

    </div>
  </div>
</div>



</div>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
<script>
				function cambioDir1() {
				  document.getElementById("myFrame").src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63932.15702580432!2d-98.26631972220883!3d19.041957558909957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc703005b7557%3A0x50a1a0af66d6dcf9!2sPlaza%20Santa%20Fe!5e0!3m2!1ses-419!2smx!4v1615923888174!5m2!1ses-419!2smx";
				}
				function cambioDir2() {
				  document.getElementById("myFrame").src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.714706350912!2d-98.28140538578731!3d19.076277156922583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc77608cb6519%3A0x35f30630d1d599c!2sBlvd.%20Forjadores%20de%20Puebla%201715%2C%20Santiago%20Momoxpan%2C%20Geovillas%20el%20Campanario%20Secc%20II%2C%2072760%20Puebla%2C%20Pue.%2C%20M%C3%A9xico!5e0!3m2!1ses-419!2sus!4v1615935747908!5m2!1ses-419!2sus" ;
				}
</script>

<script type="text/javascript">
  $(document).ready(function() {

  // Gets the video src from the data-src on each button
  var $imageSrc;
  $('.gallery-col img').click(function() {
      $imageSrc = $(this).data('bigimage');
  });
  console.log($imageSrc);



  // when the modal is opened autoplay it
  $('#myModal').on('shown.bs.modal', function (e) {

  // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get

  $("#image").attr('src', $imageSrc  );
  })


  // reset the modal image
  $('#myModal').on('hide.bs.modal', function (e) {
      // a poor man's stop video
      $("#image").attr('src','');
  })






  // document ready
  });



</script>

</body>
</html>
