<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
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
    protected $fillable = ['model', 'model_id', 'url'];



    public function model($name) {
        $name = ucfirst($name);
        return $this->hasOne('App\\' . $name, 'model_id');
    }

    
}
