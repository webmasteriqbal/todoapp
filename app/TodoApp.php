<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoApp extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];
}
