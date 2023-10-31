<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phase_model extends Model
{
    use HasFactory;
    public $table= 'phase';
    protected $fillable = [
        'country_id',
        'state_id',
        'city_id',
        'socity_id',
        'phase_name',
    ];
}
