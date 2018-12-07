<?php 

namespace stockrepository;

use App\Share;

class StocksRepository implements StocksRepositoryInterface {

    public function selectAll()
    {
        return Share::all();
    }

    public function find($id)
    {
        return Share::find($id);
    }

}

?>