<h3 class="mt-5 text-center">
    <?php

        echo $titulo;

    ?>
</h3>
<hr/>
<div class="form1">
    <div class="container-form">
        <?php

            include "./assets/paginas/msg.php"; 

        ?>
        <form action="" method="post" name="cadastro">
            <input type="text" name="nome" value="<?php echo $nome; ?>" class="form-control mb-2" placeholder="digite seu nome completo" required/>
            <br/>
            <input type="tel" name="telefone" value="<?php echo $telefone; ?>" class="form-control mb-2" placeholder="digite seu telefone" pattern="\([0-9]{2}\)[0-9]{1}-[0-9]{4}-[0-9]{4}" title="(00) 0-0000-0000" required/>
            <br/>
            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control mb-1" placeholder="digite seu email" required/>
            <br/>
            <button type="submit" name="cadastro" class="btn btn-primary"><?php echo $btnReg; ?></button>
        </form>
    </div>
    <figure>
        <img src="./assets/img/svg/form.svg"/>
    </figure>
</div>