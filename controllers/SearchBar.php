<?php
require_once('../../models/SearchBar.php');

class SearchBar {
    private $model;

    public function __construct() {
        $this->model = new SearchModel();
    }

    public function search($query) {
        return $this->model->search($query);
    }
}
?>