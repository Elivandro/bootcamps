<?php

    declare (strict_types = 1);

    namespace App\controller;

    use App\Connection\Database;

    class AccountController extends AbstractController
    {

        public function logInAction(): void
        {


            if(isset($_SESSION['email'])){

                $message = "<div class='alert alert-success text-center'>
                <p>Você está logado!!!</p>
                </div>";

                parent::renderMessage($message);

            }else if(isset($_POST['login'])){

                $conn = Database::getDBConnection();

                $myEmail = $_POST['email'];
                $myPassword = $_POST['password'];

                $select = $conn->prepare("SELECT email, password FROM tb_users WHERE email = '$myEmail';");
                $select->execute();


                while($login = $select->fetch(\PDO::FETCH_ASSOC)){

                    extract ($login);

                }

                if($myEmail == $email && password_verify($myPassword, $password)){

                    setcookie("email", $myEmail, time()+60*60*7);

                    $_SESSION["email"] = $myEmail;

                    $message = "<div class='alert alert-success text-center'>
                                <p>Você está logado!!!</p>
                            </div>";

                    parent::renderMessage($message);

                } else{

                    $message = "<div class='alert alert-warning text-center'>
                                    <p>Algo saiu errado tente novamente.</p>
                                </div>";

                    parent::renderMessage($message);

                }

            }else{

                parent::render("index/login");

            }

        }

        public function logOutAction(): void
        {

            session_destroy();

            $message = "<div class='alert alert-success text-center'>
            <p>Logout realizado com sucesso.</p>
            </div>";

            parent::renderMessage($message);

        }

        public function createAccountAction(): void
        {
            $conn = Database::getDBConnection();

            if($_POST){

                try{

                    $name   = $_POST['name'];
                    $cpf = $_POST['cpf'];
                    $email = $_POST['email'];
                    $phone  = $_POST['phone'];
                    $password = $_POST['password'];

                    $encryptedPassword = password_hash($password, PASSWORD_ARGON2I);

                    $result = $conn->prepare("INSERT INTO tb_users(name, cpf, email, phone, password, created_at)
                    VALUES ('$name', '$cpf', '$email', '$phone', '$encryptedPassword', now());");

                    $result->execute();

                    $message = "<div class='alert alert-success text-center'>
                                    <p>Usuario cadastrado com sucesso.</p>
                                </div>";

                    parent::renderMessage($message);

                }catch(\PDOException $e){

                    $error = $result->errorInfo();

                    extract($error);

                    $message = "<div class='alert alert-warning text-center'>
                                    <p>ERRO<br/> {$error[2]}</p>
                                </div>";

                    parent::renderMessage($message);

                }
                catch(\Exception $e){

                    $error = $e->getMessage();

                    $message = "<div class='alert alert-warning text-center'>
                                    <p>ERRO<br/> {$error}</p>
                                </div>";

                    parent::renderMessage($message);

                }

            }else{

                parent::render("index/cadastrar");

            }

        }

    }