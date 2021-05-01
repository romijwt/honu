<?php
/**
 * Template name: Form Data
 * 
 * Form Data
 * @link https://developer.mozilla.org/en-US/docs/Web/API/FormData
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <style>
        :root {
        --shadowColor: hsla(0, 0%, 0%, 0.08);
        }

        body {
            font-family: system-ui;
            background: #f0f3f7;
            color: rgba(0, 0, 0, .6);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            box-shadow: 0 0 5px rgba(0, 0, 0, .2);
            border-radius: 5px;
            width: 400px;
            margin: 0 auto;
            padding: 2em 1.5em;
            background: white;
        }

        label {
            text-align: center;
            display: block;
            padding-bottom: 1em;
            margin-bottom: 1em;
            font-size: 1.2em;
            font-weight: bold;
            box-shadow: 0 3px 2px -2px var(--shadowColor);
        }

        input {
            width: 100%;
            border-radius: 5px;
            box-shadow: inset 0 2px 4px 0 var(--shadowColor);
            font-size: 14px;
            padding: .8em 1em;
            box-sizing: border-box;
            border: 1px solid var(--shadowColor);
            margin-bottom: 1em;
            outline: 0;
        }

        input:focus {
            box-shadow: 0 0 10px 0 rgba(255, 255, 255, .5);
        }

        button {
            color: white;
            background: #38b765;
            border: none;
            width: 100%;
            padding: .8em 1em;
            border-radius: 5px;
            font-size: 1em;
        }

        .preview {
            position: relative;
        }

        .preview img {
            max-width: 100%;
        }

        .preview p {
            position: absolute;
            background: white;
            left: 5px;
            top: 5px;
        }
    </style>
</head>
<body>
    <form id="form">
        <label for="">Completa tu informacion</label>
        <input type="text" name="username" placeholder="Nombre de usuario">
        <input type="file" name="image" id="file">
        <div class="preview">
            <p id="username"></p>
            <img src="" alt="" id="image">
        </div>
        <button>Enviar</button>
    </form>
    <script type="text/javascript">
        const $form = document.querySelector('#form');
        const $username = document.querySelector('#username')
        const $image = document.querySelector('#image')
        const $file = document.querySelector('#file')

        function renderImage(formData){
            const file = formData.get('image')
            const image = URL.createObjectURL(file) // Una de las maneras para renderizar un input file en el browser es convertirlo en un objeto URL y luego insertarlo en la propiedad source de una etiqueta HTML correspondiente
            $image.setAttribute('src', image)
        }

        function renderUsername(formData){
            const username = formData.get('username')
            $username.textContent = username
        }

        $file.addEventListener('change', (event)=>{
            const formData = new FormData($form)
            renderImage(formData)
        })

        $form.addEventListener('submit',(event)=>{
            event.preventDefault();
            // FormData(event.currentTarget) // Tambien tenemos una referencia al formulario en el evento
            const formData = new FormData($form) // Con FormData tenemos setters y getters lo que significa que podemos incluir informacion ajena a los campos a llenar del formulario
            // debugger
            renderUsername(formData)
            renderImage(formData)
        })
    </script>
</body>
</html>