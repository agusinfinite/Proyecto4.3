<?php
include('../db.php');
include('../cabecera.php');
$usuario=$_GET['nombre'];
?>

<body>

<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="index.php">Inicio
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
            <li class="nav-item active">
			<a class="nav-link" href="modificar.php?nombre=<?php echo $usuario?>">Modificar tus datos <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
			<a class="nav-link" href="../index.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
			</li>

		</ul>
		<!-- End Menu -->
	</div>
</div>
</nav>
<!-- End Nav
================================================== -->

<!-- Begin Site Title
================================================== -->
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">RestaurantIto</h1>
		<p class="lead">
			 Bienvenid@: <?php echo $usuario?>
		</p>
	</div>
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Men&uacute;</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">

		<!-- begin post -->
		<?php 
		        $sql="SELECT * from menu";
		        $result=mysqli_query($conexion,$sql);
		        while($mostrar=mysqli_fetch_array($result)){
		?>
		<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
						<div class="thumbnail" style="background-image:url('data:image/png;base64, <?php echo base64_encode($mostrar['imagen']);?>');">
						</div>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><?php echo $mostrar['nombre'] ?></a></h2>
						<h4 class="card-text">
										Tipo: <?php echo $mostrar['tipo'] ?> <br/>
                                        Tama&ntilde;o de porci&oacute;n: <?php echo $mostrar['porcion'] ?> <br/> 
                                        Precio: <?php echo $mostrar['precio'] ?> <br/></h4>
                                        Descripci&oacute;n: <?php echo $mostrar['descripcion'] ?>. <br/></h4>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<?php
			}
		?>
	</section>
	 <!-- fin de sección -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Pedidos</span></h2>
	</div>
	
    </body>
	<!-- End List Posts
	================================================== -->

	<!-- Begin Footer
	================================================== -->
    <?php
include('../pie.php');
?>