<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;
    protected $table ='organizers';
    public $timestamps = false;
    protected $fillable = [
        'src',
        'alt',
        'order',
    ];

}
