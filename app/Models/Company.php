<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        // campos que pueden ser asignados masivamente
    ];

    protected $guarded = [
        // campos que NO pueden ser asignados masivamente
    ];
}
