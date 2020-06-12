<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'article_title', 'article_content'
    ];

    protected $primaryKey = 'article_id';
}
