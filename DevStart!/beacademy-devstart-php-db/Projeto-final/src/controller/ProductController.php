<?php

    declare (strict_types = 1);

    namespace App\controller;

    use App\Connection\Database;
    use Dompdf\Dompdf;

    class ProductController extends AbstractController
    {

        public function listAction(): void
        {
            $conn = Database::getDBConnection();

            $result = $conn->prepare("SELECT * FROM tb_product;");
            $result->execute();

            parent::render("product/list", $result);

        }

        public function addAction(): void
        {
            $conn = Database::getDBConnection();

            if($_POST){

                $category   = $_POST['category'];
                $product = $_POST['product'];
                $description = $_POST['description'];
                $price  = $_POST['price'];
                $quantity = $_POST['quantity'];
                $photo  = $_POST['photo'];

                $result = $conn->prepare("INSERT INTO tb_product(name, description, photo, price, quantity, category_id, created_at)
                VALUES ('{$product}', '{$description}', '{$photo}', '{$price}', '{$quantity}', '{$category}', now());");

                $result->execute();

                $message = "<div class='alert alert-success text-center'>
                                <p>Novo produto adicionado com sucesso.</p>
                            </div>";

                parent::renderMessage($message);

            }else{

                $result = $conn->prepare("SELECT * FROM tb_category;");
                $result->execute();

                parent::render("product/add", $result);

            }

        }

        public function editAction(): void
        {
            $id = $_GET['id'];

                $conn = Database::getDBConnection();

                if($_POST){

                    $category   = $_POST['categoryId'];
                    $product = $_POST['product'];
                    $description = $_POST['description'];
                    $price  = $_POST['price'];
                    $quantity = $_POST['quantity'];
                    $photo  = $_POST['photo'];
                    $createdAt = date("Y-m-d H:m:s");

                    $result = $conn->prepare("UPDATE tb_product SET name='{$product}', 
                                                            description='{$description}', 
                                                            photo='{$photo}', 
                                                            price='{$price}', 
                                                            quantity='{$quantity}', 
                                                            category_id='{$category}', 
                                                            created_at='{$createdAt}' WHERE id = '{$id}';");
                    $result->execute();

                    $message = "<div class='alert alert-success text-center'>
                                    <p>Produto editado com sucesso.</p>
                                </div>";

                    parent::renderMessage($message);

                } else{

                    $product = $conn->prepare("SELECT * FROM tb_product WHERE id = '{$id}';");
                    $product->execute();

                    $categories = $conn->prepare("SELECT id, name FROM tb_category;");
                    $categories->execute();

                    parent::render("product/edit", [
                        'product' => $product->fetch(\PDO::FETCH_ASSOC),
                        'category' => $categories
                    ]);

                }
            }


        public function delAction(): void
        {
            $id = $_GET['id'];

            $conn = Database::getDBConnection();
            $result = $conn->prepare("DELETE FROM tb_product WHERE id = '{$id}';");
            $result->execute();

            $message = "<div class='alert alert-warning text-center'>
                            <p>Produto removido com sucesso.</p>
                        </div>";

            parent::renderMessage($message);

        }

        public function reportAction(): void
        {

            $conn = Database::getDBConnection();
            $result = $conn->prepare('SELECT prod.id, prod.name, prod.description, prod.quantity, cat.name as category FROM tb_product prod INNER JOIN tb_category cat ON prod.category_id = cat.id;');
            $result->execute();

            $content = '';

            while($product = $result->fetch(\PDO::FETCH_ASSOC)){

                extract($product);

                $content .= "<tr>
                                <td>{$id}</td>
                                <td>{$name}</td>
                                <td>{$category}</td>
                                <td>{$description}</td>
                                <td>{$quantity}</td>
                            </tr>";

            }

            $html  = "<h2>Relatorio de produtos no estoque.</h2>
                        <table border='1' width='100%'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NOME</th>
                                    <th>CATEGORIA</th>
                                    <th>DESCRIÇÃO</th>
                                    <th>QUANTIDADE</th>
                                </tr>
                            </thead>
                            <tbody>
                                $content;
                            </tbody>
                        </table>";

            $pdf = new Dompdf();
            $pdf->loadHtml($html);

            $pdf->render();
            $pdf->stream();
        }

    }