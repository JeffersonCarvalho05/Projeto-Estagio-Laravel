<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class city extends Model
{
    protected $fillable = [
        'City', 'Estado', 'População'
    ];

    protected $table ="City";
    use HasFactory;
}
