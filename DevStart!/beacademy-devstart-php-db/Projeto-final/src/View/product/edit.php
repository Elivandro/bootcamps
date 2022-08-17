<h4 class="alert alert-dark text-center mt-5">Editar produtos</h4>
<div class="form1">
    <form action="" method="post" class="container-form">
            <div>
                <select name="categoryId" class="form-control mb-3" required>
                    <option value="" selected>Selecione a Categoria</option>
                    <?php

                        extract($data);

                        while($categories = $category->fetch(\PDO::FETCH_ASSOC)){

                            extract($categories);

                            echo "<option value='{$categories['id']}'>{$categories['name']}</option>";
                        }

                    ?>
                </select>
                <input type="text" value="<?php echo $product['name']; ?>" class="form-control mb-3" name="product" placeholder="Nome do produto" required/>
                <textarea class="form-control mb-3" style="resize: none;" name="description" placeholder="Descrição do produto" required><?php echo $product['description']; ?></textarea>
                <input type="text" value="<?php echo $product['price']; ?>" class="form-control mb-3" name="price" placeholder="Preço unitário do produto" required/>
                <input type="number" value="<?php echo $product['quantity']; ?>" class="form-control mb-3" name="quantity" placeholder="Quantidade disponível" required/>
                <input type="text" value="<?php echo $product['photo']; ?>" class="form-control mb-3" name="photo" placeholder="selecione uma ou mais fotos" required/>
            </div>
        <button class="btn btn-outline-dark btn-sm">Editar</button>
    </form>
    <figure>
        <img src="../../assets/img/svg/addProduct.svg"/>
    </figure>
</div>
