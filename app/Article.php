<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //声明可以添加的字段
    protected $fillable = ['title','content','published_at'];
}
