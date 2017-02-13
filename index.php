<!DOCTYPE html>
<html xml:lang="en" lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Desafío Front End - Grupo El Comercio</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/screen.css">
		<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
		<link rel="stylesheet" href="css/print-preview.css" type="text/css" media="screen">
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.5/angular.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.5/angular-animate.min.js"></script>
		<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
		<script src="js/jquery.print-preview.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/ordenador.js" type="text/javascript"></script>
		<script src="js/btnImprimir.js" type="text/javascript"></script>
	</head>
	<body>
		<button type="button" class="btn btn-primary" style="margin-left: 1020px;">
		<a class="print-preview" style="padding-left: 27px;">Imprimir</a></button>
		<div class="container">
			<form action="" class="form-horizontal">
				<div class="form-group" style="height: 100px;">
					
					<img src="images/gcomercio.jpg" class="estilo_bootstrap" style="width: 260px; margin-left: 270px;"/>
				</div>
				
				<div class="form-group">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h5><b>Desafío Front End - Grupo El Comercio</b></h5>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="panel panel-primary top-p">
						<div class="panel-heading" style="height:55px;">
							<div class="col-xs-3 col-sm-3">
								<h4>Carlos J. Montero Pozo</h4>
							</div>
							<div class="col-xs-3 col-xs-offset-6 col-xs-3">
								<input type="date" class="form-control">
							</div>
						</div>
						<div class="container-fluid">
							<div id="descripcion">
								<h3>Enunciado:</h3>
								<p>Se tienen los siguientes requerimientos:</p>
								<ol>
									<li>Crear una interfaz gráfica que permita:
										<ul>
											<li>
												Ingresar un conjunto indeterminado de números enteros en cualquier orden.
											</li>
											<li>
												<span class="{{aviso}}">
													Los números ingresados no deben repetirse.
												</span>
											</li>
										</ul>
									</li>
									<li>Una vez ingresado el conjunto de números:</li>
									<ul>
										<li>
											Generar el proceso de ordenamiento ascendente del conjunto.
										</li>
									</ul>
								</ol>
								</div><!--/#descripcion-->
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="panel panel-primary top-p">
								<div class="panel-heading">
									<h4>Ordenador de serie</h4>
								</div>
								
								
								<div ng-app="AppDesafio" ng-controller="DesafioCtrl" class="container-fluid">
									
									<!--/#descripcion-->
									<div id="solucion">
										<h3>Aplicacion:</h3>
										<p>
											por <a href="https://www.linkedin.com/in/carlos-jes%C3%BAs-montero-pozo-243266bb?trk=nav_responsive_tab_profile_pic" target="_blank">Carlos Jesús Montero Pozo</a>
										</p>
										<form ng-submit="agregarNumero()">
											<input type="number" ng-model="desafioNumero" min=1 required>
											<input class="btn btn-primary" type="submit" value="agregarNumero">
										</form>
										<div style="padding-top: 18px;">
											<button type="button" class="btn btn-primary" ng-click="demo()">Agregar Conjunto de Numeros</button>
											<button type="button" class="btn btn-primary" ng-click="reset()">Resetear</button>
											<button type="button" class="btn btn-primary" ng-click="ordenarTodos()">Ordenar todos</button>
											<button type="button" class="btn btn-primary" ng-click="ordenarUnoPorUno()">Ordenar uno por uno</button>
										</div>
										<ul class="list-group numeros">
											<li ng-repeat="numero in numeros" ng-animate="'numero'" class="numero list-group-item {{resaltarPosicion($index)}}">
												{{numero}}
											</li>
										</ul>
									</div>
									<!--/#solucion-->
								</div>
								<!--/ng-app-->
								
							</div>
						</div>
					</div>
				</div>
			</form>
		</body>
	</div>
</html>