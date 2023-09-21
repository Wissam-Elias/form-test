<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'sex',
        'birth_date',
        'marital_status', /* married bachelor absolute */
        'emirate',
        'annual_income',
        'has_car',
        'has_job',
        'user_id'
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
