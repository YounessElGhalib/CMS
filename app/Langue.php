<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    protected $fillable = [
        'lang', 
        'reference',
        'titre', 
        'categorie',
        'statu',
        'seoTitre',
        'seoDescription',
        'contenu',
        'nom'
    ];
}
