<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory;
    use SoftDeletes;


protected $fillable = [

    'student_id',
    'subject_id',
    'grade'
   

];
    public static $_GRADE_INSUFFICIENT=1;
    public static $_GRADE_SUFFICIENT=2;
    public static $_GRADE_GOOD=3;
    public static $_GRADE_VERY_GOOD=4;
    public static $_GRADE_EXCELLENT=5;



    public static function getGrades(){
        return[
            self::$_GRADE_INSUFFICIENT => 'INSUFFICIENT',
            self::$_GRADE_SUFFICIENT => 'SUFFICIENT',
            self::$_GRADE_GOOD => 'GOOD',
            self::$_GRADE_VERY_GOOD => 'VERY_GOOD',
            self::$_GRADE_EXCELLENT => 'EXCELLENT'

        ];
    }

    public function getGrade()
    {
        return self::getGrades()[$this->grade];
    }
   
    public function student()
    {
            return $this->belongsTo(Student::class);
    }
    public function subject()
    {
            return $this->belongsTo(Subject::class);
    }


    
}