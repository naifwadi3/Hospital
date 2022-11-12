<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $table = 'room';
    protected $fillable = ['room_name','room_name','section_id','Special_room','room_price','room_type','note'];

}
