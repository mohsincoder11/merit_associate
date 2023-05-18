<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalHead extends Model
{
    use HasFactory;
    protected $table="technical_heads";
    protected $fillable = ['name'];
}
