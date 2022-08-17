<?php

    declare (strict_types = 1);

    namespace App\controller;

    abstract class AbstractController
    {
        public function render(string $viewName, $data = null): void
        {
            include dirname(__DIR__)."/View/assets/header.php";
            include dirname(__DIR__)."/View/{$viewName}.php";
            include dirname(__DIR__)."/View/assets/footer.php";
        }

        public function renderMessage(string $message): void
        {
            include dirname(__DIR__)."/View/assets/header.php";
            include dirname(__DIR__)."/View/assets/message.php";
            include dirname(__DIR__)."/View/assets/footer.php";
        }
    }