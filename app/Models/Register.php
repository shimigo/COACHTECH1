<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public static $rules = array(
        'content' => 'required | string | min: 0 | max: 190'
    );
}




