<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;
    protected $table ='tweets';
    public $timestamps = false;
    protected $fillable = [
        'link',
        'datetweet',
    ];

}
