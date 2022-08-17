    <table class="table table-hover table-stripped">
        <h4 class="alert alert-dark text-center mt-5">Listar todas categorias.</h4>
        <div class="mb-3 text-end">
            <a href="/categorias/novo" class="btn btn-outline-primary btn-sm">Nova Categoria</a>
        </div>
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Categoria</th>
                <th colspan="2">Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($category = $data->fetch(\PDO::FETCH_ASSOC)){

                    extract($category);

                    echo "<tr>
                            <td>{$id}</td>
                            <td>{$name}</td>
                            <td>{$description}</td>
                            <td>
                                <a href='/categorias/editar?id={$id}' class='btn btn-outline-success btn-sm'>Editar</a>
                                <a href='/categorias/remover?id={$id}' class='btn btn-outline-danger btn-sm'>Excluir</a>
                            </td>
                        </tr>";

                }
            ?>
        </tbody>
    </table>