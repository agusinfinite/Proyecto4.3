<?php
	require_once "../cabecera.php";
    include('../db.php');
?>
<tbody>
<table class="marco" border="1" >
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Correo</td>
            <td>Usuario</td>
            <td>Contraseña</td>
		</tr>

		<?php 
		$sql="SELECT * from empleados";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
        <center>
		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido_paterno'] ?></td>
			<td><?php echo $mostrar['apellido_materno'] ?></td>
            <td><?php echo $mostrar['direccion'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['correo'] ?></td>
            <td><?php echo $mostrar['usuario'] ?></td>
            <td><?php echo $mostrar['password'] ?></td>
		</tr>
        </center>
        <br>
        <?php 
	}
	 ?>
        </talbe>
                                        <table class="marco">
                                            <tr>
                                                <td>
                                                    <br/>
                                                    <form>
                                                        <label>Nombre</label> 
                                                        <br/><br/>
                                                        <label>Apellido P</label> 
                                                        <br/><br/>
                                                        <label>Apellido M</label> 
                                                        <br/><br/>
                                                        <label>Tel&eacute;fono</label> 
                                                        <br/><br/>
                                                        <label>Direcci&oacute;n</label> 
                                                        <br/><br/>
                                                        <label>Correo</label> 
                                                        <br/><br/>
                                                        <label>Usuario</label> 
                                                        <br/><br/>
                                                        <label>Contrase&ntilde;a</label> 
                                                        <br/><br/>
                                                        <label>Confirma contrase&ntilde;a</label> 
                                                        <br/><br/>
                                                        <label>ID sin cambiar guiese en la tabla</label> 
                                                        <br/><br/>
                                                    </form>
                                                </td>
                                                <td>          </td>
                                                <td>
                                                    <br/>
                                                    <form action="modDB/actualizaempleado.php" method="post">
                                                        <input type="text" id="idTxtNombre" name="txtNombre" autofocus required/>
                                                        <br/><br/>
                                                        <input type="text" id="idTxtApellidoP" name="txApellido" autofocus required/>
                                                        <br/><br/>
                                                        <input type="text" id="idApellidoM" name="txApellidoM" autofocus required/>
                                                        <br/><br/>
                                                        <input type="text" id="idTel" name="Tel" autofocus required/>  
                                                        <br/><br/> 
                                                        <input type="text" id="idTxtDir" name="txtDir" autofocus required/>
                                                        <br/><br/>
                                                        <input type="email" id="idTxtCorreo" name="txtCorreo" autofocus required/>
                                                        <br/><br/>
                                                        <input type="text" id="idTxtYsuario" name="txtUsuario" autofocus required/>
                                                        <br/><br/>
                                                        <input type="password" id="idTxtContra1" name="txtContra2" autofocus required/>
                                                        <br/><br/>
                                                        <input type="password" id="idTxtContra3" name="txtContra4" autofocus required/>
                                                        <br/><br/>
                                                        <input type="text" id="id" name="id" autofocus required/>
                                                        <br/><br/>
                                                        <td>
                                                            <form action="index.php">
                                                                <button class="centra" type="submit" id="mod" name="btnRegistrarse">Modificar datos</button>
                                                            
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
	
	