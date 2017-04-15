<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
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
    protected $fillable = [];


    public function student() {
        return $this->hasOne('App\Student');
    }

    public function partner() {
        return $this->hasOne('App\Partner');
    }
}
