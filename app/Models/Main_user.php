<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'patronymic',
        'email',
        'password',
        'phone_number',
        'role'
    ];

    public function companies()
    {
        return $this->hasMany(Company::class, 'company_id', 'id');
    }
}
