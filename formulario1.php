<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<form id="form1" name="form1" method="get" action="procesar_registro.php">

   <script language="JavaScript" src="formulario1.js"></script>

    <p><label>Nombre</label> <input type="text" size="15" name="nombre"></p>

    <p><label>Fecha de nacimiento</label> <input id="date" type="date" size="15" name="date" value="2000-10-22"></p>

    <p><label>Email</label> <input type="email" size="15" name="email"></p>

    <p><label>Contraseña</label> <input type="password" value="12345678" size="15" name="password" minlength="8" maxlength="14" pattern="[A-Za-z0-9]+" required></p> <!-- el + para se pueda introducir todos los caracteres-->

    <p><label>Repita contraseña</label> <input type="password" value="12345678" size="15" name="password2"></p>

    <input type="submit" value="Enviar"> <input type="reset" value="Borrar">


</form>
</body>
</html>