tinymce.init({
	/* Selecciona el textarea mediante un id */
	selector: '#editor',

	/* Cambia el idioma accediendo a la carpeta tinymce/langs y se coloca el nombre del archivo */
	language: 'es_MX',

	/**Elimina el logotipo */
	branding: false,

	/**Aquí se especifica las opciones que va a tener la barra de herramientas, cada seccion se separa por "|" */
	toolbar: 'undo redo | fontsizeinput fontfamily  forecolor backcolor bold italic underline superscript subscript | alignleft aligncenter alignright alignjustify outdent indent bullist numlist | image media link table | fullscreen',

	/**Aquí se especifican los plugins necesarios para ciertas acciones en la barra de herramientas y el menu */
	plugins: 'preview | searchreplace | lists advlist | anchor autosave fullscreen | image media link table accordion | wordcount code insertdatetime',

	/**Elimina la barra de estado inferior */
	statusbar: false,

	/**Especifica el intervalo de tiempo para los autoguardados del documento */
	autosave_interval: '45s',

	/**Aquí se especifica las pestañas que tendrá la barra de meunú y las opciones que tendrá cada pestaña */
	menu: {
		file: { title: 'File', items: 'newdocument restoredraft' },
		edit: { title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall | searchreplace' },
		view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
		insert: { title: 'Insert', items: 'image link media | inserttable accordion anchor | hr | insertdatetime' },
		format: { title: 'Format', items: 'bold italic underline strikethrough codeformat | styles blocks fontfamily fontsize align lineheight | forecolor backcolor | language | removeformat' },
		tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
		table: { title: 'Table', items: 'inserttable | cell row column | advtablesort | tableprops deletetable' },
	},

	/* ----- CÓDIGO PARA SUBIR IMAGENES DESDE EL DISCO DURO ----- */

	/* habilita el campo de título en el cuadro de diálogo Imagen*/
	image_title: true,
	/* habilita las cargas automáticas de imágenes representadas por blob o URI(identificador uniforme de recursos) de datos*/
	automatic_uploads: true,
	/*
		images_upload_url: 'postAcceptor.php',
	*/
	file_picker_types: 'image',

	file_picker_callback: (cb, value, meta) => {
		const input = document.createElement('input');
		input.setAttribute('type', 'file');
		input.setAttribute('accept', 'image/*');

		input.addEventListener('change', (e) => {
			const file = e.target.files[0];

			const reader = new FileReader();
			reader.addEventListener('load', () => {

				const id = 'blobid' + (new Date()).getTime();
				const blobCache = tinymce.activeEditor.editorUpload.blobCache;
				const base64 = reader.result.split(',')[1];
				const blobInfo = blobCache.create(id, file, base64);
				blobCache.add(blobInfo);

				/* llama el callback y completa el campo Título con el nombre del archivo */
				cb(blobInfo.blobUri(), { title: file.name });
			});
			reader.readAsDataURL(file);
		});

		input.click();
	},
	content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'

});

/* ----- EDITOR_TINY.JS -----  */

const formulario = document.getElementById('formulario');
const enviar = document.getElementById('btn_enviar');
const lista = document.getElementById('lista');

$('#btn_enviar').click(function(){
	formulario.addEventListener('submit', (e) => {
		e.preventDefault();
	
		const contenido = tinymce.activeEditor.getContent();
    	const nombre = $('#inputName').val();

    	console.log(nombre);
    	console.log(contenido);

        $.post('http://localhost/pruebaIntegradora/model/publicaciones.modelo.php', {nombre: nombre, contenido: contenido});
	})
})