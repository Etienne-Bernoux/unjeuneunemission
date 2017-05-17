<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priant extends Model
{

    protected $table = 'priants';
    protected $primaryKey = 'id';

    /**
     * Get the jeunes for the priant.
     */
    public function jeunes()
    {
        return $this->hasMany('App\Jeune');
    }


}
