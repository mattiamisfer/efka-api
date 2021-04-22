<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bank_ac',
        'branch_code',
        'account_holder',
        'bank_account_file'
    ];
}
