<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function campus(){
        return $this->belongsTo(Campus::class);
    }
    public function requestorinformation(){
        return $this->belongsTo(Requestorinformation::class);
    }
}
