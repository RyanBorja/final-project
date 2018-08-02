<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stone extends Model
{
    public function stone()
    {
        return $this->belongsTo('App\User');
    }
}
