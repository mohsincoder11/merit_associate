<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeRegistration extends Model
{
    use HasFactory;
    protected $table = "employee_registraions";
    protected $fillable = ['status','name','contact','email','bankname','ifsc_code','account_no','location_id','area','adhar','pan','photo','other'];
}
