<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'cr_number',
        'tax',
        'commercial',
        'muncipal',
        'user_id'

    ];
}
