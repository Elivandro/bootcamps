<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 7 - tabela de produtos HTML com PHP</title>
        <meta name="author" content="Elivandro Silva"/>
        <meta name="keywords" content="php, tabela, produtos, html"/>
        <meta name="description" content="Tabela de produtos com html, bootstrap e php"/>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            tr td{
                font-size: 18px;
            }
            .modal-body img{
                width: 100%;
                margin: 0px auto;
                object-fit: contain;
                height: 540px;
            }
        </style>
    </head>
<body>
<?php
    $produto1 = ["id" => 1,
            "nome" => "Oneplus 10 Pro",
            "preco" => "R$ 6.999,00",
            "descricao" => "O <strong>OnePlus 10 Pro</strong> é um smartphone <strong>Android</strong> de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma enorme tela <strong>Touchscreen</strong> de <strong>6.7</strong> polegadas e uma resolução de <strong>3216x1440</strong> pixels que é uma das mais altas atualmente em circulação.",
            "imagem" => "./assets/img/Oneplus10-1.jpg"
        ];

    $produto2 = ["id" => 2,
            "nome" => "Xiaomi Redmi 11T Pro",
            "preco" => "R$ 1.599,99",
            "descricao" => "O <strong>Xiaomi 11T Pro</strong> é um smartphone <strong>Android</strong> com características inovadoras que o tornam uma excelente opção para qualquer tipo de utilização. A tela de <strong>6.67</strong> polegadas coloca esse <strong>Xiaomi</strong> no topo de sua categoria. A resolução também é alta: <strong>2400x1080</strong> pixel.",
            "imagem" => "./assets/img/XiaomiMi-1.jpg"
            ];

    $produto3 = ["id" => 3,
            "nome" => "Samsung Galaxy S21 Ultra",
            "preco" => "R$ 8.549,10",
            "descricao" => "O <strong>Samsung Galaxy S21</strong> é um smartphone <strong>Android</strong> com características inovadoras que o tornam uma excelente opção para qualquer tipo de utilização. A tela de <strong>6.2</strong> polegadas coloca esse <strong>Samsung</strong> no topo de sua categoria. A resolução também é alta: <strong>2400x1080</strong> pixel.",
            "imagem" => "./assets/img/SamsungS21-1.jpg"
            ];

    $produto4 = ["id" => 4,
            "nome" => "Apple iPhone 12 Pro Max",
            "preco" => "R$ 8.169,05",
            "descricao" => "O <strong>Apple iPhone 12 Pro Max</strong> é um smartphone <strong>iOS</strong> com características inovadoras que o tornam uma excelente opção para qualquer tipo de utilização. A tela de <strong>6.7</strong> polegadas coloca esse <strong>Apple</strong> no topo de sua categoria. A resolução também é alta: <strong>2778x1284</strong> pixel. ",
            "imagem" => "./assets/img/iPhoneProMax-1.jpg"
            ];

    $produto5 = ["id" => 5,
            "nome" => "Motorola Edge 30",
            "preco" => "R$ 5.699,05",
            "descricao" => "O <strong>Motorola Edge 30</strong> é um smartphone <strong>Android</strong> de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma enorme tela <strong>Touchscreen</strong> de <strong>6.5</strong> polegadas com uma resolução de <strong>2400x1080</strong> pixel.",
            "imagem" => "./assets/img/MotorolaEdge-1.jpg"
            ];

    $produtos = [$produto1, $produto2, $produto3, $produto4, $produto5];
?>
<div class="container">
    <table class="table table-hover table-striped mt-5">
        <h1 class="mt-5 text-center">Tabela de Smartphones disponíveis.</h1>
        <hr/>
        <thead class="table-dark">
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>imagem</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    foreach($produtos as $produto){

                        echo "<tr>
                                <td width='240'><strong>{$produto['nome']}</strong></td>
                                <td width='180'>{$produto['preco']}</td>
                                <td><p>{$produto['descricao']}</p></td>
                                <td><button type='button' class='btn btn-outline-light' data-bs-toggle='modal' data-bs-target='#JanelaModal{$produto['id']}'><img src='{$produto['imagem']}' width='180'/></button></td>
                            </tr>
                            <div id='JanelaModal{$produto['id']}' class='modal' tabindex='-1' role='dialog'>
                                    <div class='modal-dialog modal-lg' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title'><strong>{$produto['nome']}</strong></h5>
                                                <button type='button' class='close btn btn-dark' data-bs-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                                </button>
                                            </div>
                                            <div class='modal-body'>
                                                <img src='{$produto['imagem']}'/>
                                            </div>
                                        </div>
                                    </div>
                            </div>";
                    }
            ?>
        </tbody>
    </table>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>