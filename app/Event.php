<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'title',
        'start_time',
        'end_time'
    ];

    protected $table = 'events'; // you may change this to your name table

    public $timestamps = false; // set true if you are using created_at and updated_at


    public function setStartTimeAttribute($date)
    {
        return Carbon::parse($date);
    }

    public function setEndTimeAttribute($date)
    {
        return Carbon::parse($date);
    }

}
