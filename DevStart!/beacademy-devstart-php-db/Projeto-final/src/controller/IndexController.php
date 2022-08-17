<?php

    declare (strict_types = 1);

    namespace App\controller;

    class IndexController extends AbstractController
    {

        public function indexAction(): void
        {
            parent::render("index/index");
        }

    }