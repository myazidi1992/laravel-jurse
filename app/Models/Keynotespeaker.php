<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keynotespeaker extends Model
{
    use HasFactory;
    protected $table ='keynotespeakers';
    public $timestamps = false;
    protected $fillable = [
        'firstname',
        'lastname',
        'website',
        'description',
    ];
}
