<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country_model extends Model
{
    use HasFactory;
    public $table = 'country';
    protected $fillable = [
        'country_name',
    ];
}
