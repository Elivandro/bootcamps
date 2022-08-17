<?php

    include "vendor/autoload.php";

    use Classes\Config\Usuario;
    use Classes\Categoria;
    use Classes\Config\Database\MySQL;
    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    $nome = "Elivandro";
    $email = "Elivandro@hotmail.com.br";
    $telefone = "(69)0-0000-0000";

    $user = new Usuario($nome, $email, $telefone);
    $categoria = new Categoria();
    $DB = new MySQL();


    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('hello world');

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

    var_dump($user);
    var_dump($categoria);
    var_dump($DB);