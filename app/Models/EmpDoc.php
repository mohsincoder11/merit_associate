<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpDoc extends Model
{
    use HasFactory;
    protected $table="addnewdocuments";
    protected $fillable = [
        'id',
        'addnew_id',
        'docname',
        'upd',
];


}
