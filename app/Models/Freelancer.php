<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;

    protected $fillable = [
        'FirstName',
        'LastName',
        'UserName',
        'Password',
        'Email',
        'City',
        'Skills',
    ];
}
