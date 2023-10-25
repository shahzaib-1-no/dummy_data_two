<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socity_model extends Model
{
    use HasFactory;
    public $table= 'socity';
    protected $fillable = [
        'country_id',
        'state_id',
        'city_id',
        'socity_name',
    ];

}
