<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $fillable = ['name','doctor_id','email','doctor_phone','doctor_gender','doctor_birthday','Date_of_contract'
,'Contract_expiry_date','doctor_specialty','note','doctor_cv_file'];

public function specialty()
{
    return $this->belongsTo('App\Models\doctor_specialty', 'doctor_specialty');
}

public function image()
{
    return $this->morphMany('App\Models\images', 'imageable');
}

}
