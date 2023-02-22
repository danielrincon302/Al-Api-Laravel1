<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    //protected $primaryKey = 'f200_id';

    use HasFactory;

    protected $fillable = [
        'id','f200_desc'
     ];

}
