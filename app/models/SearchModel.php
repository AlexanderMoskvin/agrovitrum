<?php
require 'DB.php';

    class SearchModel {
        private $_search = null;

        public function __construct() {
            $this->_search = DB::getSearch();
        }

        public function getSearchResults() {
            if($this->_search) {

                $search = $_POST['search'];

                $sql = mysqli_query($this->_search, "SELECT * FROM products WHERE (name LIKE '%$search%') OR (substance LIKE '%$search%') ORDER BY name ASC");

                while ($search = mysqli_fetch_assoc($sql)) {

                    echo '<a>'.$search['name'].'</a>';
                    echo '<br>';
                    echo $search['text'];
                    echo '<br><br>';
                }

            }
        }
    }