<?php  include './conexion.php'; 

$venta=$mysqli->query("select MAX(idventa) AS id from ventadulce")or die($mysqli->error);
    $ventadulce=$venta->fetch_assoc();
                  $noventa=$ventadulce['id'];
                  $novent=$noventa +1;
   

?>
<?php 

session_start();
if (isset($_SESSION['miSesion'])){
      $arreglo=$_SESSION['miSesion'];
      }else{
        header("Location: ./login.php");  

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pasteleria Sandra </title>
  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
         <?php include './navar.php'; ?>

         <div class="clearfix"></div>

         <!-- menu profile quick info -->
         <?php  include "./menuusuario.php";?>

         <!-- /menu profile quick info -->

         <br />
         <!-- sidebar menu -->        
         <?php  include "./barramenu.php";?>
         <!-- /sidebar menu -->

       </div>
     </div>
     
     <!-- /top navigation -->
     <?php  include "./topnavigation.php";?>
     <!-- /top navigation -->

     <!-- page content -->
     <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
<br>
         <div class="alert alert-success" style="margin-top:10px;background-color: #00c0ef !important;">
                <ul class="margin-bottom-none padding-left-lg">
                  <i class="fa fa-info-circle fa-lg fa-li"></i>
                   <h4> Pastelería y Dulcería</h4>
               Sandra <a class="pull-right" style="font-size:18px; text-decoration:none;color:white;"> <?php 
//echo date("d-m-Y H:i:s");
                
                echo date('l, d M Y');
              ?></a> <br>venta No_ <?php echo $novent ?>
                </ul>

              </div>
          

        

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              
              <div class="x_content">
                <p class="text-muted font-13 m-b-30">
              <a  class="btn btn-success  btnagregardulce pull-right" 
                                       data-toggle="modal"
                                       data-target="#agregar"
                                      style="background-color: #00a65a !important">
                                        Agregar Producto </a>
                                      
                </p>
              
                <div class="row">
                  <div class="col-sm-12 box-body table-responsive no-padding">

                    <table id="datatable" class="table table-hover" role="grid" aria-describedby="datatable_info" style="color:#333;">
                      <thead>
                                       <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" 
                                        colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:1%;">
                                        Código
                                      </th>
                                      <th class="sorting" tabindex="0" aria-controls="datatable"
                                      rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                      style="width:30%;">
                                      Producto
                                    </th>
                                    <th class="sorting" tabindex="0" 
                                    aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
                                    style="width:20%;">
                                    Precio 
                                  </th>
                                  <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                  colspan="1" aria-label="Age: activate to sort column ascending" style="width:10%;">
                                  Cantidad 
                                </th>
                                <th class="sorting" tabindex="0" 
                                aria-controls="datatable" rowspan="1" colspan="1"
                                aria-label="Office: activate to sort column ascending" 
                                style="width:5%;">

                              </th>

                            </tr>
                </thead>


          <tbody>
            <?php 
            include './conexion.php';
            $consulta=$mysqli->query("select * from detventadulce where idventa=".$novent)or die($mysqli->error);
            while ( $fila=mysqli_fetch_array($consulta)) {
                           # code...


             ?>

             <tr role="row" class="odd">
              <td class="sorting_1"> <?php echo $fila['codigo'] ?></td>
              <td><?php echo $fila['nombre'] ?></td>
              <td>$<?php echo number_format($fila['precio'] ,2) ?> </td>
              <td><span class="label label-success "><?php echo $fila['cantidad'] ?></span>  
              </td>
              <td>               
               <a href="#" class="btn btn-info btn-xs btnEditar" data-toggle="modal"
               data-id="<?php echo $fila['id_cuenta'] ?>"
               data-cuenta="<?php echo $fila['cuenta'] ?>"
               data-nombre="<?php echo $fila['nombre'] ?>"
               data-cantidad="<?php echo $fila['cantidad'] ?>">
               <i class="fa fa-pencil">

               </i>  </a>
              
                                     <a  class="btn btn-danger btn-xs btneliminardulce" 
                                       data-toggle="modal"
                                       data-target="#eliminardulce"
                                       data-codigoeliminar="<?php echo $fila['id_detventa'] ?>"
                                      >
                                         <i class="fa fa-trash"></i>  </a>
                 <?php//} else{
                                ?>
              <?php //} ?>
           </td>

         </tr>
         <?php  }?>




    </tbody>
  </table>
</div>
</div>





      <div class="col-md-12">
          <!-- general form elements -->
        

              <div class="pad margin no-print">
                    <div class="callout callout-success" style="margin-bottom: 0!important;">
                      <label> </label>
                     <p class="pull-right" style="font-size:18px;margin-right:3%;"> 
                       <!-- /.Cancelar la venta completa y dejar vacia la lista............................. 
                        <form class="form-horizontal" action="./codigos/cancelardulce.php" method="post" accept-charset="utf-8">-->
                             <button type="button" class="btn btn-success  btncancelar"
                               style=" background: rgb(255, 255, 255);
                                color: rgb(0, 166, 90);"
                                     data-toggle="modal"
                                       data-target="#cancelar"
                                       data-idventacancelar="<?php echo $novent ?>">
                               Cancelar</button>
                  <!--  </form>-->



                                <!-- /.Pagar la lista agregada y agregarse a la tabla de venta................... -->
                                   <button type="button" class="btn btn-success  btnpagar" 
                                      style=" background: rgb(255, 255, 255);
                                      color: rgb(0, 166, 90);margin-right:100px;
                                      "
                                       data-toggle="modal"
                                       data-target="#pagar"
                                       data-idventapagar="<?php echo $fila['codigo'] ?>"
                                       data-nombrepagar="<?php echo $fila['nombre'] ?>"
                                        >Pagar</button>
                                        Total: $ <?php   
                                        $total=$mysqli->query("SELECT SUM(`precio`) as totaldulce from detventadulce where idventa=". $novent)or die($mysqli->error);
                                             $totaldulce=$total->fetch_assoc();
                                              $totaldul=$totaldulce['totaldulce'];   
                                        echo number_format($totaldul,2);
                                      ?>
                              </p>
                              <br><p>.</p>
                    </div>
            </div>
               

        </div>





</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->







 <!-- /.Agregar a la Lista de productos que se van a comprar............................................................... -->
            <div id="agregar" class="modal fade" role="dialog">
                 <div class="modal-dialog">
            <div class="modal-content">
            <!--  <form class="form-horizontal" action="./codigos/ventadulce.php" method="post">-->
                          <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="box-title">Nuevo Producto</h4>
                          
                                        <label for="inputEmail3"      class="col-sm-2 control-label">Buscar</label>
                                         <div class="col-sm-6">
                                              <input type="text" class="form-control"  placeholder="Por Código o Por Nombre"
                                              id="buscar"
                                            name="buscar">
                                        </div>


                                         <div class="col-sm-11">
                   <table class="table table-hover" style="margin-top:10px;color:#333;" >
                       <tr >
                           <th style="width:10%;">Código</th>
                           <th style="width:70%;" >Nombre</th>
                           <th style="width:15%;">Precio</th>
                          <!-- <th  style="width:1%;">Cantidad</th>-->
                           <th class="pull-right" style="width:1%;"></th>
                        </tr>
                         <?php  $consulta=$mysqli->query("select * from dulces order by nombre ")or die($mysqli->error);
                      while ( $fila=mysqli_fetch_array($consulta)) { ?>
                       
                        <tr id="contenido" name="contenido">
                               <td id="codigo" name="codigo"> <?php echo $fila['codigo'] ?></td>
                                <td><?php echo $fila['nombre'] ?></td>
                                <td>$ <?php echo $fila['precio'] ?>.00</td>
                             <!--type="submit" style="background-color: #00a65a !important" class="btn btn-success btn-xs pull-right btnagregar" style="margin-left:1%;margin-right:45%;"
                                        -->
                                <td>
                                         <form class="form-horizontal" action="./codigos/ventadulce.php" method="post" accept-charset="utf-8">
                                             <button style="    background-color: #00a65a !important">
                                                 <input type="hidden" name="codigoagregar" value="<?php echo $fila['codigo'] ?>">
                                                  <input type="hidden" name=" nombreagregar" value=" <?php echo $fila['nombre'] ?>">   
                                                  <input type="hidden" name="precioagregar" value="    <?php echo $fila['precio'] ?>">   
                                                  <input type="hidden" name="idventaagregar" value="  <?php echo $novent ?>">    
                                                
                                                  <a  style="text-decoration: none;color:white;">
                                                       <i class="fa fa-plus"></i>
                                                  </a>
                                              </button>
                                          </form>
                                  </td>

                        </tr>
                        <?php } ?>
                    </table>
                    </div>
                          </div>
                         
                          <!--   <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#agregar">Agregar</button>
                            </div>
               </form>-->

              </div>
            </div>
          </div><!-- .......................AGREGARRRRRRRRRRRRRRRRRRRRRRRRRRRRRR..................... -->



 
  <!-- eliminar-->
         <div id="eliminardulce" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
              <form class="form-horizontal" action="./codigos/eliminardulce.php" method="post">
                          <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Eliminar información</h4>
                            <input type="text"  id="codigoeliminar" name="codigoeliminar">

                          </div>
                          <div class="modal-body" style="text-align: center">
                            <p>Estas seguro de eliminar este producto?
                              <br>
                              <!-- eliminar <span  style="font-size:20px;" 
                              id="nombreeliminar"></span> </p>-->
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#eliminar">Eliminar</button>
                            </div>
                </form>

              </div>
            </div>
          </div>
  <!-- eliminar-->
  <!-- /. Cancelar toda la Lista de productos que se van a comprar............................................................... -->
           <div id="cancelar" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
              <form class="form-horizontal" action="./codigos/cancelardulce.php" method="post">
                          <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Cancelar</h4>
                                
                                 <input type="hidden"  value="<?php echo $novent ?>" id="idcancelar" name="idcancelar">

                          </div>
                          <div class="modal-body" style="text-align: center">
                            <p>Desea Cancelarlo?
                              <br>
                              <!-- eliminar <span  style="font-size:20px;" 
                              id="nombreeliminar"></span> </p>-->
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#cancelar">Eliminar</button>
                            </div>
                </form>

              </div>
            </div>
          </div>
<!-- /. Cancelar toda la Lista de productos que se van a comprar............................................................... -->

 <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->
         <div id="pagar" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
              <form class="form-horizontal" action="./codigos/pagardulce.php" method="post">
                          <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Realizar la Compra</h4>
                             <input type="hidden"  value="<?php echo $novent ?>" id="idpagar" name="idpagar">

                          </div>
                          <div class="modal-body" style="text-align: center">
                          <div class="col-xs-12" style="margin-top:10px;">

                            <div class="input-group"> Total:
                                <span class="input-group-addon">$</span>
                                <?php $total=$mysqli->query("SELECT SUM(`precio`) as totaldulce from detventadulce where idventa=".$novent)or die($mysqli->error);
                                    $totaldulce=$total->fetch_assoc();
                                    $totaldul=$totaldulce['totaldulce']; ?>
                                <input type="number"  value="<?php echo number_format($totaldul,2);?>" readonly="readonly"  data-number-to-fixed="2"  class="form-control currency"  />
                               
                            </div></div>

                             <div class="clearfix"></div>
                                <div class="col-xs-12" style="margin-top:10px;">

                             <div class="input-group"> Pago:
                                <span class="input-group-addon">$</span>
                                <input type="number"  min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="pago" />
                            </div></div>

                             <div class="clearfix"></div>
                               <div class="col-xs-12" style="margin-top:10px;">
                                  <?php $cambio= $totaldul ?>
                            <div class="input-group">    Cambio:
                                <span class="input-group-addon">$</span>
                                <input type="number" value="php" readonly="readonly" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
                            </div>
                            </div>
                              <br>
                            
                              <!-- eliminar <span  style="font-size:20px;" 
                              id="nombreeliminar"></span> </p>-->
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#pagar">Pagar</button>
                            </div>
                </form>

              </div>
            </div>
          </div>
   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->   <!-- Pagar-->






















<!-- footer content -->
<footer>
  <div class="pull-right">
    <a href="http://www.itsncg.edu.mx/"> Instituto Tecnológico Superior </a>de Nuevo Casas Grandes
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>


<script>
  $(".btnagregar").on('click',function(){
     // var codigo=$(this).data('codigoagregar');
     // var precioagregar=$(this).data('precioagregar');
     // var noventagregar=$(this).data('idventaagregar');
     // var nombreagregar=$(this).data('nombreagregar');         
     //    $("#codigo").val(codigo);
     //    $("#nombreagregar").val(nombreagregar) ;   
     //    $("#precioagregar").val(precioagregar) ;   
      

 });
   $(".btneliminardulce").on('click',function(){
   var codigoeliminar=$(this).data('codigoeliminar');
   var nombreeliminar=$(this).data('nombreeliminar');
   $("#codigoeliminar").val(codigoeliminar);
   $("#nombreeliminar").text(nombreeliminar);   
 });
   $(".btncancelar").on('click',function(){
     var idventacancelar=$(this).data('idventacancelar');
     $("#idcancelar").text(idventacancelar);   
 });
    $(".btnpagar").on('click',function(){
     var idventapagar=$(this).data('idventapagar');
     $("#idpagar").text(idventapagar);   
 });
</script>
<script >
          $(document).ready(function(){
              $("#buscar").on('keyup',function(){ 

                  $("#contenido").find("td").remove();

                          $.ajax({
                                  url: "./codigos/buscardulce.php",
                                  method:"POST",
                                  data:{ 
                                    texto:$("#buscar").val()
                                  }
                                }).done(function(respuesta){
                                  $(div).find("td").append(respuesta);
                                  alert();
                                    });
                   });
             
          });
  
</script>
</body>
</html>
