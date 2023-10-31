<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_block_model extends Model
{
    use HasFactory;
    public $table= 'sub_block';
    protected $fillable = [
        'country_id',
        'state_id',
        'city_id',
        'socity_id',
        'phase_id',
        'block_id',
        'block_name',
    ];
}
