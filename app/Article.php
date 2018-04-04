<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //声明可以添加的字段
    protected $fillable = ['title', 'content', 'published_at'];

    protected $dates = ['published_at'];

    //设置时分秒
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());

    }
}
