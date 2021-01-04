<?php
include "forms/conexion.php";
  session_start();
  $menu = "none";
  $login = "none";
  if (!isset($_SESSION['email'])) 
  {
    $menu = "none";
    $login = "";
  }else{
    $menu = "";
    $login = "none";

    $sqli="SELECT * FROM usuarios WHERE email_user ='".$_SESSION['email']."'";
    $result=mysqli_query($conectar,$sqli);
    $numero_filas = mysqli_num_rows($result);
    $fila=mysqli_fetch_assoc($result);

    //$fila['tipo_usuario']
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PlugMC - Forum</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/icon.css" rel="stylesheet">
  <link href="assets/css/semantic.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/3dviewer/minecraft-skinviewer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center  header-transparent " style="background-color: rgba(209, 0, 216, 0.397);">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">PlugMC</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="">Support Area</a></li>
          <li><a href="index.html">Home</a></li>
          <li><a href="https://store.plug-mc.net/" target="_blank">Shop</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center" 
  style="background-image: url('assets/img/background.png'); background-repeat: no-repeat; background-attachment: inherit; background-size: 100% 100%; padding-top: 100px;">
    <!-- login -->
    <div class="container h-100" style="display:<?php echo $login;?>;">
      <br>
      <br>
      <div class="d-flex justify-content-center h-100">
        <div class="user_card">
          <div class="d-flex justify-content-center">
            <div class="brand_logo_container">
              <img src="https://web.plug-mc.net/assets/img/logo.png" class="brand_logo" alt="Logo">
            </div>
          </div>
          <div class="d-flex justify-content-center form_container">
            <form method="POST" action="forms/log_in.php">
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="email" name="email" class="form-control input_user" value="" placeholder="email@example.com">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" name="pass" class="form-control input_pass" value="" placeholder="password">
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlInline">
                  <label class="custom-control-label" for="customControlInline">Remember me</label>
                </div>
              </div>
                <div class="d-flex justify-content-center mt-3 login_container">
             <button type="submit" name="button" class="btn login_btn">Login</button>
             </div>
            </form>
          </div>
      
          <div class="mt-4">
            <div class="d-flex justify-content-center links">
              Don't have an account? <a href="#" class="ml-2 regis" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Sign Up</a>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- final login  -->
    <div class="forums" style="background-color: rgba(209, 0, 216, 0.397);width: 96%;border: 1px solid #ffffff; display: <?php echo $menu;?>;">
        <center>
            <div class="menu" style="width: 100%; height: 100%; background-color: #ffffff;">
              <!--Divider-->
              <div class="ui inverted segment">
                <div class="ui inverted secondary pointing menu">
                  <a class="item active" id="ticketlist">
                    <div class="la">Ticket list</div> &nbsp;
                    <i class="address book icon"></i>
                  </a>
                  <a class="item" id="createticket">
                    <div class="la">Create Ticket</div> &nbsp;
                    <i class="file outline icon"></i>
                  </a>
                  <a class="item" id="editprofile">
                    <div class="la">Edit Profile</div> &nbsp;
                    <i class="user outline icon"></i>
                  </a>
                  <a class="item" id="seestats">
                    <div class="la">See stats</div> &nbsp;
                    <i class="search icon"></i>
                  </a>
                  <a class="item" id="signoff" href="forms/close_session.php">
                    <div class="la">Sign off</div> &nbsp;
                    <i class="lock icon"></i>
                  </a>
                  
                </div>
              </div>
            <h4 class="ui horizontal divider header titulo-menu" id="titulo-menu">
              <i class="address book icon"></i>
              Ticket List
            </h4>
            <!--Inicio de seleccion ticket list-->
            <div class="card ticket-list">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p class="text-dark">Hey <b><?php echo $fila['nick_user']; ?></b> Here you can find a list of all the tickets you have sent to our support team.</p>
                </blockquote>
              </div>
              <br>
              <div class="tabla-tickets">
                <table class="table table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">ID TICKET</th>
                      <th scope="col">TITLE</th>
                      <th scope="col">DEPARTMENT</th>
                      <th scope="col">DATE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $sqli="SELECT * FROM tickets WHERE uname ='".$fila['nick_user']."'";
                    $result=mysqli_query($conectar,$sqli);
                      $numero_filas = mysqli_num_rows($result);
                    for($i = 1; $i<= $numero_filas;$i++){
                    $filalis=mysqli_fetch_assoc($result);
                      echo "<tr>"
                    ?>
                    <th scope="row"><?php echo "".$filalis['id_ticket']."";?></th>
                    <?php
                     echo "<td><a href='forms/ticket_view.php?id=".$filalis['id_ticket']."'>";
                    ?>
                      <?php echo "".$filalis['titulo_ticket']."";?>
                    </a></td>
                    <td><?php echo "".$filalis['departamento_ticket']."";?></td>
                    <td><?php echo "".$filalis['fecha_ticket']."";?></td>
                    <?php
                      echo "</tr>";
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!--Final de seleccion ticket list-->
            <!--Inicio de seleccion crear ticket-->
            <div class="card create-ticket" style="display: none;">
              <div class="card-header">
                <br>
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p class="text-dark">Hey <b><?php echo $fila['nick_user']; ?></b> This is a form to create tickets. Fill in the form and send us your questions.</p>
                </blockquote>
              </div>
              <br>
              <center>
                <div class="formcreate" style="width: 95%;">
                  <form method="POST" enctype="multipart/form-data" action="forms/create_ticket.php">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Title</label>
                        <input type="text" name="titticket" class="form-control" id="inputEmail4" placeholder="" 
                         required>
                         <input type="text" name="nick" value="<?php echo $fila['nick_user'];?>" style="display: none;">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Department</label>
                        <select id="inputState" name="depart" class="form-control" >
                          <option selected value="Purchases and payments in the store">
                            Purchases and payments in the store
                          </option>
                          <option value="Reports and bugs in modalities">
                            Reports and bugs in modalities
                          </option>
                          <option value="STAFF sanction appeal">
                            STAFF sanction appeal
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Description</span>
                      </div>
                      <textarea class="form-control" name="desc" aria-label="With textarea"  required></textarea>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label >Date</label>
                         <input class="form-control" name="fecha" type="date"  value="" id="">
                      </div>
                      <div class="form-group col-md-6">
                      <label for="">Screenshot</label>
                        <input type="file" name="foto" class="form-control" id="">
                        <br>
                      </div>
                    </div>
                    
                    <br>
                    <div class="custom-file">
                      <!-- <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                      <label class="custom-file-label" for="customFileLang" >Select image</label> -->
                      <br>
                      <br>
                      <br>
                      <button class="ui inverted purple button" type="submit">Create ticket</button>
                    </div>
                  </form>
                  <br>                  
                </div>
              </center>
              <br>
            </div>
            <!--Final de seleccion crear ticket-->
            <!-- Editar perfil -->
            <div class="card edit-profile" style="display: none;">
              <div class="card-header">
                <br>
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p class="text-dark">Hey <b><?php echo $fila['nick_user']; ?></b> Here you can edit your username by changing the email or password.</p>
                </blockquote>
              </div>
              <!-- Container -->
              <div class="container float-left">
                <div class="row">
                  <div class="col-sm">
                    <div class="ui action input">
                      <form method="POST" action="forms/edit_nick.php">
                      <input type="text" name="nickorig" value="<?php echo $fila['nick_user'];?>" style="display: none;">
                      <input type="text" class="form-control" name="nick" value="" placeholder="Nick">
                      <button class="ui pink right labeled icon button" type="submit">
                        <i class="edit icon"></i>
                        Edit Nick
                      </button>
                      </form>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="ui action input">
                    <form method="POST" action="forms/edit_email.php">
                      <input type="email" class="form-control" name="email" value="" placeholder="Email">
                      <input type="text" name="nickorig" value="<?php echo $fila['nick_user'];?>" style="display: none;">
                      <button class="ui pink right labeled icon button" type="submit">
                        <i class="edit icon"></i>
                        Edit Email
                      </button>
                    </form>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="ui action input">
                    <form method="POST" action="forms/edit_pass.php">
                      <input type="password" class="form-control" name="pass" value="" placeholder="Password">
                      <input type="text" name="nickorig" value="<?php echo $fila['nick_user'];?>" style="display: none;">
                      <button class="ui pink right labeled icon button" type="submit">
                        <i class="edit icon"></i>
                        Edit Passw
                      </button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
            </div>
              <!-- Fin container -->

            <!-- final editar perfil  -->
            <!-- ver estadisticas -->
            <div class="card see-stats" id="seestats" style="display: none;">
              <div class="card-header">
                <br>
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p class="text-dark">Hey <b><?php echo $fila['nick_user']; ?></b> Here you can see your statistics of the modalities within the server.</p>
                </blockquote>
              </div>
              <br>
              <center>
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <table style="width: 50%;">
                        <tr>
                          <td>
                          <center>
                          <?php 
                            $sqli2="SELECT * FROM skyblock WHERE uname ='".$fila['nick_user']."'";
                            $result2=mysqli_query($conectar,$sqli2);
                            $numero_filas2 = mysqli_num_rows($result2);
                            $fila2=mysqli_fetch_assoc($result2);
                          ?>
                            <!-- Set Skin for the Viewer -->
                          <style>
                            #skin-viewer *{ background-image: url('https://crafatar.com/skins/<?php echo $fila2['uuid'];?>'); }
                            #skin-viewer .cape{ background-image: url('assets/img/cape_legacy.png'); }
                          </style>

                          <!-- <img class="ui top aligned tiny image" src="https://crafatar.com/renders/head/6835eba5-8a92-4d5e-b2c5-2b9d407e4d3c">
                          <span>XmokPlay</span> -->

                          <!-- <a class="ui image label">
                            <img src="https://crafatar.com/renders/head/6835eba5-8a92-4d5e-b2c5-2b9d407e4d3c">
                            XmokPlay
                          </a> -->
                          <br>
                          <!-- Skin Viewer HTML Elements -->
                          <div id="skin-viewer" class="mc-skin-viewer-11x legacy legacy-cape spin">
                            <div class="player">
                              <!-- Head -->
                              <div class="head" >
                                <div class="top"></div>
                                <div class="left"></div>
                                <div class="front"></div>
                                <div class="right"></div>
                                <div class="back"></div>
                                <div class="bottom"></div>
                                <div class="accessory">
                                  <div class="top"></div>
                                  <div class="left"></div>
                                  <div class="front"></div>
                                  <div class="right"></div>
                                  <div class="back"></div>
                                  <div class="bottom"></div>
                                </div>
                              </div>
                              <!-- Body -->
                              <div class="body">
                                <div class="top"></div>
                                <div class="left"></div>
                                <div class="front"></div>
                                <div class="right"></div>
                                <div class="back"></div>
                                <div class="bottom"></div>
                                <div class="accessory">
                                  <div class="top"></div>
                                  <div class="left"></div>
                                  <div class="front"></div>
                                  <div class="right"></div>
                                  <div class="back"></div>
                                  <div class="bottom"></div>
                                </div>
                              </div>
                              <!-- Left Arm -->
                              <div class="left-arm">
                                <div class="top"></div>
                                <div class="left"></div>
                                <div class="front"></div>
                                <div class="right"></div>
                                <div class="back"></div>
                                <div class="bottom"></div>
                                <div class="accessory">
                                  <div class="top"></div>
                                  <div class="left"></div>
                                  <div class="front"></div>
                                  <div class="right"></div>
                                  <div class="back"></div>
                                  <div class="bottom"></div>
                                </div>
                              </div>
                              <!-- Right Arm -->
                              <div class="right-arm">
                                <div class="top"></div>
                                <div class="left"></div>
                                <div class="front"></div>
                                <div class="right"></div>
                                <div class="back"></div>
                                <div class="bottom"></div>
                                <div class="accessory">
                                  <div class="top"></div>
                                  <div class="left"></div>
                                  <div class="front"></div>
                                  <div class="right"></div>
                                  <div class="back"></div>
                                  <div class="bottom"></div>
                                </div>
                              </div>
                              <!-- Left Leg -->
                              <div class="left-leg">
                                <div class="top"></div>
                                <div class="left"></div>
                                <div class="front"></div>
                                <div class="right"></div>
                                <div class="back"></div>
                                <div class="bottom"></div>
                                <div class="accessory">
                                  <div class="top"></div>
                                  <div class="left"></div>
                                  <div class="front"></div>
                                  <div class="right"></div>
                                  <div class="back"></div>
                                  <div class="bottom"></div>
                                </div>
                              </div>
                              <!-- Right Leg -->
                              <div class="right-leg">
                                <div class="top"></div>
                                <div class="left"></div>
                                <div class="front"></div>
                                <div class="right"></div>
                                <div class="back"></div>
                                <div class="bottom"></div>
                                <div class="accessory">
                                  <div class="top"></div>
                                  <div class="left"></div>
                                  <div class="front"></div>
                                  <div class="right"></div>
                                  <div class="back"></div>
                                  <div class="bottom"></div>
                                </div>
                              </div>
                              <!-- Cape -->
                              <div class="cape">
                                <div class="top"></div>
                                <div class="left"></div>
                                <div class="front"></div>
                                <div class="right"></div>
                                <div class="back"></div>
                                <div class="bottom"></div>
                              </div>
                            </div>
                          </div>
                          </center>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-sm">
                      <div class="container">
                        <div class="row">
                          <div class="ui massive vertical menu">
                            <a class="active item">
                              <b><?php echo $fila2['uname'];?></b>
                            </a>
                            <a class="item">
                              <div class="ui small pink label"><?php echo $fila2['uuid'];?></div>
                              UUID
                            </a>
                            <a class="item">
                              <div class="ui small pink label">Not available</div>
                              Rango
                            </a>
                          </div>
                          <div class="w-100"></div>
                          <div class="ui massive vertical menu">
                            <a class="active item">
                              <b>SkyBlock</b>
                            </a>
                            <a class="item">
                              <div class="ui small pink label">$<?php echo $fila2['umoney'];?></div>
                              Money
                            </a>
                            <a class="item">
                              <div class="ui small pink label"><?php echo $fila2['uislevel'];?></div>
                              Is Level
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </center>
              <br>
            </div>
            <!-- final ver estadisticas  -->
            <!--End Divider-->
            </div>
        </center>
    </div>
    <br>
    <!-- Modal registro -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="forms/register_user.php">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nick Minecraft</label>
                <input type="text" class="form-control" name="nickreg" id="recipient-name" required>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Email</label>
                <input type="email" class="form-control" name="emailreg" id="recipient-name" required>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Password</label>
                <input type="password" class="form-control" name="passreg" id="recipient-name" required>
              </div>
              </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn" style="background-color: rgba(209, 0, 216, 0.87);color: white;">Register</button>
          </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Fin modal registro -->
  </section><!-- End Hero -->

  <main id="main">
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>PlugMC</h3>
      <p>Follow us on our social networks to find out all the events 
      and information about the server
      </p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-youtube"></i></a>
        <a href="https://discord.gg/sxdje9G" class="google-plus"><i class="bx bxl-discord"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>PlugMC</span></strong>. All Rights Reserved.
        <br>
        Website designed by XmokPlay
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <!-- Vendor JS Files -->
  <script>
    function Copiar(element) {
       //creamos un input que nos ayudara a guardar el texto temporalmente
       var $temp = $("<input>");
       //lo agregamos a nuestro body
       $("body").append($temp);
       //agregamos en el atributo value del input el contenido html encontrado
       //en el td que se dio click
       //y seleccionamos el input temporal
       $temp.val($(element).html()).select();
       //ejecutamos la funcion de copiado
       document.execCommand("copy");
       //eliminamos el input temporal
       $temp.remove();
       //alert("copied ip");
       //document.getElementById('ip').title = 'ip copiada'; return false; 
   }
  //TicketList
  var a = document.getElementById("ticketlist");  
  a.addEventListener("click", changeText);

  function changeText() {
    document.getElementById("ticketlist").className = "item active";
    document.getElementById("createticket").className = "item";
    document.getElementById("editprofile").className = "item";
    document.getElementById("signoff").className = "item";

    //modificar titulo
    document.getElementById("titulo-menu").innerHTML = "<i class='address book icon'></i>Ticket List";
    
    $(".ticket-list").show();
    $('.ticket-list').transition('pulse');
    $(".create-ticket").hide();
    $(".edit-profile").hide();
    $(".see-stats").hide();
  }
  //FinTicketList

  //Create Ticket
  var b = document.getElementById("createticket");
  b.addEventListener("click", changeText1);

  function changeText1() {
    document.getElementById("ticketlist").className = "item";
    document.getElementById("createticket").className = "item active";
    document.getElementById("editprofile").className = "item";
    document.getElementById("signoff").className = "item";
    document.getElementById("seestats").className = "item";

    //modificar titulo
    document.getElementById("titulo-menu").innerHTML = "<i class='file outline icon'></i>Create Ticket";

    $(".ticket-list").hide();
    $(".edit-profile").hide();
    $(".see-stats").hide();
    $(".create-ticket").show();
    $('.create-ticket').transition('pulse');
  }
  //FIN create ticket

  //Edit Profile
  var c = document.getElementById("editprofile"); 
  c.addEventListener("click", changeText2);

  function changeText2() {
    document.getElementById("ticketlist").className = "item";
    document.getElementById("createticket").className = "item";
    document.getElementById("editprofile").className = "item active";
    document.getElementById("signoff").className = "item";
    document.getElementById("seestats").className = "item";

    //modificar titulo
    document.getElementById("titulo-menu").innerHTML = "<i class='user outline icon'></i></i>Edit Profile";

    $(".ticket-list").hide();
    $(".edit-profile").show();
    $(".create-ticket").hide();
    $(".see-stats").hide();
    $('.edit-profile').transition('pulse');
  }
  //fin edit profile

  //Sign Out
  var d = document.getElementById("signoff");
  d.addEventListener("click", changeText3);

  function changeText3() {
    document.getElementById("ticketlist").className = "item";
    document.getElementById("createticket").className = "item";
    document.getElementById("editprofile").className = "item";
    document.getElementById("seestats").className = "item";
    document.getElementById("signoff").className = "item active";

    //modificar titulo
    document.getElementById("titulo-menu").innerHTML = "<i class='lock icon'></i></i>Sign Off";

    $(".see-stats").hide();

  }
  //fin signout
  
  //seestats
  var e = document.getElementById("seestats");
  e.addEventListener("click", changeText4);

  function changeText4() {
    document.getElementById("ticketlist").className = "item";
    document.getElementById("createticket").className = "item";
    document.getElementById("editprofile").className = "item";
    document.getElementById("signoff").className = "item";
    document.getElementById("seestats").className = "item active";

    //modificar titulo
    document.getElementById("titulo-menu").innerHTML = "<i class='search icon'></i>See Stats";

    //ocultar y mostrar see-stats
    $(".ticket-list").hide();
    $(".edit-profile").hide();
    $(".create-ticket").hide();
    $(".see-stats").show();
    $(".see-stats").transition('pulse');
  }
  //fin seestats
  </script>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/semantic.js"></script>

  <!-- Template Main JS File -->
  <!--Modal-->
  <!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ipcopied">
  Launch demo modal
</button>
  -->
  <script src="assets/js/main.js"></script>

</body>

</html>