<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = "employees";
    public $timestamps = true;

    protected $fillable = [
        'id_employees',
        'employee_number',
        'last_name',
        'first_name',
        'extension',
        'email',
        'office_code',
        'reports_to',
        'job_title',

    ];

    public function offices(){
        return $this->belongsTo(Offices::class);
    }
}
