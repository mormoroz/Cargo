<?php

namespace App\Domain\Employee\Models;

use App\Models\Company;
use App\Models\Delivery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'first_name',
        'last_name',
        'patronymic',
        'email',
        'password',
        'phone_number',
        'role'
    ];

    public function main_users()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function deliveries()
    {
        return $this->hasMany(Delivery::class, 'delivery_id', 'id');
    }
}
