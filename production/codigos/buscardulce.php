<?php 
 include './conexion.php';
                        if ($_POST['texto']<>"") {
                                                 # code...
                                                                   $query= "SELECT * FROM dulces  where codigo like '%".$_POST['texto']."%' or 
                                                  nombre like '%".$_POST['texto']."%' order by nombre ) ";
                             }else if ($_POST['texto']=="") {
                               # code...
                             }{
                                                  $query("select * from dulces order by nombre ");

                                              }
   




                                             
                                              $consulta=$mysqli->query($query )or die($mysqli->error);
                                              while ( $fila=mysqli_fetch_array($consulta)) {
                                                              # code...
                                                ?>
                                                
                                                           <td> <?php echo $fila['codigo'] ?></td>
                                           <td><?php echo $fila['nombre'] ?></td>
                                            <td>$ <?php echo $fila['precio'] ?>.00</td>
                                              <td><button type="submit" class="btn btn-success btn-xs pull-right" style="margin-left:1%;margin-right:45%;"
                                                        data-codigoagregar="<?php echo $fila['codigo'] ?>"
                                                         data-nombreagregar="<?php echo $fila['nombre'] ?>"
                                                          data-precioagregar="<?php echo $fila['precio'] ?>"
                                                          data-cantidadagregar="<?php echo $cantidad ?>">
                                               <a  style="text-decoration: none;color:white;"> <i class="fa fa-plus"></i></a>
                                                      </button></td>
                                                     

                                                
                                                <?php  } 

                                                  ?                                               
                                               ?>
                               
                                               