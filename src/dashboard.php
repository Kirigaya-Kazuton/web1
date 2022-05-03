<?php
  require "authenticate.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./components/Dashboard/dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/StudioKonKon/bootstrap-konkon@1.3.0-beta/dist/css/studio-konkon.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/StudioKonKon/bootstrap-konkon@1.3.0-beta/dist/css/studio-konkon-app.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-design-iconic-font@2.2.0/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/StudioKonKon/bootstrap-konkon@1.3.0-beta/dist/css/addons/email-template.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/scss/_functions.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/StudioKonKon/bootstrap-konkon@1.3.0-beta/scss/_variables.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/scss/_variables.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/StudioKonKon/bootstrap-konkon@1.3.0-beta/scss/_theme-variables.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/StudioKonKon/bootstrap-konkon@1.3.0-beta/scss/app/_variables.scss">
    <link rel="stylesheet" href="">
    <title>Dashboard</title>
</head>
<body>
<!--
   be-offcanvas-menu
   be-fixed-sidebar
//-->
<body class="bg-light">
   <div class="be-wrapper be-offcanvas-menu be-fixed-sidebar">

      <nav class="navbar navbar-expand fixed-top be-top-header">
         <div class="container-fluid">

            <div class="be-navbar-header">
               <a class="nav-link be-toggle-left-sidebar" href="#" id="left-sidebar-toggle"><span class="icon zmdi zmdi-menu"></span></a>
               <a class="navbar-brand" href="/app"></a>
            </div>

            <div class="page-title"><span>Wordle</span></div>


         </div>
      </nav>

      <div class="be-left-sidebar" id="left-sidebar">
         <div class="left-sidebar-wrapper">
            <a class="left-sidebar-toggle" href="#">Studio KonKon</a>
            <div class="left-sidebar-spacer">
               <div class="left-sidebar-scroll">
                  <div class="left-sidebar-content">

                     <ul class="sidebar-elements">
                        <li class="divider">Usuario: <?php if ($login) {echo "$user_name!";}
    else {echo "!";}?></li>
                        <li>
                           <a href="#"><i class="icon zmdi zmdi-home"></i><span class="text">Home</span></a>
                        </li>
                        <li class="divider">Theme Documents</li>
                        <li>
                           <a href="#home"><i class="icon zmdi zmdi-view-dashboard"></i><span class="text">Dashboard</span></a>
                        </li>
                        <li>
                           <a href="worlde.php"><i class="icon zmdi zmdi-view-dashboard"></i><span class="text">Game</span></a>
                        </li>
                        <li>
                           <a href="#"><i class="icon zmdi zmdi-settings"></i><span class="text">Settings</span></a>
                        </li>
                        <li>
                           <a href="#"><i class="icon zmdi zmdi-info"></i><span class="text">About</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                           <a href="logout.php"><span class="text">Exit App</span></a>
                        </li>
                     </ul>

                  </div>
               </div>
            </div>
            <div class="progress-widget" id="user_progress">
               <div class="progress-data"><span class="progress-value">0 / 0</span><span class="name">Pontos</span></div>
            </div>
         </div>
      </div>

      <div class="be-content">
         <div class="main-content container">
            <div class="m-auto py-4 email-template">
               <div class="card card-border-color card-border-color-konkon">
                  <div class="card-body">
                     <span class="badge badge-konkon">Como usar o Programa</span>
                     <h3 class="pt-4 mb-6">An Important Notice</h3>
                     <p><b>Last updated: </b> 02th abril 200</p>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil cumque eos ratione cupiditate corporis maxime odio totam. Ad explicabo nesciunt laboriosam minima voluptatibus! Dolorem assumenda at soluta sint modi ratione.</p><br />
                  </div>
               </div>
               <p class="mt-5 text-center small text-muted">
                  <br />
               </p>
            </div>

         </div>
      </div>

   </div>
</body>
   <script src="./components/Dashboard/dashboard.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</html>