<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requestorinformation extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function user()
    {
            return $this->belongsTo(User::class);
    }

    public function request()
    {
            return $this->hasMany(Request::class);
    }

    public function campus()
    {
            return $this->belongsTo(Campus::class);
    }

    public function course()
    {
            return $this->belongsTo(Course::class);
    }
}
