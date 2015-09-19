<style type="text/css">
	.panel-de-control-cuadro{
		border: 1px solid rgb(50, 50, 50);
		border-radius: 10px; 
		width: 45%;
		display: inline-block;
	}
	body{
		background-color: rgb(250, 250, 250);
	}
	*{color: rgb(20, 20, 20);}
	input.campo-texto{
		padding: 10px; 
		border-radius: 10px;
		display: block;
	}
	button.boton-loguear{
		display: block;
	}
</style>
<div class="encuadre">
	<h1>¡Bienvenido de nuevo! </h1>

	<form name="logueo-comun">
		<input class="campo-texto" type="text" placeholder="Dirección de e-mail o Usuario"></input>
		<input class="campo-texto" type="password" placeholder="Contraseña"></input>
		<button class="boton-loguear">Iniciar sesión</button>
	</form>
	¿Te registraste con una red social? Iniciá sesión acá: <br>

		<button><i class="fa fa-facebook-official fa-2x"></i></button>
		<button><i class="fa fa-twitter fa-2x"></i></button>
		<button><i class="fa fa-google-plus fa-2x"></i></button>