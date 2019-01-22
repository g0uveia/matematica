<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'enem';

    public function alternativas() {
        return $this->hasOne('App\Alternativas');
    }
}
