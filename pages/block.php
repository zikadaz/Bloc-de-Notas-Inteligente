<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bloc de notas AT</title>
    <script type="module" src="../script/script.js"></script>
    <link rel="stylesheet" href="../assets/css/block.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tiny5+Duo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" class="tiny5-duo-regular">
</head>
<body>

    <header class="princi">
        <h1 class="titulo">BLOC DE NOTAS ATERGAI</h1>
        <a href="perfil.php" class="enlace-perfil">
            <svg class="contenedorDePerfil"
                xmlns="http://www.w3.org/2000/svg"
                width="48"
                height="48"
                stroke="#ffffff"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2.5"
                stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6" />
                <path d="M6.201 18.744a4 4 0 0 1 3.799 -2.744h4a4 4 0 0 1 3.798 2.741" />
                <path d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033" />
            </svg>
        </a>
    </header>

    <aside class="contenedorDeCuentas">
        <a class="numeros" id="contador">Caracteres: 0 | Palabras: 0</a>
    </aside>

    <main class="contenido-centro">
        <div class="contenedor">
            <img src="Seyral1.png" alt="Mi personaje chibi" width="150" height="150">
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
            
            <form class="formu" action="block.php" method="POST">
                <textarea placeholder="Escribe algo" class="texto" name="contenido" id="contenido" rows="5" cols="30"></textarea>
                <br>
                <button class="boton" type="submit" id="submit-content">Guardar nota</button>
            </form>
        </div>

        <div class="divv">
            <form class="form">
                <h1 class=histo>Historial</h1>
            </form>
        </div>
    </main>

    <script> 
        document.addEventListener("DOMContentLoaded", () => { 
            const textarea = document.getElementById("contenido");
            const contadorNumeros = document.getElementById("contador");

            if (textarea && contadorNumeros) { 
                textarea.addEventListener("input", () => { 
                    const texto = textarea.value;
                    const palabras = texto.trim() ? texto.trim().split(/\s+/).length : 0;
                    const caracteres = texto.length;

                    contadorNumeros.innerText = `Caracteres: ${caracteres} | Palabras: ${palabras}`;
                });
            }
        });
    </script>
</body>
</html>