<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['user_name', 'user_mail', 'user_pass', 'user_type'];
}
