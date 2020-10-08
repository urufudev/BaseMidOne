<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboral extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','description','status'
    ];


    public function scopeSearch($query, $val)
    {
        return $query
        ->where('name','like','%'.$val.'%')
        ->Orwhere('description','like','%'.$val.'%')
        ;
    }
}
