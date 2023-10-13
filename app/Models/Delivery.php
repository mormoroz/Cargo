<?php

namespace App\Models;

use App\Domain\Employee\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'order_id',
        'customer_id',
        'cargo_list_id',
        'supply_chain_id',
        'company_country_id'
    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function employee()
    {
        return $this->hasMany(Employee::class, 'employee_id', 'id');
    }
}
