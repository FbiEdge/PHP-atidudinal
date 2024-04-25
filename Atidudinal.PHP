<?php
function verificaPassouDeAno($pessoa) {
    $notas = $pessoa['notas'];
    $notasAbaixoDe6 = 0;
    foreach ($notas as $nota) {
        if ($nota < 6) {
            $notasAbaixoDe6++;
        }
    }
    if ($notasAbaixoDe6 >= 3) {
        return "Não passou de ano!\n";
    } else {
        return "Passou de ano! \n";
    }
}

$pessoa = [
    'nome' => 'João',
    'notas' => [
        'matematica' => 5,
        'portugues' => 6,
        'historia' => 7,
        'filosofia' => 10,
        'sociologia' => 9,
        'fisica' => 5,
        'quimica' => 1
    ]
];

echo verificaPassouDeAno($pessoa); 

//exercicio 2
function calcularMediaIdade($pessoas) {
    $somaIdades = 0;
    foreach ($pessoas as $pessoa) {
        $somaIdades += $pessoa['idade'];
    }
    return $somaIdades / count($pessoas);
}

$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];

echo calcularMediaIdade($pessoas); 


//exercicio 3
function encontrarPessoaMaisVelha($pessoas) {
    $pessoaMaisVelha = null;
    $idadeMaisVelha = 0;
    foreach ($pessoas as $pessoa) {
        if ($pessoa['idade'] > $idadeMaisVelha) {
            $pessoaMaisVelha = $pessoa;
            $idadeMaisVelha = $pessoa['idade'];
        }
    }
    return $pessoaMaisVelha;
}

$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];

$pessoaMaisVelha = encontrarPessoaMaisVelha($pessoas);
echo $pessoaMaisVelha['nome']. " é a pessoa mais velha com". $pessoaMaisVelha['idade']. " anos.\n"; // 

//exercicio 4

function verificaSenhaForte($senha) {
    if (strlen($senha) < 8) {
        return false;
    }
    if (!preg_match('/[A-Z]/', $senha)) {
        return false;
    }
    if (!preg_match('/[a-z]/', $senha)) {
        return false;
    }
    if (!preg_match('/\d/', $senha)) {
        return false;
    }
    return true;
}

$senha = 'SenhaForte123';
echo verificaSenhaForte($senha)? "Senha forte!\n" : "Senha fraca!\n"; 


//exercicio 5
function contarPostsPorAutor($posts) {
    $contagemPosts = [];
    foreach ($posts as $post) {
        $autor = $post['autor'];
        if (!isset($contagemPosts[$autor])) {
            $contagemPosts[$autor] = 0;
        }
        $contagemPosts[$autor]++;
    }
    return $contagemPosts;
}

$posts = [
    [
        'post' => 'Estou aprendendo PHP',
        'autor' => 'João'
    ],
    [
        'post' => 'Aprendi HTML, CSS e JavaScript',
        'autor' => 'João'
    ],
    [
        'post' => 'Estou trabalhando em um projeto',
        'autor' => 'Maria'
    ],
    [
        'post' => 'Estou estudando para o ENEM',
        'autor' => 'José'
    ],
    [
        'post' => 'Fiz um curso de PHP',
        'autor' => 'Maria'
    ],
    [
        'post' => 'Aprendi PHP',
        'autor' => 'João'
    ],
    [
        'post' => 'Estou trabalhando em um site',
        'autor' => 'João'
    ],
    [
        'post' => 'Terminei o curso de PHP',
        'autor' => 'Maria'
    ]
];

$contagemPosts = contarPostsPorAutor($posts);
print_r($contagemPosts);
?>
