<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternativas extends Model
{
    public function enem() {
        return $this->belongsTo('App\Enem');
    }
}
