<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldExecutive extends Model
{
    use HasFactory;
    protected $table="field_executives";
    protected $fillable = ['name'];
}
