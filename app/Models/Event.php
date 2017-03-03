<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $table = 'le_events';

    protected $fillable = ['title', 'description', 'start_time', 'end_time', 'url', 'image', 'place'];
}
