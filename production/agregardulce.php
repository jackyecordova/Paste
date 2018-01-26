
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

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <!-- Ion.RangeSlider -->
  <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
  <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <!-- Bootstrap Colorpicker -->
  <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

  <link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">
<!-- estilomenoney 
<link rel="stylesheet" type="text/css" href="./css/estilomoney.css">-->
  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  



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
          <div class="title_left">
            <h3>Agregar un nuevo Producto</h3>
          </div>


        </div>
        <div class="clearfix"></div>
                 
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Dulces<small></small></h2>
              
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <form class="form-horizontal form-label-left" novalidate 
                action="./codigos/nuevodulce.php" method="post" id="formcuenta">

               
               

                <!--Ventana gris-->
                <div class="well" style="overflow: auto">





              <div class="alert alert-danger alert-dismissible " role="alert" style="background-color: rgba(210, 20, 0, 0.19); text-align:center;width:50%;margin-left:25%;
                     text-shadow: 0px 0px rgba(153, 153, 153, 0);  
                     color: rgb(241, 83, 68);display:none;" id="alerta">Has excedido el presupuesto
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                  </div>


                  <div class="item form-group">

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Código 
                     <span class="required">*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                    <input  class="form-control col-md-7 col-xs-12"  
                    minlength="20"
                    name="codigo" 
                    id="codigo" 
                    placeholder="Código del producto" 
                    required="required" 
                    type="text">
                  </div>
                </div>


 




                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" >Producto
                   <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12" >
                  <input  class="form-control col-md-7 col-xs-12" 
                  name="nombre"
                  id="nombre" 
                  required="required" 
                  placeholder="Nombre del producto"  type="text">


                </div>
              </div>


               <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" >Precio
                   <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12" >
                  <input  class="form-control col-md-7 col-xs-12" 
                  name="precio"

                  required="required" 
                  placeholder="Precio del producto"  type="number">


                </div>
              </div>



              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Cantidad  
                  <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12" >
                  <input  class="form-control col-md-7 col-xs-12" 
                  name="existente"
                  id="existente" 
                  required="required" 
                  placeholder="Cantidad en existencia" type="number">


<!--
                  <div class="form-row">
                    <label for="c2">Currency w bootstrap</label>
                    <div class="input-group"> 
                      <span class="input-group-addon">$</span>
                      <input type="number" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
                    </div> 
                  </div>
                </div>


-->



                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                   <a href="./vercuenta.php"> <button type="buton" class="btn btn-primary">Cancelar</button></a>
                   <button id="send" type="submit" class="btn btn-success">Guardar</button>
                 </div>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- /page content -->







<!-- Cantidad Pagado-->
<div id="Pagado" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
        <h4 class="modal-title" >Cantidad Pagada</h4>
      </div>
      <div class="modal-body" style="text-align: left; ">

       <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Cantidad </h5> </div>
       <div class="col-sm-8">  </div>
       <div class="input-group"> 
        <input type="text" class="form-control" placeholder="000,000,000.00" name="price" data-fv-field="price">

      </div>
    </div>
    <div class="col-sm-1"></div>



    <div class="modal-footer" style="padding-top:35px;">
      <!--<a href="./vercuenta.php"><button type="button" class="btn btn-primary"  >Cancelar</button></a>-->
      <button type="button"  class="btn btn-success" >Guardar</button>

    </div>
  </div>

</div>
</div>


<!--end Cantidad Pagado-->
</div>
</div>


<!-- footer content -->
<footer>
  <div class="pull-right">
    <a href="http://www.itsncg.edu.mx/"> Instituto Tecnológico Superior </a>de Nuevo Casas Grandes
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- validator -->
<script src="../vendors/validator/validator.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->    
<script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!--  <script type="./js/the-basics.js"></script>-->
<!-- jquery.inputmask -->
<script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script type="./js/currency.js"></script>
<script >
  // $(document).ready(function  (argument) {
    //  $("#alerta").hide();
      //   
        //$("#send").on("click",function  (e) {
          // e.preventDefault();//para que no se vaya  
          
          //$.ajax({
           // method:'POST',
            //url:'./codigos/validarcuenta.php',
            //data:{
             // nocuenta:$("#nocuenta").val(),
              //cantidad:$("#cantidad").val()
              
            //}
          //}).done(function(e2){
            
            //if(e2=="no"){
            
              // $("#alerta").show();
               // alert(e2); 
                
            //}else{
              //$("#formcuenta").submit();//envio de formulario ya no se va al ajax
                //alert(e2);
           // }
           //
          //});

        //});
    //});
</script>
</body>
</html>