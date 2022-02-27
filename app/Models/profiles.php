<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiles extends Model
{
    protected $fillable = [
        'id',
        'name',
        'date_of_birth',
        'nickname',
        'username',
        'email',
        'created_at',
        'description',
        'avatar',
        'address',
        'phone_number',
    ];
    use HasFactory;
}
