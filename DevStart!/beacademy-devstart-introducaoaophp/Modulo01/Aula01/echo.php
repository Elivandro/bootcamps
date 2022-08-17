<form action="" method="post">
    <input name="nome" placeholder="digite seu nome"/>
    <br/>
    <input name="cidade" placeholder="digite sua cidade"/>
    <br/>
    <button>Enviar</button>
</form>

<?php
    if($_POST){
        echo "Olá ".$_POST["nome"];
    }
?>