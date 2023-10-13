<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['dni', 'product', 'by_product', 'maintenance', 'state', 'create_survey', 'last_change'];
}
