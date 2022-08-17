    <nav class="d-flex justify-content-between nav-menu text-center mt-5">
        <ul>
            <li><a href="/" class="btn btn-outline-dark">Home</a></li>
            <li><a href="/login" class="btn btn-outline-dark">Conta</a></li>
            <li><a href="/listar" class="btn btn-outline-dark">Listar</a></li>
            <li><a href="/relatorio" class="btn btn-outline-dark">Relatorios</a></li>
            <li><a href="/admin" class="btn btn-outline-dark">Admin</a></li>
        </ul>
        <?php

            session_start();

            if(isset($_SESSION["nome"])){

                echo "<ul>
                        <li><a href='/logout' class='btn btn-outline-dark'>Logout</a></li>
                    </ul>";

            }
        ?>
    </nav>
    <hr/>