<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Block de notas</title>
    <link rel="stylesheet" href="../assets/css/block.css">
    <script type="module" src="../script/script.js"></script> <!-- it must work after the transcompilation -->
</head>
<body>
    <form action="index.php" method="POST">
        <textarea name="contenido" id="contenido" rows="5" cols="30"></textarea>
        <br>
        <button type="submit" id="submit-content">Guardar nota</button>
        <br>
    </form>
</body>
</html>

