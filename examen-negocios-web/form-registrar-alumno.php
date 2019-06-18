
<html>
<head>
    <title>Registro de Estudiantes</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
      #contenedor{
          position: relative;
          width: 600px;
          max-width: 50%;
          padding: 70px;
          margin: auto;
          text-align: center;
      }


    </style>
</head>
<body>
<div id="contenedor">
    <form action="guardar.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Ingrese el Nombre Completo</label>
        <input name="nombre" id="nombre" maxlength="100">


        <label for="imagen">Subir Fotos de Perfil</label>
        <input type="file" name="imagen[]" id="imagen" accept="image/*" multiple>


        <label for="correo"> Correo</label>
        <input id="correo" name="correo" maxlength="100">

        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>






