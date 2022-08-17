    <h4 class="alert alert-dark text-center mt-5">Editar categorias.</h4>
    <div class="form1">
        <form action="" method="post" class="container-form">
            <div class="mb-4">
                <label for="cat" class="mb-2">Categoria:</label>
                <input type="text" value="<?php echo $data['name']; ?>" name="category" id="cat" class="form-control mb-3" placeholder="digite uma categoria" require/>
            </div>
            <div class="mb-4">
                <label for="desc" class="mb-2">Descrição:</label>
                <textarea name="description" id="desc" class="form-control mb-3" style="resize: none;" placeholder="descreva a categoria" require><?php echo $data['description']; ?></textarea>
            </div>
                <button class="btn btn-outline-dark btn-sm">Editar descrição</button>
        </form>
        <figure>
            <img src="../../assets/img/svg/editCategory.svg"/>
        </figure>
    </div>