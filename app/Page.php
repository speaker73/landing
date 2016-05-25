<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    public function getContentAttribute($value)
    {
        return json_decode($value);
    }
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = json_encode($value);
    }
}
