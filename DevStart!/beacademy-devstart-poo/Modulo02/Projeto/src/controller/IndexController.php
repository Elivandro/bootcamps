<?php

    declare (strict_types = 1);

    namespace App\controller;

    class IndexController extends AbstractController
    {

        public function indexAction(): void
        {
            parent::render("index/index");
        }

        public function logInAction(): void
        {
            parent::render("index/login");
        }

        public function logOutAction(): void
        {
            parent::render("index/logout");
        }


    }