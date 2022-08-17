<h4 class="alert alert-dark text-center mt-5">Adicionar produtos.</h4>
<div class="form1">
    <form action="" method="post" class="container-form">
            <div>
                <select name="category" class="form-control mb-3" required>
                    <option value="" selected>Selecione a Categoria</option>
                    <?php
                         while($category = $data->fetch(\PDO::FETCH_ASSOC)){

                            extract($category);

                            echo "<option value='{$id}'>{$name}</option>";
                         }
                    ?>
                </select>
                <input type="text" class="form-control mb-3" name="product" placeholder="Nome do produto" required/>
                <textarea class="form-control mb-3" style="resize: none;" name="description" placeholder="Descrição do produto" required></textarea>
                <input type="text" class="form-control mb-3" name="price" placeholder="Preço unitário do produto" required/>
                <input type="number" class="form-control mb-3" name="quantity" placeholder="Quantidade disponível" required/>
                <input type="text" class="form-control mb-3" name="photo" placeholder="selecione uma ou mais fotos" required/>
            </div>
        <button class="btn btn-outline-dark btn-sm">Cadastrar</button>
    </form>
    <figure>
        <img src="../../assets/img/svg/addProduct.svg"/>
    </figure>
</div>
