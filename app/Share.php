<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $fillable = [
        'share_name',
        'share_price',
        'share_qty'
    ];


// = = = = RELATIONSHIPS = = = = //

public function Users()
    {
        $this->hasOne('App\User', 'share_user', 'user_id', 'share_id');
    }
}
