<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organizer extends Model
{
    use SoftDeletes;

    protected $table = 'le_organizers';

    protected $fillable = ['name', 'logo', 'url'];
}
