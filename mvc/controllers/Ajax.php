<?php
    class Ajax extends Controller {

        protected $modelNews;

        function __construct()
        {
            $this->modelNews = $this->model('NewsModel');
        }

        function viewMore($num) {
            $this->view('newsAjax', [
                'news' => $this->modelNews->getNewsLimit($num)
            ]);
        }
    }

?>