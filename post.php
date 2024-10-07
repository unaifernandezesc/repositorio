<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    <?php
    class Post {
        private $titulo;
        private $contenido;
        private $tags;
        private $likes;

        public function __construct($titulo, $contenido, $likes, $tags = []){
            $this->titulo = $titulo;
            $this->contenido = $contenido;
            $this->tags = $tags;
            $this->likes = $likes;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getContenido(){
            return $this->contenido;
        }

        public function getTags() {
            return implode(', ', $this->tags);
        }

        public function getLikes(){
            return $this->likes;
        }
    }
    function obtenerPosts(){
        $posts = [
            new Post("Título 1", "Contenido del post 1", 5, ["PHP", "HTML"]),
            new Post("Título 2", "Contenido del post 2", 2, ["CSS", "JavaScript"]),
            new Post("Título 3", "Contenido del post 3", 10, ["MySQL", "SQL"]),
        ];

        return $posts;
    }
    ?>
</body>

</html>