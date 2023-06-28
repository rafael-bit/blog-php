<!DOCTYPE html>
<html>
<head>
    <title>Meu Blog</title>
</head>
<body>
    <?php
        $posts = [
            [
                'titulo' => 'Título do Post 1',
                'conteudo' => 'Conteúdo do Post 1',
            ],
            [
                'titulo' => 'Título do Post 2',
                'conteudo' => 'Conteúdo do Post 2',
            ],
            [
                'titulo' => 'Título do Post 3',
                'conteudo' => 'Conteúdo do Post 3',
            ]
        ];

        if (count($posts) > 0) {
            foreach ($posts as $post) {
                echo "<h2>" . $post['titulo'] . "</h2>";
                echo "<p>" . $post['conteudo'] . "</p>";
                echo "<hr>";
            }
        } else {
            echo "Não há posts no momento.";
        }
    ?>
</body>
</html>