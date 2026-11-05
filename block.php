<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Block de notas</title>
    <link rel="stylesheet" href="block.css">
</head>
<body>
    <div class="contenedor">

    <svg class="lapiz"
  xmlns="http://www.w3.org/2000/svg"
  width="32"
  height="32"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2.5"
  stroke-linecap="round"
  stroke-linejoin="round">
  <path d="M3 19h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
  <path d="M12.5 5.5l4 4" />
  <path d="M4.5 13.5l4 4" />
  <path d="M21 15v4h-8l4 -4l4 0" />
</svg>

    <form class="formu" action="index.php" method="POST">
        <textarea placeholder="Escribe algo" class="texto" name="contenido" rows="5" cols="30"></textarea>
        <br>
        <button class="boton" type="submit">Guardar nota</button>
        <br>
    </form>
    </div>
</body>
</html>