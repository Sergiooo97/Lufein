<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_has_permissions extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'role_id',
        'role_id',
        'role_id',
    ];
}
