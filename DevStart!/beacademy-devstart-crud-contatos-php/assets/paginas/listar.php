<h3 class="mt-5 text-center">Listar contato</h3>
<hr>
<table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th colspan="2">Telefone</th>
        </tr>
    </thead>
    <tbody>
    <?php

        foreach($contatos as $index => $contato){

            $contatoInfo = explode(";", $contato);

            echo "<tr>";

                foreach($contatoInfo as $cadaContato){

                    echo "<td>{$cadaContato}</td>";

                }

            echo "<td>
                    <a href='/editar?id={$index}' class='btn btn-outline-success btn-sm'>Editar</a>
                    <a href='/excluir?id={$index}' class='btn btn-outline-danger btn-sm'>excluir</a>
                </td>";

            echo "</tr>";
        }

    ?>
    </tbody>
</table>