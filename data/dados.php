<?php

$posts = [
    [
        'id' => 1,
        'titulo' => 'Aventuras na floresta',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ullamcorper, ligula a efficitur tristique, nulla nisi venenatis sapien, et placerat neque elit ac risus. Proin vel sollicitudin eros, non lacinia odio. Ut gravida risus vitae quam malesuada posuere. Curabitur consequat nunc a turpis tristique, at consequat arcu rutrum. Vivamus in ante eu felis consequat tristique. Proin quis lacus nec ipsum pulvinar condimentum. Pellentesque sed metus eu velit pellentesque consequat. Aliquam ultricies, felis et finibus tempor, odio metus bibendum justo, non condimentum sem neque a libero.',
        'img' => './img/img1.png',
        'categoria' => 'Natureza',
        'tag' => 'Floresta',
        'autor' => [
            'nome' => 'John Doe',
            'foto' => 'johndoe.jpg'
        ],
        'data' => '2023-06-01',
        'grupo' => 'Natureza', 
    ],
    [
        'id' => 2,
        'titulo' => 'Receita deliciosa de bolo de chocolate',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel ipsum vitae ipsum tempus pulvinar. Aliquam maximus est nec tortor semper, eget hendrerit orci condimentum. Mauris auctor elementum enim. Integer eu ipsum lectus. Curabitur euismod lectus vel tellus auctor, eget gravida odio mattis. Mauris tristique, lectus eget facilisis consequat, tellus urna ultricies tellus, ac lacinia mi ipsum et tellus. Integer eget efficitur nunc. Sed ac consequat neque.',
        'img' => './img/img1.png',
        'categoria' => 'Receita',
        'tag' => 'Bolos',
        'autor' => [
            'nome' => 'Jane Smith',
            'foto' => 'janesmith.jpg'
        ],
        'data' => '2023-06-02',
        'grupo' => 'Culinária', 
    ],
    [
        'id' => 3,
        'titulo' => 'Viagem inesquecível pela Europa',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultricies nunc in turpis venenatis convallis. Vestibulum tempor, nisi in placerat pellentesque, dui augue fringilla justo, in vestibulum odio nunc eget ante. Nullam ultrices, metus ac consequat eleifend, velit sapien rhoncus ante, ac fermentum leo leo nec libero. Sed ac rutrum tellus. Curabitur lobortis varius risus, ac dapibus sem ultrices ut. Sed ut interdum ex, et tempor tellus. Nam eu ipsum leo.',
        'img' => './img/img1.png',
        'categoria' => 'Viagens',
        'tag' => 'Passeios',
        'autor' => [
            'nome' => 'Maria Silva',
            'foto' => 'mariasilva.jpg'
        ],
        'data' => '2023-06-03',
        'grupo' => 'Viagens', 
    ],
    [
        'id' => 4,
        'titulo' => 'As melhores dicas para empreendedores',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu rhoncus lectus. Donec tristique malesuada augue, ut vestibulum nulla eleifend at. Phasellus in congue tellus. Nam interdum, ante ac placerat lobortis, urna lorem aliquet ex, et tempus nisi mi ut justo. Sed suscipit ligula id odio tincidunt lobortis. Suspendisse convallis justo ut turpis tincidunt, sed fermentum ante consequat. Aenean consequat, nisi ut aliquet lacinia, mi felis fringilla urna, non ullamcorper neque purus sed neque.',
        'img' => './img/img1.png',
        'categoria' => 'Dicas',
        'tag' => 'Investimento',
        'autor' => [
            'nome' => 'Carlos Rodrigues',
            'foto' => 'carlosrodrigues.jpg'
        ],
        'data' => '2023-06-04',
        'grupo' => 'Negócios', 
    ],
    [
        'id' => 5,
        'titulo' => 'A incrível jornada de um explorador',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel ultrices lectus. Nulla facilisi. Sed commodo scelerisque felis nec egestas. Nunc facilisis finibus mi, at laoreet ex laoreet ut. Pellentesque maximus accumsan ante, at fermentum ex dignissim vitae. In hac habitasse platea dictumst. Aenean ullamcorper aliquet tortor sed cursus. Vivamus convallis metus vitae arcu volutpat, ac interdum quam suscipit. Phasellus malesuada tortor non nisl consequat, id convallis leo hendrerit. Proin ultrices metus quis lacus rutrum sagittis. Pellentesque mattis elit in libero dignissim, nec suscipit arcu efficitur. Donec ut dolor sollicitudin, vehicula ante sed, cursus elit. Fusce laoreet rhoncus sapien vitae varius.',
        'img' => './img/img1.png',
        'categoria' => 'Natureza',
        'tag' => 'Explorar',
        'autor' => [
            'nome' => 'Luisa Ferreira',
            'foto' => 'luisaferreira.jpg'
        ],
        'data' => '2023-06-05',
        'grupo' => 'Aventuras', 
    ],
    [
        'id' => 6,
        'titulo' => 'Dicas de estilo para se vestir no verão',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim, sapien at euismod cursus, tellus tortor dignissim justo, eget tristique nisl diam ac arcu. Fusce ac tortor non nulla tincidunt scelerisque. Cras scelerisque nunc vel ante eleifend, a tempor nunc posuere. Sed rutrum odio quis ligula feugiat ullamcorper. Sed rhoncus turpis non leo fringilla, ac euismod enim lacinia. Aenean sed sem eu ligula vestibulum finibus. Sed nec sapien at velit ullamcorper faucibus. Integer in convallis ipsum. Nam vel diam sapien. In condimentum odio tellus, non commodo lectus efficitur ac. Maecenas accumsan, enim vitae commodo gravida, lectus ex fermentum orci, nec sagittis ex urna eu lacus. Aliquam vitae ligula non urna vulputate luctus. Suspendisse condimentum nibh sit amet risus malesuada pharetra.',
        'img' => './img/img1.png',
        'categoria' => 'Dicas',
        'tag' => 'Moda',
        'autor' => [
            'nome' => 'Pedro Santos',
            'foto' => 'pedrosantos.jpg'
        ],
        'data' => '2023-06-06',
        'grupo' => 'Estilo', 
    ],
    [
        'id' => 7,
        'titulo' => 'Aprenda a tocar violão em 30 dias',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur elementum purus id lacinia. Duis congue, urna eget commodo bibendum, mi enim pharetra enim, in feugiat elit dui nec lacus. Mauris pharetra auctor ligula, nec pulvinar velit feugiat sed. Nam eget interdum metus. Ut faucibus justo sed velit fermentum finibus. Sed feugiat lectus vel lorem suscipit, vel efficitur risus volutpat. Morbi tincidunt augue ipsum, vel ullamcorper tellus varius eget. Nulla vel massa nec nisl vulputate consequat. Maecenas quis eros bibendum, aliquet mi ut, lacinia justo. Aenean et mauris ut erat elementum scelerisque. Nullam ac mi et dui pharetra fringilla. In eget ex et mauris pulvinar tristique sed vel mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce sit amet dolor vitae neque ultricies consequat vel ac sem. Sed cursus est sed justo tincidunt, eget volutpat turpis hendrerit.',
        'img' => './img/img1.png',
        'categoria' => 'Dicas',
        'tag' => 'Instrumentos',
        'autor' => [
            'nome' => 'Ana Oliveira',
            'foto' => 'anaoliveira.jpg'
        ],
        'data' => '2023-06-07',
        'grupo' => 'Música', 
    ],
    [
        'id' => 8,
        'titulo' => 'Segredos para um relacionamento duradouro',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra justo ut metus pulvinar faucibus. Nulla nec gravida lorem. Nullam eleifend finibus velit, sed iaculis purus mollis sed. Donec tincidunt magna eu ante finibus hendrerit. Sed auctor lacus eu mi commodo, in consequat lectus interdum. Mauris sodales, purus sed feugiat ullamcorper, augue enim interdum tortor, nec fringilla sem tellus in nulla. In eget libero gravida, facilisis lectus ut, dapibus mauris. Mauris vulputate commodo massa, id tincidunt mi tincidunt sed. Sed mollis finibus metus, id convallis nunc facilisis eget. Fusce tincidunt urna mauris, in rhoncus elit facilisis at. Nullam at laoreet leo, eget volutpat dui. Aenean fermentum, ex non congue egestas, lacus sem commodo nisl, sit amet aliquam nulla sem non felis. Ut accumsan nunc ac ultrices tristique. In sed auctor nulla. Suspendisse in erat vitae ligula commodo fringilla at et lectus.',
        'img' => './img/img1.png',
        'categoria' => 'Dicas',
        'tag' => 'Relacionamento',
        'autor' => [
            'nome' => 'Ricardo Almeida',
            'foto' => 'ricardoalmeida.jpg'
        ],
        'data' => '2023-06-08',
        'grupo' => 'Relacionamentos', 
    ],
    [
        'id' => 9,
        'titulo' => 'A incrível descoberta arqueológica',
        'img' => './img/img1.png',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam malesuada nulla ac tortor fermentum, vitae interdum tellus dictum. Nullam fermentum malesuada erat eget pharetra. Integer sollicitudin nulla eu justo rhoncus facilisis. Morbi dignissim metus nec tellus interdum ullamcorper. Fusce elementum congue efficitur. Fusce pharetra eleifend leo at rhoncus. Curabitur vel tortor nec metus maximus auctor. Fusce pellentesque velit et est iaculis fringilla. Nullam sollicitudin tellus et sagittis dignissim. Nullam vel eros hendrerit, tempor ante et, dapibus erat. Nulla facilisi. Morbi a mi semper, elementum neque nec, hendrerit nisi. Phasellus vel elit non purus elementum faucibus id quis nibh.',
        'categoria' => 'Natureza',
        'tag' => 'Arqueologia',
        'autor' => [
            'nome' => 'Luiz Costa',
            'foto' => 'luizcosta.jpg'
        ],
        'data' => '2023-06-09',
        'grupo' => 'História', 
    ],
    [
        'id' => 10,
        'titulo' => 'Aventuras na montanha',
        'img' => './img/img1.png',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu rutrum est, ut gravida lacus. Integer faucibus magna a est pulvinar, eu fringilla neque dignissim. Integer ultrices sagittis tellus, ac mattis lectus posuere quis. Curabitur congue sem eget diam volutpat condimentum. Morbi cursus a ex ac commodo. Sed id lorem sed augue pretium sagittis. Morbi bibendum nisi enim, nec mattis massa scelerisque vel. Morbi lacinia sem vitae urna rhoncus, eu rutrum sem rutrum. Donec bibendum ligula vel varius suscipit. Quisque vitae aliquam lectus, in gravida dolor. Pellentesque et dui eget turpis aliquam tincidunt eu at nisl. Nulla facilisi. Curabitur vehicula sagittis massa, vel eleifend metus tempor a. Mauris ac metus vel tortor vestibulum facilisis non at purus. Curabitur tempor volutpat risus, nec consequat odio mattis eget.',
        'categoria' => 'Natureza',
        'tag' => 'Montanha',
        'autor' => [
            'nome' => 'Isabel Santos',
            'foto' => 'isabelsantos.jpg'
        ],
        'data' => '2023-06-10',
        'grupo' => 'Montanha',
    ],
    [
        'id' => 11,
        'titulo' => 'PHP e suas funções',
        'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mauris est. Sed dignissim neque a mi semper, eget bibendum eros malesuada. Mauris efficitur lacus mauris, non congue turpis pharetra eget. Proin ullamcorper augue ut dapibus gravida. In hac habitasse platea dictumst. Mauris venenatis eros in nunc auctor, eget vulputate est tristique. Aliquam sed sapien a metus egestas mattis ut a metus. Vivamus vel pellentesque est, id scelerisque ante. Nunc in ultrices ex. Sed faucibus arcu a mauris suscipit, ac hendrerit mi ullamcorper. Mauris fringilla, velit nec gravida fringilla, diam metus congue arcu, in semper lectus mi nec nulla. Quisque consequat, dolor ut porttitor lacinia, neque sem porta lectus, sed rutrum ante nisi nec diam. Aenean consectetur, tellus ut finibus semper, turpis nisi vestibulum mi, eget consectetur erat nunc ac orci.',
        'categoria' => 'Programação',
        'tag' => 'PHP',
        'img' => './img/img1.png',
        'autor' => [
            'nome' => 'Gabriel Torres',
            'foto' => 'gabrieltorres.jpg'
        ],
        'data' => '2023-06-11',
        'grupo' => 'PHP',
    ],
];

return $posts;
?>