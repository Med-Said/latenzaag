<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleStock extends Model
{
    protected $table = 'articles_stocks';
    protected $fillable = ['categorie','nom','marque','prix','description','img'];
}