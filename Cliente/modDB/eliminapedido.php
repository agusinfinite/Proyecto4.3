<?php 
 require_once "../../cabecera.php";
include '../../db.php';

                                            $id=$_POST['id'];
                                            $usuario= $_GET['nombre'];
                                            $elimina = "DELETE FROM pedidos where ID = '$id'";
                                            mysqli_query($conexion, $elimina);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Eliminacion del pedido exitosa.</h1></label>
 <meta http-equiv="Refresh" content="3;../VerPedido.php?nombre=<?php echo $usuario?>">
 <?php
require_once "../../pie.php";
?>