
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
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Control Presupuestal </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./css/weather-icons.min.css">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="./css/estiloindex.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
           <?php include './navar.php'; ?>
           <div class="clearfix"></div>

           <!-- menu profile quick info -->
           <?php  include"./menuusuario.php" ?>

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
       <div class="row">
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="col-md-12 col-sm-12 col-xs-12" class="logotipo" >
            <div class="dashboard_graph" >

              <div class="row x_title">
                <div class="col-md-6">
                  <h3>Presidencia Municipal <small> Nuevo Casas Grandes</small></h3>
                </div>
                
              </div>
            </div>


            

            <div class="col-md-6 col-sm-6 col-xs-10 " style="padding:100px">

              <h1>Control Presupuestal<small></small></h1>
             

               </div>
    <!-- start of weather widgettttttttttttttttttttttttttttttttttttt -->
               
               <div class="col-md-4 col-sm-4 col-xs-12  pull-right" class="clima"  > 

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Clima <small>Usuario</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                      <?php $hora=date("h");
                            $minutos=date("i");
                            $am=date("A");
                       ?>
                        <div class="temperature"><b id="dia">Lunes</b>, <?php echo $hora; ?>:<?php echo $minutos;  echo "  ".$am ?>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="weather-icon">
                         <!-- <canvas height="84" width="84" id="partly-cloudy-day"></canvas>-->
                        <div id="icnP">
                          
                        </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="weather-text">
                          <h2>Nuevo Casas Grandes<br><i>Chihuahua</i></h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="weather-text pull-right">
                        <h3 class="degrees">23</h3>
                      </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row weather-days">
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Lun</h2>
                          <h3 class="degrees">25</h3><i class="icono"></i>
                          <!--<canvas id="clear-day" width="32" height="32"></canvas>-->
                          
                          <h5>15 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mar</h2>
                          <h3 class="degrees">25</h3>
                          <!--<canvas height="32" width="32" id="rain"></canvas>-->
                           <i class="icono"></i>
                          <h5>12 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mier</h2>
                          <h3 class="degrees">27</h3>
                          <!--<canvas height="32" width="32" id="snow"></canvas>-->
                           <i class="icono"></i>
                          <h5>14 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Jue</h2>
                          <h3 class="degrees">28</h3>
                          <!--<canvas height="32" width="32" id="sleet"></canvas>-->
                           <i class="icono"></i>
                          <h5>15 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Vie</h2>
                          <h3 class="degrees">28</h3>
                          <!--<canvas height="32" width="32" id="wind"></canvas>-->
                           <i class="icono"></i>
                          <h5>11 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Sab</h2>
                          <h3 class="degrees">26</h3>
                          <!--<canvas height="32" width="32" id="cloudy"></canvas>-->
                           <i class="icono"></i>
                          <h5>10 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>

              </div>

              <!-- end of weather widget -->
              <div class="clearfix"></div>
              <div class="alert alert-success">
                <ul class="margin-bottom-none padding-left-lg">
                  <i class="fa fa-info-circle fa-lg fa-li"></i>
                  <h2>Datos generales del presupuesto de cada departamento.</h2>
                </ul>

              </div>
           

               <!-- <div class="clearfix"></div>-->
               
               

<!--....................................................................................................-->

            </div>
            <br>


            <div class="clearfix"></div>

            <div class="alert alert-success">
            

            </div>
            <div class="clearfix"></div>

            <div class="col-md-6 col-sm-6 col-xs-12   " style="width:100%;">
              <div class="x_panel">
                <div class="x_title">
                  <h2><i class="fa fa-align-left"></i> Dulce para pedir <small></small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <!-- start accordion -->
                  <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                </div>
                <!-- end of accordion -->


              </div>
            </div>
          </div>



          <!-- /top tiles -->



        </div>
        <br />



        <!-- End to do list -->


      </div>
    </div>
  </div>
</div>
<!-- /page content -->

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
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="./js/jquery.simpleWeather.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.js"></script>

<script type="text/javascript">
  var datos=<?php echo json_encode($arregloPorcentajes); ?>;
  //console.log(datos);
  $(document).ready(function() {
  
    
    if ($('.canvasDoughnut').length){
      
      
     var cont=0;
      $('.canvasDoughnut').each(function(){
        var chart_doughnut_settings = {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Restante",
              "Pagado",
              //"Other",
              "Devengado",
              "Comprometido"
            ],
            datasets: [{
              data: [datos[cont][0], datos[cont][1],  datos[cont][2], datos[cont][3]],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                //"#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                //"#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: { 
            legend: false, 
            responsive: false 
          }
        }
        
        var chart_element = $(this);
        var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
        cont++;
      });     
    
    }
    //TIEMPOOOOOOOOOO
   $.simpleWeather({
      zipcode: '31700',
      unit: 'f',
      success: function(weather) {
        //console.log(weather);
        $("#dia").text(weather.day);
        $(".degrees").text(weather.alt.temp);
        $("#icnP").append(getIcono(weather.code));
        $( ".day" ).each(function( index ) {
          $(this).text(weather.forecast[index+1].day.slice(0,3));
        });
        $(".degrees" ).each(function( index ) {
          if(index!=0){
            $(this).text(weather.forecast[index].alt.high); 
          }
        });
        $(".daily-weather" ).each(function( index ) {
            
            $(this).find('.icono').replaceWith(getIcono(weather.forecast[index+1].code)); 
            $(this).find('h5').html(weather.forecast[index+1].alt.low+' <br><i>min</i>'); 
        });
       
      
      },
      error: function(error) {
        console.log(error);
      }
    });
   });

</script>
</body>
</html>