<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'cne',
        'firstName',
        'secondName',
        'age',
        'speciality'
    ];

    public function grades(){

           return $this->hasMany(Grade::class); 

    }
    public function user(){

        return $this->belongsTo(User::class); 
    }
 }
    






