<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>

<body>
    <header id="titulo">
        <h1>Mi Blog</h1>
    </header>

    <aside>
        <a href="?id=Inicio" id="opciones">Inicio</a>
        <a href="?id=SobreMi" id="opciones">Sobre mí</a>
        <a href="?id=Blog" id="opciones">Blog</a>
        <a href="?id=Contacto" id="opciones">Contacto</a>
    </aside>

    <main>
        <?php
            require_once("post.php");

            echo "<section>";
            foreach (obtenerPosts() as $elemento) {
                echo "<article>";
                echo "<h2>" . $elemento->getTitulo() . "</h2>";
                echo "<p>" . $elemento->getContenido() . "</p>";
                echo "<p>Tags: " . $elemento->getTags() . "</p>";
                echo "<p>Likes: " . $elemento->getLikes() . " me gustas</p>";
                echo "</article>";
            }
            echo "</section>";
        ?>
    </main>
</body>

</html>
