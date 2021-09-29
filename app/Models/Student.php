<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Student extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'student_name',
        'student_email',
        'mobile_number',
        'date_of_birth',
        'state',
        'district',
        'pin_code',
        'course_name',
    ];
    public function StateFind()
        {
            return $this->belongsTo(State::class,'state','id');
        }
    
    public function DistrictFind()
    {
        return $this->belongsTo(District::class,'district','id');
    }
}
