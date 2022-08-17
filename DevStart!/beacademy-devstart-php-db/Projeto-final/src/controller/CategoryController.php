<?php

    declare (strict_types = 1);

    namespace App\controller;

    use App\connection\Database;

    class CategoryController extends AbstractController
    {

        public function listAction(): void
        {

            $conn = Database::getDBConnection();

            $result = $conn->prepare("SELECT * FROM tb_category;");
            $result->execute();

            parent::render("category/list", $result);
        }

        public function addAction(): void
        {
            if($_POST){

                $category = $_POST['category'];
                $description = $_POST['description'];

                $conn = Database::getDBConnection();
                $result = $conn->prepare("INSERT INTO tb_category (name, description) 
                                            VALUES ('{$category}', '{$description}');");

                $result->execute();

                $message = "<div class='alert alert-success text-center'>
                                <p>Nova categoria cadastrada com sucesso.</p>
                            </div>";

                parent::renderMessage($message);

            } else{

                parent::render("category/add", $result = null);

            }

        }

        public function editAction(): void
        {
            $id = $_GET['id'];

            $conn = Database::getDBConnection();

            if($_POST){

                $newCategory = $_POST['category'];
                $newDescription = $_POST['description'];

                $result = $conn->prepare("UPDATE tb_category SET name='{$newCategory}', description='{$newDescription}' WHERE id = '{$id}';");
                $result->execute();

                $message = "<div class='alert alert-success text-center'>
                                <p>Categoria editada com sucesso.</p>
                            </div>";

                parent::renderMessage($message);

            } else{

                $result = $conn->prepare("SELECT * FROM tb_category WHERE id = '{$id}';");
                $result->execute();

                $data = $result->fetch(\PDO::FETCH_ASSOC);

                parent::render("category/edit", $data);

            }

        }

        public function delAction(): void
        {

            $id = $_GET['id'];

            $conn = Database::getDBConnection();
            $result = $conn->prepare("DELETE FROM tb_category WHERE id = '{$id}';");
            $result->execute();

            $message = "<div class='alert alert-warning text-center'>
                            <p>Categorai removida com sucesso.</p>
                        </div>";

            parent::renderMessage($message);

        }

    }