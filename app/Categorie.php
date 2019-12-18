<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Categorie extends Model {
    //use SoftDeletes;

    protected $fillable = ['nom', 'slug'];

    public function formations() {
        return $this->hasMany(Formation::class);
    }

}
