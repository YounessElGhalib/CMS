<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nom', 
        'description', 
        'url',
        'seo_titre',
        'seo_description'
    ];
}
