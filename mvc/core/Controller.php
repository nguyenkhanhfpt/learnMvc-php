<?php
    class Controller {

        public function model($nameModel) {
            require_once './mvc/models/' .$nameModel. '.php';
            return new $nameModel;
        }

        public function view($nameView, $data = []) {
            require_once './mvc/views/' .$nameView. '.php';
        }
    }

?>