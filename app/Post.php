<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use next;


class Post extends Model
{

    protected $fillable = [
        'user_id',
        'title',
        'excerpt',
        'content',
        'date_start',
        'date_end',
        'link_thumbnail',
        'url_site',
    ];

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

}
