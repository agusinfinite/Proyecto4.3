<?php
	require_once "../cabecera.php";
    include('../db.php');
?>
<tbody>
<table class="marco" border="1" >
		<tr>
			<td>ID</td>
			<td>Imagen</td>
			<td>Nombre</td>
			<td>Tipo </td>
            <td>Tama&ntilde;o de porci&oacute;n</td>
            <td>Precio</td>
            <td>Descripci&oacute;n</td>
		</tr>

		<?php 
		$sql="SELECT * from menu";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
        <center>
		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td> <img src="data:image/jpg;base64, <?php echo base64_encode($mostrar['imagen']); ?>"/></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['tipo'] ?></td>
            <td><?php echo $mostrar['porcion'] ?></td>
            <td><?php echo $mostrar['precio'] ?></td>
            <td><?php echo $mostrar['descripcion'] ?></td>
		</tr>
        </center>
        <br>
        <?php 
	}
	 ?>
        </table>
                                        <table class="marco">
                                            <tr>
                                                <td>
                                                    <br/>
                                                    <form>
                                                        <label>ID del platillo</label> 
                                                        <br/><br/>
                                                    </form>
                                                </td>
                                                <td>          </td>
                                                <td>
                                                    <br/>
                                                    <form action="modDB/eliminamenusql.php" method="post" enctype= "multipart/form-data">
                                                        <br/><br/>
                                                        <input type="text" id="idTxtContra5" name="id" autofocus required/>
                                                        <br/><br/>
                                                        <td>
                                                            <form action="index.php">
                                                                <button class="centra" type="submit" id="mod" name="btnRegistrarse">Eliminar</button>
                                                            
                                                            </form>
                                                        </td>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="inicioadministrador.php"class="menu">Regresar</a><br>
                                </td>
		</tr>
	
	