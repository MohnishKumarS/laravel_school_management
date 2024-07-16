<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function std(){
        return $this->belongsTo(Standard::class, 'std_id', 'id');
    }
}
