<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function course(){
        return $this->hasMany(Course::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }

    public function requestorinformation(){
        return $this->hasMany(Requestorinformation::class);
    }
}
