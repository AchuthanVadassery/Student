<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table='districts';
    // protected $fillable = [
    //     'name',
    //     'states_id'

    // ];
        // public function user(){
        // return $this->hasMany(State::class,'id','states_id');
    //  }

}
