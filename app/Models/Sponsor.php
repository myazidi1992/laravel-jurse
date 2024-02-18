<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $table ='sponsors';
    public $timestamps = false;
    protected $fillable = [
        'src',
        'alt',
        'order',
    ];

}
