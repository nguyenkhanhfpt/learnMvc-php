<?php
    class NewsModel extends DB{

        public function getNews() {
            $select = "SELECT * FROM products";

            $rows = mysqli_query($this->con, $select);
            $arr = [];

            while($row = mysqli_fetch_array($rows)) {
                $arr[] = $row;
            }

            return $arr;
        }

        public function getNewsLimit() {
            $select = "SELECT * FROM products LIMIT 0, 3";

            $rows = mysqli_query($this->con, $select);
            $arr = [];

            while($row = mysqli_fetch_array($rows)) {
                $arr[] = $row;
            }

            return $arr;
        }
    }
?>