<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Standard extends Model
{
    use HasFactory;

    protected $guarded = [];

      /**
         * Get the user that owns the Standard
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function teacher(): BelongsTo
        {
            return $this->belongsTo(Teacher::class, 'cc', 'id');
        }


        public function students(){
            return $this->hasMany(Student::class,'std_id','id');
        }
    


}
