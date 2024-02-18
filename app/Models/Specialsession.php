<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialsession extends Model
{
    use HasFactory;
    protected $table ='specialsessions';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'order',
        'description',
    ];
    public function authors()
    {
        return $this->hasMany(Author::class);
    }

}
