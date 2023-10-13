<?php

namespace App\Models;

use App\Domain\Employee\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_user_id',
        'INN',
        'name',
        'address',
        'company_type_id',
        'company_country_id'
    ];

    public function main_users()
    {
        return $this->belongsTo(Main_user::class, 'main_user_id', 'id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'employee_id', 'id');
    }
}
