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
  <link rel="stylesheet" href="estiloservicios.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Iconos-->
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>


  <style>
    .active {
      background-color: white;
    }

    .content {
      display: none;
      padding: 10px 20px;
    }

    .content.active {
      display: block;
    }


    .dropdown {
      left: 20px;
      color: white;
      font-size: 10px;
      border: 15px;
      font-family: Georgia, serif;
    }

    label {
      font-family: Georgia, serif;
      font-size: large;
      color: white;

    }

    .panel-body {
      border-radius: 15px;
    }
  </style>
</head>

<body style="background-color:  #EAEAEA;">
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
    </div>
  </nav>
  <br></br>

  <div class="dropdown">
    <button class="btn btn-xm  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: gray;" align="center">
      Seleccionar Hotel
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" data-id="op1" href="#">Hotel Alux Cancún</a></li>
      <li><a class="dropdown-item" data-id="op2" href="#">Hotel Ambiance Suites Cancún</a></li>
      <li><a class="dropdown-item" data-id="op3" href="#">Ambiance villas</a></li>
    </ul>
  </div>


  <div class="content active" id="op1" style="background-color:  #EAEAEA;">
    <div class="panel-body" style="background-color: gray;">
      <div class="col-sm-12">
        <div class="col-sm-4">
          <img src="camioneta5.jpg">
        </div>
        <div class="col-sm-4">
          <label> One way</label>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
        </div>
        <div class="col-sm-4">
          <label>Round Trip</label>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="camioneta2.jpg">
      </div>
      <div class="col-sm-4">
        <label> One way</label>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
      </div>
      <div class="col-sm-4">
        <label>Round Trip</label>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
      </div>
    </div>
  </div>
  </div>
  <div class="content" id="op2" style="background-color:  #EAEAEA;">
    <div class="panel-body" style="background-color: gray;">
      <div class="col-sm-12">
        <div class="col-sm-4">
          <img src="camioneta5.jpg">
        </div>
        <div class="col-sm-4">
          <label> One way</label>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
        </div>
        <div class="col-sm-4">
          <label>Round Trip</label>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="camioneta4.jpg">
      </div>
      <div class="col-sm-4">
        <label> One way</label>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
      </div>
      <div class="col-sm-4">
        <label>Round Trip</label>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
      </div>
    </div>
  </div>
  <div class="content" id="op3" style="background-color:  #EAEAEA;">
    <div class="panel-body" style="background-color: gray;">
      <div class="col-sm-12">
        <div class="col-sm-4">
          <img src="camioneta2.jpg">
        </div>
        <div class="col-sm-4">
          <label> One way</label>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
        </div>
        <div class="col-sm-4">
          <label>Round Trip</label>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
          <br></br>
          <button type="button" class="btn btn-default">$65.00 USD</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="camioneta5.jpg">
      </div>
      <div class="col-sm-4">
        <label> One way</label>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
      </div>
      <div class="col-sm-4">
        <label>Round Trip</label>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
        <br></br>
        <button type="button" class="btn btn-default">$65.00 USD</button>
      </div>
    </div>

  </div>
  </div>

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

</body>
<script>
  const optionsMenu = document.querySelector(".dropdown-menu");
  const dropdownItem = document.querySelectorAll(".dropdown-item");
  const contents = document.querySelectorAll(".content");

  optionsMenu.onclick = e => {
    const id = e.target.dataset.id;
    if (id) {
      dropdownItem.forEach(item => {
        item.classList.remove("active");
      });
      e.target.classList.add("active");

      contents.forEach(content => {
        content.classList.remove("active");
      });
      const element = document.getElementById(id);
      element.classList.add("active");
    }
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>