<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'city'];



    public function country() {
        return $this->hasOne('App\Country');
    }
}
