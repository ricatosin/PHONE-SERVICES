<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //To provide away to seed the database ! 
    protected $fillable = ['nome','ddd','phone_number'];
}
