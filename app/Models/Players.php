<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    // use HasFactory;

    public $table = 'players';

    protected $fillable = [
        'clubs_id',
        'name',
        'height',
        'position',
        'created_at',
        'updated_at',
    ];

    // relation
    public function clubs()
    {
        return $this->belongsTo('App\Models\Clubs', 'clubs_id', 'id');
    }
}
