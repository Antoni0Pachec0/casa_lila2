<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8" />
		<link rel="icon" type="image/svg+xml" href="/vite.svg" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet" />
		<script defer src="http://localhost/pruebaIntegradora/html/js/editor_tiny.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    	<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="css/ESTILOS.css" />
		<script src="http://localhost/pruebaIntegradora/view/publicacionesPaginas/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
		<title>Editor Tinymce</title>

	</head>
	
	<body>

		<div class="contenedor">
			<form id="formulario" class="formulario" method="POST">
				<textarea id="editor" placeholder="Escribe..."></textarea>
				<input type="submit" value="Enviar" id="btn_enviar" name="btn_enviar">
			</form>
		</div>
	</body>
</html>