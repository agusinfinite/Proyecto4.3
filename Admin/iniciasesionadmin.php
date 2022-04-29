<?php
	require_once "../cabecera.php";
	include('../db.php')
?>
<header class="principal">
			<img src="../media/logo.png"/>
		</header>
<a href="index.php"class="menu">Inicio</a>
 <div class="centro">
            <main>
                <section>
                     <header>
						<h3>Inicia sesi&oacute;n</h3>
					</header>
					Aqui inician sesion los administradores si ustes es empleado o cliente vuelve a la anterior pagina
                    <br/>
					Si todav&iacute;a no es cliente nuestro, consulte nuestro cat&aacute;logo de productos para 
					que se convenza.
					<br/><br/><br/>
					<form action="modDB/validaradmin.php" method= "post" >
						<label for="txtIdCve">Usuario:</label>
						<input type="text" id="txtIdCve" name="usuario" autofocus required/>
						<br/>
						<label for="txtIdPwd">Contrase&ntilde;a:</label>
						<input type="password" id="txtIdPwd" name="password" required/>
						<br/>
						<input type="submit" value="Enviar" id="idBtnEnviar"/>
                </section>
            </main>
        </div>
<?php 
	
	require_once "../pie.php";
?>