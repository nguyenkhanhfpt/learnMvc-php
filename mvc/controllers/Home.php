<?php
    class Home extends Controller{

        protected $modelNews;

        function __construct()
        {
            $this->modelNews = $this->model('NewsModel');
        }

        public function Default() {

            $this->view('masterLayout', [
                'page' => 'viewHome',
                'news' => $this->modelNews->getNewsLimit(),
                'end' => $this->modelNews->numViewMore
            ]);
        }
    }
?>