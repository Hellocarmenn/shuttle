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
    <link rel="stylesheet" href="estilocontact.css">
    <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <style>
        .panel1 {
            position: absolute;
            top: 100%;
            left: 5%;
            width: 550px;
            height: 500px;


        }

        .panel2 {
            position: absolute;
            top: 162%;
            left: 0;
            width: 100%;

        }

        label {
            font-family: serif;
            font-size: 40px;
            text-align: center;

        }

        p7 {
            font-family: serif;
            font-size: 18px;
            text-align: center;

        }

        h7 {
            font-family: serif;
            font-size: 18px;
            text-align: center;

        }

        .panel1 {
            position: absolute;
            top: 70%;
            left: 10%;
            width: 550px;
            height: 500px;
        }

        .panel2 {
            position: absolute;
            top: 150%;
            left: 0;
            width: 100%;

        }
    </style>

</head>

<body style="background-color:  #EAEAEA;">
    <div class="col-sm12">
        <!--Preheader-->
        <nav class="nav navbar-expand-lg  navbar-inverse  navbar-light bg-light" style="background-color:#1e60ab">
            <div class="container">

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
        </nav>
        <!--Header principal-->
        <nav class="nav navbar-expand-lg  navbar-inverse navbar-dark " style="background-color:#337ccb">
            <div class="container">
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
        </nav>
    </div>
    <div class="col-sm-12">
        <img class="imgprincipal" src="cabecera1.jpg" class="img-thumbnail" width="3000" height="1000">
        <br></br>
    </div>



    <div class="container">
        <div clas="panel panel-body">
            <div class="col-sm-6">
                <form class="form" style="background-color:gray;">
                    <br></br>
                    <label class="col-sm-12">Send us a message</label>
                    <div class="col-sm-6">
                        <br></br>
                        <input style="background-color:#EAEAEA" type="text" name="name" class="form-control required" placeholder="Name">
                        <br></br>

                        <input style="background-color:#EAEAEA" type="gmail" name="correo" class="form-control required" placeholder="Email">
                    </div>
                    <div class="col-sm-6">
                        <br></br>
                        <input style="background-color:#EAEAEA" type="telefono" name="phone" class="form-control required" placeholder="Phone">
                        <br></br>

                        <input style="background-color:#EAEAEA" type="text" name="topic" class="form-control required" placeholder="Topic">
                        <br></br>
                    </div>
                    <div class="col-sm-12">
                        <div class="panel">
                            <div clas="panel panel-body ">
                                <textarea name="listado" class="form-control" placeholder="How we can help" rows="6" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div align="center">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-sm-6">
                <div class="panel1">
                    <div class="panel panel-body" style="background-color:  #EAEAEA;">
                        <label>Nuestra oficina</label>
                        <br></br>
                        <h7>Cancún,Quintana Roo</h7>
                        <p7>Blvd Luis Donaldo Colosio Sm 309 M10 Lt6 Local 08, Col. Alfredo V Bonfil, CP. 77560, Cancún, Quintana Roo, México</p>
                            <p7>Teléfono: +52 998 896 27 17</p2>
                                <p7>contact@.com</p3>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="panel2">
            <div class="panel panel-body">
                <label1>Nuestros compañeros</label1>
                <br></br>
                <div class="col-sm-3">
                    <img src="./comp.jpg">
                </div>
                <div class="col-sm-3">
                    <img src="./comp.jpg">
                </div>
                <div class="col-sm-3">
                    <img src="./comp.jpg">
                </div>
                <div class="col-sm-3">
                    <img src="./comp.jpg">
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

</html>