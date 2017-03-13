<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $table = 'le_events';

    protected $fillable = ['title', 'description', 'start_time', 'end_time', 'url', 'image', 'place'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'le_category_event');
    }

    public function organizers()
    {
        return $this->belongsToMany('App\Models\Organizer', 'le_event_organizer');
    }
}
