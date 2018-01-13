
<div class="top_nav" >
  <div class="nav_menu" style="    background-color: #3c8dbc;">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars" style="color:white;"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="images/img.jpg" alt="" > <span style="color:white;"> <?php echo $arreglo['nombre'] ?></span>
                <span class=" fa fa-angle-down" style="color:white;"></span>
              </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right" >
                      <?php  if ($arreglo['nivel']=='Oficial Mayor'   ||$arreglo['nivel']=='Tesorería'||$arreglo['nivel']=='Admin'  ){?>

                <li><a href="./nuevopresupuesto.php">Nuevo Presupuesto</a></li>
                 <li><a href="./nuevousuario.php">Nuevo Usuario</a></li>
                 <li><a href="./verusuarios.php">Usuarios</a></li>
                 <li><a href="./respaldo.php">Crear Respaldo</a></li>
<?php } ?> 

                <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
              </ul>
            </li>

        
          </ul>
        </nav>
      </div>
    </div>