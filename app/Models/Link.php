<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $table ='links';
    public $timestamps = false;
    protected $fillable = [
        'url',
    ];
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

}
