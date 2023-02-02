<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function childs() {
        return $this->hasMany('App\Category','p_id','id') ;
    }

    public function parent()
    {
        return $this->belongsTo('App\Category', 'p_id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'p_id');
    }

}
