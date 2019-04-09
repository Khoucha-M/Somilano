<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

}
