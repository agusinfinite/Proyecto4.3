<?php 
 require_once "../../cabecera.php";
include '../../db.php';

                                            $id=$_POST['id'];
                                            $elimina = "DELETE FROM pedidos where ID = '$id'";
                                            mysqli_query($conexion, $elimina);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Eliminacion de pastel exitosa.</h1></label>
 <meta http-equiv="Refresh" content="3;../VerPedido.php">
 <?php
require_once "../../pie.php";
?>