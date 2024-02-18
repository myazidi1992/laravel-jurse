<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table ='authors';
    public $timestamps = false;
    protected $fillable = [
        'firstname',
        'lastname',
        'organism',
    ];
    public function countrie()
    {
        return $this->belongsTo(Countrie::class);
    }
    public function specialsession()
    {
        return $this->belongsTo(Specialsession::class);
    }

}
