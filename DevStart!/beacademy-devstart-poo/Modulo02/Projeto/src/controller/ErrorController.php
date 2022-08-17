<?php

    declare (strict_types = 1);

    namespace App\controller;
    class ErrorController extends AbstractController
    {

        public function notfoundAction(): void
        {
            parent::render("error/404");
        }

    }