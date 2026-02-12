<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploymentDetail extends Model
{
    protected $fillable = [
        'user_id',
        'department_id',
        'salary',
        'epf_no',
        'socso_nu',
        'taxid',
        'number_holiday_leave',
        'number_sick_leave',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
