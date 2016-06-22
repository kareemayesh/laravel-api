<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LessonsModel extends Model
{
    protected $table = "lessons";
    protected $fillable = ['title','body'];
    
}
