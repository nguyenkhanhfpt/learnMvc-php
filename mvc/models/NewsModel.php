<?php
    class NewsModel extends DB{

        protected $numViewNew = 3;
        public $numViewMore;

        public function getNews() {
            $select = "SELECT * FROM products";

            $rows = mysqli_query($this->con, $select);
            $arr = [];

            while($row = mysqli_fetch_array($rows)) {
                $arr[] = $row;
            }

            return $arr;
        }

        public function getNewsLimit($num = 1) {
            $countRows = mysqli_num_rows(mysqli_query($this->con, "SELECT id_product FROM products"));
            $this->numViewMore = ceil($countRows / $this->numViewNew);

            $indexEnd = $num * $this->numViewNew;

            $select = "SELECT * FROM products LIMIT 0, $indexEnd";

            $rows = mysqli_query($this->con, $select);
            $arr = [];

            while($row = mysqli_fetch_array($rows)) {
                $arr[] = $row;
            }

            return $arr;
        }
    }
?>