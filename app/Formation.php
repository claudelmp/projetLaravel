<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//claude
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation extends Model
{
    use SoftDeletes;
    //
    protected $dates = ['deleted_at'];
    protected $fillable=['nomformation', 'datedebut', 'duree','unite','categorie_id'];
    public function categorie()
    { 
        return $this->belongsTo(Categorie::class); 
    }
    
}
