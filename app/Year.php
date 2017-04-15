<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
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
    protected $fillable = ['year'];



    public function students() {
        return $this->hasMany('App\Student');
    }

    
}
