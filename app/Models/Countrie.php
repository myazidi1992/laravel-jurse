<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countrie extends Model
{
    use HasFactory;
    protected $table ='countries';
    public $timestamps = false;
    protected $fillable = [
        'name',

    ];
    public function authors()
    {
        return $this->hasMany(Author::class);
    }


}
