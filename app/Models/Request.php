<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function documents()
    {
        return $this->belongsToMany(Document::class,'document_request');
    }

    public function requestorinformation()
    {
        return $this->belongsTo(Requestorinformation::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
