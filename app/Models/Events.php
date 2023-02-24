<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = 
    ['title','start','end','description','startRecur','endRecur','daysOfWeek'];

    protected $casts = [
        'repetir' => 'boolean',
        'daysOfWeek' => 'array',
    ];
}
