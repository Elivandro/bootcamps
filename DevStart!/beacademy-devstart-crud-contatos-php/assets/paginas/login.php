<h3 class="mt-5 text-center">Login</h3>
<hr/>
<div class="form1">
    <div class="container-form">
        <?php 

            include "./assets/paginas/msg.php"; 

        ?>
        <form action="" method="post" name="login">
            <input type="text" name="user" class="form-control mb-3" placeholder="digite seu nome" required/>
            <br/>
            <input type="password" name="senha" class="form-control mb-3" placeholder="digite sua senha" required/>
            <br/>
            <button type="submit" class="btn btn-primary" name="login">Logar</button>
        </form>
        <p class="alert alert-info mt-3">Dica: 9 digitos.
            <br/>use primeiro nome do desenvolvedor.
            <br/>use nome do programa.
        </p>
    </div>
    <figure>
        <img src="./assets/img/svg/login.svg"/>
    </figure>
</div>