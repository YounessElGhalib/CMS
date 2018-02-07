<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'titre', 
        'url', 
        'contenu', 
        'type', 
        'created_by', 
        'statu',
        'seo_titre',
        'seo_description'
    ];
}
