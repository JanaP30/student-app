<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [

        'firstName',
        'secondName',
        'email',
        'gender'
    
    ];

    public static $_GENDER_MALE=1;
    public static $_GENDER_FEMALE=2;
    public static function getGenders(){
        return[
            self::$_GENDER_FEMALE => 'Female',
            self::$_GENDER_MALE => 'Male'
        ];
    }

    public function getGender()
    {
        return self::getGenders()[$this->gender];
    }

    public function subjects()
    {

        return $this->hasMany(Subject::class);


    }

}
