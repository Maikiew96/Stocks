<?php

namespace stockrepository;

interface StockRepositoryInterface {

    public function selectAll();

    public function find($id);
}



?>