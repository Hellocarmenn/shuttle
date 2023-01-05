<!DOCTYPE html>
<html lang="en">

<head>
  <title>IMO Shuttle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilohome.css">
  <!--Iconos-->
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .slider {
      position: relative;
    }

    .form {
      position: absolute;
      top: 50%;
      left: 30%;
      transform: translate(-50%, -50%);
      width: 680px;
      height: 480px;
      border-radius: 15px;

    }
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');


    /*:::::Pie de Pagina*/
    .pie-pagina {
      width: 100%;
      background-color: #0a141d;
      position: absolute;
      top: 147%;
      left: 0%;
    }

    .pie-pagina .grupo-1 {
      width: 100%;
      max-width: 1200px;
      margin: auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 50px;
      padding: 45px 0px;
    }

    .pie-pagina .grupo-1 .box figure {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .pie-pagina .grupo-1 .box figure img {
      width: 250px;
    }

    .pie-pagina .grupo-1 .box h2 {
      color: #fff;
      margin-bottom: 25px;
      font-size: 20px;
    }

    .pie-pagina .grupo-1 .box p {
      color: #efefef;
      margin-bottom: 10px;
    }

    .pie-pagina .grupo-1 .red-social a {
      display: inline-block;
      text-decoration: none;
      width: 45px;
      height: 45px;
      line-height: 45px;
      color: #fff;
      margin-right: 10px;
      background-color: #0d2033;
      text-align: center;
      transition: all 300ms ease;
    }

    .pie-pagina .grupo-1 .red-social a:hover {
      color: aqua;
    }

    .pie-pagina .grupo-2 {
      background-color: #0a1a2a;
      padding: 15px 10px;
      text-align: center;
      color: #fff;
    }

    .pie-pagina .grupo-2 small {
      font-size: 15px;
    }

    @media screen and (max-width:800px) {
      .pie-pagina .grupo-1 {
        width: 90%;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 30px;
        padding: 35px 0px;
      }
    }

    h7 {
      color: black;
      font-family: 'Poppins', sans-serif;
      text-align: center;
      font-size: 25px;
    }

    label {
      color: black;
      font-family: 'Poppins', sans-serif;
      text-align: center;

    }
  </style>
</head>

<body>
  <div class="row">
    <div class="col-sm-12">
      <!--Preheader-->
      <nav class="nav navbar-expand-lg  navbar-inverse  navbar-light bg-light" style="background-color:#1e60ab">
        <div class="container">
          <div class="container-fluid">

            <ul class="nav navbar-nav pull-left">
              <li><a href="#"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<span style="color:#ffffff">55-42-74-52-01</span></a></li>
              <li><a href="mailto:carmenmtzunam97@gmail.com" target="_blank"><span class="glyphicon glyphicon-envelope"></span> &nbsp;<span style="color:#ffffff">serviciosalcliente@.com.mx</span></a></li>

            </ul>

            <ul class="nav navbar-nav pull-right">
              <li><a href="#"><span class="glyphicon glyphicon-ice-lolly"></span> <span style="color:#ffffff">Login</span></a></li>
              <li><a href="#"><span class="glyphicon glyphicon-globe"></span> <span style="color:#ffffff">EN</span></a></li>
              <li><a href="#"><span class="glyphicon glyphicon-usd"></span><span style="color:#ffffff">USD</span></a></li>
            </ul>

          </div>
        </div>
      </nav>
      <!--Header principal-->
      <nav class="nav navbar-expand-lg  navbar-inverse navbar-dark " style="background-color:#337ccb">
        <div class="container">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav mx-auto">
                <li><a href="home.php"><span style="color:#ffffff">Home</span></a></li>
                <li><a href="services.php"><span style="color:#ffffff">Servicies</span></a></li>

              </ul>

              <!--se coloca la derecha-->
              <ul class="nav  navbar-nav  navbar-right ml-auto">
                <li><a href="about.php"><span style="color:#ffffff">About</span></a></li>
                <li><a href="contact.php"><span style="color:#ffffff">Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <!--Carousel-->
      <div id="myCarousel" class="slider" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="fondo1.jpg" alt="Los Angeles" style="width:100%;" width="3000" height="1000">
          </div>

          <div class="item">
            <img src="fondo2.jpg" alt="Chicago" style="width:100%;" width="3000" height="1000">
          </div>

          <div class="item">
            <img src="fondo3.jpg" alt="Chicago" style="width:100%;" width="3000" height="1000">
          </div>

          <div class="item">
            <img src="fondo4.jpg" alt="Chicago" style="width:100%;" width="3000" height="1000">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!--Formulario-->
      <div class="col-sm-12">
        <div style="background-color: white;"" class=" form">
          <div class="container">

            <div class="tab-content">
              <div id="transfer" class="tab-pane fade in active">
                <br></br>
                <h7>TRANSFERS</h7>
                <br></br>
                <div class="col-sm-3">
                  <label> Service</label>
                  <select name="service" class="form-control">
                    <option value="One Way - Cancún Airpot-Hotel">One Way - Cancún Airpot-Hotel</option>
                    <option value="One  Way - Hotel-Cancún Airpot">One Way - Hotel-Cancún Airpot</option>
                    <option value="Round trip-Cancún Airpot -  Hotel-CancúnAirpot">Round trip-Cancún Airpot - Hotel-CancúnAirpot</option>
                    <option value="One Way-Hotel-Hotel">One Way-Hotel-Hotel</option>
                    <option value="Round Trip - Hotel - Cancún Airpot - Hotel">Round Trip - Hotel - Cancún Airpot - Hotel</option>
                  </select>
                  <br></br>
                  <label>Passengers</label>
                  <input type="number" name="passenger" class="form-control required">
                </div>

                <div class="col-sm-4">
                  <label> Hotel</label>
                  <select name="hotel" class="form-control">
                    <option value="Hotel 1">Hotel Alux Cancún<span class="glyphicon glyphicon-chevron-right"></span></option>
                    <option value="Hotel 2">Hotel Ambiance Suites Cancún</option>
                    <option value="Hotel 3">Ambiance Villas</option>
                    <option value="Hotel 4">Live aqua Beach Resort Cancún</option>
                    <option value="Hotel 5">Hotel Oasis</option>
                  </select>
                  <br></br>
                  <div class="col-sm-6">
                    <label>Flight arrival date</label>
                    <input type="date" name="fad" class="form-control required">
                  </div>

                  <div class="col-sm-6">
                    <label>Flight arrival time</label>
                    <input type="time" name="fat" class="form-control required">
                  </div>

                  <br></br>
                  <br></br>
                  <br></br>
                  <div class="col-sm-6">
                    <label>Flight departure date</label>
                    <input type="date" name="fdd" class="form-control rquired">
                  </div>

                  <div class="col-sm-6">
                    <label>Flight departure time</label>
                    <input type="time" name="fdt" class="form-control required">
                  </div>
                  <br></br>
                  <br></br>
                  <div class="col-sm-4" align="center">
                    <br></br>

                    <input type="submit" class="btn btn-primary" placeholder="BOOK NOW">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="panel1">
          <div class="panel panel-body">
            <label>Nuestros compañeros</label>
            <div class="col-sm-3">
              <img src="comp1.jpg">
            </div>
            <div class="col-sm-3">
              <img src="comp2.jpg">
            </div>
            <div class="col-sm-3">
              <img src="comp3.jpg">
            </div>
            <div class="col-sm-3">
              <img src="comp4.jpg">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!--::::Pie de Pagina::::::-->
        <footer class="pie-pagina">
          <div class="grupo-1">
            <div class="box">
              <figure>
                <a href="#">
                  <img src="logo.jpg" alt="Logo de SLee Dw">
                </a>
              </figure>
            </div>
            <div class="box">
              <h2>SOBRE NOSOTROS</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
            </div>
            <div class="box">
              <h2>SIGUENOS</h2>
              <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
              </div>
            </div>
          </div>
          <div class="grupo-2">
            <small>&copy; 2021 <b>SLee Dw</b> - Todos los Derechos Reservados.</small>
          </div>
        </footer>
      </div>
    </div>
  </div>





</body>

</html>