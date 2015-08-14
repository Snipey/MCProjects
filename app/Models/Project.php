<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $dates = ['published_at'];

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'published_at'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }
    public function photos(){
        return $this->hasMany('App\Models\ProjectPhoto');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
