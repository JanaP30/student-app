<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [

        'subjectName',
        'teacher_id',
        'literature'
        
    
    ];

        public function teacher(){
            return $this->belongsTo(Teacher::class);
        }

        public function grades()
        {

            return $this->hasMany(Grade::class);


        }




}
