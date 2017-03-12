<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'le_categories';

    protected $fillable = ['name', 'color'];

    public function events()
    {
        return $this->belongsToMany('App\Models\Event', 'le_category_event');
    }
}
